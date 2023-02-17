<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    public function fund(Request $request)
    {

        // dd(1);
        $data = $request->validate([
            'amount' => 'required|integer|min:100',
            //  'password' => 'required',
            'reference' => 'required|unique:donations,reference',

        ]);
        // dd(Auth::user()->password == $request->password);
        // if (!Hash::check($request->password, Auth::user()->password)) {
        //     return back()->with(['error' => 'incorrect account password']);
        // }

        $donation =  Donation::create([

            'donor_name' =>$request->donor_name,
            'email' =>$request->email,
            'anonimous_donor' =>$request->anonimous_donor,
            'patient_id' =>$request->patient_id,
            'target_fund' =>$request->target_fund,
            'amount' =>$request->amount,
            'is_credit' => true,
            'reference' => $request->reference,

        ]);

        // $donation = new Donation();

        // $donation->donor_name =$request->donor_name;
        // $donation->email =$request->email;
        // $donation->anonimous_donor =$request->anonimous_donor;
        // $donation->patient_id =$request->patient_id;
        // $donation->target_fund =$request->target_fund;
        // $donation->amount =$request->amount;
        // $donation->is_credit=true;
        // $donation->reference =$request->reference;
        // $donation->save();


        try {
            return \Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {

            $donation->status='failed';
            $donation->save();

            dd(\Paystack::getAuthorizationUrl());
            //     $transaction->status = 'failed';
            //     $transaction->save();
            //     return back()->with(['error' => 'error while processing payments.']);

        }
    }


    public function fundCallback()
    {
        //  get payment details from paystack
        $paymentDetails = \Paystack::getPaymentData();


        //  get reference from payment details gotten from paystack
        $reference = $paymentDetails['data']['reference'];
        // get transaction from db
        $donation = Donation::where('reference', $reference)->first();

        // check if txn has been paid
        if ($donation->status == 'success') {
            return back()->with(['error' => 'invalid transaction']);
        }
        // check if payment was successful
        if ($paymentDetails['data']['status'] != 'success') {
            return back()->with(['error' => 'failed transaction, please try again']);
        }


        // $user =$transaction->user;
        // $wallet=$user->wallet;


        // get users wallet
        // $wallet = $transaction->user->wallet;


        //update transaction
        $donation = Donation::where('reference', $reference)->first();
        $donation->status = 'success';
        $donation->save();


        //credit user wallet
        $balance = Donation::where('status','success')->where('patient_id', 1)->sum('amount');

        $donation = $donation->increment('current_fund', $balance);

        // $donation->save($donation);
        // dd('good');
        // $donation->current_fund = $wallet->balance + $transaction->amount;
        // $wallet->save();


        // Subscription
        // if ($transaction->status = 'success') {


        //     $sub = new Subscription();
        //     $sub->user_id = Auth::user()->id;
        //     $sub->course_id = $transaction->course_id;
        //     $sub->transaction_id = $transaction->id;
        //     $sub->save();
        // }
        // return success message
        return back();
        // return Inertia::render('Dashboard/Userdash/User_purchased_course');
        // return back()->with(['success' => 'Account credited successfully']);
    }


}

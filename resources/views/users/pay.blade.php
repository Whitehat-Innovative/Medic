<div>
    <form method="POST" action="{{route('fund')}}">
        @csrf

        @foreach ($errors->all() as $err)
        <p class="text-danger-text-center">{{$err}}</p>
        @endforeach

       <div class="form-group">
        <label for="">Amount</label>
        <input type="number" name="amount" value="" class="form-control">
       </div>
       <div class="form-group">
        <label for="">Donor_name</label>
        <input type="name" name="donor_name" class="form-control">
       </div>
       <div class="form-group">
        <label for="">Donor_email</label>
        <input type="email" name="email" class="form-control">
       </div>

        {{-- <input type="hidden" name="quality" > --}}
        <input type="hidden" name="currency" value="NGN">
        <input type="hidden" name="quantity" value="100">
        <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
        <input type="hidden" name="callback_url" value="{{route('transaction.callback')}}">
        <input type="hidden" name="patient_id" value="1">

        <button type="" class="btn btn-primary">Save changes</button>

    </form>
</div>

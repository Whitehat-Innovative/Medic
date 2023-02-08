<?php

namespace App\View\Components;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $u=User::where('id',Auth::user()->id)->first();
        $appoint= Appointment::latest()->paginate(2);
        return view('layouts.admin.app',['appoint'=>$appoint, 'u'=>$u]);
    }
}

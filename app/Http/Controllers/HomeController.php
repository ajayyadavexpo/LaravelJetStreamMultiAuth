<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirectUser(){
        if(auth()->user()->hasRole('admin')){
            return redirect()->route('admin.dashboard');
        }

        if(auth()->user()->hasRole('user')){
            return redirect()->route('user.dashboard');
        }

    }
}

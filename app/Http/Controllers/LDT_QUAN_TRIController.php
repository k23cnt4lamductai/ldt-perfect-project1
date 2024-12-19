<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LDT_QUAN_TRIController extends Controller
{
    public function ldtLogin()
    {
        return view('LdtLogin.ldt-login');
    }
    public function ldtLoginSubmit(Request $request)
    {
        return view('LdtLogin.ldt-login');
    }
}

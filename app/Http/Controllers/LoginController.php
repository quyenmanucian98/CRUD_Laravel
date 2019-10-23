<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if ($request->username == "Quyendeptrai" && $request->password == "dmanhhiep") {
            return view('players.list');
        } else {
            return back();
        }
    }
}

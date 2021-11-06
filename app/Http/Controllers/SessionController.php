<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function storeSession(Request $request)
    {
        $data=$request->input();
        //$request->session()->put('email',$data['email']);
        print_r($data);
    }
}

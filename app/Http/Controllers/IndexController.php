<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Code;

class IndexController extends Controller
{
    public function index()
    {
        return view('verification');
    }

    public function update(Request $request)
    {
        $id= $request->route('id');
        $code = $request->input('kod');

        $update = Code::where('id','=',$id);
        if($update)
        {
            return redirect()->back()->with('status','başarılı');
        }
        else
        {
            return redirect()->back()->with('status','başarısız');
        }

    }
}


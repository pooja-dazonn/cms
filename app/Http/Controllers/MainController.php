<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class MainController extends Controller
{
    public function logadmi()
    {
       return view('admin/logadmi');
    } 
    function checklogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:5'
        ]);
        $user_data= array(
            'email' => $request->get ('email'),
            'password' => $request->get('password')
        );
        if(Auth::attempt($uesr_data))
        {
            return redirect('admin/index');
        }
            else{
                return redirect('error', 'Wronh Login Detail');
            
        }
    }
}

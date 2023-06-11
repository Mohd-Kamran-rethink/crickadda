<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //NOTE:: There will be 7 roles in the global CA in this project we are only using 5 roles 
    // i.e customer_care_manager,deposit_banker,withdrawal_banker,depositer,withdrawrer 

    // login Form
    public function loginView()
    {
        if (session()->has('user')) {
            return redirect('/dashboard');
        } else {
            return view('Admin.Auth.Login');
        }
    }
    // login validation
    public function login(Request $req)
    {
        // roles allowerd in CA-customer project
        $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('email', '=', $req->email)->first();
        if ($user) {
            if (Hash::check($req->password, $user->password)) {
                session()->put('user', $user);
                return redirect('/dashboard');
            } else {
                return redirect('admin/login')->with(['msg-error-password' => 'Invalid password']);
            }
        } else {
            return redirect('admin/login')->with(['msg-error-username' => "Email is not registered with us"]);
        }
    }
    // logout user 
    public function logout()
    {
        $result = session()->remove('user');
        if ($result) {
            return redirect('/login');
        }
    }
    // dashboard to show expense and credits daily, monthly,and total
    public function dashboard()
    {
        
        return view('Admin.Dashboard.index' );
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use App\Models\User;

class UserController extends Controller
{
    public function login(Request $req)
    {
            // echo "<pre>";
            // print_r($req->email);

            $user = DB::table('users')->where('email', $req->email)->first();
            // DB::select('SELECT * FROM users WHERE email = ?',[$req->email]);

            if($user && Hash::check($req->password,$user->password))
            {
                $req->session()->put('user',$user);
                 return redirect('/products');

            }else{
                echo 'Username or Password Incorrect<br>';
                echo '<a href="'.url()->previous().'">Back</a>';
            }
        exit;
    }
}

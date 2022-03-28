<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Controller
{
    public function Cpassword(){

        return view('admin.body.change_password');
    }


    public function Updatepassword(Request $request){

        $validatedData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
    ]);

$hashedpasword = Auth::user()->password;
if(Hash::check($request->oldpassword,$hashedpasword)){
     $user = User::find(Auth::id());
     $user->password = Hash::make($request->password);
     $user->save();
     Auth::logout();
     return redirect()->route('login')->with('success','Password Change Successfully');

      }

      else{
        return redirect()->back()->with('error','Password is inavlid');

      }

   }


   public function EditProfile(){

     if(Auth::user()){

        $user = User::find(Auth::user()->id);
        if($user){

            return view('admin.body.update_profile',compact('user'));
        }
     }

   }

   public function UpdateProfile(Request $request){

    if(Auth::user()){

        $user = User::find(Auth::user()->id);
        if($user){

            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            return redirect()->back()->with('success','Profile updated Successfully');

        }

        else{
            return redirect()->back()->with('error','Invalid email or username');
        }
     }
   }

}

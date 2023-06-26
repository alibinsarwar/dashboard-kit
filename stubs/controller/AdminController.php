<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Hash;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function charts(){
        return view('admin.charts');
    }
    public function profile(){
        $user = auth()->user();
        return view('admin.profile' , get_defined_vars());
    }
    public function generalUpdate(Request $req)
    {
        // dd($req);
        $req->validate([
            'username' => 'required',
            'email' => 'required|email',
        ]);

        $user = auth()->user();
        $user->username = $req->username;
        $user->email = $req->email;

        if($req->hasFile('image')){
            $path = "uploads/profile";
            $file = $req->image;
            $name = "image";
            $filename = time().'-'.Str::random(4).'-'.$name.'.'.$file->getClientOriginalExtension();
            $file->move($path, $filename);
            $image= $path.'/'.$filename;
            $user->image = $image;
        }
        // dd($user);
        $user->save();

        return redirect()->back()->with('success', 'General Info Updated Successfully');
    }

    public function passUpdate(Request  $req)
    {
        $check  = Hash::check($req->current_password, auth()->user()->password);
        // dd($check , $req->current_password);
        if($check== true){
            $req->validate([
                'current_password' => 'required',
                'password' => 'required|min:8|confirmed',
            ]);

            $user = auth()->user();
            $user->password = bcrypt($req->password);
            $user->save();

            return redirect()->back()->with('success', 'Password updated Successfully!');
        }
        else{
            throw ValidationException::withMessages(['current_password' => 'Password Does not match']);
        }

        
    }
}

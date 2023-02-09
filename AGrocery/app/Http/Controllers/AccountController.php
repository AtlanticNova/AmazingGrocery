<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Gender;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Ui\Presets\React;

class AccountController extends Controller
{
    public function viewLogin(){
        return view('auth.login');
    }

    public function viewRegister(){
        return view ('auth.register');
    }

    public function login(Request $request){
        $request->validate([
            'email'=> 'required|email|required|string',
            'password' => 'required|min:6|alpha_num',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        $findUser = Account::where('email', $request->email)->first();

        if($findUser){
            Auth::login($user,$request->remember);
            return redirect('/');
        }

        return back()->with('session', [
            'color'   => 'danger',
            'message' => 'Wrong Email/Password'
        ]);
    }

    public function register(Request $request){
        $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email'=> 'required|string|unique:accounts|email',
            'role'=>'required|numeric',
            'gender'=>'required|string',
            'displayPicture'=>'required|image',
            'password' => 'required|min:8|alpha_num|confirmed'
        ]);

        $user = Account::create([
            'roles_id'=> $request->role,
            'genders_id'=> $request->gender,
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'display_picture_link'=> $request->displayPicture->getClientOriginalName(),
            'password' => bcrypt($request->password)
        ]);

        $path = 'images';
        $image = $request->displayPicture->getClientOriginalName();
        $request->displayPicture->move(public_path($path), $image);

        auth()->login($user);

        return redirect('/');
    }

    public function viewProfile(){
        $role = Role::all();
        $gender = Gender::all();
        return view('profile',[
            'user' => auth()->user(),
            'roles'   => $role,
            'genders' => $gender,
        ]);
    }

    public function editProfile(Request $request){
        $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email'=> 'required|string|email',
            'displayPicture'=>'image',
            'password' => 'required|min:8|alpha_num|confirmed'
        ]);

        $credentials = [
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'display_picture_link'=> $request->displayPicture->getClientOriginalName(),
            'password' => bcrypt($request->password)
        ];

        $path = 'images';
        $image = $request->displayPicture->getClientOriginalName();
        $request->displayPicture->move(public_path($path), $image);

        $user = Account::find(Auth::user()->id);
        $user->update($credentials);

        return redirect()->back()->with('message',[
            'color'   => 'success',
            'message' => 'Succesfully Updated!'
        ]);
    }

    public function logout(Request $request) {
        Session::flush();
        Auth::logout();

        return redirect('/');
    }


}

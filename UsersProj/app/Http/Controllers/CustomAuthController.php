<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Events;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function index()
    {
        $events = Events::all();
        return view('index', compact('events'));
    }
    public function add()
    {
        return view('add');
    }  

    public function insert(Request $request)
    {
        $events = new Events();
        $events-> title = $request->input('title');
        $events-> text = $request->input('text');
        $events-> creator = $request->input('creator');
        $events->save();
        return redirect('/dashboard')->with('status', "Inserted Succesfuly");
    }

    public function login()
    {
        return view('auth.login');
    }
    public function registration()
    {
        return view('auth.registration');  
    }

    public function registerUser(Request $request)
    {
        $request ->validate([
            'username'=>'required',
            'password'=>'required',
            'name'=>'required',
            'surname'=>'required',
            'date_of_birth'=>'required'
        ]);
        $user = new User();
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->date_of_birth = $request->date_of_birth;
        $res = $user->save();
        if($res){
            return back()->with('success', 'You have registered succesfuly');
        }else{
            return back()->with('fail', 'Something wrong');
        }
        
    }

    public function loginUser(Request $request)
    {
        $request ->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $user = User::where('username', '=', $request->username)->first();
        if($user)
        {
            if(Hash::check($request->password, $user->password))
            {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }
            else
            {
                return back()->with('fail','Password not mathes');
            }
        }else{
            return back()->with('fail', "This username is not registered");
        }
    }

    public function dashboard()
    {
        $events = Events::all();
        $data = array();
        if(Session::has('loginId'))
        {
            $data = User::where('id', '=',Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'), compact('events'));
    }

    public function logout()
    {
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');     
        }
    }

    
}

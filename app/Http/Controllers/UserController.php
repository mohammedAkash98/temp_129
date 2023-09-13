<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register()
    {
        return view('frontend.user.register');
    }

    public function registerStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'age' => 'required|integer|min:1',
            'school_name' => 'required|string',
            'class' => 'required|string',
            'gender' => 'required|in:male,female',
            'phone_no' => 'required|string|max:20',
            'password' => 'required|string|min:8',
            'present_address' => 'required|string',
            'permanent_address' => 'required|string',
            'is_club_member' => 'required|in:yes,no',
        ]);

        try {

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'age' => $request->age,
                'school_name' => $request->school_name,
                'class' => $request->class,
                'gender' => $request->gender,
                'phone_no' => $request->phone_no,
                'password' => bcrypt($request->password),
                'present_address' => $request->present_address,
                'permanent_address' => $request->permanent_address,
                'is_club_member' => $request->is_club_member,
            ]);
            return redirect()->route('dashboard');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function login()
    {
        return view('frontend.user.login');
    }
    public function loginStore(Request $request)
    {
        $request->validate([

            'phone_no' => 'required|string|max:20',
            'password' => 'required|string|min:8',

        ]);

        $credentials = $request->only('phone_no', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function index()
    {
        $users = User::all();
        return view('backend.user.user-index', compact('users'));
    }
    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('backend.user.user-edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'is_class_member' => 'required|in:yes,no',
            'enrolled' => 'required|in:0,1',
        ]);
        $user = User::where('id', $id)->first();
        // dd($user);
        $user->update([
            'is_club_member' => $request->is_class_member,
            'enrolled' => $request->enrolled
        ]);
        return redirect()->route('user.index');
    }
}

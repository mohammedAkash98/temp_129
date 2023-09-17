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
            'gender' => 'required',
            'phone_no' => 'required|string|max:20|unique:users',
            'password' => 'required|string|min:8',
            'present_address' => 'required|string',
            'division' => 'required',
            'is_club_member' => 'required|in:yes,no',
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'age' => $request->age,
                'school_name' => $request->school_name,
                'class' => $request->class,
                'gender' => $request->gender,
                'phone_no' => $request->phone_no,
                'password' => bcrypt($request->password),
                'present_address' => $request->present_address,
                'division' => $request->division,
                'is_club_member' => $request->is_club_member,
            ]);
            toastr()->success('একাউন্ট তৈরী করা হয়েছে!', 'অভিনন্দন');
            return redirect()->route('login');
        } catch (Exception $e) {
            return redirect()->back();
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

        try {
            if (Auth::attempt(['phone_no' => $request->input('phone_no'), 'password' => $request->input('password')])) {
                if (auth()->user()->type === 'student') {
                    return redirect()->route('dashboard');
                } else {
                    return redirect()->route('admin');
                }
            } else {
                toastr()->error('আপনার একাউন্টের তথ্য সঠিক নয়!', 'দুঃখিত');
                return redirect()->back();
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()
            ->to('https://e-pushti.netlify.app/')
            ->send();
    }

    public function index()
    {
        $sl = !is_null(\request()->page) ? (\request()->page - 1) * 10 : 0;
        $users = User::paginate(10);
        return view('backend.user.user-index', compact('users', 'sl'));
    }

    public function delete($id)
    {
        User::find($id)->delete();
        toastr()->error('User deleted!', 'Delete');
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
            'type' => 'required',
            'enrolled' => 'required|in:0,1',
        ]);
        $user = User::where('id', $id)->first();
        // dd($user);
        $user->update([
            'is_club_member' => $request->is_class_member,
            'enrolled' => $request->enrolled,
            'type' => $request->type,
        ]);
        toastr()->success('User updated successfully!', 'Congrats');
        return redirect()->route('user.index');
    }
    public function create()
    {
        return view('backend.user.user-create');
    }

    public function store(Request $request)
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
            'division' => 'required|string',
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
                'division' => $request->division,
                'is_club_member' => $request->is_club_member,
            ]);
            toastr()->success('User created successfully', 'Congrats');
            return redirect()->route('user.index');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $users = User::where('name', 'LIKE', "%$query%")->paginate(10);

        $sl = !is_null(\request()->page) ? (\request()->page - 1) * 10 : 0;
        return view('backend.user.user-index', compact('users', 'sl'));
    }
}

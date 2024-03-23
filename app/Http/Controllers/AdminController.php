<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function showUser()
    {
        $showUser = User::where('role', 'user')->paginate(15);
        $showUser->onEachSide(1);
        return view('userprofile', ['showUser' => $showUser]);
    }
<<<<<<< HEAD

    public function tampilanAdmin()
    {
        return view('admin');
    }

    public function galeriAdmin()
    {
        return view('admin.galeri');
=======
    public function dashboard()
    {
        return view('admin.index');
>>>>>>> 53f68cdeebca67d9cf5db542f4744a32da19146e
    }



    public function showAddUser()
    {
        return view('adduser');
    }

    public function addUser(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|max:10|unique:users',
            'fullname' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|min:8',
        ]);
        $user = User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'role' => 'user',
            'email' => $request->email,
            'email_verified_at' => now(),
            'password' => Hash::make($request->password),
            'verification_token' => Str::random(60),
            'email_verified' => true,
        ]);

        return redirect()->route('admin.userprofile');
    }
    public function userDestroy(User $userdestroy)
    {
        $userdestroy->delete();
        return redirect()->route('admin.userprofile');
    }
    public function showProfile()
    {
        $admin = Auth::user();
        return view('profile', compact('admin'));
    }
}

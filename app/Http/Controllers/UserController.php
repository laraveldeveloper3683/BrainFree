<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function getToken (Request $request)
    {
        $user = User::whereToken($request->token)->first();

        return $user ? $this->loginWithIdAndReturnToPage($user->id, 'login') : redirect('/login');
    }

    public function loginWithIdAndReturnToPage ($id, $page)
    {
        Auth::loginUsingId($id);

        return view($page);
    }

    public function index ()
    {
        $users = User::with('roles')->get();
        return view('backend.admin.roles_list', ['users' => $users]);
    }
}

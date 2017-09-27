<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /** */
    public function index()
    {
        return view('users')->withUsers(User::get());
    }

    /** */
    public function confirm(User $user)
    {
        $user->update(['is_confirmed' => true]);

        return redirect('/users');
    }

    /** */
    public function block(User $user)
    {
        $user->update(['is_blocked' => true]);

        return redirect('/users');
    }

    /** */
    public function unblock(User $user)
    {
        $user->update(['is_blocked' => false]);

        return redirect('/users');
    }
}

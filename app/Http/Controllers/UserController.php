<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\User\StoreUserRequest;
use App\Http\Requests\Admin\User\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('front_office.user.dashboard');
    }

    public function show(Request $request)
    {
        return view('front_office.user.profile.show', [
            'request' => $request,
            'user' => $request->user(),
        ]);
    }
}

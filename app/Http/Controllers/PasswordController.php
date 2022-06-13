<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function update(Request $request, $id)
    {
        User::where('id', $id)->update([

            'password' => bcrypt($request->password)

        ]);
        return redirect('/')->with('warning', 'Password berhasil diperbarui');
    }
}

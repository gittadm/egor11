<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        abort_if(!$user, 403, 'Invalid email or password');

        if (!Hash::check($request->password, $user->password)) {
            abort(403, 'Invalid email or password');
        }

        return response()->json([
            'user' => $user,
            'token' => $user->createToken('app')->plainTextToken,
        ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        // Revoke the token that was used to authenticate the current request...
        auth()->user()->currentAccessToken()->delete();
    }
}

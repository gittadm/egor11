<?php

namespace App\Http\Controllers;

use App\Http\Resources\ManagerUserResource;
use App\Models\User;
use Illuminate\Http\Request;

class ManagerUserController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $user = User::findOrFail($id);

        return response()->json(['user' => ManagerUserResource::make($user)]);
    }
}

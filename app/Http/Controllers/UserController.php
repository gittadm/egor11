<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $limit = $request->input('limit', 20);
        $offset = $request->input('offset', 0);
        $name = $request->name;

        $users = User::query();

        if (!empty($name)) {
            $users->where('name', 'like', '%' . $name . '%');
        }

        $users = $users->orderBy('id')->offset($offset)->limit($limit)->get();

        return response()->json(['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $user = User::create($request->validated());

        return response()->json(['user' => $user]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $user = User::findOrFail($id);

        return response()->json(['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

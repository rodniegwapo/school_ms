<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return User::query()->with('roles:id,name')
            ->when($request->input('search'), function ($query, $search) {
                $query->search($search);
            })->paginate(10);
    }

    public function store(Request $request)
    {

        $user = new User($this->validateData($request));
        $user->assignRole($request->role);
        $user->save();

        return response()->json(['message'  => 'success']);
    }



    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function validateData($data)
    {
        return $data->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'email|string|unique:users',
            'password' => 'required|string|min:8'
        ]);
    }
}

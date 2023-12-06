<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Users::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $users = new Users();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();
        return "Usuario Guardado correctamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $users = Users::find($id);
        $users->name=$request->name;
        $users->email=$request->email;
        $users->password=$request->password;
        $users->save();
        return "Usuario actualizado correctamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $users=Users::find($id);
        $users->delete();
        return "Usuario se eliminò correctamente";
    }
}

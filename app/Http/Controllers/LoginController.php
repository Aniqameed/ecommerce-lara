<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.login.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(loginRequest $request)
    {
        try {
            $login = new Category();
            $login->username = $request->username;
            $login->password = $request->password;
            $login->save();

            return redirect()->route('login.index');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(login $login)
    {
        //
    }
}

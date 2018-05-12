<?php

namespace App\Http\Controllers;

use App\Voyage;
use App\User;
use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $user->caracteristiques = $request->input('caracteristiques');    
        $user->climat = $request->input('climat');              
        $user->save();
        return redirect('dashboard');
    }

}

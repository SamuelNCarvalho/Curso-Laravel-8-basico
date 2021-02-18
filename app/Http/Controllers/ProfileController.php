<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Show form
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('pages.profile');
    }

    /**
     * Update user data
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'nullable|confirmed'
        ]);

        $user = auth()->user();

        $user->name = $request->get('name');

        if ($request->get('password')) {
            $user->password = bcrypt($request->get('password'));
        }

        $user->save();

        return back()->with('success', 'Updated');
    }
}

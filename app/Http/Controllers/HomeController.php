<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show home
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $items = auth()->user()->items;

        return view('pages.home', compact('items'));
    }

    /**
     * Logout
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}

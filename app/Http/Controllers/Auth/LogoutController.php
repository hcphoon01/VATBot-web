<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Logs out the user
     * 
     * @param Illuminate\Http\Request $request
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        
        return redirect()->route('welcome');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // https://medium.com/fabcoding/laravel-redirect-users-according-to-roles-and-protect-routes-bde324fe1823
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        abort_if(Auth::user()->role_id != 1, 403, 'Access Denied');
        $landlord = User::where('role_id', '2')->count();
        $tenant = User::where('role_id', '3')->count();
        return view('pages-admin.dashboard', compact('landlord', 'tenant'));
    }
}

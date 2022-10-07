<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class TenantController extends Controller
{
   
    public function index()
    {
        abort_if(Auth::user()->role_id!= 3, 403, 'Access Denied');
        $tenant = User::where('role_id','3')->get();
        return view('tenant.dashboard', compact('tenant'));
    }
}

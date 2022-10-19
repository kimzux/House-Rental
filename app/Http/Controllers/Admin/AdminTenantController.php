<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminTenantController extends Controller
{
    public function index()
    {
        abort_if(Auth::user()->role_id != 1, 403, 'Access Denied');
        $tenant = User::where('role_id','3')->get();
        return view('pages-admin.admin-tenant.tenant', compact('tenant'));
    }
}

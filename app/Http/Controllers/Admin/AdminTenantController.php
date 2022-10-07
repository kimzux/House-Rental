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
       
        $tenant = User::where('role_id','3')->get();
        return view('pages-admin.admin-tenant.tenant', compact('tenant'));
    }
}

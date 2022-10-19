<?php

namespace App\Http\Controllers\Landlord;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class landlordTenantController extends Controller
{
    public function index()
    {
        abort_if(Auth::user()->role_id != 2, 403, 'Access Denied');
        return view('landlord.tenant.index');
    }
}

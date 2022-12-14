<?php

namespace App\Http\Controllers\Landlord;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LandlordController extends Controller
{
    public function index()
    {
        abort_if(Auth::user()->role_id!= 2, 403, 'Access Denied');
        $landlord = User::where('role_id','2')->get();
        return view('landlord.dashboard', compact('landlord'));
    }
}

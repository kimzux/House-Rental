<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminLandlordController extends Controller
{
    public function index()
    {
       
        $landlord = User::where('role_id', '2')->get();
        return view('pages-admin.admin-landlord.landlord', compact('landlord'));
    }
}

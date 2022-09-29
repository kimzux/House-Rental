<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class LandlordController extends Controller
{
    public function index()
    {
        $landlord = User::where('role_id','2')->get();
        return view('pages.landlord', compact('landlord'));
    }
}

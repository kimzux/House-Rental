<?php

namespace App\Http\Controllers\House;
use App\Models\User;
use App\Models\House;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        abort_if(Auth::user()->role_id != 2, 403, 'Access Denied');
        $landlord = auth()->user();
        $house = House::where('user_id', auth()->user()->id )->orderBy('created_at', 'desc')->get();
        return view('landlord.house.index', compact('landlord','house'));
    }
}

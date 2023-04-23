<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Tenant;
use App\Models\TenantStatus;

class RoomController extends Controller
{
    // public function index()
    // {
    //     $rooms = Room::with('tenant')->get();
    //     return view('rooms.index', compact('rooms'));
    // }
    public function index()
{
    $rooms = Room::all();
    return view('rooms.index', ['rooms' => $rooms]);

    
}
}


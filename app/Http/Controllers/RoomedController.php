<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roomed;
use App\Models\Reservation;

class RoomedController extends Controller
{
    // public function index()
    // {
    //     $rooms = Room::with('tenant')->get();
    //     return view('rooms.index', compact('rooms'));
    // }
    public function index()
{
    $roomeds = Roomed::all();
    return view('roomeds.index', ['roomeds' => $roomeds]);
}
}


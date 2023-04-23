<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aroom;
use App\Models\Archive;

class AroomController extends Controller
{
    // public function index()
    // {
    //     $rooms = Room::with('tenant')->get();
    //     return view('rooms.index', compact('rooms'));
    // }
    public function index()
{
    $arooms = Aroom::all();
    return view('arooms.index', ['arooms' => $arooms]);
}
}


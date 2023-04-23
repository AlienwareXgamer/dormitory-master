<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\Tenant;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('statuses.index', ['rooms' => $rooms]);
}
}

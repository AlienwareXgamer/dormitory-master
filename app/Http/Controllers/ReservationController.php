<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Roomed;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create(Roomed $roomed)
    {
        return view('reservations.create', compact('roomed'))->with('id', $roomed->id);
    }

    public function store(Request $request, Roomed $roomed)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:reservations,email',
            'address' => 'required',
            'phone_number' => 'required',
            'status' => 'required'
        ]);

        $reservation = Reservation::create($request->all());
        $roomed->reservation()->save($reservation);

        $roomed = Roomed::findOrFail($request->get('roomed_id'));
        $roomed->is_reserved = true;
        $roomed->save();


        return redirect()->route('roomeds.index', $roomed)->with('success', 'Reservation has been added to the room.');
    }

    public function edit(Reservation $reservation)
    {
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $reservation->update($request->all());
        return redirect()->route('roomeds.index');
    }

    public function destroy(Reservation $reservation)
    {
        $roomed_id = $reservation->roomed_id;

        $reservation->delete();

        $roomed = Roomed::findOrFail($roomed_id);
        $roomed->is_reserved = false;
        $roomed->save();

        return redirect()->route('roomeds.index');
    }
}

@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('reservations.update', $reservation->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" value="{{ $reservation->first_name }}" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" value="{{ $reservation->last_name }}" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ $reservation->email }}" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="address">Address</label>
        <input type="text" name="address" value="{{ $reservation->address }}" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="phone_number">Phone Number</label>
        <input type="text" name="phone_number" value="{{ $reservation->phone_number }}" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="status">Status</label>
        <input type="text" name="status" value="{{ $reservation->status }}" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
</form>

<form method="POST" action="{{ route('reservations.destroy', $reservation->id) }}">
    @csrf
    @method('DELETE')
    <div>
        <button type="submit">Delete</button>

</form>

@endsection

@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('archives.update', $archive->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" value="{{ $archive->first_name }}" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" value="{{ $archive->last_name }}" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ $archive->email }}" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="address">Address</label>
        <input type="text" name="address" value="{{ $archive->address }}" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="phone_number">Phone Number</label>
        <input type="text" name="phone_number" value="{{ $archive->phone_number }}" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
</form>

<form method="POST" action="{{ route('archives.destroy', $archive->id) }}">
    @csrf
    @method('DELETE')
    <div>
        <button type="submit">Delete</button>

</form>

@endsection

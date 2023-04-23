@extends('layouts.app')

@section('content')

@foreach($roomeds as $room)


    <div class="block  w-screen">
        @if($room->is_reserved)
        <a href="{{ route('reservations.edit', $room->reservation->id) }}"><div class="pl-3 text-xl font-bold shadow-lg" style="height: 100%; background-color: #14d782a8; border-radius: 1rem; margin-bottom: 1rem;"><button>Room {{ $room->room_number }}
            <p style="float:inline-end; margin-top:3rem; margin-right: 3rem; vertical-align: baseline; color:#DC1111">Reserved</p>
           <div class="block">
          <div class="inline-block font-normal font-mono content-baseline ml-4">

              <div class="inline-block">
                <div class="block">
                  <p class="inline-block">Reserved to:</p>
                  <p class="inline-block float-right font-bold ml-4">{{ $room->reservation->first_name }} {{ $room->reservation->last_name }}</p>
                </div>


          </div>
          </div>
        </div>
    </button></div></a>

        @else

        <div class="pl-3 text-xl font-bold shadow-lg" style="height: 10rem; background-color:#39e4692f; border-radius: 1rem; margin-bottom: 1rem;">Room {{ $room->id }}
            <p style="float:inline-end; margin-right: 3rem;">Available For Reservation</p>
            <a href="{{ route('reservations.create', $room) }}" class="btn btn-primary"><button type="button" class="text-white font-Montserrat font-medium font-xl rounded" style="float:right; margin-right: 5%; margin-top:0rem; background-color:#22215B; height:5rem; width: 10rem;">
              Add Reservation
            </button></a>
          </div>
        @endif
    </div>
@endforeach

@endsection

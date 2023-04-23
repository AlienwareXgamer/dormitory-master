@extends('layouts.app')

@section('content')

@foreach($arooms as $room)


    <div class="block  w-screen">
        @if($room->is_archived)
        <a href="{{ route('archives.edit', $room->archive->id) }}"><div class="pl-3 text-xl font-bold shadow-lg" style="height: 100%; background-color: #e4393944; border-radius: 1rem; margin-bottom: 1rem;"><button>Archive {{ $room->room_number }}
            <p style="float:inline-end; margin-top:3rem; margin-right: 3rem; vertical-align: baseline; color:#DC1111">Left</p>
           <div class="block  w-screen">
          <div class="inline-block font-normal font-mono content-baseline ml-4">

              <div class="inline-block">
                <div class="block">
                  <p class="inline-block">Past Tenant:</p>
                  <p class="inline-block float-right font-bold ml-4">{{ $room->archive->first_name }} {{ $room->archive->last_name }}</p>
                </div>


          </div>
          </div>
        </div>
    </button></div></a>

        @else

        <div class="pl-3 text-xl font-bold shadow-lg" style="height: 10rem; background-color:#39e4692f; border-radius: 1rem; margin-bottom: 1rem;">Archive {{ $room->id }}
            <p style="float:inline-end; margin-right: 3rem;">No Archives yet</p>
            <a href="{{ route('archives.create', $room) }}" class="btn btn-primary"><button type="button" class="text-white font-Montserrat font-medium font-xl rounded" style="float:right; margin-right: 5%; margin-top: 0rem; background-color:#22215B; height:3rem; width: 10rem;">
              Add Archive
            </button></a>
          </div>
        @endif
    </div>
@endforeach

@endsection

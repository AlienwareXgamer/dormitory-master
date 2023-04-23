@extends('layouts.app')

@section('content')

@foreach($rooms as $room)


<div class="block  w-screen">
    <?php if($room->is_occupied): ?>
    <a href="<?php echo e(route('tenants.view', $room->tenant->id)); ?>"><div class="pl-0 text-xl font-bold shadow-lg" style="height: 10rem; background-color: #39e4b644; border-radius: 1rem; margin-bottom: 1rem;"><button>Room <a href="<?php echo e(route('tenants.view', $room->tenant->id)); ?>">View Tenant</a></button>
        <p style="float:inline-end;margin-bottom:3rem; vertical-align: baseline; color:#010101">Status</p>
       <div class="block">
      <div class="inline-block font-normal font-mono content-baseline ml-4">
          <div class="inline-block">
            <div class="block">
              <p class="inline-block">Tenant:</p>
              <p class="inline-block float-right font-bold "><?php echo e($room->tenant->tenant_status);?></p>
            </div>
    </div>

</button></div></a>

        @endif
    </div>
@endforeach

@endsection

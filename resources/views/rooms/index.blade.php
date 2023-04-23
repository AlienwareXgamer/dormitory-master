@extends('layouts.app')

@section('content')

@foreach($rooms as $room)


<div class="block  w-screen">
    <?php if($room->is_occupied): ?>
    <a href="<?php echo e(route('tenants.edit', $room->tenant->id)); ?>"><div class="pl-0 text-xl font-bold shadow-lg" style="height: 10rem; background-color: #e4393944; border-radius: 1rem; margin-bottom: 1rem;"><button>Room <?php echo e($room->room_number); ?>
        <p style="float:inline-end;margin-bottom:3rem; vertical-align: baseline; color:#DC1111">Occupied</p>
       <div class="block">
      <div class="inline-block font-normal font-mono content-baseline ml-4">
          <div class="inline-block">
            <div class="block">
              <p class="inline-block">Occupant:</p>
              <p class="inline-block float-right font-bold "><?php echo e($room->tenant->first_name); ?> <?php echo e($room->tenant->last_name); ?></p>
            </div>
    </div>

</button></div></a>

    <?php else: ?>

    <div class="pl-3 text-xl font-bold shadow-lg" style="height: 10rem; background-color:#39e4692f; border-radius: 1rem; margin-bottom: 1rem;">Room <?php echo e($room->id); ?>
        <p style="float:inline-end; margin-right: 3rem;">Available</p>
        <a href="<?php echo e(route('tenants.create', $room)); ?>" class="btn btn-primary"><button type="button" class="text-white font-Montserrat font-medium font-xl rounded" style="float:right; margin-right: 5%; margin-top:0rem; background-color:#22215B; height:2rem; width: 10rem;">
          Add Tenant
        </button></a>
      </div>
</div>
        @endif
    </div>
@endforeach

@endsection

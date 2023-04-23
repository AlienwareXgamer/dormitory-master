<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


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

        <?php endif; ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\FRANCIS ALLEN\Dormitory-Management-System-master\resources\views/statuses/index.blade.php ENDPATH**/ ?>
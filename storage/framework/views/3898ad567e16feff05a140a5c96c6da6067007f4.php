<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $arooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


    <div class="block  w-screen">
        <?php if($room->is_archived): ?>
        <a href="<?php echo e(route('archives.edit', $room->archive->id)); ?>"><div class="pl-3 text-xl font-bold shadow-lg" style="height: 100%; background-color: #e4393944; border-radius: 1rem; margin-bottom: 1rem;"><button>Archive <?php echo e($room->room_number); ?>

            <p style="float:inline-end; margin-top:3rem; margin-right: 3rem; vertical-align: baseline; color:#DC1111">Left</p>
           <div class="block  w-screen">
          <div class="inline-block font-normal font-mono content-baseline ml-4">

              <div class="inline-block">
                <div class="block">
                  <p class="inline-block">Past Tenant:</p>
                  <p class="inline-block float-right font-bold ml-4"><?php echo e($room->archive->first_name); ?> <?php echo e($room->archive->last_name); ?></p>
                </div>


          </div>
          </div>
        </div>
    </button></div></a>

        <?php else: ?>

        <div class="pl-3 text-xl font-bold shadow-lg" style="height: 10rem; background-color:#39e4692f; border-radius: 1rem; margin-bottom: 1rem;">Archive <?php echo e($room->id); ?>

            <p style="float:inline-end; margin-right: 3rem;">No Archives yet</p>
            <a href="<?php echo e(route('archives.create', $room)); ?>" class="btn btn-primary"><button type="button" class="text-white font-Montserrat font-medium font-xl rounded" style="float:right; margin-right: 5%; margin-top: 0rem; background-color:#22215B; height:3rem; width: 10rem;">
              Add Archive
            </button></a>
          </div>
        <?php endif; ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\FRANCIS ALLEN\Dormitory-Management-System-master\resources\views/arooms/index.blade.php ENDPATH**/ ?>
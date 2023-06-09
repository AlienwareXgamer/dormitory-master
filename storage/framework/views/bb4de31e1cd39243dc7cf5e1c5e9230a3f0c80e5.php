<?php $__env->startSection('content'); ?>

<form method="POST" action="<?php echo e(route('reservations.update', $reservation->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div>
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" value="<?php echo e($reservation->first_name); ?>" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" value="<?php echo e($reservation->last_name); ?>" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" value="<?php echo e($reservation->email); ?>" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="address">Address</label>
        <input type="text" name="address" value="<?php echo e($reservation->address); ?>" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="phone_number">Phone Number</label>
        <input type="text" name="phone_number" value="<?php echo e($reservation->phone_number); ?>" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="status">Status</label>
        <input type="text" name="status" value="<?php echo e($reservation->status); ?>" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
</form>

<form method="POST" action="<?php echo e(route('reservations.destroy', $reservation->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <div>
        <button type="submit">Delete</button>

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\FRANCIS ALLEN\Dormitory-Management-System-master\resources\views/reservations/edit.blade.php ENDPATH**/ ?>
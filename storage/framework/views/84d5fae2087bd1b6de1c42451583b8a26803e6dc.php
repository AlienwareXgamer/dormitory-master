<?php $__env->startSection('content'); ?>
<h1>Pending Contracts</h1>
<div class="mt-4 relative overflow-x-auto shadow-md sm:rounded-lg w-screen" style="background-color:#22215B;">
    
    <table id="table1" class="w-full text-sm text-left" style="background-color: #ADDDD0">
      
      <thead class="text-md text-center">
        
         
          <tr><th scope="col" class="px-6 py-3">
            File Name
      </th>
        <th scope="col" class="px-6 py-3">
            Date Issued
        </th>
        <th scope="col" class="px-6 py-3">
          Date Expired
        </th>
        <th scope="col" class="px-6 py-3">
          Action
        </th>
       </tr>
      </thead>
    
      <tbody style="background-color:#22215B; color:aliceblue;">
        <?php $__currentLoopData = $pendingContracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;"><a href="<?php echo e(url('storage/contracts/' . $contract->file)); ?>" target="_blank"><?php echo e($contract->name); ?>.pdf</a></td>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;"><?php echo e($contract->date_issued); ?></td>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;"><?php echo e($contract->date_expired); ?></td>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;">
                <form action="<?php echo e(route('pendingcontracts.approve', $contract->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-success">Approve</button>
                </form>
                <form action="<?php echo e(route('pendingcontracts.disapprove', $contract->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-danger">Disapprove</button>
                </form></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<br>
</div>
Approved Contracts
<div class="mt-4 relative overflow-x-auto shadow-md sm:rounded-lg w-screen" style="background-color:#22215B;">
<table id="table1" class="w-full text-sm text-left" style="background-color: #ADDDD0">
      
    <thead class="text-md text-center">
      
       
        <tr><th scope="col" class="px-6 py-3">
          File Name
    </th>
      <th scope="col" class="px-6 py-3">
          Date Issued
      </th>
      <th scope="col" class="px-6 py-3">
        Date Expired
      </th>
      <th scope="col" class="px-6 py-3">
        Status
      </th>
     </tr>
    </thead>
  
    <tbody style="background-color:#22215B; color:aliceblue;">
      <?php $__currentLoopData = $approvedContracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td style="font-size: 1rem;
              font-family: Lucida Console, Courier New, monospace;
              text-align: center;"><a href="<?php echo e(asset('storage/contracts/' . $contract->file)); ?>" target="_blank"><?php echo e($contract->name); ?>.pdf</a></td>
              <td style="font-size: 1rem;
              font-family: Lucida Console, Courier New, monospace;
              text-align: center;"><?php echo e($contract->date_issued); ?></td>
              <td style="font-size: 1rem;
              font-family: Lucida Console, Courier New, monospace;
              text-align: center;"><?php echo e($contract->date_expired); ?></td>
              <td style="font-size: 1rem;
              font-family: Lucida Console, Courier New, monospace;
              text-align: center;">Approved</td>
          </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\FRANCIS ALLEN\Dormitory-Management-System-master\resources\views/pendingcontracts/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mt-6" role="alert">
        <p class="font-bold"><?php echo e(__('Success')); ?></p>
        <p><?php echo e(session('success')); ?></p>
    </div>
<?php endif; ?>
<div style="margin: 0rem;">
    <div class="w-full bg-cover bg-bottom" style="height: 50rem; background-image: url(/assets/background.png);">

    <div style="padding-top: 2rem; display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">
      <div style="padding-top: 1rem; width: 50rem; margin-right: 2rem;">
        <div class="container place-items-center">
                        <div class="panel-body place-items-center">
                            <form action="<?php echo e(route('contracts.store')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="mb-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" style="height: 3rem; width:20rem;" class="form-control block border-2  font-mono mt-1 ml-4 mb-4 p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl dark:bg-gray-100 dark:placeholder-gray-400" required>
                                       
                                    </div>
                                </div>
                                <div class="grid gap-6 mb-6 md:grid-cols-2">
                                <div class="form-group">
                                    <label for="date_issued">Contract Date Issued</label>
                                    <input type="date" class="form-control block border-2  font-mono mt-1 ml-4 mb-4 p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl dark:bg-gray-100 dark:placeholder-gray-400" id="date_issued" name="date_issued" required>
                                </div>
                                <div class="form-group">
                                    <label for="date_expired">Contract End Date</label>
                                    <input type="date" class="form-control block border-2  font-mono mt-1 ml-4 mb-4 p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl dark:bg-gray-100 dark:placeholder-gray-400" id="date_expired" name="date_expired" required>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label for="file">Upload Contract</label>
                                    <input type="file" style="background-color: #b6b6b6;" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="file" name="file" required>
                                </div>
                                <br>
                                <button type="submit" class="text-white font-Montserrat font-medium font-xl rounded" style="background-color:#22215B; height:4rem; width: 100%;">Upload Contract (For Tenants)</button>
                            </form>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
          <div style="padding-top: 1rem;"></div>
      </div>
  </div>

 
</div>

    
<script>
    // Set the file input field name based on the value of the name input field
    const nameInput = document.getElementById('name');
    const pdfInput = document.getElementById('pdf');
    nameInput.addEventListener('input', () => {
        const fileName = nameInput.value.replace(/\s+/g, '-').toLowerCase() + '.pdf';
        pdfInput.setAttribute('name', 'pdf_' + fileName);
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\FRANCIS ALLEN\Dormitory-Management-System-master\resources\views/contracts/index.blade.php ENDPATH**/ ?>
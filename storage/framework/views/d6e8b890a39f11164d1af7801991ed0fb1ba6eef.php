        

        <?php $__env->startSection('content'); ?>
        <?php if(session('success')): ?>
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mt-6" role="alert">
                <p class="font-bold"><?php echo e(__('Success')); ?></p>
                <p><?php echo e(session('success')); ?></p>
            </div>
        <?php endif; ?>
        <div style="margin: 0rem;" class="w-screen h-screen">
            <div class="w-full bg-cover bg-bottom " style="height: 100rem; background-image: url(/assets/background.png);">
            <img src="/assets/dorm.png" style="float: left;height:45rem; width:44rem; padding: 60px; border-radius: 10%">
            <h1 class="sm:leading-tight sm:text-7xl mt-0 mb-2" style="color: #22215B; font-style: italic; padding-top:10%; padding-left: 10rem;">Welcome to</h1>
            <h1 class="font-Montserrat font-bold leading-tight text-7xl mt-0 mb-2" style="color: #22215B; padding-top:0%; padding-left: 10;">Kuya Mic's Dormitory</h1>

            <h1 class="leading-tight text-4xl mt-0 mb-2" style="color: #7B7F9E; padding-top:2%; padding-left: 30%;">Administrator Log-in </h1>
            
            
            <div style="padding-top: 2rem; display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">


            <div style="padding-top: 1rem; width: 50rem; margin-right: 2rem;">
                <button onclick="location.href='home'" type="button" class="text-white font-Montserrat font-medium font-xl rounded" style="background-color:#22215B; height:4rem; width: 100%;">
                    Login
                </button>
            </div>
            <div style="padding-top: 1rem; width: 50rem; margin-right: 2rem;">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="file-upload">
                    For Tenants:
                </label>
            </div>
            <div style="padding-top: 1rem; width: 50rem; margin-right: 2rem;">
                <a href="<?php echo e(route('contracts.index')); ?>">
                <button type="button" class="text-white font-Montserrat font-medium font-xl rounded" style="background-color:#22215B; height:4rem; width: 100%;">
                    Upload Contract (For Tenants)
                </button>
                </a>
            </div>
            <div style="padding-top: 1rem; width: 50rem; margin-right: 2rem;">
                <a href="<?php echo e(route('leave_contracts.index')); ?>">
                <button  type="button" class="text-white font-Montserrat font-medium font-xl rounded" style="background-color:#22215B; height:4rem; width: 100%;">
                    Upload Request to Leave Form (For Tenants)
                </button>
                </a>
            </div>
            <div style="padding-top: 1rem; width: 50rem; margin-right: 2rem;">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="file-upload">
                    For Non-Tenants:
                </label>
            </div>

            <div style="padding-top: 1rem; width: 50rem; margin-right: 2rem;">
                <a href="<?php echo e(route('roomeds.index')); ?>">
                <button  type="button" class="text-white font-Montserrat font-medium font-xl rounded" style="background-color:#22215B; height:4rem; width: 100%;">
                    Apply a Reservation (For Non-tenants)
                </button>
                </a>
            </div>

            </div>
            </div>
        </div>

        
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\FRANCIS ALLEN\Dormitory-Management-System-master\resources\views/landing/index.blade.php ENDPATH**/ ?>
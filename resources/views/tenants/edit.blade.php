@extends('layouts.app')

@section('content')

<div class="sm:ml-30">
    <div class="w-screen h-screen bg-scroll bg-cover bg-bottom" style="background-image: url(/assets/background.png);" >

      <h1 class="font-Montserrat text-center font-bold leading-tight text-4xl mt-0 mb-2" style=" color: #22215B; padding-top:2%;">Tenant Profile</h1>


      <form style="float:center" class="text-center" method="POST" action="<?php echo e(route('tenants.update', $tenant->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="inline- mt-4">
        <label for="first_name" class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">First Name</label>
        <input type="text" name="first_name" value="<?php echo e($tenant->first_name); ?>" style=" height: 3rem; width:20rem;" class="mt-4 drop-shadow-xl  ml-6  p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl  dark:bg-gray-100 dark:placeholder-gray-400">
    </div>
    <div class="inline- mt-4 ml-4">
        <label for="last_name"  class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">Last Name</label>
        <input type="text" name="last_name" value="<?php echo e($tenant->last_name); ?>" style=" height: 3rem; width:20rem;" class="mt-4 drop-shadow-xl  ml-6  p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl  dark:bg-gray-100 dark:placeholder-gray-400">
    </div>
    <div></div>
    <div class="inline- mt-4">
        <label for="email" class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">Email</label>
        <input type="email" name="email" value="<?php echo e($tenant->email); ?>" style=" height: 3rem; width:20rem;" class="mt-4 drop-shadow-xl  ml-6  p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl  dark:bg-gray-100 dark:placeholder-gray-400">
    </div>

    <div class="inline- mt-4 ml-4">
        <label for="address" class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">Address</label>
        <input type="text" name="address" value="<?php echo e($tenant->address); ?>" style=" height: 3rem; width:20rem;" class="mt-4 drop-shadow-xl  ml-6  p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl  dark:bg-gray-100 dark:placeholder-gray-400">
    </div>
    <div></div>
    <div class="inline- mt-4">
        <label for="phone_number" class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">Phone Number</label>
        <input type="text" name="phone_number" value="<?php echo e($tenant->phone_number); ?>" style=" height: 3rem; width:20rem;" class="mt-4 drop-shadow-xl  ml-6  p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl  dark:bg-gray-100 dark:placeholder-gray-400">
    </div>
    <div class="inline- mt-4 ml-4">
        <label for="status" class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">Status</label>
        <input type="text" name="status" value="<?php echo e($tenant->status); ?>" style=" height: 3rem; width:20rem;" class="mt-4 drop-shadow-xl  ml-6  p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl  dark:bg-gray-100 dark:placeholder-gray-400">
    </div>

    <div class="inline- mt-4 ml-4">
        <label for="tenant_status" class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">Tenant Status</label>
        <input type="text" name="tenant_status" value="<?php echo e($tenant->tenant_status); ?>" style=" height: 3rem; width:20rem;" class="mt-4 drop-shadow-xl  ml-6  p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl  dark:bg-gray-100 dark:placeholder-gray-400">
    </div>
    <div class=" mt-8">
        <button type="submit" class="drop-shadow-2xl mt-6 text-xl text-white bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-full text-md px-10 py-2.5 sm:text-center " style="background-color:#22215B; height: 3.5rem; width: 50rem;">Update</button>
    </div>
</form>

<form method="POST" action="<?php echo e(route('tenants.destroy', $tenant->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <div class=" text-center">
        <button type="submit" class="drop-shadow-2xl mt-6 text-xl text-white bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-full text-md px-10 py-2.5 sm:text-center " style="background-color:#22215B; height: 3.5rem; width: 50rem;">Delete</button>

</form>
</div>
</div>

@endsection

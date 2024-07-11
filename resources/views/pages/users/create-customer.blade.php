@extends('layouts.app')

@section('title')
Create Customer
@endsection

@section('content')
    
<style>
.grid-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* Two columns */
        gap: 10px; /* Gap between grid items */
    }
     
    td:has(button.border-yellow-600) {
        border-bottom: 2px solid rgb(204, 139, 4);
    }
     
</style>
<main class="h-full overflow-y-auto px-6 bg-white">
        <div class="flex justify-between items-center mt-3 p-5">
            <h1 class="text-3xl font-bold">Edit Customer</h1>
        </div>
    <div class="mx-auto grid mt-1 bg-gray-100 p-5">
        <div class="container mx-auto bg-white ">
        <div class="grid-container">
            <div class="p-6 mb-6">
                          <!-- Permissions Table -->
                    <div class="mb-4">
                        <label for="role_name" class="block text-xs text-gray-700 mb-2">CUSTOMER ID</label>
                        <input id="role_name" type="text" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500">
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-xs text-gray-700 mb-2">USER NAME</label>
                        <input id="description" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500"> 
                    </div>
                     <div class="mb-4">
                        <label for="description" class="block text-xs text-gray-700 mb-2">EMAIL ID</label>
                        <input id="description" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500"> 
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-xs text-gray-700 mb-2">PHONE NUMBER</label>
                        <input id="description" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500"> 
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-xs text-gray-700 mb-2">POST CODE</label>
                        <input id="description" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500"> 
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-xs text-gray-700 mb-2">FAX NUMBER</label>
                        <input id="description" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500"> 
                    </div>
          </div>
        
        </div>
        <div class="p-6 mb-6 text-right">
            <a href="{{ route('user.customer.list') }}"><button class="w-[10%] bg-white text-black px-5 h-8 rounded shadow hover:bg-black hover:text-white"> Cancel</button></a>
            <button class="w-[10%] bg-black text-yellow-600 px-5 h-8 rounded shadow hover:bg-yellow-600 hover:text-white"> Save</button>
        </div> 
        </div>
    </div>
  
 </main>
@endsection

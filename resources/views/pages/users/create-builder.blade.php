@extends('layouts.app')

@section('title')
Create Builder
@endsection

@section('content')
    
<style>
 
    @media (max-width: 768px) {
     .responsive-button {
                width: auto;
            }
}
     
    td:has(button.border-yellow-600) {
        border-bottom: 2px solid rgb(204, 139, 4);
    }
     
</style>
<main class="h-full overflow-y-auto px-6 bg-white">
    <div class="flex justify-between items-center mt-3 p-5">
            <h1 class="text-3xl font-bold">Edit Builder</h1>
        </div>
   <div class="mx-auto mt-1 bg-gray-100 p-5">
    <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">
         <div class="grid grid-cols-1 md:grid-cols-6 gap-4 mb-4">
            <div class="md:col-span-1">
                <label for="customer_id" class="block text-xs text-gray-700 mb-2">CUSTOMER ID</label>
                <input id="customer_id" type="text" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500 bg-gray-100" placeholder="405"  >
            </div>
            <div class="md:col-span-4">
                <label for="supplier_name" class="block text-xs text-gray-700 mb-2">SUPPLIER NAME</label>
                <input id="supplier_name" type="text" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500" placeholder="ROCKDALE BUILDING SOLUTIONS"  >
            </div>
            <div class="md:col-span-1">
                <label for="code" class="block text-xs text-gray-700 mb-2">CODE</label>
                <input id="code" type="text" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500" placeholder="ROCK"  >
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 mb-4">
            <div>
                <label for="address1" class="block text-xs text-gray-700 mb-2">ADDRESS LINE 1</label>
                <input id="address1" type="text" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500" placeholder="30 MOSS ST">
            </div>
            <div>
                <label for="address2" class="block text-xs text-gray-700 mb-2">ADDRESS LINE 2</label>
                <input id="address2" type="text" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500" placeholder="PARAFIELD GARDENS">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
            <div>
                <label for="postcode" class="block text-xs text-gray-700 mb-2">POST CODE</label>
                <input id="postcode" type="text" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500" placeholder="5107">
            </div>
            <div>
                <label for="phone" class="block text-xs text-gray-700 mb-2">PHONE NUMBER</label>
                <input id="phone" type="text" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500" placeholder="Type here...">
            </div>
            <div>
                <label for="fax" class="block text-xs text-gray-700 mb-2">FAX NUMBER</label>
                <input id="fax" type="text" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500" placeholder="Type here...">
            </div>
            <div>
                <label for="email" class="block text-xs text-gray-700 mb-2">EMAIL ADDRESS</label>
                <input id="email" type="email" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500" placeholder="Type here...">
            </div>
        </div>

        <div class="mb-4">
            <label for="notes" class="block text-xs text-gray-700 mb-2">NOTES</label>
            <textarea id="notes" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500" placeholder="For internal supreme use."></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-xs text-gray-700 mb-2">Ability to order products without a batch date</label>
            <div class="flex space-x-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox text-yellow-600">
                    <span class="ml-2">Sinks</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox text-yellow-600">
                    <span class="ml-2">Basins</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox text-yellow-600">
                    <span class="ml-2">Rangehood</span>
                </label>
            </div>
        </div>
        <div class="p-6 mb-6 text-right">
            <a href="{{ route('user.builder.list') }}"><button class="responsive-button w-[10%] bg-white text-black px-5 h-8 rounded shadow hover:bg-black hover:text-white">Cancel</button></a>
             <button class="responsive-button w-[10%] bg-black text-yellow-600 px-5 h-8 rounded shadow hover:bg-yellow-600 hover:text-white"> Save</button>
        </div> 
    </div>
    </div>
        
         
  
 </main>
@endsection

@extends('layouts.app')

@section('title')
Create User
@endsection

@section('content')
    
<style>
.grid-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
}

/* For tablets and larger screens */
@media (max-width: 768px) {
    .grid-container {
        grid-template-columns: 1fr;
    } .responsive-button {
                width: auto;
            }
}

/* For small screens */
@media (max-width: 480px) {
    .grid-container {
        grid-template-columns: 1fr;
    }
}
     
    td:has(button.border-yellow-600) {
        border-bottom: 2px solid rgb(204, 139, 4);
    }
     
</style>
<main class="h-full overflow-y-auto px-6 bg-white">
        <div class="flex justify-between items-center mt-3 p-5">
            <h1 class="text-3xl font-bold">Edit User</h1>
        </div>
   <div class="mx-auto mt-1 bg-gray-100 lg:p-5">
    <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="grid-container">
            <div class="lg:p-6 mb-6"> 
                <div x-data="{ tab: 'overview' }">
                    <div class="flex flex-wrap border-b border-gray-200 pb-2 mb-4">
                        <button @click="tab = 'overview'" :class="{ 'border-b-2 border-yellow-600 text-yellow-600': tab === 'overview', 'text-gray-600': tab !== 'overview' }" class="w-full sm:w-auto m-1 font-bold p-2 text-gray-600">Overview</button>
                        <button @click="tab = 'permissions'" :class="{ 'border-b-2 border-yellow-600 text-yellow-600': tab === 'permissions', 'text-gray-600': tab !== 'permissions' }" class="w-full sm:w-auto m-1 font-bold p-2 text-gray-600">Product Permissions</button>
                       </div>
                    
                    <div class=" bg-gray-100 p-1"></div>
                    <div x-show="tab === 'overview'" class="mt-4">
                        <!-- Permissions Table -->
                        <div class="mb-4">
                        <label for="role_name" class="block text-xs text-gray-700 mb-2">USER FIRST NAME</label>
                        <input id="role_name" type="text" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500">
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-xs text-gray-700 mb-2">USER LAST NAME</label>
                        <input id="description" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500"> 
                    </div>
                     <div class="mb-4">
                        <label for="description" class="block text-xs text-gray-700 mb-2">EMAIL ADDRESS</label>
                        <input id="description" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500"> 
                    </div>
                     <div class="mb-4">
                        <label for="description" class="block text-xs text-gray-700 mb-2">PHONE NUMBER</label>
                        <input id="description" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500"> 
                    </div>
                </div>
                <div x-show="tab === 'permissions'" class="mt-4">
                        <!-- Users Permissions Table 
                         <div class="mb-4"><input type="checkbox" class="w-5 h-5 mr-3 text-blue-600 bg-gray-100 border-gray-300 rounded">Select All</div>
                    <table class="min-w-full border-collapse block md:table">
                     <tbody class="block md:table-row-group">
                        <tr class="bg-gray-100 border border-gray-200 md:border-none block md:table-row">
                            <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">
                                <label class="w-1/2 inline-flex items-center ml-4">
                                <span class="ml-2">Accessories</span>
                            </label> </td>
                            <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">
                                <label class="inline-flex items-center ml-4">
                                <input type="radio" name="create_user" class="form-radio text-blue-600">
                                <span class="ml-2">Create</span> </label>
                            </td>
                            <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">
                                <label class="inline-flex items-center ml-4">
                                <input type="radio" name="read_user" class="form-radio text-blue-600">
                                <span class="ml-2">Read</span> </label> 
                            </td>
                            <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">
                                <label class="inline-flex items-center ml-4">
                                <input type="radio" name="update_user" class="form-radio text-blue-600">
                                <span class="ml-2">Update</span> </label> 
                            </td>
                            <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">
                               <label class="inline-flex items-center ml-4">
                                <input type="radio" name="delete_user" class="form-radio text-blue-600">
                                <span class="ml-2">Delete</span> </label>
                            </td>
                        </tr>
                            
                            </tbody></table> 
                        -->
                        <div class="mb-4"><input type="checkbox" class="w-5 h-5 mr-3 text-blue-600 bg-gray-100 border-gray-300 rounded">Select All</div>
                        <div class="flex space-x-4 form_radio_btn h-10 p-5 bg-gray-100 text-sm">
                            <label class="w-1/2 inline-flex items-center ml-4">
                                 <span class="ml-2">Accessories</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="create_user" class="form-radio text-blue-600">
                                <span class="ml-2">Create</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="read_user" class="form-radio text-blue-600">
                                <span class="ml-2">Read</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="update_user" class="form-radio text-blue-600">
                                <span class="ml-2">Update</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="delete_user" class="form-radio text-blue-600">
                                <span class="ml-2">Delete</span>
                            </label>
                             
                        </div>
                        <div class="flex space-x-4 form_radio_btn h-10 p-5 bg-gray-50 text-sm">
                            <label class="w-1/2 inline-flex items-center ml-4">
                                 <span class="ml-2">Bench Top Colour</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="create_user" class="form-radio text-blue-600">
                                <span class="ml-2">Create</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="read_user" class="form-radio text-blue-600">
                                <span class="ml-2">Read</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="update_user" class="form-radio text-blue-600">
                                <span class="ml-2">Update</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="delete_user" class="form-radio text-blue-600">
                                <span class="ml-2">Delete</span>
                            </label>
                              
                        </div>
                        <div class="flex space-x-4 form_radio_btn h-10 p-5 bg-gray-100 text-sm">
                            <label class="w-1/2 inline-flex items-center ml-4">
                                 <span class="ml-2">Door Colour</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="create_user" class="form-radio text-blue-600">
                                <span class="ml-2">Create</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="read_user" class="form-radio text-blue-600">
                                <span class="ml-2">Read</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="update_user" class="form-radio text-blue-600">
                                <span class="ml-2">Update</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="delete_user" class="form-radio text-blue-600">
                                <span class="ml-2">Delete</span>
                            </label>
                            
                        </div>
                        <div class="flex space-x-4 form_radio_btn h-10 p-5 bg-gray-50 text-sm">
                            <label class="w-1/2 inline-flex items-center ml-4">
                                 <span class="ml-2">Fridge</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="create_user" class="form-radio text-blue-600">
                                <span class="ml-2">Create</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="read_user" class="form-radio text-blue-600">
                                <span class="ml-2">Read</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="update_user" class="form-radio text-blue-600">
                                <span class="ml-2">Update</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="delete_user" class="form-radio text-blue-600">
                                <span class="ml-2">Delete</span>
                            </label>
                              
                        </div>
                        <div class="flex space-x-4 form_radio_btn h-10 p-5 bg-gray-100 text-sm">
                            <label class="w-1/2 inline-flex items-center ml-4">
                                 <span class="ml-2">Handle Type</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="create_user" class="form-radio text-blue-600">
                                <span class="ml-2">Create</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="read_user" class="form-radio text-blue-600">
                                <span class="ml-2">Read</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="update_user" class="form-radio text-blue-600">
                                <span class="ml-2">Update</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="delete_user" class="form-radio text-blue-600">
                                <span class="ml-2">Delete</span>
                            </label>
                            
                        </div>
                        <div class="flex space-x-4 form_radio_btn h-10 p-5 bg-gray-50 text-sm">
                            <label class="w-1/2 inline-flex items-center ml-4">
                                 <span class="ml-2">Kicker Colour</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="create_user" class="form-radio text-blue-600">
                                <span class="ml-2">Create</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="read_user" class="form-radio text-blue-600">
                                <span class="ml-2">Read</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="update_user" class="form-radio text-blue-600">
                                <span class="ml-2">Update</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="delete_user" class="form-radio text-blue-600">
                                <span class="ml-2">Delete</span>
                            </label>
                              
                        </div>
                        <div class="flex space-x-4 form_radio_btn h-10 p-5 bg-gray-100 text-sm">
                            <label class="w-1/2 inline-flex items-center ml-4">
                                 <span class="ml-2">Oven</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="create_user" class="form-radio text-blue-600">
                                <span class="ml-2">Create</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="read_user" class="form-radio text-blue-600">
                                <span class="ml-2">Read</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="update_user" class="form-radio text-blue-600">
                                <span class="ml-2">Update</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="delete_user" class="form-radio text-blue-600">
                                <span class="ml-2">Delete</span>
                            </label>
                            
                        </div>
                        <div class="flex space-x-4 form_radio_btn h-10 p-5 bg-gray-50 text-sm">
                            <label class="w-1/2 inline-flex items-center ml-4">
                                 <span class="ml-2">Range Hood</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="create_user" class="form-radio text-blue-600">
                                <span class="ml-2">Create</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="read_user" class="form-radio text-blue-600">
                                <span class="ml-2">Read</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="update_user" class="form-radio text-blue-600">
                                <span class="ml-2">Update</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="delete_user" class="form-radio text-blue-600">
                                <span class="ml-2">Delete</span>
                            </label>
                              
                        </div>
                        <div class="flex space-x-4 form_radio_btn h-10 p-5 bg-gray-100 text-sm">
                            <label class="w-1/2 inline-flex items-center ml-4">
                                 <span class="ml-2">Sliding Robe</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="create_user" class="form-radio text-blue-600">
                                <span class="ml-2">Create</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="read_user" class="form-radio text-blue-600">
                                <span class="ml-2">Read</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="update_user" class="form-radio text-blue-600">
                                <span class="ml-2">Update</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="delete_user" class="form-radio text-blue-600">
                                <span class="ml-2">Delete</span>
                            </label>
                            
                        </div>
                        <div class="flex space-x-4 form_radio_btn h-10 p-5 bg-gray-50 text-sm">
                            <label class="w-1/2 inline-flex items-center ml-4">
                                 <span class="ml-2">Vanity</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="create_user" class="form-radio text-blue-600">
                                <span class="ml-2">Create</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="read_user" class="form-radio text-blue-600">
                                <span class="ml-2">Read</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="update_user" class="form-radio text-blue-600">
                                <span class="ml-2">Update</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="delete_user" class="form-radio text-blue-600">
                                <span class="ml-2">Delete</span>
                            </label>
                              
                        </div>
                        <div class="flex space-x-4 form_radio_btn h-10 p-5 bg-gray-100 text-sm">
                            <label class="w-1/2 inline-flex items-center ml-4">
                                 <span class="ml-2">Sink</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="create_user" class="form-radio text-blue-600">
                                <span class="ml-2">Create</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="read_user" class="form-radio text-blue-600">
                                <span class="ml-2">Read</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="update_user" class="form-radio text-blue-600">
                                <span class="ml-2">Update</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" name="delete_user" class="form-radio text-blue-600">
                                <span class="ml-2">Delete</span>
                            </label>
                            
                        </div>
                         
            </div>
                    
            </div>
        </div>
        <div class="p-6 mb-6 text-right"></div>
        </div>
        <div class="p-6 mb-6 text-right">
            <a href="{{ route('user.list') }}"><button class="responsive-button w-[10%] bg-white text-black px-5 h-8 rounded shadow hover:bg-black hover:text-white">Cancel</button>
             <button class="responsive-button w-[10%] bg-black text-yellow-600 px-5 h-8 rounded shadow hover:bg-yellow-600 hover:text-white"> Save</button>
        </div> 
        </div>
    </div>
  
 </main>
@endsection

@extends('layouts.app')

@section('title')
Role List
@endsection


@section('content')
<style>
.grid-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* Two columns */
        gap: 10px; /* Gap between grid items */
    }
    @media (max-width: 768px) {
    .grid-container {
        grid-template-columns: 1fr;
    } .responsive-button {
                width: auto;
            }
}
    td {
    	border: 1px #ccc solid;
    }
    td:has(button.border-yellow-600) {
        border: 2px solid rgb(204, 139, 4);
    }
    
    .toggle-checkbox:checked + .toggle-label {
        background-color: #2699FB;
    }
    .toggle-checkbox:checked + .toggle-label::after {
        transform: translateX(1.25rem);
    }
    .toggle-checkbox {
        display: none;
    }
    .toggle-label {
        display: inline-block;
        width: 2.5rem;
        height: 1.25rem;
        background-color: #ccc;
        border-radius: 9999px;
        position: relative;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .toggle-label::after {
        content: '';
        display: block;
        width: 1rem;
        height: 1rem;
        background-color: white;
        border-radius: 9999px;
        position: absolute;
        top: 0.125rem;
        left: 0.125rem;
        transition: transform 0.3s ease;
    }
</style>
<main class="h-full overflow-y-auto px-2">
  
    <div class="flex justify-between items-center mt-3 p-5">
            <h1 class="text-3xl font-bold">Edit User Roles</h1>
             
        </div>
    <div class="mx-auto mt-1 bg-gray-100 lg:p-5">
    <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="mb-6">
            <div class="mb-4">
                <label for="role_name" class="block text-xs text-gray-700 mb-2">ROLE NAME</label>
                <input id="role_name" type="text" class="w-full p-2 text-black border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500 placeholder-gray-400" placeholder="Role Name">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-xs text-gray-700 mb-2">DESCRIPTION</label>
                <textarea id="description" class="w-full p-2 text-black border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500 placeholder-gray-400" placeholder="Description"></textarea>
            </div>

            <h2 class="text-2xl font-bold mb-4">Pages Permissions</h2>

        <div x-data="{ tab: 'jobs' }">
             <div class="flex flex-wrap border-b border-gray-200 pb-2 mb-4">
                    <button @click="tab = 'jobs'" :class="{ 'border-b-2 border-yellow-600 text-yellow-600': tab === 'jobs', 'text-gray-600': tab !== 'jobs' }" class="w-full sm:w-auto m-1 font-bold p-2 text-gray-600">Jobs</button>
                    <button @click="tab = 'users'" :class="{ 'border-b-2 border-yellow-600 text-yellow-600': tab === 'users', 'text-gray-600': tab !== 'users' }" class="w-full sm:w-auto m-1 font-bold p-2 text-gray-600">Users</button>
                    <button @click="tab = 'inventory'" :class="{ 'border-b-2 border-yellow-600 text-yellow-600': tab === 'inventory', 'text-gray-600': tab !== 'inventory' }" class="w-full sm:w-auto m-1 font-bold p-2 text-gray-600">Inventory</button>
                    <button @click="tab = 'batching'" :class="{ 'border-b-2 border-yellow-600 text-yellow-600': tab === 'batching', 'text-gray-600': tab !== 'batching' }" class="w-full sm:w-auto m-1 font-bold p-2 text-gray-600">Batching</button>
                    <button @click="tab = 'reports'" :class="{ 'border-b-2 border-yellow-600 text-yellow-600': tab === 'reports', 'text-gray-600': tab !== 'reports' }" class="w-full sm:w-auto m-1 font-bold p-2 text-gray-600">Reports</button>
                    <button @click="tab = 'section'" :class="{ 'border-b-2 border-yellow-600 text-yellow-600': tab === 'section', 'text-gray-600': tab !== 'section' }" class="w-full sm:w-auto m-1 font-bold p-2 text-gray-600">User Selection</button>
                </div>


            <div x-show="tab === 'jobs'" class="mt-4">
                <!-- Jobs Permissions Table -->
                <div class="flex space-x-4 form_radio_btn h-10 p-5 bg-gray-100 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="allowed_inv" class="form-radio text-blue-600">
                        <span class="ml-2">Allow</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="allowed_inv" class="form-radio text-blue-600">
                        <span class="ml-2">Deny</span>
                    </label>
                     <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Show INV Status</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-50 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="allowed_bin" class="form-radio text-blue-600">
                        <span class="ml-2">Allow</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="allowed_bin" class="form-radio text-blue-600">
                        <span class="ml-2">Deny</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Show Bin Button</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-100 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="allowed_product" class="form-radio text-blue-600">
                        <span class="ml-2">Allow</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="allowed_product" class="form-radio text-blue-600">
                        <span class="ml-2">Deny</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Show Products Tab</span>
                    </label>
                </div>
            </div>

            <div x-show="tab === 'users'" class="mt-4">
                <!-- Users Permissions Table -->
                <div class="flex space-x-4 form_radio_btn h-10 p-5 bg-gray-100 text-sm">
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
                     <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Show Users</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-50 text-sm">
                   <label class="inline-flex items-center">
                        <input type="radio" name="create_customer" class="form-radio text-blue-600">
                        <span class="ml-2">Create</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="read_customer" class="form-radio text-blue-600">
                        <span class="ml-2">Read</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="update_customer" class="form-radio text-blue-600">
                        <span class="ml-2">Update</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="delete_customer" class="form-radio text-blue-600">
                        <span class="ml-2">Delete</span>
                    </label>
                     <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Show Customers</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-100 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="create_supervisor" class="form-radio text-blue-600">
                        <span class="ml-2">Create</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="read_supervisor" class="form-radio text-blue-600">
                        <span class="ml-2">Read</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="update_supervisor" class="form-radio text-blue-600">
                        <span class="ml-2">Update</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="delete_supervisor" class="form-radio text-blue-600">
                        <span class="ml-2">Delete</span>
                    </label>
                     <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Show Supervisors</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-50 text-sm">
                   <label class="inline-flex items-center">
                        <input type="radio" name="create_installer" class="form-radio text-blue-600">
                        <span class="ml-2">Create</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="read_installer" class="form-radio text-blue-600">
                        <span class="ml-2">Read</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="update_installer" class="form-radio text-blue-600">
                        <span class="ml-2">Update</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="delete_installer" class="form-radio text-blue-600">
                        <span class="ml-2">Delete</span>
                    </label>
                     <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Show Installers</span>
                    </label>
                </div>
                 <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-100 text-sm">
                   <label class="inline-flex items-center">
                        <input type="radio" name="create_supplier" class="form-radio text-blue-600">
                        <span class="ml-2">Create</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="read_supplier" class="form-radio text-blue-600">
                        <span class="ml-2">Read</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="update_supplier" class="form-radio text-blue-600">
                        <span class="ml-2">Update</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="delete_supplier" class="form-radio text-blue-600">
                        <span class="ml-2">Delete</span>
                    </label>
                     <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Show Suppliers</span>
                    </label>
                </div>
            </div>
            <div x-show="tab === 'inventory'" class="mt-4">
                <!-- inventory Permissions Table -->
                 <div class="flex space-x-4 form_radio_btn h-10 p-5 bg-gray-100 text-sm">
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
                     <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Show Users</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-50 text-sm">
                   <label class="inline-flex items-center">
                        <input type="radio" name="create_customer" class="form-radio text-blue-600">
                        <span class="ml-2">Create</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="read_customer" class="form-radio text-blue-600">
                        <span class="ml-2">Read</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="update_customer" class="form-radio text-blue-600">
                        <span class="ml-2">Update</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="delete_customer" class="form-radio text-blue-600">
                        <span class="ml-2">Delete</span>
                    </label>
                     <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Show Customers</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-100 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="create_supervisor" class="form-radio text-blue-600">
                        <span class="ml-2">Create</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="read_supervisor" class="form-radio text-blue-600">
                        <span class="ml-2">Read</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="update_supervisor" class="form-radio text-blue-600">
                        <span class="ml-2">Update</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="delete_supervisor" class="form-radio text-blue-600">
                        <span class="ml-2">Delete</span>
                    </label>
                     <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Show Supervisors</span>
                    </label>
                </div>
                 <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-50 text-sm">
                   <label class="inline-flex items-center">
                        <input type="radio" name="create_installer" class="form-radio text-blue-600">
                        <span class="ml-2">Create</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="read_installer" class="form-radio text-blue-600">
                        <span class="ml-2">Read</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="update_installer" class="form-radio text-blue-600">
                        <span class="ml-2">Update</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="delete_installer" class="form-radio text-blue-600">
                        <span class="ml-2">Delete</span>
                    </label>
                     <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Show Installers</span>
                    </label>
                </div>
                 <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-100 text-sm">
                   <label class="inline-flex items-center">
                        <input type="radio" name="create_supplier" class="form-radio text-blue-600">
                        <span class="ml-2">Create</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="read_supplier" class="form-radio text-blue-600">
                        <span class="ml-2">Read</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="update_supplier" class="form-radio text-blue-600">
                        <span class="ml-2">Update</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="delete_supplier" class="form-radio text-blue-600">
                        <span class="ml-2">Delete</span>
                    </label>
                     <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Show Suppliers</span>
                    </label>
                </div>
            </div>
            <div x-show="tab === 'batching'" class="mt-4">
                <!-- Users Permissions Table -->
                <div class="flex space-x-4 form_radio_btn h-10 p-5 bg-gray-100 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="allowed_job" class="form-radio text-blue-600">
                        <span class="ml-2">Allow</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="allowed_job" class="form-radio text-blue-600">
                        <span class="ml-2">Deny</span>
                    </label>
                     <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Select Jobs</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-50 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="allowed_batch" class="form-radio text-blue-600">
                        <span class="ml-2">Allow</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="allowed_batch" class="form-radio text-blue-600">
                        <span class="ml-2">Deny</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Batch List Reports</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-100 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="allowed_pc" class="form-radio text-blue-600">
                        <span class="ml-2">Allow</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="allowed_pc" class="form-radio text-blue-600">
                        <span class="ml-2">Deny</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                         <span class="ml-2">PC Itenms for Batch</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-100 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="allowed_sink" class="form-radio text-blue-600">
                        <span class="ml-2">Allow</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="allowed_sink" class="form-radio text-blue-600">
                        <span class="ml-2">Deny</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Sink Request Report</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-100 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="allowed_rangehood" class="form-radio text-blue-600">
                        <span class="ml-2">Allow</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="allowed_rangehood" class="form-radio text-blue-600">
                        <span class="ml-2">Deny</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Rangehood Request Report</span>
                    </label>
                </div>
            </div>
            <div x-show="tab === 'reports'" class="mt-4">
                <!-- Users Permissions Table -->
               <div class="flex space-x-4 form_radio_btn h-10 p-5 bg-gray-100 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="allowed_inv" class="form-radio text-blue-600">
                        <span class="ml-2">Allow</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="allowed_inv" class="form-radio text-blue-600">
                        <span class="ml-2">Deny</span>
                    </label>
                     <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Held Jobs Report</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-50 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="allowed_bin" class="form-radio text-blue-600">
                        <span class="ml-2">Allow</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="allowed_bin" class="form-radio text-blue-600">
                        <span class="ml-2">Deny</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Maintenance Not Completed</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-100 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="allowed_product" class="form-radio text-blue-600">
                        <span class="ml-2">Allow</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="allowed_product" class="form-radio text-blue-600">
                        <span class="ml-2">Deny</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Maintenance Completed</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-100 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="allowed_product" class="form-radio text-blue-600">
                        <span class="ml-2">Allow</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="allowed_product" class="form-radio text-blue-600">
                        <span class="ml-2">Deny</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                         <span class="ml-2">List Jobs By Account Name</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-100 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="allowed_product" class="form-radio text-blue-600">
                        <span class="ml-2">Allow</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="allowed_product" class="form-radio text-blue-600">
                        <span class="ml-2">Deny</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Job Drawn Between Dates Report</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-100 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="allowed_product" class="form-radio text-blue-600">
                        <span class="ml-2">Allow</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="allowed_product" class="form-radio text-blue-600">
                        <span class="ml-2">Deny</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Jobs Without Batch Date</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-100 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="allowed_product" class="form-radio text-blue-600">
                        <span class="ml-2">Allow</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="allowed_product" class="form-radio text-blue-600">
                        <span class="ml-2">Deny</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Delivery List</span>
                    </label>
                </div>
                <div class="flex space-x-4 form_radio_btn h-10 p-6 bg-gray-100 text-sm">
                    <label class="inline-flex items-center">
                        <input type="radio" name="allowed_product" class="form-radio text-blue-600">
                        <span class="ml-2">Allow</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="allowed_product" class="form-radio text-blue-600">
                        <span class="ml-2">Deny</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                         <span class="ml-2">Delivery Notifications</span>
                    </label>
                </div>
            </div>
            <div x-show="tab === 'section'" class="mt-4">
                <!-- Users Permissions Table -->
                <h2 class="text-s mb-4">The options below are to add users of a user role to specific dropdown list on a specific page. Such as, Allowing users of this particular user role to be part of the dropdown for a consultant</h2>
                <table class="min-w-full border-collapse block md:table">
            <thead class="block md:table-header-group">
                <tr class="border border-gray-200 md:border-none md:table-row absolute -top-full md:top-auto -left-full md:left-auto md:relative">
                    <th class="bg-gray-200 p-2 text-gray-600 font-bold md:border md:border-gray-300 text-left block md:table-cell">Page</th>
                    <th class="bg-gray-200 p-2 text-gray-600 font-bold md:border md:border-gray-300 text-left block md:table-cell">Sub Page</th>
                    <th class="bg-gray-200 p-2 text-gray-600 font-bold md:border md:border-gray-300 text-left block md:table-cell">Field</th>
                    <th class="bg-gray-200 p-2 text-gray-600 font-bold md:border md:border-gray-300 text-left block md:table-cell">Action</th>
                </tr>
            </thead>
            <tbody class="block md:table-row-group">
                <tr class="bg-gray-100 border border-gray-200 md:border-none block md:table-row">
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">Edit Job</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">-</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">Name of the Consultant</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">
                        <input type="checkbox" id="toggle1" class="toggle-checkbox">
                        <label for="toggle1" class="toggle-label"></label>
                    </td>
                </tr>
                <tr class="bg-white border border-gray-200 md:border-none block md:table-row">
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">Edit Job</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">-</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">Drawn By</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">
                        <input type="checkbox" id="toggle2" class="toggle-checkbox">
                        <label for="toggle2" class="toggle-label"></label>
                    </td>
                </tr>
                <tr class="bg-gray-100 border border-gray-200 md:border-none block md:table-row">
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">Edit Job</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">-</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">Installed By</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">
                        <input type="checkbox" id="toggle3" class="toggle-checkbox">
                        <label for="toggle3" class="toggle-label"></label>
                    </td>
                </tr>
                <tr class="bg-white border border-gray-200 md:border-none block md:table-row">
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">Maintenance</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">Details</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">Reported By</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">
                        <input type="checkbox" id="toggle4" class="toggle-checkbox">
                        <label for="toggle4" class="toggle-label"></label>
                    </td>
                </tr>
                <tr class="bg-gray-100 border border-gray-200 md:border-none block md:table-row">
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">Maintenance</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">Reports</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">Contacted By</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">
                        <input type="checkbox" id="toggle5" class="toggle-checkbox">
                        <label for="toggle5" class="toggle-label"></label>
                    </td>
                </tr>
                <tr class="bg-white border border-gray-200 md:border-none block md:table-row">
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">Maintenance</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">Reports</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">Employee</td>
                    <td class="p-2 md:border md:border-gray-300 text-left block md:table-cell">
                        <input type="checkbox" id="toggle6" class="toggle-checkbox">
                        <label for="toggle6" class="toggle-label"></label>
                    </td>
                </tr>
            </tbody>
        </table>
            </div>
        </div></div><div class="p-6 mb-6 text-right">
            <a href="{{ route('role.index') }}"><button class="responsive-button w-[10%] bg-white text-black px-5 h-8 rounded shadow hover:bg-black hover:text-white"> Cancel</button></a>
            <button class="responsive-button w-[10%] bg-black text-yellow-600 px-5 h-8 rounded shadow hover:bg-yellow-600 hover:text-white"> Save</button>
        </div> 
     </div>
    </div>
 </main>
@endsection

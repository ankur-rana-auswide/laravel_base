@extends('layouts.app')

@section('title')
Role List
@endsection


@section('content')
<style>
    .popup {
        display: none;
    }
    .popup.active {
        display: block;z-index:999;
    }
    .search-container {
        position: relative;
        width: 100%;
        max-width: 100%;
      }
      .search-container input[type="text"] {
        width: 100%;
        padding: 10px 10px 10px 40px; /* Add padding to the left for the icon */
        font-size: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      .search-container .fa-search {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-50%);
        font-size: 15px;
        color: #aaa;
      }
</style>
<main class="h-full overflow-y-auto px-2">
   <div class="container mx-auto py-6">
        <div class="flex flex-col md:flex-row justify-between items-center mb-4 space-y-4 md:space-y-0" style="flex-direction: unset;">
            <h1 class="mt-5 text-2xl font-bold text-gray-700">List Roles</h1>
            <a href="{{ route('role.create') }}"><button class="bg-black text-yellow-600 px-4 h-10 rounded shadow hover:bg-yellow-600 hover:text-white">
                <i class="fa fa-plus mr-2"></i>Add New Role
                </button>
            </a>
        </div>
        <div class="bg-white shadow rounded mb-6">
            <div class="flex flex-col md:flex-row justify-between items-center p-4 border-b">
            <select class="w-full md:w-40 border rounded py-2 px-3 mb-4 md:mb-0 md:mr-4">
                <option>Role</option>
                <option>Admin</option>
                <!-- Add more options as needed -->
            </select>
            <select class="w-full md:w-40 border rounded py-2 px-3 mb-4 md:mb-0 md:mr-4">
                <option>Hide Archive</option>
                <option>Show Archive</option>
                <!-- Add more options as needed -->
            </select>
            <div class="search-container w-full md:w-4/5 mb-4 md:mb-0 md:mr-4">
              <i class="fa fa-search"></i>
              <input type="text" class="border rounded py-2 px-3 w-full" placeholder="Job ID/Address">
            </div>
            <button class="w-full md:w-40 bg-black text-yellow-600 px-4 h-10 rounded shadow hover:bg-yellow-600 hover:text-white">
              <i class="fa fa-search mr-2"></i>Search
            </button>
          </div>
            <div class="flex items-center justify-between p-4 border-b">
                <div></div>
                <button id="openPopupBtn" class="bg-white border border-yellow-500 text-black hover:bg-yellow-600 hover:text-white px-4 py-2 rounded shadow ml-4">
                    <i class="fa fa-filter mr-2"></i>Show Advanced Filter
                </button>
            </div>
        </div>
        <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow rounded">
            <thead>
                <tr>
                    <th class="py-3 px-4 border-b text-left">ID</th>
                    <th class="py-3 px-4 border-b text-left">Role Name</th>
                    <th class="py-3 px-4 border-b text-left" style="width: 50%;">Description</th>
                    <th class="py-3 px-4 border-b text-left">Active</th>
                    <th class="py-3 px-4 border-b text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr class="hover:bg-gray-50">
                    <td class="py-3 px-4 border-b">{{ $role->id }}</td>
                    <td class="py-3 px-4 border-b">{{ $role->role }}</td>
                    <td class="py-3 px-4 border-b"><p>{{ $role->description }}</p></td>
                    <td class="py-3 px-4 border-b">{{ $role->is_active }}</td>
                    <td class="py-3 px-4 border-b">
                        <button class="text-blue-500 mr-2">
                            <i class="fa fa-pencil-alt"></i>
                        </button>
                        <button class="text-red-500">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $roles->links('pagination::tailwind') }}
        </div>
    </div>
    </div>
    <div id="popup" class="mt-20 popup fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-6 max-w-7xl mx-auto rounded-lg shadow-lg overflow-auto max-h-screen">
            <div class="flex justify-between items-center bg-yellow-600 text-white p-4 rounded-t-lg">
                <h2 class="text-xl font-semibold">Advanced Filters</h2>
                <button id="closePopupBtn" class="text-2xl font-bold">&times;</button>
            </div>
            <form class="space-y-6 p-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Account Name</label>
                        <input type="text" placeholder="Distinctive Homes" class="border border-gray-300 mt-1 p-2 block w-full shadow-sm rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Building Supervisor</label>
                        <input type="text" placeholder="Peter Hann" class="mt-1 p-2 block w-full shadow-sm border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Show Active/Inactive</label>
                        <select class="mt-1 p-2 block w-full shadow-sm border bg-white border-gray-300 rounded-md">
                            <option>Active</option>
                            <option>In-Active</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Address</label>
                        <input type="text" placeholder="RICHMOND" class="mt-1 p-2 block w-full shadow-sm border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Owner Name</label>
                        <input type="text" placeholder="Ioannidis & Labrindis" class="mt-1 p-2 block w-full shadow-sm border border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Phone Number - Mobile</label>
                        <input type="text" placeholder="45678910" class="mt-1 p-2 block w-full shadow-sm border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Phone Number - Work</label>
                        <input type="text" placeholder="45678910" class="mt-1 p-2 block w-full shadow-sm border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Phone Number - Home</label>
                        <input type="text" placeholder="45678910" class="mt-1 p-2 block w-full shadow-sm border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Job Number</label>
                        <input type="text" placeholder="10007" class="mt-1 p-2 block w-full shadow-sm border border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Order Number</label>
                        <input type="text" placeholder="10007" class="mt-1 p-2 block w-full shadow-sm border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Name of Consultant</label>
                        <input type="text" placeholder="Julia" class="mt-1 p-2 block w-full shadow-sm border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Selection Date</label>
                        <input type="text" placeholder="1/1/2024" class="mt-1 p-2 block w-full shadow-sm border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Call Up</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" placeholder="09/04/2024" class="p-2 block w-full pr-10 border border-gray-300 rounded-md">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">
                                    <i class="fa fa-calendar-alt"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Measured</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" placeholder="09/04/2024" class="p-2 block w-full pr-10 border border-gray-300 rounded-md">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">
                                    <i class="fa fa-calendar-alt"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">CAD CAM Office</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" placeholder="09/04/2024" class="p-2 block w-full pr-10 border border-gray-300 rounded-md">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">
                                    <i class="fa fa-calendar-alt"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Drawn</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" placeholder="09/04/2024" class="p-2 block w-full pr-10 border border-gray-300 rounded-md">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">
                                    <i class="fa fa-calendar-alt"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Batch</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" placeholder="09/04/2024" class="p-2 block w-full pr-10 border border-gray-300 rounded-md">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">
                                    <i class="fa fa-calendar-alt"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Delivery</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" placeholder="09/04/2024" class="p-2 block w-full pr-10 border border-gray-300 rounded-md">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">
                            <i class="fa fa-calendar-alt"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Invoiced</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <input type="text" placeholder="09/04/2024" class="p-2 block w-full pr-10 border border-gray-300 rounded-md">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm">
                            <i class="fa fa-calendar-alt"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-black text-white py-2 px-4 rounded shadow hover:bg-gray-700">Apply Filter</button>
        </div>
     </form>
        </div>
    </div>
  <script>
        document.getElementById('openPopupBtn').addEventListener('click', function() {
            document.getElementById('popup').classList.add('active');
        });

        document.getElementById('closePopupBtn').addEventListener('click', function() {
            document.getElementById('popup').classList.remove('active');
        });

        // Close the popup if clicked outside the content area
        document.getElementById('popup').addEventListener('click', function(event) {
            if (event.target === this) {
                document.getElementById('popup').classList.remove('active');
            }
        });
    </script> 
</main>
@endsection

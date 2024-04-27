<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div> -->
            </div>
        </div>
    </div>

    <section class = "DashBoard py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 -6 bg-white border-b border-gray-200 divission">
        <div class ="side-panel ">
            <div><a href="#create-post">Create Post</a></div>
            <div><a href="#notice">Notice</a></div>
            <div><a href="#user-list">User List</a></div>
            <div><a href="#user-detail">User Details</a></div>
            <div><a href="#">Log Out</a></div>
        </div>
        <div class = "work-place">
            
            <div class ="notice" id = "notice">
                
            </div>
        </div>
    </section>
</x-app-layout>

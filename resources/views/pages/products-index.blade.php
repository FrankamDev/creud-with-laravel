@extends('layouts.website.layout-website')
@section('content')
<div class="container mx-auto">
    <div class="flex justify-between items-center bg-gray-200 p-5 rounded-md mb-6">
        <div>
            <h1 class="text-xl font-semibold">Products (total)</h1>
        </div>
        <div>
            <a href="#" class="px-5 py-2 bg-blue-500 rounded-md text-white text-lg shadow-md">Add New</a>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">#</th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Name</th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Category</th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Price</th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Product rows will go here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection
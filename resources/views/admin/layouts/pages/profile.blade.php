@extends('admin.main')

@section('contentAdmin')
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Profile</h2>
    

    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">{{Auth::user()->username}} Profile</h4>
     
    <div class="px-4 py-3 mb-8 bg-white shadow-md rounded-md dark:bg-gray-800">
        <form action="" class="w-full max-w-lg">
             <div class="flex flex-wrap mx-3 mb-6">
                 <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                     <label for="" class="block uppercase tracking-wide text-gray-700 dark:text-gray-200 text-xs font-bold mb-2">Username</label>
                     <input type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" value="{{Auth::user()->username}}" disabled>
                 </div>
                 <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                     <label for="" class="block uppercase tracking-wide text-gray-700 dark:text-gray-200 text-xs font-bold mb-2">Email</label>
                     <input type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" value="{{Auth::user()->email}}" disabled>
                 </div>
                 <div class="w-full px-3 mb-6 md:mb-0">
                     <label for="" class="block uppercase tracking-wide text-gray-700 dark:text-gray-200 text-xs font-bold mb-2">Password</label>
                     <input type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                 </div>
                 <div class="w-full px-3 mb-6 md:mb-0">
                     <label for="" class="block uppercase tracking-wide text-gray-700 dark:text-gray-200 text-xs font-bold mb-2">Telepone</label>
                     <input type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" value="{{Auth::user()->no_hp}}" disabled>
                 </div>
             </div>
        </form>
    </div>
@endsection
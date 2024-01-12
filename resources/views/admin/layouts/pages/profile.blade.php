@extends('admin.main')

@section('contentAdmin')
    <div class="">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200 ">{{Auth::user()->username}} Profile
            <hr class="h-px rounded bg-gray-200 border-0 dark:bg-gray-700">
        </h2>
    </div>
    
    <div class="mx-4 mb-8 bg-white shadow-md rounded-lg text-gray-900 dark:bg-gray-800 relative">
        <div class="flex justify-center items-center">
            <img src="{{'./assets/images/Adit.jpg'}}" alt="" class="mx-auto absolute rounded-full overflow-hidden max-w-full hidden t-desktop md:block " height="150px" width="150px" style="">
            <img src="{{'./assets/images/Adit.jpg'}}" alt="" class="mx-auto absolute rounded-full overflow-hidden max-w-full block t-mobile md:hidden" height="90px" width="90px" style="">
        </div>
        <div class="rounded-t-lg overflow-hidden">
            <img src="{{'./assets/images/car.png'}}" height="150px" alt="" class="w-full mb-10">
        </div>
        <form action="" class="w-full max-w-lg mx-auto" style="margin-top:10%">
             <div class="flex flex-wrap mx-0 mb-6 w-full">
                 <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                     <label for="" class="block uppercase tracking-wide text-gray-700 dark:text-gray-200 text-xs font-bold mb-2">Username</label>
                     <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{Auth::user()->username}}" disabled>
                 </div>
                 <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                     <label for="" class="block uppercase tracking-wide text-gray-700 dark:text-gray-200 text-xs font-bold mb-2">Email</label>
                     <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{Auth::user()->email}}" disabled>
                 </div>
                 <div class="w-full px-3 mb-6 mt-2">
                     <label for="" class="block uppercase tracking-wide text-gray-700 dark:text-gray-200 text-xs font-bold mb-2">Telepone</label>
                     <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{Auth::user()->no_hp}}" disabled>
                 </div>
             </div>
        </form>
    </div>
@endsection
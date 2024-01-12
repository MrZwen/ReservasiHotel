@extends('admin.main')

@section('contentAdmin')
    <div class="">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200 ">Kamar Hotel
            <hr class="h-px rounded bg-gray-200 border-0 dark:bg-gray-700">
        </h2>
    </div>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 text-center">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">No Kamar</th>
                        <th class="px-4 py-3">Tipe Kamar</th>
                        <th class="px-4 py-3">Harga</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800 text-center">
                    @foreach ($data as $item)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</td>
                            <td class="px-4 py-3">{{ $item->tipe_kamar }}</td>
                            <td class="px-4 py-3">{{ $item->no_kamar }}</td>
                            <td class="px-4 py-3">Rp.{{ number_format($item->harga, 0, ',', '.') }}</td>
                            <td class="px-4 py-3">
                                <div class="flex items-center justify-center space-x-4 text-sm">
                                    <a href="{{ url('edit/' . $item->id) }}" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Edit"> <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="/hapus" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" 
                                    aria-label="Delete">
                                    <i class="fa-solid fa-trash-can"></i>   
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            <span class="flex items-center col-span-3 mx-5">
                Showing {{ $data->firstItem() }}-{{ $data->lastItem() }} of {{ $data->total() }}
            </span>
            <span class="col-span-2"></span>
            <!-- Pagination -->
            <span class="flex -mx-20 col-span-4 mt-2 sm:mt-auto sm:justify-end">
                {{ $data->onEachSide(1)->links() }}
            </span>
        </div>
    </div>
    
    
@endsection

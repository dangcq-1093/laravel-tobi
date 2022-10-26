@extends('layouts.admin')

@section('title')
    File
@endsection

@section('content')

    <div class="px-4 md:px-10 mx-auto w-full -m-24 pb-20">
                    
        <div class="rounded shadow-lg relative bg-white mb-4 mx-4">
            <h1 class="py-3 border-b border-gray-400 px-4 text-xl">File Management</h1>
            <div class="py-3 px-4">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="w-10 px-4 py-2 text-emerald-600">ID</th>
                            <th class="px-4 py-2 text-emerald-600">Title</th>
                            <th class="w-1/4 px-4 py-2 text-emerald-600">File</th>
                            <th class="w-24 px-4 py-2 text-emerald-600">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($files as $file)
                        <tr>
                            <td class="text-center border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">{{ $loop->index + 1 }}</td>
                            <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">{{ $file->description->content }}</td>
                            <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium"><a class="overflow-ellipsis whitespace-nowrap overflow-hidden text-blue-600" href="{{ route('file.download', $file->id) }}">{{ $file->filename }}</a></td>
                            <td class=" text-center border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">
                                <form method="POST" action="{{ route('admin.file.delete', $file->id) }}">
                                    @csrf
                                    <button id="form-upload-btn" type="submit" value="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            
        </div>

    </div>

@endsection
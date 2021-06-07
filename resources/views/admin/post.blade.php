@extends('layouts.admin')

@section('title')
    Post
@endsection

@section('content')

    <div class="px-4 md:px-10 mx-auto w-full -m-24 pb-20">

        <div class="rounded shadow-lg relative bg-white mb-4 mx-4">
            <div class="flex items-center border-b border-gray-400">
                <h1 class="py-3 px-4 text-xl">Post</h1>
                <a href="{{ route('admin.post.create') }}" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Create Post
                </a>
            </div>
            <div class="py-3 px-4">
                @if($posts->count() > 0)
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="w-10 px-4 py-2 text-emerald-600">ID</th>
                                <th class="px-4 py-2 text-emerald-600">Title</th>
                                <th class="w-32 px-4 py-2 text-emerald-600">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="text-center border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">{{ $loop->index + 1 }}</td>
                                    <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">{{ $post->title }}</td>
                                    <td class="flex text-center border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">
                                        <a href="{{ route('post.show', $post->id) }}" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                            View
                                        </a>
                                        <a href="{{ route('admin.post.edit', $post->id) }}" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                                            Edit
                                        </a>
                                        <form method="POST" action="{{ route('admin.post.delete', $post->id) }}">
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
                @else
                    <div class="text-center">No data</div>      
                @endif
            </div>
            
        </div>

    </div>

@endsection

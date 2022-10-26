@extends('layouts.admin')

@section('title')
    Post
@endsection

@section('content')

    <div class="px-4 md:px-10 mx-auto w-full -m-24 pb-20">
                    
        <div class="rounded shadow-lg relative bg-white mb-4 mx-4">
            <h1 class="py-3 border-b border-gray-400 px-4 text-xl">Update Post</h1>
            <div class="py-3 px-4">
                <form action="{{ route('admin.post.update', $post->id) }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">
                            Title
                        </label>
                        <input id="title" type="text" value="{{ $post->title }}" placeholder="Title" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content</label>
                        <textarea id="content" placeholder="Enter the content" name="content" class="text-lg shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            {{ $post->content }}
                        </textarea>
                    </div>
                    <div class="mb-4">
                        <button class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">Save</button>
                    </div>
                </form>
            </div>
            
        </div>

    </div>

@endsection

@section('ckeditor')
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content');
    </script>
@endsection
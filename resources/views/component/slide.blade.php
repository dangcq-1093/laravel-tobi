@if ($posts->count() > 0)
    <section class="max-w-screen-2xl mx-auto md:px-16 px-6 flex flex-wrap items-center md:py-0">
        <div class="grid grid-cols-2 gap-20">
            <div class="mr-20">
                <h2 class="font-bold text-4xl">Frequently asked questions/News</h2>
            </div>
            <div>
            @foreach ($posts as $post)
                <a href="{{ route('post.show', $post->id) }}" class="block py-4 border-t border-black hover:text-blue-600 text-lg font-medium">{{ $post->title }}</a>
            @endforeach
            </div>
        </div>
    </section>
@endif

<section class="min-w-screen min-h-screen py-10 mt-32">

    <div class="max-w-screen-2xl mx-auto md:px-12 px-2 md:py-0">

        <div class="single-post-info md:my-5 md:w-3/4 w-full mx-auto">
            <h1 class="text-4xl font-bold text-gray-900 md:mx-0 mx-6">{{ $post->title }}</h1>
        </div>

        <div class="single-post-detail flex flex-wrap mt-3 md:my-5 md:w-3/4 w-full mx-auto">
            <div class="w-full">

                <div class="whitespace-normal single-post-content mt-5 text-xl leading-normal text-gray-900">
                    {!! $post->content !!}
                </div>

            </div>
        </div>

    </div>

</section>
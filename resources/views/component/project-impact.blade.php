<section id="impact-anchor" class="w-full pt-32 mb-32">
    <div class="max-w-screen-2xl mx-auto md:px-12 px-2 flex md:py-0">
        <div class="md:w-6/12 flex-grow mx-5 mb-12">
            <div class="mb-8">
                <h2 class="text-4xl font-bold">PROJECT IMPACT</h2>
            </div>
            <div>
                <p>{{ $impact->description->content }}</p>
            </div>
        </div>
        <div class="md:w-6/12 md:flex hidden justify-center align-center">
            <div class="w-40">
                <img class="w-full" src="{{ asset('img/impact.svg') }}" alt="">
            </div>
        </div>
    </div>
    <div class="max-w-screen-2xl mx-auto md:px-12 px-6 md:flex md:py-0">
        @foreach ($impact->cards as $card)
            <div class="md:w-1/3 w-full md:mx-5">
                <h3 class="text-xl font-bold mb-2">{{ $card->title }}</h3>
                <div>
                    <p>{{ $card->descriptions->first()->content }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
<section id="result-anchor" class="w-full pt-32">
    <div class="max-w-screen-2xl mx-auto md:px-12 px-2 flex md:py-0">
        <div class="w-full flex-grow mx-5 mb-24">
            <div class="mb-8 text-center">
                <h2 class="text-4xl font-bold">OUTCOME</h2>
            </div>
        </div>
    </div>
    <div class="max-w-screen-2xl mx-auto md:px-12 px-6 lg:flex md:py-0">
        <div class="relative bg-white py-6 px-6 lg:mx-5 mx-auto lg:w-1/3 w-2/3 lg:mb-0 mb-28 my-4 shadow-xl border-purple-300 border -top-6 rounded-md">
            <div class="w-36 bg-white absolute -top-14 xl:left-1/3 lg:inset-x-1/4 sm:inset-x-1/3 inset-x-10 px-4">
                <img class="w-full" src="{{ asset('img/writer.svg') }}">
            </div>
            <div class="mt-8">
                <div>
                    <p class="text-xl font-semibold my-2">{{ $outcome->cards[0]->title }}</p>
                </div>
                <div>
                    @foreach ($outcome->cards[0]->descriptions as $description)
                        <p>{{ $description->content }}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="relative bg-white py-6 px-6 lg:mx-5 mx-auto lg:w-1/3 w-2/3 lg:mb-0 mb-28 my-4 shadow-xl border-purple-300 border -top-6 rounded-md">
            <div class="w-36 bg-white absolute -top-20 xl:left-1/3 lg:inset-x-1/4 sm:inset-x-1/3 inset-x-10 px-4">
                <img class="w-full" src="{{ asset('img/solutions.svg') }}">
            </div>
            <div class="mt-8">
                <div>
                    <p class="text-xl font-semibold my-2">{{ $outcome->cards[1]->title }}</p>
                </div>
                <div>
                    @foreach ($outcome->cards[1]->descriptions as $description)
                        <p>{{ $description->content }}</p>
                    @endforeach
                    @if ($file)
                        <p>- Download data <a class="text-blue-600" href="{{ route('file.download') }}">here</a></p>
                    @endif
                </div>
            </div>
        </div>
        <div class="relative bg-white py-6 px-6 lg:mx-5 mx-auto lg:w-1/3 w-2/3 lg:mb-0 mb-28 my-4 shadow-xl border-purple-300 border -top-6 rounded-md">
            <div class="w-36 bg-white absolute -top-8 xl:left-1/3 lg:inset-x-1/4 sm:inset-x-1/3 inset-x-10 px-4">
                <img class="w-full" src="{{ asset('img/certificate.svg') }}">
            </div>
            <div class="mt-8">
                <div>
                    <p class="text-xl font-semibold my-2">{{ $outcome->cards[2]->title }}</p>
                </div>
                <div>
                    @foreach ($outcome->cards[2]->descriptions as $description)
                        <p>{{ $description->content }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
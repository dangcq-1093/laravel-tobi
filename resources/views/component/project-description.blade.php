<section id="description-anchor" class="w-full pt-32">
    <div class="max-w-screen-2xl mx-auto md:px-12 px-2 md:py-0">
        <div class="w-full mb-8">
            <div class="text-center">
                <h2 class="text-4xl font-bold">PROJECT DESCRIPTION</h2>
            </div>
        </div>
        <div class="px-10 mb-20 grid lg:grid-cols-6 sm:grid-cols-3 grid-cols-2 gap-8">
            <div class="col-span-2">
                <h3 class="text-xl font-bold">{{ $descriptionSection->cards[0]->title ?? 'Specific aims' }}</h3>
                <div class="text-lg">
                    @foreach ($descriptionSection->cards[0]->descriptions as $description)
                        <p><i class="fas fa-angle-right"></i> {{ $description->content }}</p>
                    @endforeach
                </div>
            </div>
            <div class="sm:flex items-center justify-center hidden">
                <div class="w-40">
                    <img class="w-full" src="{{ asset('img/focus1.svg') }}" alt="">
                </div>
            </div>
            <div class="col-span-2">
                <h3 class="text-xl font-bold">{{ $descriptionSection->cards[1]->title ?? 'Experience and credentials of the investigative team' }}</h3>
                <div class="text-lg">
                    @foreach ($descriptionSection->cards[1]->descriptions as $description)
                        <p><i class="fas fa-angle-right"></i> {{ $description->content }}</p>
                    @endforeach
                </div>
            </div>
            <div class="sm:flex items-center justify-center hidden">
                <div class="w-40">
                    <img class="w-full" src="{{ asset('img/team-goal.svg') }}" alt="">
                </div>
            </div>
            <div class="col-span-2">
                <h3 class="text-xl font-bold">{{ $descriptionSection->cards[2]->title ?? 'Diseases' }}</h3>
                <div class="text-lg">
                    @foreach ($descriptionSection->cards[2]->descriptions as $description)
                        <p><i class="fas fa-angle-right"></i> {{ $description->content }}</p>
                    @endforeach
                </div>
            </div>
            <div class="sm:flex items-center justify-center hidden">
                <div class="w-40">
                    <img class="w-full" src="{{ asset('img/heart.svg') }}" alt="">
                </div>
            </div>
            <div class="col-span-2">
                <h3 class="text-xl font-bold">{{ $descriptionSection->cards[3]->title ?? 'Techniques' }}</h3>
                <div class="text-lg">
                    @foreach ($descriptionSection->cards[3]->descriptions as $description)
                        <p><i class="fas fa-angle-right"></i> {{ $description->content }}</p>
                    @endforeach
                </div>
            </div>
            <div class="sm:flex items-center justify-center hidden">
                <div class="w-40">
                    <img class="w-full" src="{{ asset('img/mother-board.svg') }}" alt="">
                </div>
            </div>
            
        </div>
    </div>
</section>

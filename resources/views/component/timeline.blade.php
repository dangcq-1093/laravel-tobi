<section id="timeline-anchor" class="w-full pt-32">
    <div class="max-w-screen-2xl mx-auto md:px-16 px-6 md:py-0">
        <h1 class="text-center font-bold text-4xl mb-8">OUR PROGRESS</h1>

        <div class="relative mt-5 text-left">
            @foreach ($progress->cards as $card)
                <div class="flex items-center relative">
                    <div class="hidden md:block w-20"></div>
                    
                    <div class="border-r-2 border-black absolute h-full left-1 md:left-20 top-2 z-10">
                        <i class="fas fa-circle -top-1 -ml-2 absolute"></i>
                        @if ($loop->last)
                            <i class="fas fa-circle bottom-0 -ml-2 absolute"></i>
                        @endif
                    </div>

                    <div class="ml-10 flex-1">
                        <div class="font-bold">{{ $card->title }}</div>
                        <div class="italic md:mb-4">{{ $card->note }}</div>
                        <div class="mb-10">{{ $card->descriptions->last()->content }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
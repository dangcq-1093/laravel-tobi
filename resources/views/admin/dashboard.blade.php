@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')

    <div class="px-4 md:px-10 mx-auto w-full -m-24 pb-20">
                    
        <div class="rounded shadow-lg relative bg-white mb-4 mx-4">
            <h1 id="banner-url" class="py-3 border-b border-gray-400 px-4 text-xl" data-url="{{ route('admin.content.banner', $banner->id) }}">Banner<span class="text-base"> (Click text to edit)</span></h1>
            <div class="px-3 md:w-full md:mb-0" style="background-image: url('/img/Banner.png');background-position: center center; background-size: cover;">
                <h1 id="title-banner" contenteditable="true" class="tooltip text-8xl font-black animate-fade-in-down mb-5">
                    {{ $banner->title }}
                </h1>
                <h3 id="banner-description-content" contenteditable="true" class=" max-w-2xl w-auto text-break animate-fade-in text-2xl text-gray-800 mb-7">{{ $banner->description->content }}</h3>
                <div>
                    <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                </div>
            </div>
            <div class="flex justify-end p-4">
                <button id="btn-banner" class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">
                    <svg id="loading-banner" class="hidden animate-spin -ml-1 mr-3 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Save
                </button>
            </div>
            
        </div>

        <div class="rounded shadow-lg relative bg-white mb-4 mx-4">
            <h1 id="summary-url" class="py-3 border-b border-gray-400 px-4 text-xl" data-url="{{ route('admin.content.summary', $summary->id) }}">Summary<span class="text-base"> (Click text to edit)</span></h1>
            <div class="px-3 md:w-full md:mb-0 py-6">
                <div class="max-w-screen-2xl mx-auto md:px-12 px-2 md:py-0">
                    <div class="w-full mb-8">
                        <div class="text-center">
                            <h2 class="text-4xl font-bold">PROJECT SUMMARY</h2>
                        </div>
                    </div>
                    <div class="max-w-xl text-center text-lg mx-auto">
                        <p id="summary-description-content" contenteditable="true" id="summary-description">{{ $summary->description->content }}</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-end p-4">
                <button id="btn-summary" class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">
                    <svg id="loading-summary" class="hidden animate-spin -ml-1 mr-3 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Save
                </button>
            </div>
        </div>

        <div class="rounded shadow-lg relative bg-white mb-4 mx-4">
            <h1 id="description-url" class="py-3 border-b border-gray-400 px-4 text-xl" data-url="{{ route('admin.content.description', $descriptionSection->id) }}">Description<span class="text-base"> (Click text to edit)</span></h1>
            <div class="px-3 md:w-full md:mb-0 py-6">
                <div class="max-w-screen-2xl mx-auto md:px-12 px-2 md:py-0">
                    <div class="w-full mb-8">
                        <div class="text-center">
                            <h2 class="text-4xl font-bold">PROJECT DESCRIPTION</h2>
                        </div>
                    </div>
                    <div class="px-10 mb-20 grid lg:grid-cols-6 sm:grid-cols-3 grid-cols-2 gap-8">
                        <div class="col-span-2">
                            <h3 id="description-card-0" contenteditable="true" class="text-xl font-bold">{{ $descriptionSection->cards[0]->title ?? 'Specific aims' }}</h3>
                            <div class="text-lg">
                                @foreach ($descriptionSection->cards[0]->descriptions as $description)
                                    <p class="description-card-content-0" contenteditable="true"><i class="fas fa-angle-right"></i> {{ $description->content }}</p>
                                @endforeach
                            </div>
                        </div>
                        <div class="sm:flex items-center justify-center hidden">
                            <div class="w-40">
                                <img class="w-full" src="{{ asset('img/focus1.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-span-2">
                            <h3 id="description-card-1" contenteditable="true" class="text-xl font-bold">{{ $descriptionSection->cards[1]->title ?? 'Experience and credentials of the investigative team' }}</h3>
                            <div class="text-lg">
                                @foreach ($descriptionSection->cards[1]->descriptions as $description)
                                    <p class="description-card-content-1" contenteditable="true"><i class="fas fa-angle-right"></i> {{ $description->content }}</p>
                                @endforeach
                            </div>
                        </div>
                        <div class="sm:flex items-center justify-center hidden">
                            <div class="w-40">
                                <img class="w-full" src="{{ asset('img/team-goal.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-span-2">
                            <h3 id="description-card-2" contenteditable="true" class="text-xl font-bold">{{ $descriptionSection->cards[2]->title ?? 'Diseases' }}</h3>
                            <div class="text-lg">
                                @foreach ($descriptionSection->cards[2]->descriptions as $description)
                                    <p class="description-card-content-2" contenteditable="true"><i class="fas fa-angle-right"></i> {{ $description->content }}</p>
                                @endforeach
                            </div>
                        </div>
                        <div class="sm:flex items-center justify-center hidden">
                            <div class="w-40">
                                <img class="w-full" src="{{ asset('img/heart.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-span-2">
                            <h3 id="description-card-3" contenteditable="true" class="text-xl font-bold">{{ $descriptionSection->cards[3]->title ?? 'Techniques' }}</h3>
                            <div class="text-lg">
                            @foreach ($descriptionSection->cards[3]->descriptions as $description)
                                <p class="description-card-content-3" contenteditable="true"><i class="fas fa-angle-right"></i> {{ $description->content }}</p>
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
            </div>
            <div class="flex justify-end p-4">
                <button id="btn-description" class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">
                    <svg id="loading-description" class="hidden animate-spin -ml-1 mr-3 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Save
                </button>
            </div>
        </div>

        <div class="rounded shadow-lg relative bg-white mb-4 mx-4">
            <h1 id="progress-url" class="py-3 border-b border-gray-400 px-4 text-xl" data-url="{{ route('admin.content.progress', $progress->id) }}">Progress<span class="text-base"> (Click text to edit)</span></h1>
            <div class="px-3 md:w-full md:mb-0 py-6">
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
                                    <div contenteditable="true" class="progress-card-title font-bold">{{ $card->title }}</div>
                                    <div contenteditable="true" class="progress-card-note italic md:mb-4">{{ $card->note }}</div>
                                    <div contenteditable="true" class="progress-card-content mb-10">{{ $card->descriptions->first()->content }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="flex justify-end p-4">
                <button id="btn-progress" class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">
                    <svg id="loading-progress" class="hidden animate-spin -ml-1 mr-3 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Save
                </button>
            </div>
        </div>

        <div class="rounded shadow-lg relative bg-white mb-4 mx-4">
            <h1 id="outcome-url" class="py-3 border-b border-gray-400 px-4 text-xl" data-url="{{ route('admin.content.outcome', $outcome->id) }}">Outcome<span class="text-base"> (Click text to edit)</span></h1>
            <div class="px-3 md:w-full md:mb-0 py-6">
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
                                <p contenteditable="true" class="outcome-card-title text-xl font-semibold my-2">{{ $outcome->cards[0]->title }}</p>
                            </div>
                            <div>
                                @foreach ($outcome->cards[0]->descriptions as $description)
                                    <p data-id="{{ $description->id }}" contenteditable="true" class="outcome-card-content-0">{{ $description->content }}</p>
                                    <span data-id="{{ $description->id }}" class="btn-modal-upload ml-1 inline-flex items-center bg-green-500 cursor-pointer hover:bg-green-700 text-white py-0.5 px-1 rounded">Upload File</span>
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
                                <p contenteditable="true" class="outcome-card-title text-xl font-semibold my-2">{{ $outcome->cards[1]->title }}</p>
                            </div>
                            <div>
                                @foreach ($outcome->cards[1]->descriptions as $description)
                                    <p data-id="{{ $description->id }}" contenteditable="true" class="outcome-card-content-1">{{ $description->content }}</p>
                                    <span data-id="{{ $description->id }}" class="btn-modal-upload ml-1 inline-flex items-center bg-green-500 cursor-pointer hover:bg-green-700 text-white py-0.5 px-1 rounded">Upload File</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="relative bg-white py-6 px-6 lg:mx-5 mx-auto lg:w-1/3 w-2/3 lg:mb-0 mb-28 my-4 shadow-xl border-purple-300 border -top-6 rounded-md">
                        <div class="w-36 bg-white absolute -top-8 xl:left-1/3 lg:inset-x-1/4 sm:inset-x-1/3 inset-x-10 px-4">
                            <img class="w-full" src="{{ asset('img/certificate.svg') }}">
                        </div>
                        <div class="mt-8">
                            <div>
                                <p contenteditable="true" class="outcome-card-title text-xl font-semibold my-2">{{ $outcome->cards[2]->title }}</p>
                            </div>
                            <div>
                                @foreach ($outcome->cards[2]->descriptions as $description)
                                    <p contenteditable="true" data-id="{{ $description->id }}" class="outcome-card-content-2">{{ $description->content }}</p>
                                    <span data-id="{{ $description->id }}" class="btn-modal-upload ml-1 inline-flex items-center bg-green-500 cursor-pointer hover:bg-green-700 text-white py-0.5 px-1 rounded">Upload File</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end p-4">
                <button id="btn-outcome" class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">
                    <svg id="loading-outcome" class="hidden animate-spin -ml-1 mr-3 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Save
                </button>
            </div>
        </div>

        <div class="rounded shadow-lg relative bg-white mb-4 mx-4">
            <h1 id="impact-url" class="py-3 border-b border-gray-400 px-4 text-xl" data-url="{{ route('admin.content.impact', $impact->id) }}">Impact<span class="text-base"> (Click text to edit)</span></h1>
            <div class="px-3 md:w-full md:mb-0 py-6">
                <div class="max-w-screen-2xl mx-auto md:px-12 px-2 flex md:py-0">
                    <div class="md:w-6/12 flex-grow mx-5 mb-12">
                        <div class="mb-8">
                            <h2 class="text-4xl font-bold">PROJECT IMPACT</h2>
                        </div>
                        <div>
                            <p contenteditable="true" id="impact-description-content">{{ $impact->description->content }}</p>
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
                            <h3 contenteditable="true" class="impact-card-title text-xl font-bold mb-2">{{ $card->title }}</h3>
                            <div>
                                <p contenteditable="true" class="impact-card-content">{{ $card->descriptions->first()->content }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="flex justify-end p-4">
                <button id="btn-impact" class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">
                    <svg id="loading-impact" class="hidden animate-spin -ml-1 mr-3 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Save
                </button>
            </div>
        </div>

    </div>

    <div id="modal" class="hidden fixed z-10 inset-0 overflow-y-auto" role="dialog">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Please chose your file to upload</h3>
                            <div id="model-description"></div>
                            <div class="mt-2">
                                <form id="form-upload" action="{{ route('admin.file.store') }}" method="POST" enctype="multipart/form-data">
                                    <input id="file" type="file" name="file">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button id="form-upload-btn" type="submit" value="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Submit
                    </button>
                    <button id="btn-close" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('ajax')
    <script src="{{ asset('js/ajax.js') }}"></script>
@endsection

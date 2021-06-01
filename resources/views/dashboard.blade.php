<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body class="text-blueGray-700 antialiased">
    <div id="root">
        <!-- Responsive -->
        <nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
            <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
                    <i class="fas fa-bars"></i>
                </button>
                <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="#">Admin</a>
                <ul class="md:hidden items-center flex flex-wrap list-none">
                    <li class="inline-block relative">
                        <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-responsive-dropdown')">
                            <div class="items-center flex">
                                <span class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full">
                                    <img alt="..." class="w-full rounded-full align-middle border-none shadow-lg" src="{{ asset('/img/avatar.svg') }}" />
                                </span>
                            </div>
                        </a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="user-responsive-dropdown">
                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <a href="{{ route('sigout') }}" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Sign out</a>
                        </div>
                    </li>
                </ul>
                <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
                    <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                        <div class="flex flex-wrap">
                            <div class="w-6/12">
                                <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="#">
                                  Admin
                                </a>
                            </div>
                            <div class="w-6/12 flex justify-end">
                                <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Divider -->
                    <hr class="my-4 md:min-w-full" />
                    <!-- Heading -->

                    <!-- Navigation -->
                    <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                        <li class="items-center">
                            <a href="#" class="text-xs uppercase py-3 font-bold block text-purple-500 hover:text-purple-700">
                                <i class="fas fa-tv mr-2 text-sm opacity-75"></i>Dashboard
                            </a>
                        </li>
                    </ul>
                     <!-- End Navigation -->
                </div>
            </div>
        </nav>
        <!-- End Responsive -->
        <div class="relative md:ml-64 bg-gray-100 min-h-screen">
            <!-- Top Header -->
            <nav class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
                <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
                    <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold" href="./index.html">Dashboard</a>
                    <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
                        <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
                            <div class="items-center flex">
                                <span class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full">
                                    <img alt="..." class="w-full rounded-full align-middle border-none shadow-lg" src="{{ asset('/img/avatar.svg') }}" />
                                </span>
                            </div>
                        </a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="user-dropdown">
                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <a href="{{ route('sigout') }}" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Sign out</a>
                        </div>
                    </ul>
                </div>
            </nav>
            <!-- Header -->
            <div class="relative bg-purple-600 md:pt-32 pb-32 pt-12">
                <div class="px-4 md:px-10 mx-auto w-full">
                    <div>
                        <!-- Card stats -->
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div id="btn-modal" class="hover:bg-green-400 transition-colors cursor-pointer relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1 flex items-center">
                                                <h5 class="text-blueGray-400 uppercase font-bold text-lg">Upload File</h5>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                                    <i class="fas fa-cloud-upload-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                            <div class="mt-2">
                                <form id="form-upload" action="{{ route('admin.file.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button form="form-upload" type="submit" value="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Submit
                    </button>
                    <button id="btn-close" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div id="error-message" class="transition-all duration-500 ease-linear opacity-0 max-w-md w-full absolute top-5 left-2/4 transform -translate-x-2/4 py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-300 rounded-md" role="alert">
            <p>{{ session()->get('message') }}</p>
            <span class="absolute inset-y-0 right-0 flex items-center mr-4">
                <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
            </span>
        </div>
    @endif
    @if(session()->has('message'))
        <div id="success-message" class="transition-all duration-500 ease-linear opacity-0 max-w-md w-full absolute top-5 left-2/4 transform -translate-x-2/4 py-3 pl-4 pr-10 leading-normal text-white bg-green-500 rounded-md" role="alert">
            <p>{{ session()->get('message') }}</p>
            <span class="absolute inset-y-0 right-0 flex items-center mr-4">
                <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
            </span>
        </div>
    @endif
    <div id="success-ajax" class="transition-all duration-500 ease-linear opacity-0 max-w-md w-full fixed top-5 left-2/4 transform -translate-x-2/4 py-3 pl-4 pr-10 leading-normal text-white bg-green-500 rounded-md" role="alert">
        <p>Updated Successful!</p>
        <span class="absolute inset-y-0 right-0 flex items-center mr-4">
            <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
        </span>
    </div>
    <div id="error-ajax" class="transition-all duration-500 ease-linear opacity-0 max-w-md w-full fixed top-5 left-2/4 transform -translate-x-2/4 py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-300 rounded-md" role="alert">
        <p>Something went wrong! Please try again later.</p>
        <span class="absolute inset-y-0 right-0 flex items-center mr-4">
            <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
        </span>
    </div>

    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
    <script type="text/javascript">
        /* Sidebar - Side navigation menu on mobile/responsive mode */
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("bg-white");
            document.getElementById(collapseID).classList.toggle("m-2");
            document.getElementById(collapseID).classList.toggle("py-3");
            document.getElementById(collapseID).classList.toggle("px-6");
        }
        /* Function for dropdowns */
        function openDropdown(event, dropdownID) {
            let element = event.target;
            while (element.nodeName !== "A") {
              element = element.parentNode;
            }
            Popper.createPopper(element, document.getElementById(dropdownID), {
              placement: "bottom-start",
            });
            document.getElementById(dropdownID).classList.toggle("hidden");
            document.getElementById(dropdownID).classList.toggle("block");
        }

        let modal = document.getElementById("modal");
        let btnModal = document.getElementById("btn-modal");
        let btnClose = document.getElementById("btn-close");
        btnModal.addEventListener('click', function() {
            modal.classList.toggle("hidden");
        });
        btnClose.addEventListener('click', function() {
            modal.classList.toggle("hidden");
        });

        let alertSuccess = document.getElementById("success-message");
        let alertError = document.getElementById("error-message");
        if (alertSuccess) {
            animate(alertSuccess);
        }
        if(alertError) {
            animate(alertError);
        }
        function animate(element) {
            element.classList.add('opacity-100');
            setTimeout(function() {
                element.classList.remove('opacity-100');
            }, 3000);
        }
    </script>
</body>

</html>
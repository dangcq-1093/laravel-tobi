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
    <title>@yield('title')</title>
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
                            <a href="{{ route('admin.content.dashboard') }}" class="flex items-center text-sm uppercase py-3 font-bold block text-purple-500 hover:text-purple-700">
                                <i class="w-8 fas fa-tv mr-2 text-lg opacity-75"></i>Dashboard
                            </a>
                            <a href="{{ route('admin.file.index') }}" class="flex items-center text-sm uppercase py-3 font-bold block text-purple-500 hover:text-purple-700">
                                <i class="w-8 fas fa-cloud-upload-alt mr-2 text-lg opacity-75"></i>File
                            </a>
                            <a href="{{ route('admin.post.index') }}" class="flex items-center text-sm uppercase py-3 font-bold block text-purple-500 hover:text-purple-700">
                                <i class="w-8 fas fa-indent mr-2 text-lg opacity-75"></i>Post
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
                    <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold" href="#">Dashboard</a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')

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
    @yield('ajax')
    @yield('ckeditor')
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
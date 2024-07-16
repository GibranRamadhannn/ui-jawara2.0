<!DOCTYPE html>
<html lang="en" class="font-poppins">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- TAILWIND --}}
    @vite('resources/css/app.css')

    {{-- FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- LINKS --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>JAWARA 2.0</title>
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="bg-white py-2">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">

            {{-- LOGO JAWARA2.0 --}}
            <div class="flex items-center">
                <span class="text-bg-button text-2xl font-bold subpixel-antialiased">JAWARA <span
                        class="text-yellow1">2.0</span></span>
            </div>
            {{-- LOGO JAWARA2.0 --}}

            {{-- NAVIGATION MENU --}}
            <div class="flex justify-center space-x-8 mt-3 mb-0">

                {{-- Dashboard --}}
                <a href="{{ url('dashboard') }}"
                    class=" text-text3 hover:text-text2 px-3 py-2  text-md font-normal focus:text-bg-button focus:underline-offset-8 focus:underline focus:decoration-bg-button focus:decoration-4">Dashboard</a>

                {{-- Project Activity --}}
                <a href="{{ url('project-activity') }}"
                    class=" text-text3 hover:text-text2 px-3 py-2  text-md font-normal focus:text-bg-button focus:underline-offset-8 focus:underline focus:decoration-bg-button focus:decoration-4">Project
                    Activity</a>

                {{-- Document --}}
                <a href="#"
                    class=" text-text3 hover:text-text2 px-3 py-2  text-md font-normal focus:text-bg-button focus:underline-offset-8 focus:underline focus:decoration-bg-button focus:decoration-4">Document</a>
            </div>
            {{-- NAVIGATION MENU --}}

            {{-- RIGHT SECTION --}}
            <div class="flex items-center space-x-4">

                {{-- Notification --}}
                <div x-data="{ open: false }">
                    <a href="#" @click.prevent="open = true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="size-6 hover:stroke-text2  ">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>
                    </a>

                    {{-- MODAL --}}
                    <div x-show="open"
                        class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-end z-50">
                        <div class="bg-bg-forms p-2 rounded-lg shadow-xl mb-12 mr-10">
                            <div @click.away="open = false" class="w-auto h-96">

                                {{-- NOTIFICATION ITEMS --}}
                                <div>
                                    {{-- Success --}}
                                    <div id="toast-success"
                                        class="flex items-center w-full max-w-xs p-2 mb-2 text-gray-500" role="alert">
                                        <div
                                            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 rounded-lg">
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            <span class="sr-only">Check icon</span>
                                        </div>
                                        <div class="ml-3 text-sm font-normal text-text1">1 Document Was Approved</div>
                                        <button type="button"
                                            class="ml-auto -mx-1.5 -my-1.5 text-text1 hover:text-white rounded-lg p-1.5 hover:bg-bg-button2 inline-flex items-center justify-center h-6 w-6"
                                            data-dismiss-target="#toast-success" aria-label="Close">
                                            <span class="sr-only">Close</span>
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                        </button>
                                    </div>

                                    {{-- Success --}}
                                    <div id="toast-success"
                                        class="flex items-center w-full max-w-xs p-2 mb-2 text-gray-500" role="alert">
                                        <div
                                            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 rounded-lg">
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            <span class="sr-only">Check icon</span>
                                        </div>
                                        <div class="ml-3 text-sm font-normal text-text1">10 PA Was Added by PTL FIRDA
                                        </div>
                                        <button type="button"
                                            class="ml-auto -mx-1.5 -my-1.5 text-text1 hover:text-white rounded-lg p-1.5 hover:bg-bg-button2 inline-flex items-center justify-center h-6 w-6"
                                            data-dismiss-target="#toast-success" aria-label="Close">
                                            <span class="sr-only">Close</span>
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                        </button>
                                    </div>

                                    {{-- Danger --}}
                                    <div id="toast-danger"
                                        class="flex items-center w-full max-w-xs p-2 mb-2 text-gray-500" role="alert">
                                        <div
                                            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 rounded-lg">
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                                            </svg>
                                            <span class="sr-only">Error icon</span>
                                        </div>
                                        <div class="ml-3 text-sm font-normal text-text1">2 Documents Was Rejected</div>
                                        <button type="button"
                                            class="ml-auto -mx-1.5 -my-1.5 text-text1 hover:text-white rounded-lg p-1.5 hover:bg-bg-button2 inline-flex items-center justify-center h-6 w-6"
                                            data-dismiss-target="#toast-danger" aria-label="Close">
                                            <span class="sr-only">Close</span>
                                            <svg class="w-3 h-3" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                        </button>
                                    </div>

                                    {{-- Danger --}}
                                    <div id="toast-danger"
                                        class="flex items-center w-full max-w-xs p-2 mb-2 text-gray-500"
                                        role="alert">
                                        <div
                                            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 rounded-lg">
                                            <svg class="w-5 h-5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                                            </svg>
                                            <span class="sr-only">Error icon</span>
                                        </div>
                                        <div class="ml-3 text-sm font-normal text-text1">20 Documents Was Rejected by
                                            PTL</div>
                                        <button type="button"
                                            class="ml-auto -mx-1.5 -my-1.5 text-text1 hover:text-white rounded-lg p-1.5 hover:bg-bg-button2 inline-flex items-center justify-center h-6 w-6"
                                            data-dismiss-target="#toast-danger" aria-label="Close">
                                            <span class="sr-only">Close</span>
                                            <svg class="w-3 h-3" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                        </button>
                                    </div>

                                    {{-- Warning --}}
                                    <div id="toast-warning"
                                        class="flex items-center w-full max-w-xs p-2 mb-2 text-text1" role="alert">
                                        <div
                                            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 rounded-lg">
                                            <svg class="w-5 h-5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                                            </svg>
                                            <span class="sr-only">Warning icon</span>
                                        </div>
                                        <div class="ml-3 text-sm font-normal">3 Documents Need Approval PTL</div>
                                        <button type="button"
                                            class="ml-auto -mx-1.5 -my-1.5 text-text1 hover:text-white rounded-lg p-1.5 hover:bg-bg-button2 inline-flex items-center justify-center h-6 w-6"
                                            data-dismiss-target="#toast-warning" aria-label="Close">
                                            <span class="sr-only">Close</span>
                                            <svg class="w-3 h-3" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                        </button>
                                    </div>

                                    {{-- Warning --}}
                                    <div id="toast-warning"
                                        class="flex items-center w-full max-w-xs p-2 mb-2 text-text1" role="alert">
                                        <div
                                            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 rounded-lg">
                                            <svg class="w-5 h-5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                                            </svg>
                                            <span class="sr-only">Warning icon</span>
                                        </div>
                                        <div class="ml-3 text-sm font-normal">10 Documents Need Approval Asset</div>
                                        <button type="button"
                                            class="ml-auto -mx-1.5 -my-1.5 text-text1 hover:text-white rounded-lg p-1.5 hover:bg-bg-button2 inline-flex items-center justify-center h-6 w-6"
                                            data-dismiss-target="#toast-warning" aria-label="Close">
                                            <span class="sr-only">Close</span>
                                            <svg class="w-3 h-3" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                        </button>
                                    </div>

                                </div>
                                {{-- NOTIFICATION ITEMS --}}

                            </div>
                        </div>
                    </div>
                    {{-- MODAL --}}

                </div>

                {{-- Profile --}}
                <div x-data="{ open: false }">
                    <div class="flex items-center space-x-2 text-gray-300">
                        <a href="#" @click.prevent="open = true">
                            <div class="ml-2 mr-2 w-11 h-10 rounded-full overflow-hidden">
                                <img src="{{ asset('img/logo-profile.jfif') }}" alt="Profile Picture"
                                    class="w-full h-full object-cover">
                            </div>
                        </a>

                        {{-- Nama perusahaan dan status --}}
                        <div>
                            <a href="#">
                                <p class=" text-text1 text-sm font-normal hover:text-text2">PT Indohadetama</p>
                            </a>
                            <p class="text-sm font-normal">Mitra</p>
                        </div>
                    </div>

                    {{-- MODAL --}}
                    <div x-show="open"
                        class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50">
                        <div class="bg-bg-forms p-3 rounded-lg shadow-xl">
                            <div class="w-80 h-80">
                                <img src="{{ asset('img/logo-profile.jfif') }}" alt="Profile Picture"
                                    class="w-full h-full object-cover rounded-full">
                            </div>
                            <button @click="open = false"
                                class="mt-5 bg-bg-button2 text-white px-4 py-2 rounded-lg">Close</button>
                        </div>
                    </div>
                    {{-- MODAL --}}

                </div>
                {{-- Profile --}}

            </div>
            {{-- RIGHT SECTION --}}

        </div>
    </nav>
    {{-- NAVBAR --}}

    {{-- HERO --}}
    <div class="relative grid h-dvh w-dvh bg-bg-hero rounded-t-3xl z-10">

        {{-- Header --}}
        <div class="absolute rounded-t-3xl top-0 left-0 right-0 h-24 flex justify-between items-center">

            {{-- PROFILE --}}
            <div class="flex items-start space-x-2 text-gray-300 mx-10">
                {{-- Nama perusahaan --}}
                <div class="mt-5 ml-3">
                    <p class=" text-text2 text-2xl font-semibold">PT Indohadetama</p>
                </div>
                {{-- Nama perusahaan --}}
            </div>
            {{-- PROFILE --}}
            <div class="relative items-center justify-center">
                <input placeholder="Search..."
                    class="input shadow-lg focus:border-2 mt-2 border-gray-300 px-2 py-2 rounded-xl w-52 transition-all focus:w-96 outline-none"
                    name="search" type="search" />
            </div>

            {{-- BREAD CRUMBS --}}
            <div class="mr-12 mt-5">
                <ul class="flex gap-4 items-end font-normal text-xs">
                    <li>
                        <a href="#"
                            class="text-text2 hover:text-text1 focus:underline-offset-4 focus:decoration-text1 focus:underline focus:text-text1">
                            Dashboard
                        </a>
                    </li>
                    <li class="h-4 border-r border-text2 -skew-x-12"></li>
                    <li>
                        <a href="#"
                            class="text-text2 hover:text-text1 focus:underline-offset-4 focus:decoration-text1 focus:underline focus:text-text1">
                            Project Activity
                        </a>
                    </li>
                    <li class="h-4 border-r border-text2 -skew-x-12"></li>
                    <li>
                        <a href="#"
                            class="text-text2 hover:text-text1 focus:underline-offset-4 focus:decoration-text1 focus:underline focus:text-text1">
                            Documents
                        </a>
                    </li>
                </ul>
            </div>
            {{-- BREAD CRUMBS --}}

        </div>
        {{-- Header --}}

        <div class="flex flex-col justify-start mt-24">
            <x-tabel-project-activity></x-tabel-project-activity>
        </div>

    </div>
    {{-- HERO --}}

</body>

{{-- SCRIPTS JS --}}

</html>

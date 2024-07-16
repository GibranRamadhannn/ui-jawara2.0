<div class="container mx-auto mt-20 p-8">
    <div class="grid grid-cols-6 gap-2">

        {{-- GRAPH --}}
        <div class="bg-white p-4 rounded-lg flex flex-col items-center justify-between col-span-1 row-span-3">
            <a class="text-lg text-black font-semibold">Your Progress</a>

            {{-- Detail --}}
            <div>
                {{-- PA Done --}}
                <a href="#">
                    <h2
                        class="text-sm font-light text-gray-400 flex items-center justify-normal gap-1 hover:text-green-600">
                        <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="green" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg></span>PA Done
                    </h2>
                </a>

                {{-- PA Pending --}}
                <a href="#">
                    <h2
                        class="text-sm font-light text-gray-400 flex items-center justify-normal gap-1 hover:text-red-600">
                        <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="red" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </span>PA Pending
                    </h2>
                </a>
            </div>
            {{-- Detail --}}

            {{-- D CHart --}}
            <div class="w-28 h-28 flex">
                <canvas id="donut-chart"></canvas>
            </div>
            {{-- D CHart --}}
        </div>
        {{-- GRAPH --}}

        {{-- First Row --}}
        <div class="col-span-5 grid grid-cols-6 gap-2">

            {{-- PS PENDING --}}
            <div class="bg-white p-4 rounded-lg flex items-center justify-between">
                <div
                    class="bg-bg-button w-11 h-11 flex items-center justify-center rounded-full text-white font-bold text-lg p-4">
                    10</div>
                <h2 class="text-md text-black font-medium mx-4 my-2">PS Pending</h2>
            </div>
            {{-- PS PENDING --}}

            {{-- PA PENDING --}}
            <div class="bg-white p-4 rounded-lg flex items-center justify-between">
                <div
                    class="bg-bg-button w-11 h-11 flex items-center justify-center rounded-full text-white font-bold text-lg p-4">
                    9</div>
                <h2 class="text-md text-black font-medium mx-4 my-2">PA Pending</h2>
            </div>
            {{-- PA PENDING --}}

            {{-- MATERIAL PENDING --}}
            <div class="bg-white p-4 rounded-lg flex items-center justify-between">
                <div
                    class="bg-bg-button w-11 h-11 flex items-center justify-center rounded-full text-white font-bold text-lg p-4">
                    15</div>
                <h2 class="text-md text-black font-medium mx-4 my-2">Material Pending</h2>
            </div>
            {{-- MATERIAL PENDING --}}

            {{-- WP PENDING --}}
            <div class="bg-white p-4 rounded-lg flex items-center justify-between">
                <div
                    class="bg-bg-button w-11 h-11 flex items-center justify-center rounded-full text-white font-bold text-lg p-4">
                    6</div>
                <h2 class="text-md text-black font-medium mx-4 my-2">WP Pending</h2>
            </div>
            {{-- WP PENDING --}}

            {{-- TESTCOMM PENDING --}}
            <div class="bg-white p-4 rounded-lg flex items-center justify-between">
                <div
                    class="bg-bg-button w-11 h-11 flex items-center justify-center rounded-full text-white font-bold text-lg p-4">
                    3</div>
                <h2 class="text-md text-black font-medium mx-4 my-2">Testcomm Pending</h2>
            </div>
            {{-- TESTCOMM PENDING --}}

            {{-- CLOSE PA PENDING --}}
            <div class="bg-white p-4 rounded-lg flex items-center justify-between">
                <div
                    class="bg-bg-button w-11 h-11 flex items-center justify-center rounded-full text-white font-bold text-lg p-4">
                    25</div>
                <h2 class="text-md text-black font-medium mx-4 my-2">Close PA Pending</h2>
            </div>
            {{-- CLOSE PA PENDING --}}

        </div>
        {{-- First Row --}}

        {{-- Second Row --}}
        <div class="col-span-5 grid grid-cols-6 gap-2">

            {{-- OSP & ISP PENDING --}}
            <div class="bg-white p-4 rounded-lg flex items-center justify-between">
                <div
                    class="bg-bg-button w-11 h-11 flex items-center justify-center rounded-full text-white font-bold text-lg p-4">
                    15</div>
                <h2 class="text-md text-black font-medium mx-4 my-2">OSP & ISP Pending</h2>
            </div>
            {{-- OSP & ISP PENDING --}}

            {{-- Approval Asset --}}
            <div class="bg-white p-4 rounded-lg flex items-center justify-between">
                <div
                    class="bg-bg-button w-11 h-11 flex items-center justify-center rounded-full text-white font-bold text-lg p-4">
                    2</div>
                <h2 class="text-md text-black font-medium mx-4 my-2">Approval Asset</h2>
            </div>
            {{-- Approval Asset --}}

            {{-- Approval PTL --}}
            <div class="bg-white p-4 rounded-lg flex items-center justify-between">
                <div
                    class="bg-bg-button w-11 h-11 flex items-center justify-center rounded-full text-white font-bold text-lg p-4">
                    15</div>
                <h2 class="text-md text-black font-medium mx-4 my-2">Approval PTL</h2>
            </div>
            {{-- Approval PTL --}}

            {{-- QC PENDING --}}
            <div class="bg-white p-4 rounded-lg flex items-center justify-between">
                <div
                    class="bg-bg-button w-11 h-11 flex items-center justify-center rounded-full text-white font-bold text-lg p-4">
                    10</div>
                <h2 class="text-md text-black font-medium mx-4 my-2">QC Pending</h2>
            </div>
            {{-- QC PENDING --}}

            {{-- Approval SPV --}}
            <div class="bg-white p-4 rounded-lg flex items-center justify-between">
                <div
                    class="bg-bg-button w-11 h-11 flex items-center justify-center rounded-full text-white font-bold text-lg p-4">
                    20</div>
                <h2 class="text-md text-black font-medium mx-4 my-2">Approval SPV</h2>
            </div>
            {{-- Approval SPV --}}

            {{-- BAPS --}}
            <div class="bg-white p-4 rounded-lg flex items-center justify-between">
                <div
                    class="bg-bg-button w-11 h-11 flex items-center justify-center rounded-full text-white font-bold text-lg p-4">
                    10</div>
                <h2 class="text-md text-black font-medium mx-4 my-4">BAPS</h2>
            </div>
            {{-- BAPS --}}

        </div>
        {{-- Second Row --}}
    </div>
</div>

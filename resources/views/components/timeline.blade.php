<ol class="items-center sm:flex p-3">
    <li class="relative mb-6 sm:mb-0">
        <div class="flex items-center">
            <a href="{{ url('/welcome') }}"
                class="z-10 flex items-center justify-center w-16 h-16 rounded-full ring-0 ring-white dark:bg-green-900 sm:ring-8 dark:ring-gray-900 shrink-0 {{request()->is('welcome')? 'bg-green-300' : 'bg-green-100'}}">
                <p class="text-3xl font-bold">W</p>
            </a>
            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
        </div>
        <div class="mt-3 sm:p-5 mr-3 block bg-white border border-gray-100 rounded-xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Welcome Party</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                November 2, 2023</time>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pembukaan Event PIBITI23</p>
        </div>
    </li>
    <li class="relative mb-6 sm:mb-0">
        <div class="flex items-center">
            <a href="{{ url('/peserta/day/1') }}"
                class="z-10 flex items-center justify-center w-16 h-16 cursor-pointer rounded-full ring-0 ring-white shrink-0 {{ request()->is('peserta/day/1') ? 'bg-yellow-100' : 'bg-blue-100 hover:bg-yellow-100' }}">
                <p class="text-3xl font-bold">1</p>
            </a>
            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
        </div>
        <div class="mt-3 sm:p-5 mr-3 block bg-white border border-gray-100 rounded-xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Day 1</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                November 4, 2023</time>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pengerjaan Hari Pertama</p>
        </div>
    </li>
    <li class="relative mb-6 sm:mb-0">
        <div class="flex items-center">
            <a href="{{ url('/peserta/day/2') }}"
                class="z-10 flex items-center justify-center w-16 h-16 cursor-pointer bg rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0 {{ request()->is('peserta/day/2') ? 'bg-yellow-100' : 'bg-blue-100 hover:bg-yellow-100' }}">
                <p class="text-3xl font-bold">2</p>
            </a>
            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
        </div>
        <div class="mt-3 sm:p-5 mr-3 block bg-white border border-gray-100 rounded-xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Day 2</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                November 11, 2023</time>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pengerjaan Hari Kedua</p>
        </div>
    </li>
    <li class="relative mb-6 sm:mb-0">
        <div class="flex items-center">
            <a href="{{ url('/peserta/day/3') }}"
                class="z-10 flex items-center justify-center w-16 h-16 cursor-pointer bg rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0 {{ request()->is('peserta/day/3') ? 'bg-yellow-100' : 'bg-blue-100 hover:bg-yellow-100' }}">
                <p class="text-3xl font-bold">3</p>
            </a>
            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
        </div>
        <div class="mt-3 sm:p-5 mr-3 block bg-white border border-gray-100 rounded-xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Day 3</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                November 18, 2023</time>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pengerjaan Hari Ketiga</p>
        </div>
    </li>
    <li class="relative mb-6 sm:mb-0">
        <div class="flex items-center">
            <a href="{{ url('/peserta/day/4') }}"
                class="z-10 flex items-center justify-center w-16 h-16 cursor-pointer bg rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0 {{ request()->is('peserta/day/4') ? 'bg-yellow-100' : 'bg-blue-100 hover:bg-yellow-100' }}">
                <p class="text-3xl font-bold">4</p>
            </a>
            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
        </div>
        <div class="mt-3 sm:p-5 mr-3 block bg-white border border-gray-100 rounded-xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Day 4</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                December 2, 2023</time>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pengerjaan Hari Keempat</p>
        </div>
    </li>
    <li class="relative mb-6 sm:mb-0">
        <div class="flex items-center">
            <a href="{{ url('/peserta/final-project') }}"
                class="z-10 flex items-center justify-center w-16 h-16 cursor-pointer bg rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0 {{ request()->is('peserta/final-project') ? 'bg-yellow-100' : 'bg-blue-100 hover:bg-yellow-100' }}">
                <p class="text-3xl font-bold">FP</p>
            </a>
            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
        </div>
        <div class="mt-3 sm:p-5 mr-3 block bg-white border border-gray-100 rounded-xl shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Final Project</h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                December 2, 2023</time>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Penutupan Event PIBITI23</p>
        </div>
    </li>
</ol>



   


@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <ol class="items-center sm:flex p-3">
        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <div
                    class="z-10 flex items-center justify-center w-16 h-16 bg-green-100 rounded-full ring-0 ring-white dark:bg-green-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                    <p class="text-3xl font-bold">W</p>
                </div>
                <div class="hidden sm:flex w-full bg-gray-200 h-0                                                       .5 dark:bg-gray-700"></div>
            </div>
            <div class="mt-3 sm:pr-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Welcome Party</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                    December 2, 2021</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pembukaan party PIBITI23</p>
            </div>
        </li>
        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <div
                    class="z-10 flex items-center justify-center w-16 h-16 bg-yellow-100 rounded-full ring-0 ring-white dark:bg-yellow-300 sm:ring-8 dark:ring-gray-900 shrink-0">
                    <p class="text-3xl font-bold">1</p>
                </div>
                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
            </div>
            <div class="mt-3 sm:pr-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Welcome Party</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                    December 2, 2021</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pembukaan party PIBITI23</p>
            </div>
        </li>final-project
        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <div
                    class="z-10 flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                    <p class="text-3xl font-bold">2</p>
                </div>
                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
            </div>
            <div class="mt-3 sm:pr-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Welcome Party</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                    December 2, 2021</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pembukaan party PIBITI23</p>
            </div>
        </li>
        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <div
                    class="z-10 flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                    <p class="text-3xl font-bold">3</p>
                </div>
                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
            </div>
            <div class="mt-3 sm:pr-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Welcome Party</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                    December 2, 2021</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pembukaan party PIBITI23</p>
            </div>
        </li>
        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <div
                    class="z-10 flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                    <p class="text-3xl font-bold">FP</p>
                </div>
                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
            </div>
            <div class="mt-3 sm:pr-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Welcome Party</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on
                    December 2, 2021</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pembukaan party PIBITI23</p>
            </div>
        </li>
    </ol>

    <div class="flex flex-col md:flex-row gap-2 md:gap-5 w-full">
        <div class="bg-white p-5 shadow-sm mt-1 md:mt-10 rounded-lg w-full">
            <label for="first_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Kode Absensi</label>
            <input type="text" id="first_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="80324" required>
            <button type="button"
                class="mt-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Absen</button>
        </div>
        <div class="bg-white p-5 shadow-sm mt-1 md:mt-10 rounded-lg w-full">
            <label for="first_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Link Materi</label>

            <button type="button"
                class="mt-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Materi</button>

        </div>
    </div>

    <div class="bg-white p-5 shadow-sm mt-5 md:mt-10 rounded-lg w-full">
        <h1 class="text-semibold text-2xl mt-3">Tugas</h1>
        <div class="mt-3">
            {{-- <label for="first_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Pengumpulan
                Tugas</label> --}}
            <input type="text" id="first_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="www.google.com" required>
        </div>

        <button type="button"
            class="mt-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Kirim</button>
    </div>
@endsection

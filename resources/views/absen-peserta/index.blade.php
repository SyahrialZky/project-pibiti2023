@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- <ul>
        <?php foreach($menu as $value): ?>
        <li>
            <a href=<?= $value['url'] ?>> <?= $value['title'] ?></a>
        </li>
        <?php endforeach ?>
    </ul>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
    @endif


    @if (empty($absen_today['id']))
        <form action="/peserta/absen/{{ $day }}" class="mt-6" action="#" method="POST">
            @csrf
            <div class="bg-white p-5 shadow-sm mt-1 md:mt-10 rounded-lg w-full">
                <label for="token" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Token</label>
                <input type="text" name="token" id=""
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="80324" required>
                <button type="submit"
                    class="mt-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Submit
                    absen</button>
            </div>
        </form>
    @else
        <a>sudah absen</a>
    @endif
    <form action="/peserta/tugas/{{ $day }}" class="mt-6" action="#" method="POST">
        @csrf
        <div class="bg-white p-5 shadow-sm mt-5 md:mt-10 rounded-lg w-full">
            <h1 class="text-semibold text-2xl mt-3">Tugas</h1>
            <div class="mt-3">
                <label for="url1" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Url 1</label>
                <input type="text" id="url1" name="url1"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="www.google.com" value="{{ $tugasHariIni->url1 ?? '' }}">
            </div>
            <div class="mt-3">
                <label for="url2" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Url 2</label>
                <input type="text" id="url2" name="url2"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="www.google.com" value="{{ $tugasHariIni->url2 ?? '' }}">
            </div>
            <div class="mt-3">
                <label for="url3" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Url 3</label>
                <input type="text" id="url3" name="url3"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="www.google.com" value="{{ $tugasHariIni->url3 ?? '' }}">
            </div>

            <button type="submit"
                class="mt-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan
                tugas</button>
        </div>
    </form> --}}



    {{-- content --}}
    {{-- Divider --}}

    @if (session('success'))
        <div id="alert-3"
            class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                Absen berhasil.
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif
    @if (session('warning'))
        <div id="alert-2"
            class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                Absen gagal
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif
    <div class="flex flex-col md:flex-row gap-2 md:gap-5 w-full">
        <form action="/peserta/absen/{{ $day }}" action="#" method="POST"
            class="bg-white p-5 shadow-sm mt-1 md:mt-2 rounded-lg w-full">
            @csrf
            <label for="first_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Kode
                Absensi</label>
            <input type="text" id="first_name" name="token"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Masukkan kode" required>
            @if (empty($absen_today['id']))
                <button type="submit"
                    class="mt-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Absen</button>
            @endif
        </form>
        <div class="bg-white p-5 shadow-sm mt-1 md:mt-2 rounded-lg w-full">
            <label for="first_name" class="block text-lg font-medium text-gray-900 dark:text-white mb-1">Link
                Materi</label>
            <button type="button"
                class="mt-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-7 py-3 text-center mr-2 mb-2">Materi</button>
        </div>
    </div>

    <div class="bg-white p-5 shadow-sm mt-5 rounded-lg w-full">
        <div class="mt-3">
            <label for="first_name" class="block text-lg font-medium text-gray-900 dark:text-white mb-4">Pengumpulan
                Tugas</label>
            <p class="mb-3 font-light">Dikumpulkan dalam 1 folder Google Drive</p>
            <input type="text" id="first_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="www.google.com" required>
        </div>

        <button type="button"
            class="mt-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Kirim</button>
    </div>
@endsection

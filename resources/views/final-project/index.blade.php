@extends('layouts.app')

@section('title', 'Final Project')

@section('content')

    <div class="bg-white p-5 shadow-sm mt-5 md:mt-10 rounded-lg w-full">
        <div class="mt-3">
            <label for="first_name" class="block text-lg font-medium text-gray-900 dark:text-white mb-4">Pengumpulan
                Tugas</label>
            <input type="text" id="first_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="www.google.com" required>
        </div>

        <button type="button"
            class="mt-5 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Kirim</button>
    </div>

@endsection

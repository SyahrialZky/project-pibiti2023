@extends('layouts.admin.layout')

@section('section')
    <h1>Form Edit Materi</h1>

    @if (session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <span class="font-medium">Berhasil!</span> {{ session('success') }}.
        </div>
    @endif

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('Materi.Update', ['id' => $materi->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-tambah-materi">
            <div class="bg-white p-5 shadow-sm mt-1 md:mt-10 rounded-lg w-full">
                <label for="first_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Judul</label>
                <input type="text" id="judul" name="judul"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ $materi->judul }}" required>
            </div>
            <div class="bg-white p-5 shadow-sm rounded-lg w-full">
                <label for="URL" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">URL</label>
                <input type="url" id="url" name="urlmateri"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ $materi->urlmateri }}" required>
            </div>

            <div class="bg-white p-5 shadow-sm rounded-lg w-full">
                <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 mt-8" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <label for="hari" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">
                        Pilih Tanggal
                    </label>
                    <input type="date" id="hari" name="hari"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $materi->hari }}" required>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <button type="submit"
                class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 me-4 float-right">
                Submit
            </button>
        </div>


        <a href="{{ route('Materi.Index') }}">
            <button type="submit"
                class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 sm:w-auto dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 ms-4">
                Kembali
            </button>
        </a>




        {{-- <div>
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" required>
    </div>

    <div>
        <label for="url">URL:</label><br>
        <input type="url" id="url" name="urlmateri" required><br><br>
    </div>

    <div>
        <label for="hari">Pilih Tanggal:</label>
        <input type="date" id="hari" name="hari">
    </div>

    <div>
        <button type="submit" name="submit">Submit</button>
    </div>
    </form>

    <a href="{{ route('Materi.Index') }}">kembali</a> --}}

    @endsection

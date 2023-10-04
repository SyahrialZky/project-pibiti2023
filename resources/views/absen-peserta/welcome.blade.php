@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="mx-auto max-w-screen-xl">
        
        <div id="alert-4" class="mt-10 flex items-center p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                Untuk menguji kemampuan Anda, silakan kerjakan pretest pendaftaran yang telah disediakan oleh panitia. <a href="#" target="_blank" class="font-semibold underline hover:no-underline">Link Post Test</a>. Semoga berhasil.
            </div>
          </div>

       
    </section>
@endsection

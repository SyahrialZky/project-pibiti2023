@extends('components.master')
@section('content')
    {{-- <div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded shadow-md w-96 text-center">
        <!-- Isi card Anda di sini -->
        <h2 class="text-2xl font-semibold mb-4">Jangan malu untuk hubungi kami ya!</h2>
        <p>Kak Aimee</p>
        <button class="mt-2 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 focus:outline-none focus:ring focus:ring-green-400 focus:ring-opacity-50 transition duration-300 ease-in-out" onclick="window.location.href='https://wa.me/6288801782678'">Hubungi via WhatsApp</button>
        <p>Kak Asyraf</p>
        <button class="mt-2 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 focus:outline-none focus:ring focus:ring-green-400 focus:ring-opacity-50 transition duration-300 ease-in-out" onclick="window.location.href='https://wa.me/6281357251810'">Hubungi via WhatsApp</button>
    </div>
</div> --}}

    <main class="max-w-screen-xl mx-auto">
        {{-- <section class="mb-32">
      <div class="relative">
        <img
          src="https://source.unsplash.com/random"
          alt="photo"
          class="w-full h-[300px] md:h-[200px] object-cover"
        />
        <div
          class="absolute top-10 px-5 text-white flex flex-col lg:flex-row md:flex-row sm:flex-row gap-16 justify-between w-full items-end"
        >
          <div>
            <h1 class="font-bold text-4xl mb-5">Hubungi Kami</h1>
            <p class="font-semibold space-x-2 tracking-wider text-lg">
              Dapatkan berita terbaru serta tips{" "}
            </p>
          </div>
          <div>
            <nav
              class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
              aria-label="Breadcrumb"
            >
              <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                  <a
                    href="#"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary dark:text-gray-400 dark:hover:text-white"
                  >
                    <svg
                      aria-hidden="true"
                      class="w-4 h-4 mr-2"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    Home
                  </a>
                </li>
                <li aria-current="page">
                  <div class="flex items-center">
                    <svg
                      aria-hidden="true"
                      class="w-6 h-6 text-gray-400"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">
                      Hubungi Kami
                    </span>
                  </div>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section> --}}
        <section class="flex flex-col-reverse md:flex-row gap-10 mt-20 items-center">
            <div class="w-full md:w-[60%] px-5">
                <h1 class="text-4xl font-semibold mb-3">Hubungi Kami</h1>
                <p class="mb-5">
                    Kontak kami untuk pertanyaan atau sekitar
                    PIBITI!
                </p>
                <button
                    class="text-white bg-green-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-bold rounded-lg text-sm px-8 py-3 text-center flex gap-2 mx-auto lg:mx-0 mt-3 w-36" onclick="window.location.href='https://wa.me/6288801782678'">
                    <p class="w-full text-center">Kak Asyraf</p>
                </button>
                <button
                    class="text-white bg-green-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-bold rounded-lg text-sm px-8 py-3 text-center flex gap-2 mx-auto lg:mx-0 mt-3 w-36" onclick="window.location.href='https://wa.me/6288801782678'">
                    <p class="w-full text-center">Kak Aime</p>
                </button>
            </div>
            <div class="w-full md:w-[40%] h-[400px] relative mt-16">
                <img src="/image/asyraf.jpg" alt="photo"
                    class="absolute object-cover object-top                                                                                                                          rounded-lg top-0 -left-10 h-[18rem] w-[20rem]" />
                <img src="/image/aime.jpeg" alt="photo"
                    class="absolute object-cover rounded-lg bottom-0 right-0 h-[18rem] w-[20rem]" />
            </div>
        </section>
</main @endsection

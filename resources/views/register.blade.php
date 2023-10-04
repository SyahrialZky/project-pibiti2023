<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{  config('app.name') }} - Register</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ url('image/Logo2.png') }}">
</head>
<body>
    <section class="flex flex-col md:flex-row items-center">

        <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-[115vh]">
            <img src="/image/register.jpg" alt="" class="w-full h-full object-cover">
        </div>

        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
            flex justify-center">

            <div class="w-full h-100">
                <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Selamat Datang di PIBITI2023</h1>
                @if ($errors->any())
                    <div class="pt-3">
                        <div class="alert alert-danger text-red-600">
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <form action="{{ route('auth.register') }}" class="mt-6" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700">Nama</label>
                        <input type="text" name="name" id="" placeholder="Nama"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                            autofocus autocomplete required value="{{ Session::get('name') }}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Instansi</label>
                        <input type="text" name="sekolah" id="" placeholder="Enter Instansi"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                            autofocus autocomplete required value="{{ Session::get('sekolah') }}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Username</label>
                        <input type="text" name="username" id="" placeholder="Enter Username"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                            autofocus autocomplete required value="{{ Session::get('username') }}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Email</label>
                        <input type="email" name="email" id="" placeholder="Enter Email Address"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                            autofocus autocomplete required value="{{ Session::get('email') }}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Nomor Telepon</label>
                        <input type="number" name="nomor_telepon" id="" placeholder="Enter No telp"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                            autofocus autocomplete required value="{{ Session::get('nomor_telepon') }}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Url Bukti Pembayaran</label>
                        <input type="url" name="urlbukti" id="" placeholder="Enter Url Payment"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                            autofocus autocomplete required value="{{ Session::get('urlbukti') }}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Password</label>
                        <input type="password" name="password" id="" placeholder="Enter Password"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                            autofocus autocomplete required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" id="" placeholder="Enter Password Confirmation" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                    focus:bg-white focus:outline-none" required>
                    </div>

                    <div class="text-right mt-2">
                        <a href="#" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot
                            Password?</a>
                    </div>

                    <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
                px-4 py-3 mt-6">Masuk
                    </button>
                </form>

                <hr class="my-6 border-gray-300 w-full">
                <p class="my-8">Sudah mempunyai akun? <a href="{{ route('auth.login.view') }}"
                                                        class="text-blue-500 hover:text-blue-700 font-semibold">Login</a></p>
            </div>
        </div>
    </section>
</body>
</html>


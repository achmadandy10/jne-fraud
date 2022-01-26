<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset("images/icon.png") }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Froud JNE</title>

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
    <div class="min-h-screen max-w-[1500px] mx-auto border">
        <header class="flex flex-col w-full">
            <div class="flex justify-between items-center p-4">
                <a href="/">
                    <img src="{{ asset("images/logo.png") }}" alt="Logo JNE" class="w-36">
                </a>

                <a href="#" class="py-3 px-10 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Masuk</a>
            </div>

            <div class="flex justify-end">
                <div class="inline-flex rounded-md shadow-sm bg-gray-200" role="group">
                    <a href="#" class="bg-transparent py-5 px-7 text-sm font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Tentang Kami
                    </a>
                    <a href="#" class="bg-transparent py-5 px-7 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Layanan Hukum
                    </a>
                    <a href="#" class="bg-transparent py-5 px-7 text-sm font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Informasi
                    </a>
                    <a href="#" class="bg-transparent py-5 px-7 text-sm font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Database
                    </a>
                    <a href="/contact-us" class="bg-transparent py-5 px-7 text-sm font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Hubungi Kami
                    </a>
                </div>
            </div>


            <div class="bg-[#D0391C] py-1 px-4">
                <div class="grid grid-cols-2">
                    @php
                        use Illuminate\Support\Carbon;
                    @endphp
                    <span class="text-white"> {{ Carbon::now()->translatedFormat("l, d F Y | H:i") }} WIB</span>
                    <span class="text-white font-bold uppercase text-center">
                        Selamat Datang di Legal Service Access
                    </span>
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
@extends('layouts.auth')

@section('content')

    <body class="bg-gray-300" style="font-family:Poppins">
        <div class="w-full h-screen flex items-center justify-center">
            <form class="w-full md:w-1/3 bg-white rounded-lg">
                <div class="flex font-bold justify-center mt-6">
                    <img class="mb-7" src={{ asset('images/logo.png') }}>
                </div>
                <div class="px-12 pb-10">
                    <div class="w-full mb-2">
                        <div class="flex items-center">
                            <i class='ml-3 fill-current text-gray-400 text-xs z-10 fas fa-user'></i>
                            <input type='email' placeholder="Email"
                                class="-mx-6 px-8  w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" />
                        </div>
                    </div>
                    <div class="w-full mb-2">
                        <div class="flex items-center">
                            <i class='ml-3 fill-current text-gray-400 text-xs z-10 fas fa-lock'></i>
                            <input type='text' placeholder="Password"
                                class="-mx-6 px-8 w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" />
                        </div>
                    </div>
                    <a href="#" class="text-xs text-gray-500 float-right mb-4">Forgot Password?</a>
                    <button type="submit"
                        class="w-full py-2 mb-3 rounded-full bg-red-600 hover:bg-red-700 text-gray-100 focus:outline-none">Login</button>
                    <a href="/" type="submit"
                        class="w-full py-2 rounded-full bg-blue-600 hover:bg-blue-700 text-gray-100 focus:outline-none text-center">Back
                        to Home</a>
            </form>
        </div>
    </body>
@endsection

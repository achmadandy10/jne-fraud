@extends('layouts.main')

@section('content')
    <div class="flex flex-col gap-4 mx-36 my-4">
        <h1 class="text-4xl mb-4 text-black capitalize font-medium">Perizinan Baru</h1>

        <div class="grid grid-cols-1 gap-16 mb-4">
            <div class="flex flex-col gap-4">
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Tipe Perizinan</label>
                    <div class="flex-[7]">
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>-- Pilih --</option>
                            <option>Perizinan Reklame</option>
                            <option>Perizinan IMB</option>
                            <option>Perizinan SLF</option>
                            <option>Perizinan TDG</option>
                            <option>OSS</option>
                        </select>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Lokasi</label>
                    <div class="flex-[7]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Spesifikasi</label>
                    <div class="flex-[7]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alasan Permohonan</label>
                    <div class="flex-[7]">
                        <textarea id="message" rows="4" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""></textarea>
                    </div>
                </div>
                <div class="flex">
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 mb-4">
            <div class="flex mb-4">
            </div>

            <div class="grid grid-rows-3 grid-flow-col gap-4 mb-4">
                <div class="row-span-4 font-medium">Dokumen Pendukung :</div>
            </div>

            <div class="flex flex-col gap-4 mb-4">
                <div class="flex">
                    <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Disposisi</label>
                    <div class="flex-[4]">
                        <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    </div>
                </div>
                <div class="flex">
                    <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Dokumen 1</label>
                    <div class="flex-[4]">
                        <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    </div>
                </div>
                <div class="flex">
                    <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Dokumen 2</label>
                    <div class="flex-[4]">
                        <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    </div>
                </div>
                <div class="flex">
                    <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Dokumen 3</label>
                    <div class="flex-[4]">
                        <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-end items-center">
            <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Input</button>
        </div>
    </div>
@endsection

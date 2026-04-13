@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-lg rounded-2xl p-8 text-center hover:scale-105 transition duration-300">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">
            Selamat Datang 👋
        </h2>
        <p class="text-gray-600 mb-6">
            Ini adalah halaman tugas layouting Laravel.
        </p>

        <button class="bg-green-500 hover:bg-green-600 hover:scale-110 transition text-white px-6 py-2 rounded-full shadow">
            Mulai Sekarang
        </button>
    </div>

    <!-- Card Section -->
    <div class="grid md:grid-cols-3 gap-6 mt-8">
        <div class="bg-white p-6 rounded-xl shadow hover:scale-105 hover:shadow-xl transition duration-300">
            <h3 class="font-bold text-lg mb-2">Cepat</h3>
            <p class="text-gray-600">Laravel mempermudah development.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:scale-105 hover:shadow-xl transition duration-300">
            <h3 class="font-bold text-lg mb-2">Rapi</h3>
            <p class="text-gray-600">Menggunakan Blade Template.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:scale-105 hover:shadow-xl transition duration-300">
            <h3 class="font-bold text-lg mb-2">Modern</h3>
            <p class="text-gray-600">Menggunakan Tailwind CSS.</p>
        </div>
    </div>
@endsection
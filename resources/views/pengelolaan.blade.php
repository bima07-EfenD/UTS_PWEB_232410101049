@extends('layouts.app')

@section('content')
    <div class="min-h-screen w-full text-white relative"
        style="background-image: url('https://cdna.artstation.com/p/assets/images/images/000/650/594/large/scribble-pad-studios-64.jpg?1429826158'); background-size: cover; background-position: center;">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-70 z-0"></div>

        <!-- Konten -->
        <div class="relative z-10 px-4 sm:px-6 py-8 sm:py-12 pt-16 sm:pt-24">
            <!-- Tombol Kembali ke Dashboard -->
            <div class="absolute top-16 sm:top-24 left-4 sm:left-6 z-20">
                <a href="{{ route('dashboard', ['username' => $username]) }}"
                    class="inline-flex items-center gap-2 bg-yellow-500/80 hover:bg-yellow-600 text-black font-bold px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-md backdrop-blur-sm transition transform hover:-translate-y-0.5 hover:scale-105 duration-300 text-sm sm:text-base">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Dashboard
                </a>
            </div>

            <!-- Judul -->
            <div class="text-center mb-8 sm:mb-12 mt-8 sm:mt-0">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-yellow-400 tracking-widest">GARAGE</h1>
                <p class="text-base sm:text-lg text-gray-300 italic mt-2">Welcome back, {{ $username }} — Choose your beast!</p>
            </div>

            <!-- Grid Mobil -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-10 px-2 sm:px-0">
                @foreach ($mobil as $car)
                    <div
                        class="bg-black bg-opacity-60 backdrop-blur-sm rounded-xl sm:rounded-2xl border border-yellow-500/30 shadow-xl overflow-hidden transform transition hover:scale-105 hover:shadow-yellow-500/40">

                        <!-- Gambar Mobil -->
                        <img src="{{ $car['gambar'] ?? 'https://img.freepik.com/free-photo/front-view-speed-car-driving-fast_23-2150710220.jpg?w=826&t=st=1715000000~exp=1715000600~hmac=dummyhash' }}"
                            alt="{{ $car['nama'] }}" class="w-full h-40 sm:h-48 object-cover border-b border-yellow-400">

                        <!-- Info Mobil -->
                        <div class="p-4 sm:p-6">
                            <h2 class="text-xl sm:text-2xl font-bold text-yellow-300 uppercase tracking-wide">
                                {{ $car['nama'] }}
                            </h2>
                            <p class="text-sm sm:text-base text-gray-400 mt-1">Tipe: <span class="text-white">{{ $car['tipe'] }}</span></p>
                            <p class="text-sm sm:text-base text-gray-400">Harga: <span class="text-white">Rp
                                    {{ number_format($car['harga'], 0, ',', '.') }}</span></p>

                            <!-- Tombol -->
                            <div class="mt-4 sm:mt-5 flex gap-2 sm:gap-3">
                                <button
                                    class="flex-1 px-3 sm:px-4 py-1.5 sm:py-2 bg-yellow-500 text-black font-semibold rounded text-sm sm:text-base hover:bg-yellow-600 transition">
                                    Detail
                                </button>
                                <button
                                    class="flex-1 px-3 sm:px-4 py-1.5 sm:py-2 bg-red-600 text-white font-semibold rounded text-sm sm:text-base hover:bg-red-700 transition">
                                    Jual
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

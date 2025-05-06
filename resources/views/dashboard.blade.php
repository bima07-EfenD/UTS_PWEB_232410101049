@extends('layouts.app')

@section('content')
    <div class="relative w-full h-screen flex items-center justify-center text-white overflow-hidden">
        <!-- Video background -->
        <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover z-[-1]">
            <source
                src="https://res.cloudinary.com/drozcjfg4/video/upload/v1746496574/NFS_HEAT_FIRST_PERSON_GARAGE_TOUR_online-video-cutter.com_oczphj.mp4"
                type="video/mp4">
        </video>

        <!-- Overlay -->
        <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-60 z-0"></div>

        <!-- Konten -->
        <div class="relative z-10 bg-black bg-opacity-60 p-10 rounded shadow-lg text-center">
            <h1 class="text-4xl font-bold mb-4">Hi Welcome Home, {{ $username }}!</h1>
            <p class="text-lg mb-6">Lets Start Race, Victory Is Waiting You</p>

            <!-- Tombol Pengelolaan -->
            <a href="{{ route('pengelolaan', ['username' => request('username')]) }}"
                class="inline-block px-6 py-3 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 text-white font-bold rounded-full shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                GO TO GARAGE
            </a>
        </div>
    </div>
@endsection

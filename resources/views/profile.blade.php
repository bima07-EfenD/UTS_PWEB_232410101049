@extends('layouts.app')

@section('content')
    <div class="relative min-h-screen flex items-center justify-center bg-gray-900 py-8 sm:py-0"
        style="background-image: url('https://automoto.id/wp-content/uploads/2024/11/NFS-x-BMW_4-min.jpg.webp'); background-size: cover; background-position: center;">

        <div class="relative w-full max-w-md mx-4 md:mx-auto">
            <!-- SIM Card Container -->
            <div class="bg-gray-100 rounded-lg shadow-2xl border border-gray-300 overflow-hidden relative">

                <!-- Watermark -->
                <div class="absolute inset-0 opacity-10 pointer-events-none">
                    <img src="map/pngwing.com.png" alt="Indonesia Map" class="w-full h-full object-cover">
                </div>

                <!-- Header Merah -->
                <div class="bg-red-600 text-white py-2 px-3 sm:px-4 flex justify-between items-center">
                    <div class="flex items-center gap-1 sm:gap-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Lambang_Polri.png" alt="Emblem"
                            class="h-8 w-8 sm:h-10 sm:w-10">
                        <div>
                            <div class="text-base sm:text-lg font-semibold tracking-widest">INDONESIA</div>
                            <div class="text-[10px] sm:text-xs font-semibold text-red-200">SURAT IZIN MENGEMUDI</div>
                        </div>
                    </div>
                    <div class="text-right text-sm sm:text-base font-bold">DRIVING LICENSE</div>
                </div>

                <!-- Konten -->
                <div class="p-3 sm:p-4 flex flex-col md:flex-row gap-3 sm:gap-4">
                    <!-- Kiri: Foto dan Tanda Tangan -->
                    <div class="md:w-1/3 flex flex-col items-center relative z-10">
                        <div
                            class="bg-gray-800 w-24 h-32 sm:w-28 sm:h-36 border-2 border-gray-400 rounded overflow-hidden hover:scale-105 transition-transform duration-200">
                            <img src="https://www.svgrepo.com/show/384674/account-avatar-profile-user-11.svg"
                                alt="Profile Photo" class="w-full h-full object-cover">
                        </div>
                        <div class="mt-3 sm:mt-4 w-full border-b border-gray-400 pb-2 flex justify-center">
                            <img src="https://onlinepngtools.com/images/examples-onlinepngtools/george-walker-bush-signature.png"
                                alt="Signature" class="h-6 sm:h-8">
                        </div>
                        <div class="mt-2 text-[10px] sm:text-xs text-gray-600">21-01-2024</div>
                    </div>

                    <!-- Kanan: Info -->
                    <div class="md:w-2/3 relative">
                        <!-- Kelas SIM & Nomor -->
                        <div class="absolute top-0 right-0 text-right">
                            <div class="text-2xl sm:text-3xl font-extrabold text-red-600">A</div>
                            <div class="text-[10px] sm:text-xs font-semibold text-gray-700 mt-1">0123-4567-891011</div>
                        </div>

                        <!-- Detail Pribadi -->
                        <div class="mt-6 md:mt-0 text-xs sm:text-sm text-gray-800">
                            <ol class="list-decimal pl-4 sm:pl-5 space-y-0.5 sm:space-y-1 font-medium">
                                <li class="font-bold uppercase tracking-wide">
                                    {{ ($username) }}</li>
                                <li>JAKARTA, 17-08-1945</li>
                                <li>O - PREDATOR</li>
                                <li>
                                    JL SWADAYA 1 RT 14/09<br>
                                    PEJATEN TIMUR PASAR MINGGU<br>
                                    JAKARTA SELATAN
                                </li>
                                <li>PELAJAR/MHS</li>
                                <li>METRO JAYA</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 sm:mt-6 flex justify-center">
                <a href="{{ route('dashboard', ['username' => $username]) }}"
                    class="group relative inline-flex items-center gap-2 px-4 sm:px-6 py-1.5 sm:py-2 bg-white/80 border-2 border-gray-700 rounded-full text-gray-800 font-semibold shadow-md transition duration-200 hover:bg-gray-700 hover:text-white text-sm sm:text-base">
                    <svg class="w-3 h-3 sm:w-4 sm:h-4 transition-transform duration-200 group-hover:-translate-x-1"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                    Kembali
                </a>
            </div>
        </div>
    </div>
@endsection

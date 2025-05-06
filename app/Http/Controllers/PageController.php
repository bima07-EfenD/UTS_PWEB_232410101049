<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function loginawal()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');

        return view('dashboard', ['username' => $username]);
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', ['username' => $username]);
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');
        $mobil = $mobil = [
            [
                'nama' => 'Nissan GT-R',
                'tipe' => 'Racing Hell',
                'harga' => '1000000000',
                'gambar' => 'https://i.ytimg.com/vi/R6xpkOSZN90/maxresdefault.jpg',
            ],
            [
                'nama' => 'Toyota Supra',
                'tipe' => 'Sport',
                'harga' => '800000000',
                'gambar' => 'https://images.squarespace-cdn.com/content/v1/5a4ff2a98a02c747dc17e25b/1566413176835-UZ4DEOM4IHRVVHOK1YDG/2020-Toyota-Supra-V1-1080.jpg',
            ],
            [
                'nama' => 'Mitsubishi Lancer Evo',
                'tipe' => 'Sport',
                'harga' => '600000000',
                'gambar' => 'https://preview.redd.it/i-made-earls-blacklist-lancer-evo-from-nfs-mw-in-gt7-v0-wmpp3042fm6b1.jpg?width=1080&crop=smart&auto=webp&s=487b75383b3af313f885cc621c7995f6175b8972',
            ],
        ];

        return view('pengelolaan', compact('mobil'),  ['username' => $username]);
    }
}

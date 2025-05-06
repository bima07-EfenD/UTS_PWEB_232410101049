@extends('layouts.login')

@section('content')
    <div class="bg-white shadow-2xl rounded-lg p-8 backdrop-blur-sm bg-opacity-80">
        <h2 class="text-3xl font-bold text-center mb-4">Hello Driver, Go To Your Garage</h2>
        <form method="POST" action="{{ route('form') }}" class="space-y-4">
            @csrf
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" required autofocus
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-red-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-red-500">
            </div>
            <button type="submit"
                class="w-full bg-gradient-to-r from-yellow-500 to-red-600 text-white py-2 rounded-md hover:opacity-90 transition">Login</button>
        </form>
    </div>
@endsection

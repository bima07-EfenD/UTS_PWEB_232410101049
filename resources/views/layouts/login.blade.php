<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Orbitron', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen relative overflow-hidden flex items-center justify-center">

    <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-[-2]">
        <source
            src="https://res.cloudinary.com/drozcjfg4/video/upload/v1746424437/1_online-video-cutter.com_1_e0mhti.mp4"
            type="video/mp4">
    </video>

    <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 z-[-1]"></div>

    <div class="w-full max-w-md px-6">
        @yield('content')
    </div>

    <x-footer />
</body>

</html>

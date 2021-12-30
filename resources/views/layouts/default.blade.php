<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wiktor Samsel-Baudat</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body class='bg-sky-500 text-white'>
    <header class="fixed bg-sky-400 top-0 left-0 right-0" z-50>
        <div class="container mx-auto flex justify-between p-4">
            <h1 class="text-xl font-black">Wiktor Samsel-Baudat</h1>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <a href="{{ route('home') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition">Home</a>
                <a href="{{ route('about') }}" class="text-lg mx-2 text-white hover:text-black transition">About</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('page-content')
    </main>

    <footer>
        <div class="container mx-auto p4">
            <p>&copy; 
                <a> Wiktor Samsel-Baudat</a>
                <a href="{{ url('https://www.linkedin.com/in/wiktor-samsel-baudat-b64b7a218/') }}"class="bg-color-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Linkedin</a> 
                <a href="{{ url('https://github.com/wsamselbaudat') }}"class="bg-color-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Github</a>
                </p>
            

        </div>
    </footer>
</body>
</html>
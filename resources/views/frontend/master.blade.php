<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Homepage') - HA Library</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    {{-- navbar --}}
    <nav class="bg-blue-600 text-white py-4">
        <div class="container max-w-6xl mx-auto flex justify-between items-center">
            <a href="{{ route('homepage') }}" class="text-2xl font-bold">HA-Library</a>
            <div>
                <a href="{{ route('homepage') }}" class="px-4">Homepage</a>
                <a href="{{ route('login') }}">Login Admin</a>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="text-center bg-blue-800 py-5 text-white">
        <p>Copyright &copy; 2024 Hari Aspriyono Official</p>
    </footer>
</body>

</html>

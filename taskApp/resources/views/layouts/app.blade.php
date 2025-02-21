<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel task app</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow p-4">
        <!-- navbar content -->
    <h1 class="text-xl font-bold text-purple-500">My Task App</h1>
</nav>
<main class="p-4">
    @yield('content')
</main>
</body>
</html>
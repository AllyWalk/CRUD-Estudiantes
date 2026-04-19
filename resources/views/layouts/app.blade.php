<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Escolar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-800 text-white shadow-lg mb-8">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between">
            <span class="font-bold text-xl">🎓 Ingresar Nuevo Estudiante</span>
            <div class="space-x-4">
                <a href="{{ route('students.index') }}" class="hover:underline">Estudiantes</a>
                <a href="{{ route('careers.index') }}" class="hover:underline">Carreras</a>
            </div>
        </div>
    </nav>
    <main class="max-w-6xl mx-auto p-4">
        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">{{ session('success') }}</div>
        @endif
        @yield('content')
    </main>
</body>
</html>
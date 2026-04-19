<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Control Escolar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 text-slate-900 font-sans">
    <nav class="bg-indigo-900 text-white shadow-xl mb-10">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <i class="fas fa-university text-2xl text-indigo-300"></i>
                <span class="font-black text-xl tracking-tight">CONTROL <span class="text-indigo-300">ESCOLAR</span></span>
            </div>
            <div class="hidden md:flex items-center gap-8 font-medium">
                <a href="{{ route('students.index') }}" class="hover:text-indigo-200 transition {{ request()->routeIs('students.*') ? 'text-indigo-300 border-b-2 border-indigo-300' : '' }}">Estudiantes</a>
                <a href="{{ route('careers.index') }}" class="hover:text-indigo-200 transition {{ request()->routeIs('careers.*') ? 'text-indigo-300 border-b-2 border-indigo-300' : '' }}">Carreras</a>
            </div>
            <div class="text-xs text-indigo-200 italic border-l border-indigo-700 pl-4 hidden sm:block">
    Noé Asael Quintero Águila
</div>
            
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 mb-20">
        @if(session('success'))
            <div class="flex items-center p-4 mb-6 text-emerald-800 bg-emerald-50 border-l-4 border-emerald-500 rounded-r-lg shadow-sm" role="alert">
                <i class="fas fa-check-circle mr-3"></i>
                <div class="text-sm font-bold">{{ session('success') }}</div>
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
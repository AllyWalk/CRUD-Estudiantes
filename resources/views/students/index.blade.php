<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Estudiantes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Gestión de Estudiantes</h1>
            <a href="{{ route('students.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Nuevo Estudiante</a>
        </div>

        @if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded-lg mb-6 shadow-md">
        {{ session('success') }}
    </div>
@endif
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <table class="w-full text-left border-collapse">
    <thead>
        <tr class="bg-gray-100 border-b">
            <th class="p-4 font-bold">Matrícula</th>
            <th class="p-4 font-bold">Nombre</th>
            <th class="p-4 font-bold">Carrera</th>
            <th class="p-4 font-bold text-center">Semestre</th>
            <th class="p-4 font-bold text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
            <tr class="border-b hover:bg-gray-50">
                <td class="p-4">{{ $student->matricula }}</td>
                <td class="p-4">{{ $student->nombre }} {{ $student->apellido }}</td>
                
                <td class="p-4">
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-1 rounded">
                        {{ $student->career->nombre ?? 'Sin Carrera' }}
                    </span>
                </td>
                
                <td class="p-4 text-center">{{ $student->semestre }}°</td>

                <td class="p-4 text-center">
                    <div class="flex justify-center gap-3">
                        <a href="{{ route('students.edit', $student) }}" class="text-blue-600 hover:underline">Editar</a>
                        <form action="{{ route('students.destroy', $student) }}" method="POST" onsubmit="return confirm('¿Eliminar?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
        </div>
    </div>
</body>
</html>
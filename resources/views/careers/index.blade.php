@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Gestión de Carreras</h2>
        <a href="{{ route('students.index') }}" class="text-blue-500 hover:underline">⬅ Volver a Estudiantes</a>
    </div>

    <div class="bg-gray-50 p-4 rounded-md mb-6 border">
        <h3 class="text-sm font-semibold mb-2 uppercase text-gray-600">Nueva Carrera</h3>
        <form action="{{ route('careers.store') }}" method="POST" class="flex gap-2">
            @csrf
            <input type="text" name="nombre" placeholder="Ej. Ingeniería en Sistemas" 
                   class="flex-1 border p-2 rounded focus:ring-2 focus:ring-blue-500 outline-none" required>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Agregar
            </button>
        </form>
    </div>

    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="border-b bg-gray-100">
                <th class="p-3">ID</th>
                <th class="p-3">Nombre de la Carrera</th>
                <th class="p-3 text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($careers as $career)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3 text-gray-500">{{ $career->id }}</td>
                    <td class="p-3 font-medium">{{ $career->nombre }}</td>
                    <td class="p-3 text-center">
                        <form action="{{ route('careers.destroy', $career) }}" method="POST" 
                              onsubmit="return confirm('¿Eliminar esta carrera? También se borrarán los alumnos asociados.')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 font-bold">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="p-4 text-center text-gray-500 italic">No hay carreras registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
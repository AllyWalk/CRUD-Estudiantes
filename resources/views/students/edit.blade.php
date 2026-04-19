@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md border-t-4 border-indigo-500">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Editar Estudiante</h2>

    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT') {{-- OBLIGATORIO PARA ACTUALIZAR --}}

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                <input type="text" name="nombre" value="{{ $student->nombre }}" 
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Apellido</label>
                <input type="text" name="apellido" value="{{ $student->apellido }}" 
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
        </div>

        <div class="mt-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" name="email" value="{{ $student->email }}" 
                   class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
        </div>

        <div class="mt-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Matrícula</label>
            <input type="text" name="matricula" value="{{ $student->matricula }}" 
                   class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
        </div>

        <div class="mt-8 flex justify-end gap-3">
            <a href="{{ route('students.index') }}" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg">Cancelar</a>
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-lg font-bold transition">
                Actualizar Datos
            </button>
        </div>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-bold mb-4">Registrar Nuevo Estudiante</h2>
    
    <form action="{{ route('students.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium">Nombre</label>
            <input type="text" name="nombre" class="w-full border p-2 rounded focus:ring-2 focus:ring-blue-500 outline-none" required>
        </div>
        <div>
            <label class="block text-sm font-medium">Apellido</label>
            <input type="text" name="apellido" class="w-full border p-2 rounded focus:ring-2 focus:ring-blue-500 outline-none" required>
        </div>
        <div>
            <label class="block text-sm font-medium">Email</label>
            <input type="email" name="email" class="w-full border p-2 rounded focus:ring-2 focus:ring-blue-500 outline-none" required>
        </div>
        <div>
            <label class="block text-sm font-medium">Matrícula</label>
            <input type="text" name="matricula" class="w-full border p-2 rounded focus:ring-2 focus:ring-blue-500 outline-none" required>
        </div>

        <div>
            <label class="block text-sm font-medium">Carrera</label>
            <select name="career_id" class="w-full border p-2 rounded focus:ring-2 focus:ring-blue-500 outline-none" required>
                <option value="">Selecciona una carrera</option>
                @foreach($careers as $career)
                    <option value="{{ $career->id }}">{{ $career->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium">Semestre (1-12)</label>
            <input type="number" name="semestre" min="1" max="12" class="w-full border p-2 rounded focus:ring-2 focus:ring-blue-500 outline-none" required>
        </div>

        <div class="flex gap-2 pt-4">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded flex-1 hover:bg-green-700">Guardar Estudiante</button>
            <a href="{{ route('students.index') }}" class="bg-gray-100 px-4 py-2 rounded border text-center flex-1">Cancelar</a>
        </div>
    </form>
</div>
@endsection
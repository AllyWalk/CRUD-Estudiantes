@extends('layouts.app')

@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-white">
        <div>
            <h2 class="text-2xl font-black text-slate-800">Listado de Alumnos</h2>
            <p class="text-slate-500 text-sm">Administra la información de los estudiantes inscritos.</p>
        </div>
        <a href="{{ route('students.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2.5 px-5 rounded-xl transition flex items-center gap-2 shadow-lg shadow-indigo-200">
            <i class="fas fa-plus"></i> Nuevo Estudiante
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="bg-slate-50 text-slate-600 text-xs uppercase tracking-widest">
                    <th class="px-6 py-4 font-bold">Matrícula</th>
                    <th class="px-6 py-4 font-bold">Nombre Completo</th>
                    <th class="px-6 py-4 font-bold">Carrera</th>
                    <th class="px-6 py-4 font-bold text-center">Semestre</th>
                    <th class="px-6 py-4 font-bold text-center">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm">
                @foreach($students as $student)
                <tr class="hover:bg-indigo-50/30 transition">
                    <td class="px-6 py-4 font-mono text-indigo-600 font-bold">{{ $student->matricula }}</td>
                    <td class="px-6 py-4">
                        <div class="font-bold text-slate-800">{{ $student->nombre }} {{ $student->apellido }}</div>
                        <div class="text-xs text-slate-500">{{ $student->email }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-indigo-100 text-indigo-700">
                            {{ $student->career->nombre ?? 'Sin asignar' }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-center font-bold text-slate-600">
                        {{ $student->semestre }}°
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex justify-center gap-4">
                            <a href="{{ route('students.edit', $student) }}" class="text-amber-500 hover:text-amber-600 transition" title="Editar">
                                <i class="fas fa-edit text-lg"></i>
                            </a>
                            <form action="{{ route('students.destroy', $student) }}" method="POST" onsubmit="return confirm('¿Eliminar alumno?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-rose-500 hover:text-rose-600 transition" title="Eliminar">
                                    <i class="fas fa-trash-alt text-lg"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
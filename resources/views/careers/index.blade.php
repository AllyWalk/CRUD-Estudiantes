@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <div class="lg:col-span-1">
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
            <h3 class="text-lg font-bold text-slate-800 mb-4 flex items-center gap-2">
                <i class="fas fa-folder-plus text-indigo-500"></i> Nueva Carrera
            </h3>
            <form action="{{ route('careers.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-xs font-bold text-slate-500 mb-1 uppercase">Nombre de la Carrera</label>
                    <input type="text" name="nombre" class="w-full border border-slate-200 rounded-xl p-3 focus:ring-2 focus:ring-indigo-500 outline-none transition" placeholder="Ej. Ing. Civil" required>
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-3 rounded-xl hover:bg-indigo-700 transition shadow-lg shadow-indigo-100">
                    Registrar Carrera
                </button>
            </form>
        </div>
    </div>

    <div class="lg:col-span-2">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <table class="w-full text-left text-sm">
                <thead class="bg-slate-50 border-b border-slate-100">
                    <tr>
                        <th class="p-4 font-bold text-slate-600 uppercase text-xs">ID</th>
                        <th class="p-4 font-bold text-slate-600 uppercase text-xs">Carrera Académica</th>
                        <th class="p-4 text-center font-bold text-slate-600 uppercase text-xs">Acción</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($careers as $career)
                    <tr class="hover:bg-slate-50 transition">
                        <td class="p-4 font-mono text-slate-400">#{{ $career->id }}</td>
                        <td class="p-4 font-bold text-slate-700">{{ $career->nombre }}</td>
                        <td class="p-4 text-center">
                            <form action="{{ route('careers.destroy', $career) }}" method="POST" onsubmit="return confirm('¿Eliminar carrera?')">
                                @csrf @method('DELETE')
                                <button class="text-rose-400 hover:text-rose-600 transition">
                                    <i class="fas fa-times-circle text-lg"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
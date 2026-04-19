<thead class="bg-gray-50 border-b">
    <tr>
        <th class="p-4 font-semibold">Matrícula</th>
        <th class="p-4 font-semibold">Nombre</th>
        <th class="p-4 font-semibold">Carrera</th> <th class="p-4 font-semibold">Semestre</th> <th class="p-4 text-center font-semibold">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach($students as $student)
    <tr class="border-b hover:bg-gray-50">
        <td class="p-4">{{ $student->matricula }}</td>
        <td class="p-4">{{ $student->nombre }} {{ $student->apellido }}</td>
        <td class="p-4">{{ $student->career->nombre ?? 'Sin carrera' }}</td> <td class="p-4 text-center">{{ $student->semestre }}°</td>
        <td class="p-4 text-center">
            </td>
    </tr>
    @endforeach
</tbody>
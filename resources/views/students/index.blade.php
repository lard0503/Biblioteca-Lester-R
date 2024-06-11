@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Listado de Estudiantes</h2>
</div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>CIF</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->cif }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
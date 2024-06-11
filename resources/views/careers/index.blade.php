@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Listado de Carreras</h2>
</div>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($careers as $career)
                <tr>
                    <td>{{ $career->codigo }}</td>
                    <td>{{ $career->nombre }}</td>
                    <td>{{ $career->descripcion }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
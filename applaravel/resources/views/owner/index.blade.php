@extends('layouts.app')

@section('content')

<br>
    <h4>Listado de propietarios</h4>

<br>
    <a class="btn btn-secondary"  href="{{ url('/owner/create') }}">
        <i class="bi bi-plus-square-fill"></i>
        Nuevo Propietario
    </a>
<br>
<table class="table table-formal">
    <thead>
        <tr>
            <th scope = "col">#</th>
            <th scope = "col">Nombre</th>
            <th scope = "col">Edad</th>
            <th scope = "col">Email</th>
            <th scope = "col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($owners as $owner)
        <tr>
            <td>{{ $owner->id }}</td>
            <td>{{ $owner->full_name }}</td>
            <td>{{ $owner->age }}</td>
            <td>{{ $owner->email }}</td>
  
            <td>
                <form method="POST" action="{{ url('/owner/'. $owner->id) }}">
                @csrf
                <a class="btn btn-outline-secondary" href="{{ url('/owner/'. $owner->id . '/edit') }}">
                    <i class="bi bi-pencil-fill"></i>
                    Editar
                </a>
                {{ method_field('DELETE') }}
                &nbsp;

                <input class="btn btn-outline-secondary" type="submit" value="Eliminar" onclick="return confirm('Desea eliminar este propietario?')">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
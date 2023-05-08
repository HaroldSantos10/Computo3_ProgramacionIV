
@extends('layouts.app')

@section('content')

    <br>
    <h4>Listado de mascotas</h4>

    <br>
    <a class="btn btn-secondary"  href="{{ url('/pet/create') }}">
        <i class="bi bi-plus-square-fill"></i>
        Nueva Mascota
    </a>
    <br>
    <br>
    
    <table class="table table-formal">
        <thead>
            <tr>
                <th scope = "col">#</th>
                <th scope = "col">Nombre</th>
                <th scope = "col">Edad</th>
                <th scope = "col">Peso</th>
                <th scope = "col">Propietario</th>
                <th scope = "col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)
            <tr>
                <td >{{ $pet->id }}</td>
                <td >{{ $pet->name }}</td>
                <td >{{ $pet->age }}</td>
                <td >{{ $pet->weight_kg }}</td>
                <td >{{ $pet->owner->full_name }}</td>
                <td >
                    <form method="POST" action="{{ url('/pet/'. $pet->id) }}">
                    <a class= "btn btn-outline-secondary" href="{{ url('/pet/'. $pet->id ) }}">
                        <i class="bi bi-info-circle-fill">Mostrar</i>
                    </a>
                    @csrf
                    &nbsp;
                    <a class="btn btn-outline-secondary" href="{{ url('/pet/'. $pet->id . '/edit') }}">
                        <i class="bi bi-pencil-fill"></i>
                        Editar
                    </a>
                    {{ method_field('DELETE') }}
                    &nbsp;
                    
                    <input class="btn btn-outline-secondary" type="submit" value="Eliminar" onclick="return confirm('Desea eliminar el registro?')">
                        
                    </input>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



@endsection
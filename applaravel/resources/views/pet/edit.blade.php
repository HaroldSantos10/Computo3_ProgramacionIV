@extends('layouts.app')

@section('content')

@php
 $nombreVista = 'Editar Registro de Mascota'
@endphp

<br>

<form action="{{ url('/pet/'. $pet->id) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    @include('pet.form')
   
</form>

@endsection
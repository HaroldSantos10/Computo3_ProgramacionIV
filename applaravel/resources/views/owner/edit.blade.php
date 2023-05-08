@extends('layouts.app')

@section('content')

@php
 $nombreVista= 'Editar Registro de Propietario'
@endphp

<br>

<form action="{{ url('/owner/'. $owner->id) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    @include('owner.form')
   
</form>

@endsection
@extends('layouts.app')

@section('content')

@php
$nombreVista = 'Nuevo Registro de Propietario'
@endphp

<br>

<form action="{{ url('/owner') }}" method="POST">
    @csrf
    @include('owner.form')
   
</form>

@endsection
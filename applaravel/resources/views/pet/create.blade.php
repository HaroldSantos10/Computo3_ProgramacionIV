
@extends('layouts.app')

@section('content')

@php
 $nombreVista = 'Nuevo Registro de Mascota'
@endphp

<br>

<form action="{{ url('/pet') }}" method="POST">
    @csrf
    @include('pet.form')
   
</form>





@endsection
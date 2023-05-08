@extends('layouts.app')

@section('content')

<br>

<div class = "form-container">
    <h5>Datos de la mascota "{{ $pet->name}}"</h5>

    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAoQu4AR5lUP7huhgDB3_QTbtHQ0Eov7wraQ&usqp=CAU" width="80" height="80" class="d-inline-block align-top" >
    <br>

    <b>Nombre:</b> {{ $pet->name }} <br>
    <b>Edad:</b>  {{ $pet->age}} años<br>
    <b>Peso:</b>  {{ $pet->weight_kg}} Kilogramos<br>
    <b>Propietario:</b> {{$pet->owner->full_name}} <br>

</div>





<style>
    
    .form-container {
        max-width: 400px; 
        margin: 0 auto; 
        padding: 20px; 
        border: 1px solid #ddd; 
        border-radius: 5px; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        background-color: #fff; 
    }
    

    .form-container h2 {
        font-size: 24px; 
        margin-bottom: 20px; 
        text-align: center; 
    }
    

    .form-container label, 
    .form-container input[type="text"], 
    .form-container input[type="password"] {
        display: block; 
        width: 100%; 
        margin-bottom: 10px; 
    }
    

</style>

@endsection
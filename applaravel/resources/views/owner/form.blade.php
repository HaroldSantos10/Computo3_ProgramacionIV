    
    <div class="form-container">

        <h5 class="text-center">{{ $nombreVista }}</h5>

        <label for = "">Nombre</label> 
        <input type="text" name="full_name" id="full_name" value="{{ isset($owner)?$owner->full_name:'' }}"/>
        
        <label for="">Edad</label> 
        <input type="number" name="age" id="age" value="{{ isset($owner)?$owner->age:'' }}" />
        
        <label for = "">Email</label> 
        <input type="text" name="email" id="email" value="{{ isset($owner)?$owner->email:'' }}">
        <!--mostrar propietarios-->

        <div class="mb-3">
            <br>
            <button class="btn btn-secondary text-center" type="submit">Guardar</button>
        </div>
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
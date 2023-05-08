    <div class= "form-container" >
        
        <h5 class="text-center">{{ $nombreVista }}</h5>
   
        <label for = "">Nombre</label> 
        <input type="text" name="name" id="name" value="{{ isset($pet)?$pet->name:'' }}" />
        @error('name')
            <div class= "error-message">{{ $message }} </div>
        @enderror

        <label for="">Edad</label> 
        <input type="number" name="age" id="age" value="{{ isset($pet)?$pet->age:'' }}" />
        @error('age')
            <div class= "error-message">{{ $message }} </div>
        @enderror
        
        <label for = "">Peso (kg)</label> 
        <input type="text" name="weight_kg" id="weight_kg" value="{{ isset($pet)?$pet->weight_kg:'' }}">
        @error('weight_kg')
            <div class= "error-message">{{ $message }} </div>
        @enderror
        
        <!--mostrar propietarios-->
        <label for="">Propietario</label>
        <select name="owner_id">
            <option value=""></option>
            @foreach($owners as $own)
            <option value="{{$own->id}}" {{ isset($pet->owner_id) == $own->id ? 'selected' : '' }}>
                {{$own->full_name}}
            </option>
            @endforeach
        </select>
        @error('owner_id')
        <div class= "error-message">{{ $message }} </div>
        @enderror

        <div class="mb-3">
            <br>
            <button class="btn btn-secondary text-center" type="submit">Guardar</button>
        </div>


        
    </div>

    <style>
        .error-message{
            color:red
        }
            
    
    </style>

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




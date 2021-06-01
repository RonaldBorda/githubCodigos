<h1> {{$modo}} datos de calzados</h1>
<br>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    </div>

    

@endif
<div class="form-group" >
    <label for="">Calzado:</label>
    <input type="text" class="form-control" name="Calzado" value="{{ isset($calzado->calzado)?$calzado->calzado:'' }}" id="Calzado">
    
</div>

<div class="form-group" >
<label for="Tipo">Tipo:</label>
<select name="Tipo" class="form-control" value="{{ isset($calzado->tipo)?$calzado->tipo:'' }}" di="Tipo">
    <option>Elegante</option>
    <option>Casual</option>
    <option>Sport</option>
    <option>Otros</option>
</select>
</div>

<div class="form-group" >
<label for="Color">Color:</label>
<input type="text" class="form-control" name="Color" value="{{ isset($calzado->color)?$calzado->color:'' }}" id="Color">
</div>

<div class="form-group" >
<label for="Talla">Talla:</label>
<input type="number" class="form-control" name="Talla" value="{{ isset($calzado->talla)?$calzado->talla:'' }}" id="Talla">
</div>

<div class="form-group" >
<label for="Marca">Marca:</label>
<input type="text" class="form-control" name="Marca" value="{{ isset($calzado->marca)?$calzado->marca:'' }}" id="Marca">
</div>

<div class="form-group" >
<label for="Genero">Genero:</label>
<select name="Genero" class="form-control" value="{{ isset($calzado->genero)?$calzado->genero:'' }}" id="Genero">
    <option>Masculino</option>
    <option>Femenino</option>
    <option>Unisex</option>
</select>
</div>

<div class="form-group" >
<label for="Edad">Edad:</label>
<select name="Edad" class="form-control" value="{{ isset($calzado->edad)?$calzado->edad:'' }}" id="Edad">
    <option>Niño</option>
    <option>Joven</option>
    <option>Adulto</option>
</select>
</div>

<input class="btn btn-success" type="submit" value=" {{$modo}} datos">
<a class="btn btn-primary" href="{{ url('calzado/') }}">Regresar</a>

@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/calzado/'.$calzado->id) }}" method="POST">
@csrf 
{{method_field('PATCH')}}

@include('calzado.form',['modo'=>'Editar']);
</form>
</div>
@endsection

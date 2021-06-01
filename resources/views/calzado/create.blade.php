@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/calzado') }}" method="post">
@csrf 
@include('calzado.form',['modo'=>'Crear']);

</form>
</div>
@endsection
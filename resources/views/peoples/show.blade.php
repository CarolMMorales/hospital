@extends('layouts.app')

@section('content')
    <div class="container">
        <h1> Nombre: {{$people->name}}</h1>
        <p><b>Edad:</b>{{$people->age}}</p>
        <p><b>Genero:</b>{{$people->genter}}</p>
        <a name="" id="" class="btn btn-primary" href="{{route('peoples.edit', $people->id)}}" role="button">Editar</a>
    </div>
@endsection

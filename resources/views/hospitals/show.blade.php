@extends('layouts.app')

@section('content')
    <div class="container">
        <h1> Doctor: {{$doctor->name}}</h1>
        <p><b>Especialidad:</b>{{$doctor->speciality}}</p>
        <a name="" id="" class="btn btn-primary" href="{{route('doctors.edit', $doctor->id)}}" role="button">Editar</a>
    </div>
@endsection
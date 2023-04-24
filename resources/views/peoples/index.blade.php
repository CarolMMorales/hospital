@extends('layouts.app')
@section('content')
<div class="table-responsive">
    <a id="" class="btn btn-primary" href="{{route('peoples.create')}}" role="button">Crear</a>
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Genero</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peoples as $people)
        <tr class="">
            <td scope="row">{{$people->id}}</td> {{-- interpolacion  --}}
            <td>{{$people->name}}</td>
            <td>{{$people->age}}</td>
            <td>{{$people->genter}}</td>
            <td><div class="btn-group" role="group" aria-label="Button group name">
                <a href="{{route('peoples.show', $people->id)}}"><button type="button" class="btn btn-success">Detalles</button></a>
                <form action="{{route('doctors.destroy',$people->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div></td>
        </tr>
        @endforeach

        </tbody>

    </table>
</div>
@endsection

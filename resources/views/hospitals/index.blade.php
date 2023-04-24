@extends('layouts.app')
@section('content')
<div class="table-responsive">
    {{-- <a id="" class="btn btn-primary" href="{{route('estados.create')}}" role="button">Crear</a> --}}
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">doctores</th>
                <th scope="col">Pacientes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estados as $estado)
        <tr class="">
            <td scope="row">{{$estado->id}}</td> {{-- interpolacion  --}}
            <td>{{$estado->estado}}</td>
            <td><div class="btn-group" role="group" aria-label="Button group name">
                <a href="{{route('estados.show', $estado->id)}}"><button type="button" class="btn btn-success">Detalles</button></a>
                <form action="{{route('estados.destroy',$estado->id)}}" method="post">
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
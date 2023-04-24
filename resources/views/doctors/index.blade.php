@extends('layouts.app')
@section('content')
<div class="table-responsive">
    <a id="" class="btn btn-primary" href="{{route('doctors.create')}}" role="button">Crear</a>
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">especialidad</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
        <tr class="">
            <td scope="row">{{$doctor->id}}</td> {{-- interpolacion  --}}
            <td>{{$doctor->name}}</td>
            <td>{{$doctor->speciality}}</td>
            <td><div class="btn-group" role="group" aria-label="Button group name">
                <a href="{{route('doctors.show', $doctor->id)}}"><button type="button" class="btn btn-success">Detalles</button></a>
                <form action="{{route('doctors.destroy',$doctor->id)}}" method="post">
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

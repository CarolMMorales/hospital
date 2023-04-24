@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('peoples.update', $people->id)}}" method="POST" >
            @csrf
            @method('PUT')
            <div class="mb-3 mt-3">
              <label for="text" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="text" placeholder="texto" name="name" value="{{$people->name}}">
              <label for="text" class="form-label">Edad:</label>
              <input type="text" class="form-control" id="text" placeholder="texto" name="age" value="{{$people->age}}">
              <label for="text" class="form-label">Genero:</label>
              <input type="text" class="form-control" id="text" placeholder="texto" name="genter" value="{{$people->genter}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection

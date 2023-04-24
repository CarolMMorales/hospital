@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('peoples.store')}}" method="POST" >
            @csrf
            <div class="mb-3 mt-3">
              <label for="text" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="text" placeholder="texto" name="name">
              <label for="text" class="form-label">Edad:</label>
              <input type="text" class="form-control" id="text" placeholder="texto" name="age">
              <div class="mb-3">
                <label for="" class="form-label">Genero</label>
                <select class="form-select form-select-lg" name="genter" id="">
                    <option selected>Genero</option>
                    <option value="">Masculino</option>
                    <option value="">Femenino</option>
                    <option value="">No definido</option>
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection

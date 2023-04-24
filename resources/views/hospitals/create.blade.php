@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('doctors.store')}}" method="POST" >
            @csrf
            <div class="mb-3 mt-3">
              <label for="text" class="form-label">Doctor:</label>
              <input type="text" class="form-control" id="text" placeholder="texto" name="name">
              <label for="text" class="form-label">Especialidad:</label>
              <input type="text" class="form-control" id="text" placeholder="texto" name="speciality">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
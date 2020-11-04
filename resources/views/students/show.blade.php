@extends('layout.main')

@section('title', 'Detail Mahasiswa')

@section('content')
    <div class="container text-center bg-white">
        <div class="row">
            <div class="mx-auto mt-4 col-md-5">
                <div class="card">
                    <img class="card-img-top" height="300" src="/storage/{{ $student->picture }}">
                    <div class="card-body">
                    <h5 class="card-title"> {{ $student->name }} </h5>
                    <p class="card-text"> {{ $student->nim }} </p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"> {{ $student->email }} </li>
                  <li class="list-group-item"> {{ $student->majors }} </li>
                </ul>
                <div class="card-body">
                  <a href="/student/{{ $student->id }}/edit" class="btn btn-primary btn-sm"> Edit </a>
                  <form action="/student/{{ $student->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"> Delete </button>
                  </form>
                  <a href="/"> Back </a>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
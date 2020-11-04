@extends('layout.main')
@section('title', 'Form Edot Data')

@section('content')
    <div class="container p-4">
        <h1> Edit Data </h1>
        <div class="row">
            <div class="col-md-8">
                <form method="POST" action="/student/{{ $student->id }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="nim"> NIM </label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ $student->nim }}">
                        @error('nim')
                            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama"> Nama </label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $student->name }}">
                        @error('nama')
                            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email"> Email </label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $student->email }}">
                        @error('email')
                            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan"> Jurusan </label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{ $student->majors }}">
                        @error('nim')
                            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pict"> Foto Profil </label> <br>
                        <img src="/storage/{{ $student->picture }}" class="mb-3" width="100" height="100">
                        <input type="file" class="form-control-file @error('pict') is-invalid @enderror" id="pict" name="pict">
                        @error('pict')
                            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>
                    <a href="/" class="btn btn-info"> Back </a>
                    <button type="submit" class="btn btn-primary">Save</button>
              </form>
            </div>
        </div>
    </div>
@endsection
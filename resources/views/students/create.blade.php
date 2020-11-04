@extends('layout.main')
@section('title', 'Form Tambah Data')

@section('content')
    <div class="container p-4">
        <h1> Tambah Data </h1>
        <div class="row">
            <div class="col-md-8">
                <form method="POST" action="/" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nim"> NIM </label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim') }}">
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
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
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
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value={{ old('email') }}>
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
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{ old('jurusan') }}">
                        @error('jurusan')
                            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pict"> Foto Profil </label>
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
                    <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
        </div>
    </div>
@endsection
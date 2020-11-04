@extends('layout.main')
@section('title', 'Daftar Mahasiswa')

@section('content')
    <div class="container text-center p-4 bg-white">
        @if (session()->has('info'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('info') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <h1> Daftar Mahasiswa </h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
               <table class="table">
                   <thead>
                       <tr>
                           <th> Nama </th>
                           <th> Action </th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach($students as $student)
                       <tr>
                           <td> {{ $student->name }} </td>
                           <td>
                              <a href="student/{{ $student->id }}"> Detail </a>
                           </td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>
               <div class="d-flex justify-content-center">
                   {{ $students->links() }}
               </div>
            </>
        </div>
    </div>
@endsection
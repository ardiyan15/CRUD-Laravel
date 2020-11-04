<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (session()->has('info'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('info') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <h1> Login Form </h1>
    <form action="/login" method="POST">
        @csrf
        <label for="username"> Username </label> <br>
        <input type="text" id="username" name="username" value="{{ old('username') }}"> <br>
        @error('username')
            <p style="color: red"> {{ $message }} </p>
        @enderror
        <button type="submit"> Login </button>
    </form>
</body>
</html>
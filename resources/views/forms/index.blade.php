<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form method="post" action="{{ route('formSubmit') }}">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="pass">
        <button>Login</button>
    </form>
</body>
</html>

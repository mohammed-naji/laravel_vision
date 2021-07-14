<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form3 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


    {{-- @if ($errors->any() > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}


    <div class="container my-5">
        <form action="{{ route('form4Submit') }}" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Name" />
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <input type="text" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ old('age') }}" placeholder="Age" />
                @error('age')
                <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>


            <div class="mb-3">
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" />
                @error('email')
                <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="phone" />
                @error('phone')
                <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <button class="btn btn-success px-5">Send</button>
        </form>
    </div>

</body>
</html>

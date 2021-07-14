<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form3 </title>
</head>
<body>

    @isset($image)
    <img src="{{ asset('uploads/'.$image ) }}" alt="">
    @endisset


    <form action="{{ route('form3Submit') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" />
        <button>Upload</button>
    </form>

</body>
</html>

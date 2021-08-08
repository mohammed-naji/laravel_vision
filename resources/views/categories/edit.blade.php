<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Posts</title>
</head>
<body>

    <div class="container my-5">
        <h2>Update Category</h2>
        @include('categories.errors')
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-4">
                <input type="text" class="form-control" name="name" placeholder="Title" value="{{ $category->name }}" />
            </div>

            <button class="btn btn-info px-5 btn-lg">Update</button>
        </form>
    </div>


</body>
</html>

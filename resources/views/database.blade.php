<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">

        <form action="{{ route('save') }}" method="post">
            @csrf
            <input type="text" name="title" placeholder="Title" class="form-control mb-3" />
            <textarea class="form-control mb-3" placeholder="Content" name="content" rows="5"></textarea>
            <button class="btn btn-success">Add</button>
        </form>

        <table class=" mt-5 table table-bordered">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    {{-- <td>{{ $post->id }}</td> --}}
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                </tr>
            @endforeach
        </table>
    </div>

</body>
</html>

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
        <div class="d-flex mb-5 justify-content-between">
            <h2>All Posts</h2>
            <a href="{{ route('create') }}" class="btn btn-success">Add New Post</a>
        </div>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th style="width: 200px">Created At</th>
                <th style="width: 150px">Action</th>
            </tr>


            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                        <a
                        onclick="return confirm('are you sure?')"
                        href="{{ route('delete', $post->id) }}" class="btn btn-danger btn-sm"
                        >Delete</a>
                    </td>
                </tr>
            @endforeach

        </table>
        {{ $posts->links() }}
    </div>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
</head>
<body>

    <div class="container my-5">
        <h1>All posts</h1>
        <table class="table table-bordered table-hover table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td><img src="{{ $post->image }}" alt=""></td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach


        </table>
    </div>

</body>
</html>

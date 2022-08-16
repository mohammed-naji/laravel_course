<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
</head>
<body>

    <div class="container my-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Add Post</h1>
            <a class="btn btn-success" href="{{ route('posts.index') }}">All Posts</a>
        </div>

        @include('forms.error')

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Title" name="title" />
            </div>

            <div class="mb-3">
                <label>Image</label>
                <input type="file" class="form-control"  name="image" />
            </div>

            <div class="mb-3">
                <label>Content</label>
                <textarea id="mytextarea" name="content"></textarea>
            </div>

            <button class="btn btn-success px-5">Add</button>
        </form>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.2/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: '#mytextarea'
        });
    </script>

</body>
</html>

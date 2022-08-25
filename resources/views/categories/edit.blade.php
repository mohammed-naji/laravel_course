<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
</head>
<body>

    <div class="container my-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Edit Category</h1>
            <a class="btn btn-success" href="{{ route('categories.index') }}">All Categories</a>
        </div>

        @include('forms.error')

        <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $category->name }}" />
            </div>

            <button class="btn btn-info px-5">Update</button>
        </form>

    </div>

</body>
</html>

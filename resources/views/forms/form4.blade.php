<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Upload your CV</h1>
        {{-- @dump($errors) --}}
        {{-- @dump($errors->any()) --}}
        {{-- @dump($errors->all()) --}}


        <form action="{{ route('form4_data') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name" />
            </div>

            <div class="mb-3">
                <label>CV</label>
                <input type="file" class="form-control" placeholder="Name" name="cv" />
            </div>
            <button class="btn btn-dark w-100">Upload</button>
        </form>
    </div>
</body>
</html>

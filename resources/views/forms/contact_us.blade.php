<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h1>Contact Us</h1>
        @include('forms.error')
        <form action="{{ route('contact') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input name="name" type="text" placeholder="Name" class="form-control" />
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input name="email" type="email" placeholder="Email" class="form-control" />
            </div>

            <div class="mb-3">
                <label>Phone</label>
                <input name="phone" type="text" placeholder="Phone" class="form-control" />
            </div>

            <div class="mb-3">
                <label>CV</label>
                <input name="cv" type="file" class="form-control" />
            </div>

            <div class="mb-3">
                <label>Message</label>
                <textarea name="message" rows="5" placeholder="Message" class="form-control"></textarea>
            </div>

            <button class="btn btn-dark px-5">Send</button>
        </form>

    </div>
</body>
</html>

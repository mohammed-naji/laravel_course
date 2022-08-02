<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h1>Register Form</h1>

        {{-- @dump($errors) --}}
        {{-- @dump($errors->any()) --}}
        {{-- @dump($errors->all()) --}}

        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{ route('form3_data') }}" method="post">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Name" name="name" />
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" />
                @error('email')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" />
                @error('password')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Confirm Password</label>
                <input class="form-control @error('confirm_password') is-invalid @enderror" type="password" placeholder="Confirm Password" name="confirm_password" />
                @error('confirm_password')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="text-center">
                <button class="btn btn-primary w-25">Send</button>
            </div>

        </form>
    </div>
</body>
</html>

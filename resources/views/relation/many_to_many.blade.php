<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h1>Welcome {{ $std->name }}</h1>
        {{-- @dump($std->courses->find(5)) --}}
        <form action="{{ route('many_to_many_data') }}" method="post">
        @csrf
        <table class="table">
            <tr>
                <th></th>
                <th>Course Name</th>
                <th>Course Price</th>
            </tr>
            @foreach ($courses as $course)
                <tr>
                    <td><input {{ $std->courses->find($course->id) ? 'checked' : '' }} type="checkbox" name="course_id[]" value="{{ $course->id }}"></td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->price }}</td>
                </tr>
            @endforeach
        </table>
        <button class="btn btn-dark px-5">Register</button>
    </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5 text-center">
        <h1>{{ $post->title }}</h1>
        <img class="mb-5" width="40%" src="{{ asset('uploads/'.$post->image) }}" alt="">
        {!! $post->content !!}
        <hr>
        <h2>All Comments ({{ $post->comments->count() }})</h2>
        <div class="row justify-content-center text-start">
            <div class="col-md-8">

                @if ($post->comments->count() == 0)
                    <p>There is no comments yet</p>
                @endif

                @foreach ($post->comments as $comment)
                <div class="comment-single">
                    <div class="d-flex align-items-center">
                        <h4>{{ $comment->user->name }}</h4>
                        <small class="mx-3">{{ $comment->created_at->diffForHumans() }}</small>
                    </div>
                    <p>{{ $comment->comment }}</p>
                </div>
                @endforeach

                <h4>Add New Comment</h4>
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <textarea class="form-control mb-3" placeholder="Place your comment here.." rows="5" name="comment"></textarea>
                    <button class="btn btn-dark">Submit</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>

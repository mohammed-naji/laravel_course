<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
</head>
<body>

    <div class="container my-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>All categories</h1>
            <a class="btn btn-success" href="{{ route('categories.create') }}">Add new category</a>
        </div>

        @if ( session('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
        @endif


        <form action="{{ route('categories.index') }}" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search here .." name="search" value="{{ request()->search }}">
                <select name="count">
                    <option {{ request()->count == 10 ? 'selected' : '' }} value="10">10</option>
                    <option {{ request()->count == 15 ? 'selected' : '' }} value="15">15</option>
                    <option {{ request()->count == 20 ? 'selected' : '' }}  value="20">20</option>
                    <option {{ request()->count == 25 ? 'selected' : '' }}  value="25">25</option>
                    <option {{ request()->count == $categories->total() ? 'selected' : '' }}  value="{{ $categories->total() }}">All</option>
                </select>
                <button class="btn btn-dark px-5" id="button-addon2">Search</button>
              </div>
        </form>

        <table class="table table-bordered table-hover table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    {{-- <a href="{{ route('categories.destroy', $category->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> --}}
                    <form class="d-inline" action="{{ route('categories.destroy', $category->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{-- {{ $categories->appends(['search' => request()->search, 'count' => request()->count])->links() }} --}}
        {{ $categories->appends($_GET)->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if (session('msg'))
            Swal.fire(
            'Good job!',
            '{{ session("msg") }}',
            'success'
            )
        @endif

    </script>


    <script>
        let alert = document.querySelector('.alert');
        // console.log(alert);
        setTimeout(() => {
            // alert.style.display = 'none';
            alert.remove();
        }, 3000);

        // setInterval(() => {
        //     console.log('Interval');
        // }, 1000);
    </script>

</body>
</html>

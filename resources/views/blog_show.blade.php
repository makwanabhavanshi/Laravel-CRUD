<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <table class="table  table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Blog Name</th>
                <th scope="col">blog article author</th>
                <th scope="col">written date</th>
                <th scope="col">blog released date</th>
                <th scope="col">blog description</th>
                <th scope="col">meta description1</th>
                <th scope="col">blog image</th>
                <th scope="col">meta description2</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
            <tr>
                <th scope="row">{{ $item -> id }}</th>
                <td>{{ $item -> blog_title }}</td>
                <td>{{ $item -> blog_article_author }}</td>
                <td>{{ $item -> written_date }}</td>
                <td>{{ $item -> blog_released_date }}</td>
                <td>{{ $item -> blog_description }}</td>
                <td>{{ $item -> meta_description1 }}</td>
                <td>{{ $item -> blog_image }}</td>
                <td>{{ $item -> meta_description2 }}</td>
                <td>
                    <a href="delete/{{$item -> id }}" class="btn btn-danger btn-xs text-white">Delete</a>
                    <a href="edit/{{$item -> id }}" class="btn btn-success btn-xs text-white mt-2">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>

</body>
</html>

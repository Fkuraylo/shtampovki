<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Title</title>
</head>
<body>


<div class="container">

    <div class="row">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('product.index') }}">Index Action</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                           href="{{ route('product.create') }}">Create Action</a>

                    </li>
                    <li>
                        <a class="nav-link active" aria-current="page"
                           href="{{ route('product.show', 1) }}">Show Action</a>
                    </li>
                </ul>


            </div>
        </nav>




        @yield('zalupa')

        @yield('content')


    </div>


</div>

<div>

</div>

</body>
</html>

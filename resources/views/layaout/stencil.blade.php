<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}
    <link rel="stylesheet" href="../resources/css/stencil.css">

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <header class="container-fluid">
        <nav class="align-items-center d-flex align-items-center justify-content-between">
            <a href="" class="">
                <i class="bi bi-code-slash"></i>
            </a>
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>@yield('main')</main>
    <footer>
        <div class="container">
            <div class="row justify-content-left align-items-center">
                <div class="col-2 col-md-1">
                    <i class="bi bi-github"></i>
                </div>
                <div class="col-2 col-md-1">
                    <i class="bi bi-youtube"></i>
                </div>
                <div class="col-2 col-md-1">
                    <i class="bi bi-twitter-x"></i>
                </div>
            </div>
            <div class="row justify-content-left align-items-center">
                <div class="col-4 col-md-2">
                    Support
                </div>
                <div class="col-4 col-md-2">
                    Terms Of Use
                </div>
                <div class="col-4 col-md-2">
                    Privacy
                </div>
                <div class="col-4 col-md-2">
                    License
                </div>
            </div>
        </div>
    </footer>

    {{-- BOOTSTRAP --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
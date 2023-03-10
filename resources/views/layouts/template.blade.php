<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a942f5af8a.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{ asset('images/logo2.jpg') }}" />
    <title> @yield('title')</title>
</head>

<body class="bg-black">
    <div class="main-content">
        @yield('content')
    </div>

    <footer class="bg-black border-top border-secondary fixed-bottom">
        <!-- Copyright -->
        <div class="text-center p-2 text-white">
            <a class="text-warning " href="https://mdbootstrap.com/">¬©CINEPOLIS</a>
            Corrientes, Argentina
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>

{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Espace')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
        }
        .btn-orange {
            background-color: #f2541b;
            color: #fff;
        }
        .btn-orange:hover {
            background-color: #d6450d;
        }
    </style>

</head>
<body class="">

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    
    @include('partials.footer')
    
</body>

</html>

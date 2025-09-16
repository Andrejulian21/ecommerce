<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
     <style>
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }

        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-link {
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #0d6efd !important;
        }

        .badge-cart {
            position: absolute;
            top: -8px;
            right: -8px;
            font-size: 0.7rem;
        }

        .cart-icon-container {
            position: relative;
            display: inline-block;
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            border-radius: 10px;
        }

        .search-form {
            min-width: 300px;
        }

        @media (max-width: 991px) {
            .search-form {
                min-width: 100%;
                margin: 1rem 0;
            }
        }

    </style>

     @yield('css')
</head>
<body>
    @include('layouts.navbar')


    @yield('content')


    @include('layouts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>

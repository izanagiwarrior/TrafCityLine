<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            /* Set the fixed height of the footer here */
            line-height: 60px;
            /* Vertically center the text there */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container text-white">
            <a class="navbar-brand" href=""><img src="{{asset('image/traf.png')}}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/aboutus">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/informasi" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Information
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/informasi">Tracking</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row justify-content-center align-items-center">
            <div class="col">
                <img width="80" height="80" src="{{asset('image/traf.png')}}">
            </div>
            <div class="col">
                Gambir - Tanah Abang
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                Waktu keberangkatan
            </div>
            <div class="col">
                15.30
            </div>
        </div>
        <div class="row">
            <div class="col">
                Waktu kedatangan
            </div>
            <div class="col">
                16.45
            </div>
        </div>
        <div class="row">
            <div class="col">
                Kecepatan kereta
            </div>
            <div class="col">

            </div>
        </div>
    </div>

    <footer class="bg-dark text-center text-lg-start text-white fixed-bottom">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Designed by Traf City Line team
        </div>
        <!-- Copyright -->
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>
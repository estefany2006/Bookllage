<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #F6F4EB;">
        <div class="container">
            <a href="#" class="navbar-brand"> <span class="text-primary">Boo</span>ket</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarS"
                aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarS">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#" class="narbar-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="narbar-link">About us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="narbar-link">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="narbar-link">Login</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <div id="caruselE" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselE" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselE" data-bs-slide-to="1" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselE" data-bs-slide-to="2" class="active" aria-current="true"
                aria-label="Slide 1"></button>

        </div>

        <div class="carosuel-inner">
            <div class="carousel-inner active">
                <img src="{{ URL('/images/medicina.jfif') }}" class="d-block w-100" alt="">
                <div class="carousel-caption">
                    <h5>Let's give books a second chance</h5>
                    <a href="#" class="btn btn-primary mt-3">Get strated</a>
                </div>
            </div>
        </div>
        <div class="carosuel-inner">
            <div class="carousel-inner active">
                <img src="{{ URL('/images/ingenieia.jfif') }}" class="d-block w-100" alt="">
                <div class="carousel-caption">
                    <h5>Let's give books a second chance</h5>
                    <a href="#" class="btn btn-primary mt-3">Get strated</a>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselE" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselE" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</body>

</html>

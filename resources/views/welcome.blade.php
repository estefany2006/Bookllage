<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        .d-item {
            height: 100%;
        }

        .d-img {
            height: 100%;
            object-fit: cover;
            filter: brightness(0.6);
        }

        .universidades-fila {
            width: 100%;
            text-align: center;
        }

        @media (max-width: 576px) {
            .icono-wrap {
                flex-wrap: wrap;
                justify-content: center;

            }
        }

        @media (max-width: 768px) {

            #intro,
            #equipo {
                width: 90%
            }

            #equipo p {
                display: none;
            }


        }

        #seccion-contacto {
            background-color: #1b2a4e;
            min-height: 500px;
            position: relative;
        }

        #bg-contacto {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        #contenedor-formulario {
            background: #fbfafa;
            border-radius: 5px;
            max-width: 500px;
        }

        #titulo-formulario {
            color: #3f3f3f;
        }
    </style>
</head>

<body>
<div class="overflow-x-hidden">
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="{{ asset('img/logo.png') }}" class="img-fluid"
                                                   width="80px" height="80px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    @guest

                        <li class="nav-item">
                            <a class="nav-link " href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Our work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                    @endguest

                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                Univerisdad
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">ESEN</a></li>
                                <li><a class="dropdown-item" href="#">UES</a></li>
                                <li><a class="dropdown-item" href="#">Matias delgado</a></li>
                                <li><a class="dropdown-item" href="#">UCA</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                Carreras
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Medicina</a></li>
                                <li><a class="dropdown-item" href="#">Ciencias naturales</a></li>
                                <li><a class="dropdown-item" href="#">Ingenieria y Tecnologia</a></li>
                            </ul>
                        </li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link" href="#">contactanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" style="margin-top: 79.55px">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="height: calc(100vh - 80px)">

            <div class="d-item carousel-item active ">
                <img src="{{ asset('img/img-1.jpg') }}" class="d-block w-100 d-img" alt="slider 1">
                <div class="carousel-caption top-0 mt-4">
                    <p class="mt-5 fs-3 text-uppercase">
                        Let's give books
                    </p>
                    <h1 class="display-1 fw-bolder text-capitalize">second chance</h1>
                    <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Get strated</button>
                </div>
            </div>

            <div class="d-item carousel-item">
                <img src="{{ asset('img/img-2.jpg') }}" class="d-block w-100 d-img" alt="slider 1">
                <div class="carousel-caption top-0 mt-4">
                    <p class="mt-5 fs-3 text-uppercase">
                        Let's give books
                    </p>
                    <h1 class="display-1 fw-bolder text-capitalize">second chance</h1>
                    <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Get strated</button>
                </div>
            </div>

            <div class="d-item  carousel-item">
                <img src="{{ asset('img/img-3.jpg') }}" class="d-block w-100 d-img" alt="slider 1">
                <div class="carousel-caption top-0 mt-4">
                    <p class="mt-5 fs-3 text-uppercase">
                        Let's give books
                    </p>
                    <h1 class="display-1 fw-bolder text-capitalize">second chance</h1>
                    <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Get strated</button>
                </div>
            </div>

        </div>
    </div>


    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

    <section class="introduccion my-5 ">
        <div class="container">
            <div class="row w-75 mx-auto my-5 introduccion">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <p>Welcome we are booket. Your online literary destination where the magic of words comes to
                        life. In an increasingly digitized world, we continue to believe in the power of books to
                        transport us to unknown worlds, broaden our horizons and nourish our minds. Let us bring
                        your passion for reading directly into your hands, offering you a wide selection of titles
                        spanning genres, eras and cultures.
                    <p> Imagine a place where you can generate profits where you can find all kinds of categories of
                        college books. Our website offers you all this among other things. </p>
                    </p>
                </div>
                <div class="col-6 my-5s">
                    <img class="img-fluid rounded" src="{{ asset('img/about us.jpg') }}" alt="nosotros1">
                </div>
            </div>
        </div>
    </section>

    <section class="about-us">
        <h2 class="text-center my-5">About us</h2>
        <div class="container">
            <div class="row w-75 mx-auto my-5 about-us">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <p>We are a team that was born in the years of 2023, We are students of Centro Superate
                        Fundación Poma We are currently Junior, Promotion 2024. Shaped by five young people who are:
                    </p>
                    <ul class="list-group list-group-flush list-group-numbered">
                        <li class="list-group-item">Estefany Mancia belongs to marketing</li>
                        <li class="list-group-item">Anibal Méndez belongs to back-end</li>
                        <li class="list-group-item">Diana Pérez belongs to front-end</li>
                        <li class="list-group-item">Kelvin Gamez belongs to back-end</li>
                        <li class="list-group-item">Ana García belongs to front-end</li>
                    </ul>
                    <p class="my-5">Welcome to our book store! We are Booket, a group of young people eager to
                        facilitate the discovery of university books and entertainment, passionately dedicated to
                        providing you with an exceptional experience in the world of literature. From timeless
                        classics to the latest novelties, our collection has been handpicked to satisfy the tastes
                        of avid readers like you. We pride ourselves on being more than just booksellers; We are
                        lovers of stories, advocates of education and believers in the transformative power of the
                        printed word. Our mission is to provide a haven for book lovers, where they can explore new
                        worlds, meet fascinating characters, and become immersed in captivating narratives.
                    </p>
                </div>
                <div class="col-6">
                    <img class="img-fluid rounded" src="{{ asset('img/about us.jpg') }}" alt="Aboutus">
                </div>
            </div>
        </div>
    </section>

    <section class="our-work">
        <h2 class="text-center my-5">Our work</h2>
        <div class="container">
            <div class="row w-75 mx-auto my-5 our-work">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <p>Welcome to our presentation on the exciting job of selling books! In this
                        project, we will
                        explore the exciting world of bookselling, examining how bookselling is not only a
                        profitable business, but also a window into knowledge, culture, and imagination. As we go
                        forward we will know all the categories that our website offers. We are in a world where
                        this constant evolution, where technology is transforming the way we access information, the
                        act of selling books continues to be a tangible and powerful way to share ideas and foster
                        learning.
                    <p> In this paper, we'll explore how to carefully select a variety of titles to meet our
                        customers' tastes and needs, how to create enriching experiences in our store (whether
                        physical or online), and how to use marketing strategies to reach a broader audience. . We
                        will also highlight the intrinsic value of books as vehicles for learning, entertainment,
                        and personal growth. We will explore how our efforts translate not only into business
                        transactions, but also in fostering a more educated, informed, and thoughtful society. So
                        join us on this journey through books. </p>
                    </p>
                </div>
                <div class="col-6">
                    <img class="img-fluid rounded" src="{{ asset('img/about us.jpg') }}" alt="Ourwork">
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid mt-5">
        <div class="row w-75 mx-auto my-5 universidades-fila">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <a href="https://www.ujmd.edu.sv/"><img src="{{ asset('img/delgado.png') }}"
                                                        alt="Dr.MatiasJoséDelgado" width="180c" height="160"></a>
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Universidad Dr. José Matías Delgado</h3>
                    <p class="px-4">La Univerisdad Dr. José Matías Delago (UJMD) es una universidad privada
                        ubicada en La
                        Libertad, El Salvador.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <a href="https://www.ues.edu.sv/"><img src="{{ asset('img/UES.jpg') }}" alt="ues"
                                                       width="180" height="160"></a>
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Universidad de El Salvador</h3>
                    <p class="px-4">La Univerisdad de El Salvador (UES) es la institución de educación superior
                        más grande y antigua de la República de El Salvador.</p>
                </div>
            </div>
        </div>
        <div class="row w-75 mx-auto my-5 universidades-fila">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <a href="https://www.esen.edu.sv/"><img src="{{ asset('img/ESEN.png') }}" alt="ESEN"
                                                        width="180" height="160"></a>
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Universidad La ESEN</h3>
                    <p class="px-4">La ESEN es una institución de educación superior, privada, sin fines de
                        lucro, ubicada en la ciudad de Santa Tecla, departamento de La Libertad, El Salvador.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <a href="https://uca.edu.sv/"><img src="{{ asset('img/UCA.png') }}" alt="UCA"
                                                   width="180" height="160"></a>
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Universidad Centroamericana José Siméon Cañas </h3>
                    <p class="px-4">La Universidad Centroamericana José Simeón Cañas, conocida simplemente como
                        UCA El Salvador, es un centro de educación superior jesuita salvadoreño, de capital privado
                        sin fines de lucro, también denominada como UCA.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="d-flex justify-content-center position-relative">
        <svg id="bg-contacto" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0099ff" fill-opacity="1"
                  d="M0,96L120,122.7C240,149,480,203,720,186.7C960,171,1200,85,1320,42.7L1440,0L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
            </path>
        </svg>
        <div class="container  border-top border-primary " style="max-width: 500px" id="contenedor-formulario">
            <div class="text-center mb-4" id="titulo-formulario">
                <div><img src="./img/support.png" alt="" class="img-fluid ps-5"></div>
                <h2>Contactanos</h2>
                <p class="fs-5">Estamos aqui para hacer realidad de tus proyectos</p>
            </div>

            <form method="POST" data-netlify="true" action="#">
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" name="email"
                           placeholder="nombre@ejemplo.com">
                </div>


                <div class="mb-3">
                    <input type="input" class="form-control" id="name" name="name"
                           placeholder="John Doe">
                </div>


                <div class="mb-3">
                    <input type="tel" class="form-control" name="phone" id="phone"
                           placeholder="Teléfono">
                </div>

                <div class="mb-3">
                    <textarea class="form-control" name="message" id="message" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class=" btn btn-primary w-100 fs-5">Enviar Mensaje</button>
                </div>
            </form>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
</body>

</html>

<x-layout>

    <x-nav.navbar />


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

        .card {
            width: 100%;
            border-radius: 6px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.2);
            transition: all 400ms ease;
        }

        .card-img-top {
            width: 60%;
            border-radius: 50%;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
        }

        .card {
            padding: 1.5em .5em .5em;
            text-align: center;
            border-radius: 2em;
            box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        }

        .card-tittle {
            font-weight: bold;
            font-size: 1.5em;
        }

        .card:hover {
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.4);
            transform: translate(-3%);
        }

        .btn-primary {
            border-radius: 2em;
            padding: .5em 1.5em;
        }

        .contenedor {
            display: flex;
            justify-content: center;
            margin-top: 35px;
            padding: 35px;
        }

        .img-1 {
            margin-right: 10px;
            width: 250px;
            height: 250px;
        }

        .img-2 {
            margin-left: 10px;
            width: 250px;
            height: 250px;
        }
    </style>

    <body>
        <div class="overflow-x-hidden" id="navbar">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" style="margin-top: 79.55px">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active"
                        aria-label="true"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="active"
                        aria-label="true"></button>
                </div>

                <div class="carousel-inner" style="height: calc(100vh - 80px)">
                    <div class="d-item carousel-item active ">
                        <img src="{{ asset('img/img-1.jpg') }}" class="d-block w-100 d-img" alt="slider 1">
                        <div class="carousel-caption top-0 mt-4">
                            <p class="mt-5 fs-3 text-uppercase">

                            </p>
                            <h1 class="display-1 fw-bolder text-capitalize">Welcome to BOOKET!</h1>
                            <a href="/login" class="btn btn-primary px-4 py-2 fs-5 mt-5">Get started</a>
                        </div>
                    </div>

                    <div class="d-item carousel-item">
                        <img src="{{ asset('img/img-2.jpg') }}" class="d-block w-100 d-img" alt="slider 1">
                        <div class="carousel-caption top-0 mt-4">
                            <p class="mt-5 fs-3 text-uppercase">

                            </p>
                            <h1 class="display-1 fw-bolder text-capitalize">Welcome to BOOKET!</h1>
                            <a href="/login" class="btn btn-primary px-4 py-2 fs-5 mt-5">Get started</a>
                        </div>
                    </div>

                    <div class="d-item  carousel-item">
                        <img src="{{ asset('img/img-3.jpg') }}" class="d-block w-100 d-img" alt="slider 1">
                        <div class="carousel-caption top-0 mt-4">
                            <p class="mt-5 fs-3 text-uppercase">

                            </p>
                            <h1 class="display-1 fw-bolder text-capitalize">Welcome to BOOKET!</h1>
                            <a href="/login" class="btn btn-primary px-4 py-2 fs-5 mt-5">Get started</a>
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

            <div class="container">


                <div class="row mx-auto my-5 align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <p style="text-align: justify; font-size: 120%">
                            BOOKET is a platform to find university books in a simple and fast way.
                            We are a team committed to education and believe in the importance of
                            learning. Imagine a space where you can get advantages and access to a
                            wide range of categories of university books. Our platform provides you
                            with all this, among other benefits. Join us in our mission to promote
                            education and help each other grow as learners and lovers of knowledge.
                        </p>
                    </div>
                    <div class="col-12 col-md-4">
                        <img class="img-fluid rounded" src="{{ asset('img/logo.png') }}" alt="nosotros1">
                    </div>
                </div>


                <div id="about_us" style="scroll-margin-top: 100px">
                    <h2 class="text-center my-5">About us</h2>
                    <div class="row mx-auto my-5 align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <p style="font-size: 120%; text-align:justify">
                                In the exciting year 2023, five young students from ¡Supérate!Fundación Poma
                                came together to bring BOOKET to life. We are focused on facilitating the search for
                                college books by providing an intuitive and efficient online platform. We pride
                                ourselves on being passionate advocates of education and firm believers in the
                                transformative power of learning. We are committed to giving the books you no longer
                                need another opportunity to serve the college community.
                            </p>
                        </div>
                        <div class="col-12 col-md-4">
                            <img class="img-fluid rounded" src="{{ asset('img/aboutus.jpg') }}" alt="Aboutus">
                        </div>
                        <div class="row row-cols-3 g-4 justify-content-center mt-5">
                            <div class="col-12 col-md-4">
                                <img src="{{ asset('img/Tatiana.jpg') }}"
                                    class="card-img-top d-flex justify-content-center" alt="Estefany" style="}">

                                    <div class="card-body mt-3 text-center">
                                        <h5 class="card-title">Estefany Mancia</h5>
                                        <p class="card-text">Marketing area.</p>
                                    </div>

                            </div>
                            <div class="col-12 col-md-4">
                                <div>
                                    <img src="{{ asset('img/Kelvin.jpg') }}"
                                     class="card-img-top d-flex justify-content-center" alt="Estefany">

                                    <div class="card-body mt-3 text-center">
                                        <h5 class="card-title">Kelvin Gamez</h5>
                                        <p class="card-text">Back-end area.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div>
                                    <img src="{{ asset('img/Diana.jpg') }}"
                                    class="card-img-top d-flex justify-content-center" alt="Estefany">
                                    <div class="card-body mt-3 text-center">
                                        <h5 class="card-title">Diana Pérez</h5>
                                        <p class="card-text">Front-end area.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div>
                                    <img src="{{ asset('img/Anibal.jpg') }}"
                                    class="card-img-top d-flex justify-content-center" alt="Estefany">
                                    <div class="card-body mt-3 text-center">
                                        <h5 class="card-title">Anibal Mendez</h5>
                                        <p class="card-text">Back-end area.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div>
                                    <img src="{{ asset('img/Yamileth.png') }}"
                                     class="card-img-top d-flex justify-content-center" alt="Estefany">
                                    <div class="card-body mt-3 text-center">
                                        <h5 class="card-title">Ana Garcia</h5>
                                        <p class="card-text">Front-end area.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row w-75 mx-auto my-5 universidades-fila container-fluid">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img src="{{ asset('img/mission.jpg') }}" alt="Dr.MatiasJoséDelgado" width="180c"
                            height="160"></a>
                        <div>
                            <h3 class="fs-5 mt-4 px-4 pb-1">Mission</h3>
                            <p class="px-4">Streamline the process of finding college books for students' higher
                                education, encouraging the reuse of college book establishing a secure and reliable
                                connection between college students, with the goal of reducing the financial burden on
                                college students at the same time. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img src="{{ asset('img/vision.jpg') }}" alt="ues" width="180" height="160"></a>
                        <div>
                            <h3 class="fs-5 mt-4 px-4 pb-1">Vision</h3>
                            <p class="px-4">Our vision is to reach the entire university community and be the first
                                choice for university students seeking academic resources, becoming a platform
                                recognized for the innovation and accessibility that "BOOKET" offers. We aspire to
                                positively impact the lives of college students by facilitating their access to the
                                material essential for academic success and learning.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-3">
                        <img src="{{ asset('img/inovation.jpg') }}" alt="Inovation" width="180c"
                            height="160"></a>
                        <div>
                            <h3 class="fs-5 mt-4 px-4 pb-1">Inovation</h3>
                            <p class="px-4">we are promoting a solution using technology, with the purpose of
                                effectively addressing the current challenges often faced by university students.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-3">
                        <img src="{{ asset('img/motivation.jpg') }}" alt="Motivation" width="180"
                            height="160"></a>
                        <div>
                            <h3 class="fs-5 mt-4 px-4 pb-1">Motivation</h3>
                            <p class="px-4">We aspire to incentivize to students to push them limits and reduce the incidence of university dropouts due to economic constraints.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-3">
                        <img src="{{ asset('img/overcoming.jpg') }}" alt="Ovecomming" width="180c"
                            height="160"></a>
                        <div>
                            <h3 class="fs-5 mt-4 px-4 pb-1">Overcoming</h3>
                            <p class="px-4">We wish to contribute to the field of higher education through the promotion of motivation.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-3">
                        <img src="{{ asset('img/Quality.jpg') }}" alt="Quality" width="180" height="160"></a>
                        <div>
                            <h3 class="fs-5 mt-4 px-4 pb-1">Quality</h3>
                            <p class="px-4">We are committed to offer products in good condition and high-quality service on our platform.</p>
                        </div>
                    </div>
                    <div class="offset-lg-3 col-lg-6 col-md-12 col-sm-12 mt-3">
                        <img src="{{ asset('img/Security.jpg') }}" alt="Security" width="180c"
                            height="160"></a>
                        <div>
                            <h3 class="fs-5 mt-4 px-4 pb-1">Security and confidence</h3>
                            <p class="px-4">Our goal is to ensure the integrity of user data and build trust in our platform.</p>
                        </div>
                    </div>

                </div>
                <div>
                </div >
                <div id="our_work" style="scroll-margin-top: 100px">
                    <h2 class="text-center my-5">Our work</h2>
                    <div class="row mx-auto my-5 align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <p style="font-size: 120%; text-align:justify">
                                At BOOKET, our passion is education and accessibility
                                to knowledge. We are proud to offer an online platform
                                that simplifies the search for college books, providing
                                students and lovers of learning a space where they can
                                access a wide variety of academic book categories. But
                                our work goes beyond being a search platform; we are
                                agents of change in the educational community. Every book
                                you find on BOOKET represents a second chance to inspire
                                others and expand the horizon of knowledge. We are committed
                                to fostering equal educational opportunities and contributing to
                                the empowerment of students everywhere.
                            </p>
                        </div>
                        <div class="col-12 col-md-4">
                            <img class="img-fluid rounded" src="{{ asset('img/us.jpg') }}" alt="Ourwork">
                        </div>
                    </div>
                </div>
                <div class="row w-75 mx-auto my-5 universidades-fila container-fluid">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <a href="https://www.ujmd.edu.sv/"><img src="{{ asset('img/delgado.png') }}"
                                alt="Dr.MatiasJoséDelgado" width="180c" height="160"></a>
                        <div>
                            <h3 class="fs-5 mt-4 px-4 pb-1">Universidad Dr. José Matías Delgado</h3>
                            <p class="px-4">La Univerisdad Dr. José Matías Delago (UJMD) es una universidad
                                privada
                                ubicada en La
                                Libertad, El Salvador.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <a href="https://www.ues.edu.sv/"><img src="{{ asset('img/UES.jpg') }}" alt="ues"
                                width="180" height="160"></a>
                        <div>
                            <h3 class="fs-5 mt-4 px-4 pb-1">Universidad de El Salvador</h3>
                            <p class="px-4">La Univerisdad de El Salvador (UES) es la institución de educación
                                superior
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
                            <p class="px-4">La ESEN es una institución de educación superior, privada, sin fines
                                de
                                lucro, ubicada en la ciudad de Santa Tecla, departamento de La Libertad, El
                                Salvador.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <a href="https://uca.edu.sv/"><img src="{{ asset('img/UCA.png') }}" alt="UCA"
                                width="180" height="160"></a>
                        <div>
                            <h3 class="fs-5 mt-4 px-4 pb-1">Universidad Centroamericana José Siméon Cañas </h3>
                            <p class="px-4">La Universidad Centroamericana José Simeón Cañas, conocida
                                simplemente
                                como
                                UCA El Salvador, es un centro de educación superior jesuita salvadoreño, de capital
                                privado
                                sin fines de lucro, también denominada como UCA.</p>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="py-5" style="background-color: #3D3B94">
                <div class="container">
                    <p class="m-0 text-center text-white">Booket &copy; 2023</p>
                </div>
            </footer>
</x-layout>

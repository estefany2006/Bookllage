<x-layout>

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
            background: #fff;
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
            box-shadow: 0px 1px 10px rgba(184, 82, 82, 0.2);
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


    <div class="position-relative overflow-y-hidden" style="height: 100vh">

        <div class="position-absolute top-0 left-0 d-flex justify-content-center align-items-center w-100 h-100">
            <div class="text-center">
                <h1 class="display-1 fw-bolder text-capitalize text-black" style="font-family: 'Roboto Serif', serif">
                    Welcome to BOOKET!</h1>
                <a href="/login" class="btn btn-outline-primary px-4 py-2 fs-5 mt-5">Get started</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mx-auto my-5 align-items-center">
            <div class="col-lg-7 col-md-8 col-sm-12" >
                <p style="text-align: justify; font-size: 120%; font-family:'Teachers'" >
                    BOOKET is a platform to find university books in a simple and fast way.
                    We are a team committed to education and believe in the importance of
                    learning. Imagine a space where you can get advantages and access to a
                    wide range of categories of university books. Our platform provides you
                    with all this, among other benefits. Join us in our mission to promote
                    education and help each other grow as learners and lovers of knowledge.
                </p>
            </div>

            <div class="col-4 col-md-4">
                <img class="img-fluid rounded" src="{{ asset('img/logo.png') }}" alt="nosotros1">
            </div>
        </div>


        <div id="about_us" style="scroll-margin-top: 100px">
            <h2 class="text-center my-5 title" style="font-family: 'Teachers'">About us</h2>
            <div class="row mx-auto my-5 align-items-center">
                <div class="col-lg-7 col-md-8 col-sm-12">
                    <p style="text-align: justify; font-size: 120%; font-family:'Teachers'">
                        In the exciting year 2023, five young students from ¡Supérate! Fundación Poma
                        came together to bring BOOKET to life. We are focused on facilitating the search for
                        college books by providing an intuitive and efficient online platform. We pride
                        ourselves on being passionate advocates of education and firm believers in the
                        transformative power of learning. We are committed to giving the books you no longer
                        need another opportunity to serve the college community.
                    </p>
                </div>

                <div class="container" id="cardContainer">
                    <div class="row row-cols-6 g-4 justify-content-center mt-5">

                        <div class="col-12 col-md-3">
                            <img src="{{ asset('img/Tatiana.jpg') }}" class="card-img-top d-flex justify-content-center"
                                alt="Estefany" style="}">

                            <div class="card-body mt-3 text-center" style="font-family:'Teachers'" >
                                <h5 class="card-title">Estefany Mancia</h5>
                                <p class="card-text">Marketing area.</p>
                            </div>

                        </div>
                        <div class="col-12 col-md-3">
                            <img src="{{ asset('img/Kelvin.jpg') }}" class="card-img-top d-flex justify-content-center"
                                alt="Estefany">

                            <div class="card-body mt-3 text-center" style="font-family:'Teachers'">
                                <h5 class="card-title">Kelvin Gamez</h5>
                                <p class="card-text">Back-end developer.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <img src="{{ asset('img/Diana.jpg') }}" class="card-img-top d-flex justify-content-center"
                                alt="Estefany">
                            <div class="card-body mt-3 text-center">
                                <h5 class="card-title" style="font-family:'Teachers'">Diana Pérez</h5>
                                <p class="card-text" style="font-family:'Teachers'">Front-end developer.</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <img src="{{ asset('img/Anibal.jpg') }}" class="card-img-top d-flex justify-content-center"
                                alt="Estefany">
                            <div class="card-body mt-3 text-center" style="font-family:'Teachers'">
                                <h5 class="card-title" >Anibal Mendez</h5>
                                <p class="card-text">Back-end developer.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <img src="{{ asset('img/Yamileth.png') }}"
                                class="card-img-top d-flex justify-content-center" alt="Estefany">
                            <div class="card-body mt-3 text-center">
                                <h5 class="card-title" style="font-family:'Teachers'">Ana Garcia</h5>
                                <p class="card-text" style="font-family:'Teachers'">Front-end developer.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <hr class="my-5">
    <div class="row mx-auto my-5 justify-content-center text-center">
        <div class="col-12 my-5">
            <h5 class="title" style="font-family:'Teachers'">Our purpose</h5>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="{{ asset('img/mission.jpg') }}" width="180c" height="160">
            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1" style="font-family:'Teachers'">Mission</h3>
                <p class="px-4" style="font-family:'Teachers'">Streamline the process of finding college books for students' higher
                    education, encouraging the reuse of college book establishing a secure and reliable
                    connection between college students, with the goal of reducing the financial burden on
                    college students at the same time. </p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="{{ asset('img/vision.jpg') }}" width="180" height="160">
            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1" style="font-family:'Teachers'">Vision</h3>
                <p class="px-4" style="font-family:'Teachers'">Our vision is to reach the entire university community and be the first
                    choice for university students seeking academic resources, becoming a platform
                    recognized for the innovation and accessibility that "BOOKET" offers. We aspire to
                    positively impact the lives of college students by facilitating their access to the
                    material essential for academic success and learning.</p>
            </div>
        </div>
        <hr class="my-5">
        <div class="col-12 my-5">
            <h5 class="title" style="font-family: 'Roboto Serif', serif">Our values</h5>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
            <img src="{{ asset('img/inovation.jpg') }}" alt="Inovation" width="180c" height="160"></a>
            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1" style="font-family:'Teachers'">Innovation</h3>
                <p class="px-4">we are promoting a solution using technology, with the purpose of
                    effectively addressing the current challenges often faced by university students.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
            <img src="{{ asset('img/motivation.jpg') }}" alt="Motivation" width="180" height="160"></a>
            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1" style="font-family:'Teachers'">Motivation</h3>
                <p class="px-4" style="font-family:'Teachers'">We aspire to incentivize to students to push them limits and reduce the
                    incidence of university dropouts due to economic constraints.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
            <img src="{{ asset('img/overcoming.jpg') }}" alt="Ovecomming" width="180c" height="160"></a>
            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1" style="font-family:'Teachers'">Overcoming</h3>
                <p class="px-4" style="font-family:'Teachers'">We wish to contribute to the field of higher education through the promotion
                    of motivation.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
            <img src="{{ asset('img/Quality.jpg') }}" alt="Quality" width="180" height="160"></a>
            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1" style="font-family:'Teachers'">Quality</h3>
                <p class="px-4" style="font-family:'Teachers'">We are committed to offer products in good condition and high-quality service
                    on our platform.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
            <img src="{{ asset('img/Security.jpg') }}" alt="Security" width="180c" height="160"></a>
            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1" style="font-family:'Teachers'">Security and confidence</h3>
                <p class="px-4" style="font-family:'Teachers'">Our goal is to ensure the integrity of user data and build trust in our
                    platform.</p>
            </div>
        </div>

    </div>

    <div id="our_work" style="scroll-margin-top: 150px">
        <hr class="my-5">
        <h2 class="text-center my-5 title" style="font-family:'Teachers'">Our work</h2>

        <div class="row mx-auto my-5 align-items-center">
            <div class="col-lg-7 col-md-7 col-sm-12">
                <p style="font-size: 120%; text-align:justify font-family:'Teachers">
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
        </div>
    </div>


    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Booket &copy; 2023</p>
        </div>
    </footer>
</x-layout>

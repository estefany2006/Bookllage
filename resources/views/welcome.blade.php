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

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario con Nieve</title>
        <link href="https://fonts.googleapis.com/css?family=Corben:700" rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Corben:700');

            h1 {
                font-family: 'Corben', cursive;
                font-size: 3rem;
                color: white;
                letter-spacing: 0.1rem;
                text-shadow: 0px 3px 3px rgba(0, 0, 0, 0.66);
                text-align: center;
            }

            .hero {
                background-image: radial-gradient(50% 176%, #8fb1ff 80%, #8fb1ff 100%);
                min-height: 100vh;
                position: relative;
                overflow: hidden;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                padding: 2rem;
            }

            .hero__content {
                position: relative;
                align-self: center;
                padding: 1rem 0;
            }

            .form-container {
                background: rgba(255, 255, 255, 0.8);
                padding: 2rem;
                border-radius: 10px;
                box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.2);
                width: 100%;
                max-width: 500px;
            }

            .snow {
                position: absolute;
                min-width: 100vw;
                min-height: 100vh;
                height: 100%;
                width: 100%;
                top: 0;
                left: 0;
            }

            .snow .svg {
                position: absolute;
                width: 100%;
                height: 100%;
            }

            #snow-top-layer {
                will-change: transform;
                transform: translateY(-768px);
                animation: fall 22.5s infinite linear;
            }

            #snow-bottom-layer {
                will-change: transform;
                transform: translateY(-768px);
                animation: fall 45s infinite linear;
            }

            @keyframes fall {
                100% {
                    transform: translateY(0);
                }
            }
        </style>
    </head>

    <body>
        <div class="hero position-relative">
            <div class="z-0 snow">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1536" preserveAspectRatio="xMidYMax slice">
                    <g fill="#FFF" fill-opacity=".15" transform="translate(55 42)">
                        <g id="snow-bottom-layer">
                            <ellipse cx="6" cy="1009.5" rx="6" ry="5.5" />
                            <ellipse cx="138" cy="1110.5" rx="6" ry="5.5" />
                            <ellipse cx="398" cy="1055.5" rx="6" ry="5.5" />
                            <ellipse cx="719" cy="1284.5" rx="6" ry="5.5" />
                            <ellipse cx="760" cy="1155.5" rx="6" ry="5.5" />
                            <ellipse cx="635" cy="1459.5" rx="6" ry="5.5" />
                            <ellipse cx="478" cy="1335.5" rx="6" ry="5.5" />
                            <ellipse cx="322" cy="1414.5" rx="6" ry="5.5" />
                            <ellipse cx="247" cy="1234.5" rx="6" ry="5.5" />
                            <ellipse cx="154" cy="1425.5" rx="6" ry="5.5" />
                            <ellipse cx="731" cy="773.5" rx="6" ry="5.5" />
                            <ellipse cx="599" cy="874.5" rx="6" ry="5.5" />
                            <ellipse cx="339" cy="819.5" rx="6" ry="5.5" />
                            <ellipse cx="239" cy="1004.5" rx="6" ry="5.5" />
                            <ellipse cx="113" cy="863.5" rx="6" ry="5.5" />
                            <ellipse cx="102" cy="1223.5" rx="6" ry="5.5" />
                            <ellipse cx="395" cy="1155.5" rx="6" ry="5.5" />
                            <ellipse cx="826" cy="943.5" rx="6" ry="5.5" />
                            <ellipse cx="626" cy="1054.5" rx="6" ry="5.5" />
                            <ellipse cx="887" cy="1366.5" rx="6" ry="5.5" />
                            <ellipse cx="6" cy="241.5" rx="6" ry="5.5" />
                            <ellipse cx="138" cy="342.5" rx="6" ry="5.5" />
                            <ellipse cx="398" cy="287.5" rx="6" ry="5.5" />
                            <ellipse cx="719" cy="516.5" rx="6" ry="5.5" />
                            <ellipse cx="760" cy="387.5" rx="6" ry="5.5" />
                            <ellipse cx="635" cy="691.5" rx="6" ry="5.5" />
                            <ellipse cx="478" cy="567.5" rx="6" ry="5.5" />
                            <ellipse cx="322" cy="646.5" rx="6" ry="5.5" />
                            <ellipse cx="247" cy="466.5" rx="6" ry="5.5" />
                            <ellipse cx="154" cy="657.5" rx="6" ry="5.5" />
                            <ellipse cx="731" cy="5.5" rx="6" ry="5.5" />
                            <ellipse cx="599" cy="106.5" rx="6" ry="5.5" />
                            <ellipse cx="339" cy="51.5" rx="6" ry="5.5" />
                            <ellipse cx="239" cy="236.5" rx="6" ry="5.5" />
                            <ellipse cx="113" cy="95.5" rx="6" ry="5.5" />
                            <ellipse cx="102" cy="455.5" rx="6" ry="5.5" />
                            <ellipse cx="395" cy="387.5" rx="6" ry="5.5" />
                            <ellipse cx="826" cy="175.5" rx="6" ry="5.5" />
                            <ellipse cx="626" cy="286.5" rx="6" ry="5.5" />
                            <ellipse cx="887" cy="598.5" rx="6" ry="5.5" />
                        </g>
                    </g>
                    <g fill="#FFF" fill-opacity=".3" transform="translate(65 63)">
                        <g id="snow-top-layer">
                            <circle cx="8" cy="776" r="8" />
                            <circle cx="189" cy="925" r="8" />
                            <circle cx="548" cy="844" r="8" />
                            <circle cx="685" cy="1115" r="8" />
                            <circle cx="858" cy="909" r="8" />
                            <circle cx="874" cy="1438" r="8" transform="rotate(180 874 1438)" />
                            <circle cx="657" cy="1256" r="8" transform="rotate(180 657 1256)" />
                            <circle cx="443" cy="1372" r="8" transform="rotate(180 443 1372)" />
                            <circle cx="339" cy="1107" r="8" transform="rotate(180 339 1107)" />
                            <circle cx="24" cy="1305" r="8" transform="rotate(180 24 1305)" />
                            <circle cx="8" cy="8" r="8" />
                            <circle cx="189" cy="157" r="8" />
                            <circle cx="548" cy="76" r="8" />
                            <circle cx="685" cy="347" r="8" />
                            <circle cx="858" cy="141" r="8" />
                            <circle cx="874" cy="670" r="8" transform="rotate(180 874 670)" />
                            <circle cx="657" cy="488" r="8" transform="rotate(180 657 488)" />
                            <circle cx="443" cy="604" r="8" transform="rotate(180 443 604)" />
                            <circle cx="339" cy="339" r="8" transform="rotate(180 339 339)" />
                            <circle cx="24" cy="537" r="8" transform="rotate(180 24 537)" />
                        </g>
                    </g>
                </svg>
            </div>







            <div class="position-absolute overflow-y-hidden z-3" style="height: 100vh; width: 100vw">
                <div
                    class="position-absolute top-0 left-0 d-flex z-3 justify-content-center align-items-center w-100 h-100">
                    <div class="text-center">
                        <h1 class="display-1 fw-bolder text-capitalize text-black"
                            style="font-family: 'Roboto Serif', serif">
                            Welcome to BOOKET!</h1>
                        <a href="/login" class="btn btn-outline-primary px-4 z-3 py-2 fs-5 mt-5">Get started</a>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>


    <div class="container">
        <div class="row mx-auto my-5 align-items-center">
            <div class="col-lg-7 col-md-8 col-sm-12">
                <p style="text-align: justify; font-size: 120%; font-family:'Teachers'">
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
                <div class="col-4 col-md-4">
                    <img class="img-fluid rounded" src="{{ asset('img/Nosotros.jpg') }}" alt="nosotros1">
                </div>

                <div class="container" id="tracking-in-expand">
                    <div class="row row-cols-6 g-4 justify-content-center mt-5">

                        <div class="col-12 col-md-3">
                            <img src="{{ asset('img/Estefany.jpg') }}"
                                class="card-img-top d-flex justify-content-center" alt="Estefany" style="}">

                            <div class="card-body mt-3 text-center" style="font-family:'Teachers'">
                                <h5 class="card-title">Estefany Mancia</h5>
                                <p class="card-text">Marketing area</p>
                            </div>

                        </div>
                        <div class="col-12 col-md-3">
                            <img src="{{ asset('img/Kelvin.jpg') }}"
                                class="card-img-top d-flex justify-content-center" alt="Estefany">

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
                            <img src="{{ asset('img/Anibal.jpg') }}"
                                class="card-img-top d-flex justify-content-center" alt="Estefany">
                            <div class="card-body mt-3 text-center" style="font-family:'Teachers'">
                                <h5 class="card-title">Anibal Mendez</h5>
                                <p class="card-text">Back-end developer.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <img src="{{ asset('img/Yami.jpg') }}" class="card-img-top d-flex justify-content-center"
                                alt="Estefany">
                            <div class="card-body mt-3 text-center">
                                <h5 class="card-title" style="font-family:'Teachers'">Ana Garcia</h5>
                                <p class="card-text" style="font-family:'Teachers'">Front-end developer.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <img src="{{ asset('img/Nelson.jpg') }}"
                                class="card-img-top d-flex justify-content-center" alt="Estefany">
                            <div class="card-body mt-3 text-center">
                                <h5 class="card-title" style="font-family:'Teachers'">Nelson Sanchez</h5>
                                <p class="card-text" style="font-family:'Teachers'">Front-end developer.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <img src="{{ asset('img/Pamela.jpg') }}"
                                class="card-img-top d-flex justify-content-center" alt="Estefany">
                            <div class="card-body mt-3 text-center">
                                <h5 class="card-title" style="font-family:'Teachers'">Pamela Lainez</h5>
                                <p class="card-text" style="font-family:'Teachers'">Marketing area.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <img src="{{ asset('img/Carlos.jpg') }}"
                                class="card-img-top d-flex justify-content-center" alt="Estefany">
                            <div class="card-body mt-3 text-center">
                                <h5 class="card-title" style="font-family:'Teachers'">Carlos Chacon</h5>
                                <p class="card-text" style="font-family:'Teachers'">Back-end developer.</p>
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
                <p class="px-4" style="font-family:'Teachers'">Streamline the process of finding college books for
                    students' higher
                    education, encouraging the reuse of college book establishing a secure and reliable
                    connection between college students, with the goal of reducing the financial burden on
                    college students at the same time. </p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="{{ asset('img/vision.jpg') }}" width="180" height="160">
            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1" style="font-family:'Teachers'">Vision</h3>
                <p class="px-4" style="font-family:'Teachers'">Our vision is to reach the entire university
                    community
                    and be the first
                    choice for university students seeking academic resources, becoming a platform
                    recognized for the innovation and accessibility that "BOOKET" offers. We aspire to
                    positively impact the lives of college students by facilitating their access to the
                    material essential for academic success and learning.</p>
            </div>
        </div>
        <hr class="my-5">
        <div class="col-12 my-5">
            <h5 class="title" style="font-family:'Teachers">Our values</h5>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
            <img src="{{ asset('img/inovation.jpg') }}" alt="Inovation" width="180c" height="160"></a>
            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1" style="font-family:'Teachers'">Innovation</h3>
                <p class="px-4" style="font-family:'Teachers'; fornt-size:'100%'">We are promoting a solution using
                    technology, with the purpose of
                    effectively addressing the current challenges often faced by university students.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
            <img src="{{ asset('img/motivation.jpg') }}" alt="Motivation" width="180" height="160"></a>
            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1" style="font-family:'Teachers'">Motivation</h3>
                <p class="px-4" style="font-family:'Teachers'">We aspire to incentivize to students to push them
                    limits and reduce the
                    incidence of university dropouts due to economic constraints.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
            <img src="{{ asset('img/overcoming.jpg') }}" alt="Ovecomming" width="180c" height="160"></a>
            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1" style="font-family:'Teachers'">Overcoming</h3>
                <p class="px-4" style="font-family:'Teachers'">We wish to contribute to the field of higher
                    education through the promotion
                    of motivation.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
            <img src="{{ asset('img/Quality.jpg') }}" alt="Quality" width="180" height="160"></a>
            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1" style="font-family:'Teachers'">Quality</h3>
                <p class="px-4" style="font-family:'Teachers'">We are committed to offer products in good condition
                    and high-quality service
                    on our platform.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
            <img src="{{ asset('img/Security.jpg') }}" alt="Security" width="180c" height="160"></a>
            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1" style="font-family:'Teachers'">Security and confidence</h3>
                <p class="px-4" style="font-family:'Teachers'">Our goal is to ensure the integrity of user data and
                    build trust in our
                    platform.</p>
            </div>
        </div>

    </div>

    <div class="container">
        <div id="our_work" style="scroll-margin-top: 150px">
            <hr class="my-5">
            <h2 class="text-center my-5 title" style="font-family:'Teachers'">Our work</h2>

            <div class="row mx-auto my-5 align-items-center">
                <div class="col-lg-12 col-md-8 col-sm-12">
                    <p style="font-size: 120%; text-align:justify; font-family:'Teachers'">
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
    </div>

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Booket &copy; 2023</p>
        </div>
    </footer>
</x-layout>

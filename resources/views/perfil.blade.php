<x-nav.navbar />

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <title>Document</title>
    <style type="text/css">
        html {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            text-size-adjust: 100%;
            line-height: 1.4;
        }


        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            color: #3a3a3a;
            font-family: "Arial", Segoe UI, Tahoma, sans-serifl, Helvetica Neue, Helvetica;
        }

        /*=====================================
estilos de la utilidad
Copiar esto
=====================================*/
        .seccion-perfil-usuario .perfil-usuario-body,
        .seccion-perfil-usuario {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            align-items: center;
        }

        .seccion-perfil-usuario .perfil-usuario-header {
            width: 100%;
            display: flex;
            justify-content: center;
            background: linear-gradient(#4c76c5, transparent);
            margin-bottom: 1.25rem;
        }

        .seccion-perfil-usuario .perfil-usuario-portada {
            display: block;
            position: relative;
            width: 90%;
            height: 17rem;
            background-image: linear-gradient(45deg, #6b73bf, #C4D4F2);
            border-radius: 0 0 20px 20px;
            /*
    background-image: url('http://localhost/multimedia/png/user-portada-3.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    */
        }

        .seccion-perfil-usuario .perfil-usuario-portada .boton-portada {
            position: absolute;
            top: 1rem;
            right: 1rem;
            border: 0;
            border-radius: 8px;
            padding: 12px 25px;
            background-color: rgb(104, 149, 185);
            color: #ffffff;
            cursor: pointer;
        }

        .seccion-perfil-usuario .perfil-usuario-portada .boton-portada i {
            margin-right: 1rem;
        }

        .seccion-perfil-usuario .perfil-usuario-avatar {
            display: flex;
            width: 180px;
            height: 180px;
            align-items: center;
            justify-content: center;
            border: 7px solid #FFFFFF;
            background-color: #778bb6;
            border-radius: 50%;
            box-shadow: 0 0 12px rgba(0, 0, 0, .2);
            position: absolute;
            bottom: -40px;
            left: calc(50% - 90px);
            z-index: 1;
        }

        .seccion-perfil-usuario .perfil-usuario-avatar img {
            width: 100%;
            position: relative;
            border-radius: 50%;
        }

        .seccion-perfil-usuario .perfil-usuario-avatar .boton-avatar {

            left: -2px;
            top: -2px;
            border: 0;
            background-color: #7195be;
            box-shadow: 0 0 12px rgb(110, 130, 163);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            cursor: pointer;
        }

        .seccion-perfil-usuario .perfil-usuario-body {
            width: 70%;
            position: relative;
            max-width: 750px;
        }

        .seccion-perfil-usuario .perfil-usuario-body .titulo {
            display: block;
            width: 100%;
            font-size: 1.75em;
            margin-bottom: 0.5rem;
        }

        .seccion-perfil-usuario .perfil-usuario-body .texto {
            color: #757474;
            font-size: 0.95em;
        }

        .seccion-perfil-usuario .perfil-usuario-footer,
        .seccion-perfil-usuario .perfil-usuario-bio {
            padding: 1.5rem 2rem;
            box-shadow: 0 0 12px rgba(0, 0, 0, .2);
            background-color: #e1f2fa;
            border-radius: 15px;
            width: 100%;
        }

        .seccion-perfil-usuario .perfil-usuario-bio {
            margin-bottom: 1.25rem;
            text-align: center;
        }

        .seccion-perfil-usuario .lista-datos {
            width: 50%;
            list-style: none;
        }

        .seccion-perfil-usuario .lista-datos li {
            padding: 5px 0;
        }

        .seccion-perfil-usuario .lista-datos li>.icono {
            margin-right: 1rem;
            font-size: 1.2rem;
            vertical-align: middle;
        }

        /* adactacion a dispositivos */
        @media (max-width: 750px) {
            .seccion-perfil-usuario .lista-datos {
                width: 100%;
            }

            .seccion-perfil-usuario .perfil-usuario-portada,
            .seccion-perfil-usuario .perfil-usuario-body {
                width: 95%;
            }

        }
    </style>
</head>

<body>
    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="{{ asset('img/perfil.png') }}" alt="img-avatar">
                    <button type="button" class="boton-avatar">
                        <i class="far fa-image"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                @auth
                <h3>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h3>

                <p class="texto">Hello, I'm {{ auth()->user()->first_name }}, I hope my books will be of help to you.</p>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i></i>
                        <p>Email: {{ auth()->user()->email }}</p>
                    </li>
                    <li><i></i>
                        <p>University: {{ auth()->user()->university }}</p>
                    </li>
                    <li><i></i>
                        <p></p>
                    </li>
                </ul>
            </div>
            @else
                <p>You must be logged in to view your profile.</p>
            @endauth
        </div>

        </div>
    </section>
</body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <title>Document</title>
    <style>
        body {
          background-color: rgb(191, 196, 241);
        }
        #form {
         width: 250px;
         margin: 0 auto;
         height: 50px;
        }

        #form p {
         text-align: center;
        }

        #form label {
         font-size: 20px;
        }

        input[type="radio"] {
         display: none;
        }

        label {
         color: grey;
        }

        .clasificacion {
         direction: rtl;
         unicode-bidi: bidi-override;

        }

        label:hover,
        label:hover ~ label {
         color: orange;
        }

        input[type="radio"]:checked ~ label {
         color: orange;
        }
        .text-h1{
            margin-top: -40px;
        }
    </style>

</head>
<body style="margin-top: 5%; margin-bottom:5%; margin-left: 5%; margin-right:5%; font-family:Arial, Helvetica, sans-serif">
    <div class="p-3 mb-2 bg-primary-subtle text-emphasis-secondary row align-items-center container text-center mx-auto my-auto rounded ">
        <div class="col ">
            <div class="p-3 mb-2 bg-body text-body rounded" style="margin-top: 5%; margin-bottom:5%">
                <h6 style="text-align: left">Engineering</h6>
                <h3 style="text-align: left">Ecografia Musculoesqueletica</h3>
                <br>
                <div class="container text-center">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                      <div class="col">
                        <div class="p-6" >
                            <h6 style="text-align:left">Quality:</h6>
                        </div>
                      </div>
                      <div class="col">
                        <div class="p-6">
                            <form>
                                <p class="clasificacion" style="text-align:left">
                                  <input id="radio1" type="radio" name="estrellas" value="5"><!--
                                  --><label for="radio1">★</label><!--
                                  --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                                  --><label for="radio2">★</label><!--
                                  --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                                  --><label for="radio3">★</label><!--
                                  --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                                  --><label for="radio4">★</label><!--
                                  --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                                  --><label for="radio5">★</label>
                                </p>
                            </form>
                        </div>
                      </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-6" style="margin-top:5%; margin-bottom:5% ">
                        <img src="{{asset("images/Libro _ecografia_musculoesqueletica.jpg")}}" class="img-fluid" align="right" width="200" height="100" alt="" srcset="">
                    </div>
                    <div class="col-6 text-center" style="margin-bottom:5%">
                        <h6 class="text-h1">Price:</h6>
                        <h4>$70</h4>
                        <br>
                        <h6>Publisher:</h6>
                        <h5>x nombre</h5>
                        <br>
                        <h6>Author:</h6>
                        <h5>Jacobson</h5>
                        <br>
                        <h6>Date of publication:</h6>
                        <h5>10 de agosto de 2020</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="p-3 mb-2 bg-body text-body rounded" style="margin-top: 5%; margin-bottom:5%">
                <h1>Ecografia Musculoesqueletica</h1>
                <p> En esta obra, concisa y práctica, el autor enseña a realizar e interpretar ecografías musculoesqueléticas enfatizando en las bases anatómicas y los aspectos fundamentales necesarios para realizar satisfactoriamente estos estudios.
                    Se privilegian las claves anatómicas, los conceptos, las enfermedades y las discusiones, lo que permitirá una lectura ágil y valiosa. Características principales:
                    » Alrededor de 1200 imágenes que muestran con claridad los conceptos, técnicas y habilidades que debe adquirir el operador. »
                    Instrucciones paso a paso para adquirir la técnica necesaria e interpretar los hallazgos. »
                    Revisión de la anatomía ecográfica de las articulaciones periféricas que le permitirá al especialista interpretar los estudios con confianza. »
                    Revisión de las manifestaciones ecográficas de las principales patologías musculoesqueléticas para diferenciar con claridad unas de otras.
                </p>
            </div>
        </div>
    </div>

</body>
</html>

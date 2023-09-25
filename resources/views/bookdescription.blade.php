<x-layout>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Laila:wght@300;500;700&family=Roboto+Condensed:ital,wght@0,400;1,700&family=Ubuntu:wght@300;500;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Laila';
            max-width: 1200px;
            margin: 0 auto;
        }

        img {
            max-width: 100%;
        }

        header {
            display: flex;
            align-items: center;
            padding: 30px;
            justify-content: center;
        }

        .container-title {
            padding: 30px;
            background-color: #eee;
            margin-bottom: 50px;
            color: #222;
        }

        main {
            display: flex;
            gap: 30px;
            margin-bottom: 80px;
        }

        .container-img {
            background-color: #f7f7f9;
            flex: 1;
        }

        .container-info-book {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .container-price {
            padding-bottom: 20px;
            border-bottom: 1px solid #e4e4e4;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .container-price span {
            font-size: 24px;
            font-weight: 300;
        }

        .container-detail-books {
            padding: 30px 0;
        }


        .container-add-cart {
            display: flex;
            gap: 20px;
            padding-bottom: 30px;
            border-bottom: 1px solid #e4e4e4;
        }

        .container-quantity {
            position: relative;
        }

        .input-quantity {
            background-color: #f7f7f7;
            border: none;
            padding: 10px;
            width: 60px;
            height: 100%;
            color: #666;
            font-weight: 500;
        }

        .input-quantity:focus {
            outline: none;
        }

        .input-quantity::-webkit-inner-spin-button,
        .input-quantity::-webkit-outer-spin-button {
            -webkit-appearance: none;
            appearance: none;
        }


        .btn-add-to-cart {
            border: none;
            background-color: #252525;
            padding: 10px;
            color: #f7f7f7;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            font-weight: 700;
            cursor: pointer;
        }


        .hidden {
            display: none;
        }

        .container-description,
        .container-additional-information,
        .container-reviews {
            display: flex;
            flex-direction: column;
            border-bottom: 1px solid #e4e4e4;
            padding: 10px 0;
        }

        .title-description,
        .title-additional-information,
        .title-reviews {
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
        }

        .title-description h4,
        .title-additional-information h4,
        .title-reviews h4 {
            font-weight: 300;
            color: #666;
            font-size: 14px;
        }

        .text-description,
        .text-additional-information,
        .text-reviews {
            font-size: 13px;
            color: #252525;
            line-height: 22px;
        }

        .containter-social {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            align-items: center;
            border-bottom: 1px solid #e4e4e4;
        }

        .containter-social span {
            font-weight: 300;
            color: #252525;
        }

        .container-buttons-social {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .container-buttons-social a:link,
        .container-buttons-social a:visited {
            color: #666;
            font-size: 15px;
        }

        .container-buttons-social a:hover {
            color-scheme: #1bb3b4;
        }

        .container-related-products h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .cart-list-products {
            display: grid;
            grid-template-columns: repeat(4, 1rf);
            gap: 25px;
        }
    </style>

    <h1 class="text-center title" style="margin-top: 120px">Book details</h1>
    <main class="mt-5">
        <div class="container-img">
            <img src="{{ asset('img/a2.jpg') }}" class="card-img-top d-flex justify-content-center" alt="libro">
        </div>

        <div class="container-info-book">
            <div class="title-reviews">
                <h4>Price</h4>
            </div>
            <div class="container-price">
                <span>$ {{ $inventory->price }}</span>
            </div>

            <div class="container-detail-books">
                <div class="container-description">
                    <div class="title-description">
                        <h4>Description</h4>
                    </div>
                    <div class="text-description">
                        <p>
                            {{ $inventory->description }}
                            <!-- This comprehensive undergraduate textbook comprehensively covers the key principles and
                                concepts of biochemistry, providing a solid foundation for those entering this
                                multidisciplinary discipline. Throughout its chapters, students will find a clear and
                                detailed exposition of topics ranging from the structure and function of biomolecules to
                                metabolic processes, molecular genetics, and cellular regulation. What distinguishes
                                this
                                book is its focus on the practical application of the knowledge acquired. Each chapter
                                includes examples and case studies that connect theory to reality, showing how
                                biochemistry
                                is essential to understanding medical problems, drug therapies, and advances in
                                biomedical
                                research.-->
                        </p>
                    </div>
                </div>
                <div class="container-additional-information">
                    <div class="title-additional-information">
                        <h4>Additional Information</h4>
                    </div>
                    <div class="text-additional-information">
                        <div class="col-6" style="margin-bottom:5%">
                            <h6>Publisher:</h6>
                            <h6 class="mb-3">{{ $inventory->user->first_name }} {{ $inventory->user->last_name }}</h6>

                            <h6>Author:</h6>
                            <h6 class="mb-3">{{ $inventory->book->publisher }}</h6>

                            <h6>Date of publication:</h6>
                            <h6 class="mb-3">{{ $inventory->created_at }}</h6>
                        </div>
                    </div>

                    <div class="title-reviews">
                        <h4>Book quality</h4>
                    </div>
                    <div class="text-reviews">
                        <p>
                            "Biochemistry: The Basis of Life" is a high quality book. Its binding is strong and
                            durable, ensuring that the book will withstand constant use and handling over long
                            periods of time, even in university and intensive study environments. The pages are
                            printed on quality paper, with excellent readability and clear presentation of
                            graphs,
                            illustrations and tables.</p>
                    </div>


                    <a href="/email">
                        <button class="btn-add-to-cart">
                            <i class="fa-solid fa-plus"></i>
                            contact with the seller
                        </button>
                    </a>

                </div>


                <div class="container-social">
                    <span>Our networks</span>
                    <div class="container-buttons-social">
                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://kit.fontawesome.com/6d3ae8abe3.js" crossorigin="anonymous"></script>

    <script>
        document.getElementById("btnIrAFormulario").addEventListener("click", function () {
            window.location.href = "/email";
        });
    </script>

</x-layout>

@props(["category"])

<div class="overflow-x-hidden">
        <!-- Header-->
        <header class="bg-dark py-5"  style="margin-top: 80px;">
            <div class="container px-4 px-lg-5 my-5 text-center text-white">
                <h1 class="display-4 fw-bolder title" style="font-size: 5rem">{{ $category }}</h1>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 gy-4 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    {{ $slot }}
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Booket &copy; Your Website 2023</p>
            </div>
        </footer>
</div>

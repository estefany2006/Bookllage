@props(['id', 'name', 'publisher', 'price' => 0.0, 'edition', 'date', 'isTransaction' => true])

<div class="col">
    <div class="card h-100">
        <!-- Product image-->
        <img class="card-img-top" src="{{ asset('img/a2.jpg') }}" class="card-img-top d-flex justify-content-center" alt="libro">
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">{{ $name }}</h5>
                <!-- Product reviews-->

                <!-- Product price-->

                <div>
                    Author: {{ $publisher }}
                </div>
                @if ($isTransaction)
                    <div>
                        Price: {{ $price }}
                    </div>
                @endif
                <div>
                    Edition: {{ $edition }}
                </div>
                <div>
                    Date: {{ $date }}
                </div>

            </div>
        </div>
        <!-- Product actions-->

        @if ($isTransaction)
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center">
                    <a class="btn btn-outline-dark mt-auto" href="/bookdescription/{{ $id }}">More detail</a>
                </div>
            </div>
        @endif

    </div>
</div>

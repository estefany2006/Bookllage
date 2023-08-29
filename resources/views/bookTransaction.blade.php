<x-layout>

    <style>
        .form-box input:focus {
            box-shadow: 0 0 0;
            border: 2px solid #766BBF;
        }
    </style>

    <section class="main">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-7 col-md-12 "></div>
                <div class="col-lg-5 col-md-10 col-sm-12"></div>
                <div class="form-box px-5 py-4">
                    <div class="p-3 mb-2 bg-primary-subtle text-emphasis-primary">
                        <h2 class="text-center mb-4">Register</h2>
                        <form action="/signup" method="POST">
                            @csrf

                            <x-input label="Image" Type="file" name="image" />

                            <x-input label="Address" Type="string" name="address" />

                            <x-input label="Price" Type="number" step="0.01" name="price" />

                            <x-input label="Descripcion" Type="string" name="descripcion" />

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">available</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">unavailable</label>
                            </div>
                            <div class="mt-2">
                                <x-buttom type="submit" text="upload" />
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>



</x-layout>

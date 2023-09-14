<x-layout>
    <style>
        .form-box input:focus {
            box-shadow: 0 0 0;
            border: 2px solid #766BBF;
        }
    </style>

    <section class="main" style="margin-top: 80px">
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-3">
                    <x-inventoryCard name=" {{ $book->name }} " publisher="{{ $book->publisher }}"
                        edition=" {{ $book->price }}" date=" {{ $book->date }}" />
                </div>

                <div class="col-9">
                    <div class="form-box px-5 py-4">
                        <div class="p-3 mb-2 bg-primary-subtle text-emphasis-primary">
                            <h5 class="text-center mb-4">Add the transaction details</h5>
                            <p>and publish your book</p>
                            <form action="/signup" method="POST">
                                @csrf

                                <x-input label="Image" Type="file" name="image" />

                                <select class="form-select" aria-label="Default select example" name="Address">
                                    <option selected>Department</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>

                                <select class="form-select" aria-label="Default select example" name="Address">
                                    <option selected>Municipality</option>
                                    @foreach ($municipalities as $municipality)
                                        <option value="{{ $municipality->id }}">{{ $municipality->name }}</option>
                                    @endforeach
                                </select>

                                <select class="form-select" aria-label="Default select example" name="Address">
                                    <option selected>District</option>
                                    @foreach ($districts as $district)
                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                    @endforeach
                                </select>

                                <x-input label="Price" Type="number" step="0.01" name="price" />

                                <x-input label="Descripcion" Type="string" name="descripcion" />

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                                    <label class="form-check-label" for="flexCheckboxDEfault1">available</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="flexCheckboxDEfault2">unavailable</label>
                                </div>
                                <div class="mt-2">
                                    <x-button label="Unpload" type="submit" text="upload" />
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        </div>
    </section>
</x-layout>


<x-layout>

    <div class="container bg-success p-2 text-dark bg-opacity-50 position-absolute top-50 start-50 translate-middle">
        <form action="/signup" method="POST">
            @csrf

            <x-input label="Image" Type="file" name="image" />

            <x-input label="Address" Type="string" name="address" />

            <x-input label="Price" Type="number" step="0.01" name="price" />

            <x-input label="Descripcion" Type="string" name="descripcion" />

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                  Available
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Unavailable
                </label>
              </div>

              <x-buttom type="submit" text="upload" />
        </form>
    </div>



</x-layout>



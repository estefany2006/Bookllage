<x-layout>

    <div class="container bg-success p-2 text-dark bg-opacity-50 position-absolute top-50 start-50 translate-middle">
        <form action="/login" method="POST">
            @csrf
            <x-input label="Email" Type="email" name="email" />


            <x-input label="Password" Type="password" name="password" />


            <button type="Submit" class="btn btn-info mt-3 ">Continue</button>
        </form>
    </div>

   

</x-layout>

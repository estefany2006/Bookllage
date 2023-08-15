<x-layout>

    <div class="container bg-success p-2 text-dark bg-opacity-50 position-absolute top-50 start-50 translate-middle">
        <form class="" action="/login" method="POST">
            @csrf

            <h2 class="fw-bold text-center py-3">Login</h2>

            <x-input label="Email" Type="email" name="email" />


            <x-input label="Password" Type="password" name="password" />

            <x-buttom type="submit" text="login"/>

        </form>
    </div>



</x-layout>

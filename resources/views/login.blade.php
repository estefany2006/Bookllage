<x-layout>

    <x-nav.navbar />

    <br>

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 mx-auto text-center">
                <div class="card" style="background-color: #3D3894;">
                    <div class="card-header">
                        <h2>Login</h2>
                    </div>
                    <div class="card-body">
                        <form action="/login" method="POST">
                            @csrf

                            <x-input label="Email" Type="email" name="email" />

                            <x-input label="Password" Type="password" name="password" />

                            <x-buttom type="submit" text="Login" />

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

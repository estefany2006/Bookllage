<x-layout>

    <x-nav.navbar />

    <br>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 mx-auto text-center">
                <div class="card" style="background-color: #3D3894;">
                    <div class="card-header"> <h2>Sign up</h2></div>
                    <div class="card-body">
                        <form action="/signup" method="POST">
                            @csrf

                            <x-input label="First Name" Type="text" name="first_name" />

                            <x-input label="Last Name" Type="text" name="last_name" />

                            <x-input label="Email" Type="email" name="email" />

                            <x-input label="Support Email" Type="email" name="support_email" />

                            <div class="mb-3">
                                <label for="university_id" class="form-label">Select your university</label>
                                <select class="form-select" name="university_id">
                                    <option selected></option>
                                    @foreach ($universities as $university)
                                        <option value="{{ $university->id }}">{{ $university->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <x-input label="Password" Type="password" name="password" />

                            <x-buttom type="submit" text="continue"/>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>




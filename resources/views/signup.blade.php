<x-layout>

    <div class="container bg-success p-2 text-dark bg-opacity-50 position-absolute top-50 start-50 translate-middle">
        <form action="/signup" method="POST">
            @csrf

            <x-input label="Firstname" Type="firstname" name="first_name" />

            <x-input label="Lastname" Type="lastname" name="last_name" />

            <x-input label="Email" Type="email" name="email" />

            <x-input label="Email" Type="email" name="support_email" />

            <select class="form-select mb-3" name="university_id">
                <option selected>Select your university</option>
                @foreach ($universities as $university)
                    <option value="{{ $university->id }}">{{ $university->name }}</option>
                @endforeach
            </select>

            <x-input label="Password" Type="password" name="password" />




            <button type="Submit" class="btn btn-info mt-3 ">Continue</button>
        </form>
    </div>



</x-layout>

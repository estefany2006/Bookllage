<x-layout>

    <div class="container bg-success p-2 text-dark bg-opacity-50 position-absolute top-50 start-50 translate-middle">
        <form action="registerBook" method="POST">
            @csrf

            <x-input label="Book name" Type="text" name="name" />

            <x-input label="Publisher" Type="text" name="publisher" />

            <x-input label="Edition" Type="text" name="edition" />

            <x-input label="Date" Type="date" name="date" />

            <x-buttom type="submit" text="upload" />

        </form>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</x-layout>

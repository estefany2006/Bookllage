
<x-nav.navbar/>

<br>
<br>
<br>

<x-layout>

<style>

     .form-box input:focus {
        box-shadow: 0 0 0;
        border:2px solid #766BBF;
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
                        <form action="registerBook" method="POST">
                            @csrf
                            <x-input label="Book name" Type="text" name="name" class="form-control"/>

                            <x-input label="Publisher" Type="text" name="publisher" class="form-control"/>

                            <x-input label="Edition" Type="text" name="edition" />

                            <x-input label="Date" Type="date" name="date"/>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Information confirmation</label>
                            </div>
                            <x-button label="Next" type="submit" text="Next"/>
                        </form>
                    </div>
                </div>
              </div>
        </div>
    </section>

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

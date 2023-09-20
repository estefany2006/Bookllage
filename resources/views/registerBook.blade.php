<x-layout>

    <style>
        body {
            background-image: url("img/Libros.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .form-box input:focus {
            box-shadow: 0 0 0;
            border: 2px solid #766BBF;
        }

        .register{
        /*background: linear-gradient(#5688a7, transparent);*/
        background: linear-gradient(#284259af, #8e81e662, #a6b2f777);
    }
    </style>

    <section class="main" style="margin-top: 80px">
        <div class="container my-5">
            <div class="row">
                <div class="form-box px-5 py-4">
                    <div class="register p-3 mb-2 ">

                        <h2 class="text-center mb-4">Make sure that the book is already registered</h2>
                        <form x-data="{book_id: 0}" @submit.prevent="window.location.href = `/bookTransaction/${book_id}`">
                            @csrf
                            <select class="form-select" aria-label="Default select example" name="book" x-model="book_id">
                                <option selected>Select the book</option>
                                @foreach ($books as $book)
                                    <option value="{{ $book->id }}">{{ $book->name }}</option>
                                @endforeach
                            </select>
                            <x-button label="Add more information" type="submit" text="Next" />
                        </form>
                    </div>
                </div>
                <div class="form-box px-5 py-4">
                    <div class="register p-3 mb-2 ">

                        <h2 class="text-center mb-4" style="color: #FFFFFF;">Register</h2>
                        <form action="registerBook" method="POST">
                            @csrf
                            <x-input label="Book name" Type="text" name="name" class="form-control" />

                            <x-input label="Publisher" Type="text" name="publisher" class="form-control" />

                            <x-input label="Edition" Type="text" name="edition" />

                            <x-input label="Date" Type="date" name="date" />

                            <select class="form-select" aria-label="Default select example" name="category_id">
                                <option selected>Select the category</option>
                                @foreach ($categories as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                                @endforeach
                            </select>

                            <x-button label="Next" type="submit" text="Next" />
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

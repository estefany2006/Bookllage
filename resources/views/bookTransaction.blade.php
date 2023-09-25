<x-layout>

    <style>
        body {
            background-image: url("img/lib.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .form-box input:focus {
            box-shadow: 0 0 0;
            border: 2px solid #766BBF;
        }

        .register {
            /*background: linear-gradient(#5688a7, transparent);*/
            background: linear-gradient(#284259af, #8e81e662, #a6b2f777);
        }
    </style>

    <section class="main" style="margin-top: 80px">
        <div class="container pt-4">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-3">
                    <x-inventoryCard name=" {{ $book->name }} " publisher="{{ $book->publisher }}"
                                     edition=" {{ $book->price }}" date=" {{ $book->date }}"
                                     isTransaction="{{ false }}"/>
                </div>

                <div class="col-9">
                    <div class="form-box ps-5">
                        <div class="register px-4 py-5 mb-2">
                            <h5 class="text-center title" style="color: #FFFFFF;">Add the transaction details</h5>
                            <p style="color: #FFFFFF;" class="mb-5">and publish your book</p>
                            <form action="/bookTransaction" method="POST"
                                  x-data="{
                                    department_id: 0,
                                    municipality_id:0,
                                    district_id:0,
                                    departments: {{ $departments }},
                                    get municipalities() {
                                        this.municipality_id = 0;
                                        return {{ $municipalities }}.filter(i => i.department_id == this.department_id);
                                    },
                                    get districts() {
                                        this.district_id = 0;
                                        return {{ $districts }}.filter(i => i.municipality_id == this.municipality_id);
                                    },
                                  }">
                                @csrf
                                <input value="{{ $book->id }}" name="book_id" type="hidden"/>
                                <input value="{{ $user_id }}" name="user_id" type="hidden"/>

                                <select class="form-select" x-model="department_id">
                                    <option selected>Department</option>
                                    <template x-for="department in departments">
                                        <option :value="department.id" x-text="department.name"></option>
                                    </template>
                                </select>

                                <select class="form-select mt-3" x-model="municipality_id">
                                    <option selected>Municipality</option>
                                    <template x-for="municipality in municipalities">
                                        <option :value="municipality.id" x-text="municipality.name"></option>
                                    </template>
                                </select>

                                <select class="form-select mt-3" x-model="district_id" name="district_id">
                                    <option selected>District</option>
                                    <template x-for="district in districts">
                                        <option :value="district.id" x-text="district.name"></option>
                                    </template>
                                </select>

                                <!--<select class="form-select mt-3" x-model="municipality_id" name="municipality">
                                    <option selected>Municipality</option>
                                        <option x-show="department_id"></option>
                                </select>

                                <select class="form-select mt-3" x-model="district_id" name="district_id">
                                    <option selected>District</option>
                                        <option>}</option>
                                </select>-->

                                <div class="mt-3">
                                    <x-input label="Address" Type="string" name="address"/>
                                </div>

                                <div class="mt-3">
                                    <x-input label="Price" Type="number" step="0.01" name="price"/>
                                </div>

                                <x-input label="Description" Type="string" name="description"/>

                                <div class="form-check text-start">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="available"
                                           checked>
                                    <label class="form-check-label" for="flexCheckboxDEfault1">Available</label>
                                </div>
                                <div class="form-check text-start">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="flexCheckboxDEfault2">Unavailable</label>
                                </div>

                                <div class="mt-2">
                                    <x-button label="Upload" type="submit" text="upload"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>

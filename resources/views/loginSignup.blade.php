@push('css')
    <style>
        body {
            background-image: url("img/img-1.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .btn-outline-primary {
            --bs-btn-color: white;
            --bs-btn-hover-color: #46A2FD;
            --bs-btn-border-width: 2px;
            --bs-btn-border-color: white;
            --bs-btn-hover-border-color: white;
            --bs-btn-hover-bg: white;
            --bs-btn-active-bg: #f1f1f1;
            --bs-btn-active-color: #46A2FD;
            --bs-btn-active-border-color: white;
        }

        .transition {
            transition: left 500ms cubic-bezier(0.175, 0.885, 0.320, 1.275), opacity 100ms ease;
        }

        .transition-opacity {
            transition: opacity 1s ease;
        }
    </style>
@endpush

<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh">
            <div class="card border-0 rounded-0"
                 style="width: 1000px; height: 350px; background-color: rgba(0, 128, 255, 0.5);">
                <div class="card-body text-center position-relative"
                     x-data="{login: (new URLSearchParams(location.search).get('login') || 'true') === 'true'}"
                     x-init="$watch('login', (value) => {
                        const url = new URL(window.location.href);
                        url.searchParams.set('login', value);
                        history.pushState(null, document.title, url.toString());
                     })">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-6 text-white text-start ps-5">
                            <span class="fs-3">¿Ya tienes una cuenta?</span>
                            <div class="mt-4">
                                Inicia sesión para entrar en la página
                                <br>
                                <button class="btn btn-outline-primary rounded-0 px-5 mt-4" @click="login = true">
                                    Iniciar Sesión
                                </button>
                            </div>
                        </div>
                        <div class="col-6 text-white text-start ps-5">
                            <span class="fs-3">¿Aún no tienes una cuenta?</span>
                            <div class="mt-4">
                                Regístrate para que puedas iniciar sesión
                                <br>
                                <button class="btn btn-outline-primary rounded-0 px-5 mt-4" @click="login = false">
                                    Registrarse
                                </button>
                            </div>
                        </div>

                    </div>
                    <!-- SIGNUP FORM -->
                    <div class="position-absolute col-6 transition"
                         :class="login ? 'start-0 opacity-0 z-n1' : 'start-50 opacity-100'" style="top: -75px">
                        <div class="card border-0 rounded-4" style="height: 500px">
                            <div class="card-body text-center">
                                <div class="d-flex flex-column justify-content-center h-100">
                                    <span class="fs-3 py-4 fw-bold" style="color: #46A2FD">Registrarse</span>
                                    <form action="/signup" method="POST" class="mt-3 position-relative" x-data="{secondPart: false}">
                                        @csrf
                                        <div class="transition-opacity position-absolute w-100" :class="!secondPart ? 'opacity-100 z-2' : 'opacity-0 z-1'">
                                            <x-input label="Nombres" name="first_name"/>
                                            <x-input label="Apellidos" name="last_name"/>
                                            <x-input label="ID de estudiante" name="student_id"/>
                                            <x-select label="Selecciona tu universidad" name="university_id">
                                                <option value="1">UCA</option>
                                            </x-select>
                                        </div>
                                        <div class="transition-opacity position-relative" :class="secondPart ? 'opacity-100 z-2' : 'opacity-0 z-1'">
                                            <x-input label="Correo Electrónico" type="email" name="email"/>
                                            <x-input label="Correo Electrónico de respaldo" type="email" name="support_email"/>
                                            <x-input label="Contraseña" type="password" name="password"/>
                                            <x-input label="Confirmacion Contraseña" type="password" name="password_confirmation"/>
                                        </div>
                                        <div class="py-4 mt-2">
                                            <div x-show="!secondPart" @click="secondPart = true">
                                                <x-button label="Siguiente <i class='bi bi-arrow-right-short'></i>"/>
                                            </div>
                                            <div x-show="secondPart">
                                                <span @click="secondPart = false">
                                                    <x-button label="<i class='bi bi-arrow-left-short'></i> Atras"/>
                                                </span>
                                                <x-button type="submit" label="Registrarse"/>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- LOGIN FORM -->
                    <div class="position-absolute col-6 transition"
                         :class="login ? 'start-0 opacity-100' : 'start-50 opacity-0 z-n1'" style="top: -50px;">
                        <div class="card border-0 rounded-4" style="height: 450px;">
                            <div class="card-body text-center">
                                <div class="d-flex flex-column justify-content-center h-100">
                                    <span class="fs-3 py-4 fw-bold" style="color: #46A2FD">Iniciar Sesion</span>
                                    <form action="/login" method="POST" class="mt-3">
                                        @csrf
                                        <x-input label="Correo Electrónico" type="email" name="login_email"/>
                                        <x-input label="Contraseña" type="password" name="login_password"/>
                                        <div class="py-4">
                                            <x-button type="submit" label="Entrar"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

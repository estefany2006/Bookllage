<x-nav.navbar />

@push('css')
    <style>
        body {
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Nieve</title>
    <link href="https://fonts.googleapis.com/css?family=Corben:700" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Corben:700');

        h1 {
            font-family: 'Corben', cursive;
            font-size: 3rem;
            color: white;
            letter-spacing: 0.1rem;
            text-shadow: 0px 3px 3px rgba(0, 0, 0, 0.66);
            text-align: center;
        }

        .hero {
            background-image: radial-gradient(50% 176%, #8fb1ff 80%, #8fb1ff 100%);
            min-height: 100vh;
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 2rem;
        }

        .hero__content {
            position: relative;
            align-self: center;
            padding: 1rem 0;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
        }

        .snow {
            position: absolute;
            min-width: 100vw;
            min-height: 100vh;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
        }

        .snow .svg {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        #snow-top-layer {
            will-change: transform;
            transform: translateY(-768px);
            animation: fall 22.5s infinite linear;
        }

        #snow-bottom-layer {
            will-change: transform;
            transform: translateY(-768px);
            animation: fall 45s infinite linear;
        }

        @keyframes fall {
            100% {
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="hero">
        <div class="snow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1536" preserveAspectRatio="xMidYMax slice">
                <g fill="#FFF" fill-opacity=".15" transform="translate(55 42)">
                    <g id="snow-bottom-layer">
                        <ellipse cx="6" cy="1009.5" rx="6" ry="5.5" />
                        <ellipse cx="138" cy="1110.5" rx="6" ry="5.5" />
                        <ellipse cx="398" cy="1055.5" rx="6" ry="5.5" />
                        <ellipse cx="719" cy="1284.5" rx="6" ry="5.5" />
                        <ellipse cx="760" cy="1155.5" rx="6" ry="5.5" />
                        <ellipse cx="635" cy="1459.5" rx="6" ry="5.5" />
                        <ellipse cx="478" cy="1335.5" rx="6" ry="5.5" />
                        <ellipse cx="322" cy="1414.5" rx="6" ry="5.5" />
                        <ellipse cx="247" cy="1234.5" rx="6" ry="5.5" />
                        <ellipse cx="154" cy="1425.5" rx="6" ry="5.5" />
                        <ellipse cx="731" cy="773.5" rx="6" ry="5.5" />
                        <ellipse cx="599" cy="874.5" rx="6" ry="5.5" />
                        <ellipse cx="339" cy="819.5" rx="6" ry="5.5" />
                        <ellipse cx="239" cy="1004.5" rx="6" ry="5.5" />
                        <ellipse cx="113" cy="863.5" rx="6" ry="5.5" />
                        <ellipse cx="102" cy="1223.5" rx="6" ry="5.5" />
                        <ellipse cx="395" cy="1155.5" rx="6" ry="5.5" />
                        <ellipse cx="826" cy="943.5" rx="6" ry="5.5" />
                        <ellipse cx="626" cy="1054.5" rx="6" ry="5.5" />
                        <ellipse cx="887" cy="1366.5" rx="6" ry="5.5" />
                        <ellipse cx="6" cy="241.5" rx="6" ry="5.5" />
                        <ellipse cx="138" cy="342.5" rx="6" ry="5.5" />
                        <ellipse cx="398" cy="287.5" rx="6" ry="5.5" />
                        <ellipse cx="719" cy="516.5" rx="6" ry="5.5" />
                        <ellipse cx="760" cy="387.5" rx="6" ry="5.5" />
                        <ellipse cx="635" cy="691.5" rx="6" ry="5.5" />
                        <ellipse cx="478" cy="567.5" rx="6" ry="5.5" />
                        <ellipse cx="322" cy="646.5" rx="6" ry="5.5" />
                        <ellipse cx="247" cy="466.5" rx="6" ry="5.5" />
                        <ellipse cx="154" cy="657.5" rx="6" ry="5.5" />
                        <ellipse cx="731" cy="5.5" rx="6" ry="5.5" />
                        <ellipse cx="599" cy="106.5" rx="6" ry="5.5" />
                        <ellipse cx="339" cy="51.5" rx="6" ry="5.5" />
                        <ellipse cx="239" cy="236.5" rx="6" ry="5.5" />
                        <ellipse cx="113" cy="95.5" rx="6" ry="5.5" />
                        <ellipse cx="102" cy="455.5" rx="6" ry="5.5" />
                        <ellipse cx="395" cy="387.5" rx="6" ry="5.5" />
                        <ellipse cx="826" cy="175.5" rx="6" ry="5.5" />
                        <ellipse cx="626" cy="286.5" rx="6" ry="5.5" />
                        <ellipse cx="887" cy="598.5" rx="6" ry="5.5" />
                    </g>
                </g>
                <g fill="#FFF" fill-opacity=".3" transform="translate(65 63)">
                    <g id="snow-top-layer">
                        <circle cx="8" cy="776" r="8" />
                        <circle cx="189" cy="925" r="8" />
                        <circle cx="548" cy="844" r="8" />
                        <circle cx="685" cy="1115" r="8" />
                        <circle cx="858" cy="909" r="8" />
                        <circle cx="874" cy="1438" r="8" transform="rotate(180 874 1438)" />
                        <circle cx="657" cy="1256" r="8" transform="rotate(180 657 1256)" />
                        <circle cx="443" cy="1372" r="8" transform="rotate(180 443 1372)" />
                        <circle cx="339" cy="1107" r="8" transform="rotate(180 339 1107)" />
                        <circle cx="24" cy="1305" r="8" transform="rotate(180 24 1305)" />
                        <circle cx="8" cy="8" r="8" />
                        <circle cx="189" cy="157" r="8" />
                        <circle cx="548" cy="76" r="8" />
                        <circle cx="685" cy="347" r="8" />
                        <circle cx="858" cy="141" r="8" />
                        <circle cx="874" cy="670" r="8" transform="rotate(180 874 670)" />
                        <circle cx="657" cy="488" r="8" transform="rotate(180 657 488)" />
                        <circle cx="443" cy="604" r="8" transform="rotate(180 443 604)" />
                        <circle cx="339" cy="339" r="8" transform="rotate(180 339 339)" />
                        <circle cx="24" cy="537" r="8" transform="rotate(180 24 537)" />
                    </g>
                </g>
            </svg>
        </div>
        <x-layout>
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center" style="min-height: 100vh">
                    <div class="card border-0 rounded-0"
                        style="width: 1000px; height: 350px; background-color: rgba(0, 128, 255, 0.5);">
                        <div class="card-body text-center position-relative" x-data="{ login: (new URLSearchParams(location.search).get('login') || 'true') === 'true' }"
                            x-init="$watch('login', (value) => {
                                const url = new URL(window.location.href);
                                url.searchParams.set('login', value);
                                history.pushState(null, document.title, url.toString());
                            })">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-6 text-white text-start ps-5">
                                    <span class="fs-3"> Do you already have an account?
                                    </span>
                                    <div class="mt-4">
                                        Log in to access the site
                                        <br>
                                        <button class="btn btn-outline-primary rounded-0 px-5 mt-4"
                                            @click="login = true">
                                            Log in
                                        </button>
                                    </div>
                                </div>
                                <div class="col-6 text-white text-start ps-5">
                                    <span class="fs-3">Don't have an account yet?</span>
                                    <div class="mt-4">
                                        Sign up so you can log in
                                        <br>
                                        <button class="btn btn-outline-primary rounded-0 px-5 mt-4"
                                            @click="login = false">
                                            Sign up
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
                                            <span class="fs-3 py-4 fw-bold" style="color: #46A2FD">Sign up</span>
                                            <form action="/signup" method="POST" class="mt-3 position-relative"
                                                x-data="{ secondPart: false }">
                                                @csrf
                                                <div class="transition-opacity position-absolute w-100"
                                                    :class="!secondPart ? 'opacity-100 z-2' : 'opacity-0 z-1'">
                                                    <x-input label="Name" name="first_name" />
                                                    <x-input label="Last name" name="last_name" />
                                                    <x-input label="Student ID" name="student_id" />
                                                    <x-select label="Select your university" name="university_id">
                                                        <option value="1">UCA</option>
                                                        <option value="1">ESEN</option>
                                                        <option value="1">Jose Matias Delgado</option>
                                                        <option value="1">UES</option>
                                                    </x-select>
                                                </div>
                                                <div class="transition-opacity position-relative"
                                                    :class="secondPart ? 'opacity-100 z-2' : 'opacity-0 z-1'">
                                                    <x-input label="Email" type="email" name="email" />
                                                    <x-input label="Email backup" type="email"
                                                        name="support_email" />
                                                    <x-input label="Password" type="password" name="password" />
                                                    <x-input label="Confirm Password" type="password"
                                                        name="password_confirmation" />
                                                </div>
                                                <div class="py-4 mt-2">
                                                    <div x-show="!secondPart" @click="secondPart = true">
                                                        <x-button
                                                            label="Next <i class='bi bi-arrow-right-short'></i>" />
                                                    </div>
                                                    <div x-show="secondPart">
                                                        <span @click="secondPart = false">
                                                            <x-button
                                                                label="<i class='bi bi-arrow-left-short'></i> Back" />
                                                        </span>
                                                        <x-button type="submit" label="Sign up" />
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
                                            <span class="fs-3 py-4 fw-bold" style="color: #46A2FD">Log in</span>
                                            <form action="/login" method="POST" class="mt-3">
                                                @csrf
                                                <x-input label="Email" type="email" name="login_email" />
                                                <x-input label="Password" type="password" name="login_password" />
                                                <div class="py-4">
                                                    <x-button type="submit" label="Log in" />
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



    </div>
</body>

</html>

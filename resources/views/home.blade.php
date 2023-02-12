@extends('layouts.template')

@section('title', 'Cinepolis')

@section('content')
    <header class="bg-black">
        @include('layouts.nav')
        @include('layouts.carrousel')
    </header>
    <section class="container my-3">
        <select class="form-select bg-black fw-bold text-white" aria-label="Default select example" style="width: 400px"
            data-bs-theme="dark">
            <option selected>SELECCIONE UNA PELÍCULA</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>

        <section class="my-5">
            <h2 class="text-white fs-5 fw-light mb-3">PELÍCULAS</h2>

            <div class="row row-cols-2 row-cols-md-6 g-4">
                <div class="col">
                    <div class="card bg-dark border border-0 rounded-0">
                        <img src="{{ asset('images/1de0b5f54b973723d302cc88d7380b70.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">AVATAR</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark border border-0 rounded-0">
                        <img src="{{ asset('images/e1a27df53c2085a3c302c0db984779b7.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">
                            ALERTA EXTREMA
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark border border-0 rounded-0">
                        <img src="{{ asset('images/cedf6ff1f6fd08da119abe2691c19c03.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">QUAMTOMIA</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark border border-0 rounded-0">
                        <img src="{{ asset('images/4ae59fe519dd1b5992afabd067c8b099.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">
                            CASTILLO AMBULANTE
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark border border-0 rounded-0">
                        <img src="{{ asset('images/5468f4e625ba2f852dee6ecc8ec4a7f6.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">BABYLON</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark border border-0 rounded-0">
                        <img src="{{ asset('images/9ba746b4cf16b55aa77555c1ce55bcce.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">DEMON STAYER</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark border border-0 rounded-0">
                        <img src="{{ asset('images/1de0b5f54b973723d302cc88d7380b70.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">AVATAR</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark border border-0 rounded-0">
                        <img src="{{ asset('images/e1a27df53c2085a3c302c0db984779b7.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">
                            ALERTA EXTREMA
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark border border-0">
                        <img src="{{ asset('images/cedf6ff1f6fd08da119abe2691c19c03.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">QUAMTOMIA</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark border border-0">
                        <img src="{{ asset('images/4ae59fe519dd1b5992afabd067c8b099.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">
                            CASTILLO AMBULANTE
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark border border-0">
                        <img src="{{ asset('images/5468f4e625ba2f852dee6ecc8ec4a7f6.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">BABYLON</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark border border-0">
                        <img src="{{ asset('images/9ba746b4cf16b55aa77555c1ce55bcce.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">DEMON STAYER</p>
                    </div>
                </div>
            </div>
        </section>
    </section>

@endsection

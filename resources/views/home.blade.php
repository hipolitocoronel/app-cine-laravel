@extends('layouts.template')

@section('title', 'Cinepolis | Magia en las pantallas grandes')

@section('content')
    <header class="bg-black">
        @include('layouts.nav')
        @include('layouts.carrousel')
    </header>
    <section class="container mt-3">
        <select class="form-select bg-black fw-bold text-white select-movie" aria-label="Default select example"
            data-bs-theme="dark">
            <option selected>SELECCIONE UNA PELÍCULA</option>
            <option value="1">Avatar</option>
            <option value="2">Alerta Extrema</option>
            <option value="3">Quamtumania</option>
        </select>

        <div class="row mt-3" style="display: none">
            <div class="col">
                <div class="dias d-flex gap-2">
                    <button class="btn btn-light d-flex flex-column align-items-center flex-grow-1">
                        <span>HOY</span>
                        <span>12/02</span>
                    </button>
                    <button class="btn btn-outline-light d-flex flex-column align-items-center flex-grow-1">
                        <span>MAÑANA</span>
                        <span>12/02</span>
                    </button>
                    <button class="btn btn-outline-light d-flex flex-column align-items-center flex-grow-1">
                        <span>MARTES</span>
                        <span>12/02</span>
                    </button>
                    <button class="btn btn-outline-light d-flex flex-column align-items-center flex-grow-1">
                        <span>MIÉRCOLES</span>
                        <span>12/02</span>
                    </button>
                </div>
                <div class="horarios mt-4">
                    <p class="bg-secondary p-2 text-white fw-bold">HORARIOS DISPONIBLES</p>
                    <button class="btn btn-outline-light opacity-75">22:00</button>
                    <button class="btn btn-outline-light opacity-75 mx-2">01:00</button>
                </div>
                <button class="btn btn-warning px-5 mt-4 fw-bold">COMPRAR ENTRADA</button>
            </div>
            <div class="col d-flex gap-3">
                <div>
                    <img src="{{ asset('images/1de0b5f54b973723d302cc88d7380b70.jpg') }}">
                    <span class="text-white border px-2">+13</span>
                    <p class="text-white m-0"><span class="text-secondary">Género: </span> Acción</p>
                    <p class="text-white m-0"><span class="text-secondary">Duración: </span> 190min</p>
                    <p class="text-white m-0"><span class="text-secondary">Director: </span> James Cameron</p>
                </div>
                <div>
                    <iframe width="400" height="230" src="https://www.youtube.com/embed/bDFKIs4v0B4" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                    <p class="fw-bold text-white fs-4">AVATAR - EL CAMINO DEL AGUA</p>
                    <p class="text-secondary lh-sm">Ambientada más de una década después de los sucesos que
                        tuvieron
                        lugar en la
                        primera película,
                        AVATAR: EL CAMINO DEL AGUA narra la historia de la familia Sully (Jake, Neytiri y sus hijos), el
                        peligro que los persigue, los esfuerzos que hacen para mantenerse a salvo, las batallas que libran
                        para seguir con vida, y las tragedias que sobrellevan. </p>
                </div>
            </div>
        </div>

        <div class="my-5">
            <h2 class="text-white fs-5 fw-light mb-3">PELÍCULAS</h2>

            <div class="row row-cols-2 row-cols-md-6 g-4">
                <div class="col">
                    <div class="card bg-black border border-0 rounded-0">
                        <img src="{{ asset('images/1de0b5f54b973723d302cc88d7380b70.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">AVATAR</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-black border border-0 rounded-0">
                        <img src="{{ asset('images/e1a27df53c2085a3c302c0db984779b7.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">
                            ALERTA EXTREMA
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-black border border-0 rounded-0">
                        <img src="{{ asset('images/cedf6ff1f6fd08da119abe2691c19c03.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">QUAMTOMIA</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-black border border-0 rounded-0">
                        <img src="{{ asset('images/4ae59fe519dd1b5992afabd067c8b099.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">
                            CASTILLO AMBULANTE
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-black border border-0 rounded-0">
                        <img src="{{ asset('images/5468f4e625ba2f852dee6ecc8ec4a7f6.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">BABYLON</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-black border border-0 rounded-0">
                        <img src="{{ asset('images/9ba746b4cf16b55aa77555c1ce55bcce.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">DEMON STAYER</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-black border border-0 rounded-0">
                        <img src="{{ asset('images/1de0b5f54b973723d302cc88d7380b70.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">AVATAR</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-black border border-0 rounded-0">
                        <img src="{{ asset('images/e1a27df53c2085a3c302c0db984779b7.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">
                            ALERTA EXTREMA
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-black border border-0 rounded-0">
                        <img src="{{ asset('images/cedf6ff1f6fd08da119abe2691c19c03.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">QUAMTOMIA</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-black border border-0 rounded-0">
                        <img src="{{ asset('images/4ae59fe519dd1b5992afabd067c8b099.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">
                            CASTILLO AMBULANTE
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-black border border-0 rounded-0">
                        <img src="{{ asset('images/5468f4e625ba2f852dee6ecc8ec4a7f6.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">BABYLON</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-black border border-0 rounded-0">
                        <img src="{{ asset('images/9ba746b4cf16b55aa77555c1ce55bcce.jpg') }}" class="card-img-top"
                            alt="..." />
                        <p class="card-text text-white text-center py-1">DEMON STAYER</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

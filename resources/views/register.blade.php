@extends('layouts.template')

@section('title', 'Ingresar')

@section('content')
    <header>
        @include('layouts.nav')
        <div class="bg-secondary py-4">
            <h1 class="text-white fs-4 container fw-bold text-center mb-0">NUEVA CUENTA</h1>
        </div>

        <form class="mx-auto my-5 form-login">
            <p class="text-secondary">REGISTRATE Y CREÁ UN NUEVO USUARIO</p>
            <div class="row row-cols-1 row-cols-md-2 g-4 mb-3">
                <div class="col">
                    <label for="first-name" class="form-label text-white fw-bold">NOMBRE (*)</label>
                    <input type="text" class="form-control bg-black" id="first-name" aria-describedby="emailHelp"
                        data-bs-theme="dark">
                    <div id="emailHelp" class="form-text text-danger">El correo electronico es requerido</div>
                </div>
                <div class="col">
                    <label for="last-name" class="form-label text-white fw-bold">APELLIDO (*)</label>
                    <input type="text" class="form-control bg-black" id="last-name" aria-describedby="emailHelp"
                        data-bs-theme="dark">
                    <div id="emailHelp" class="form-text text-danger">El correo electronico es requerido</div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white fw-bold">CORREO ELECTRÓNICO (*)</label>
                <input type="email" class="form-control bg-black" id="exampleInputEmail1" aria-describedby="emailHelp"
                    data-bs-theme="dark">
                <div id="emailHelp" class="form-text text-danger">El correo electronico es requerido</div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 g-4 mb-3">
                <div class="col">
                    <label for="exampleInputPassword1" class="form-label text-white fw-bold">CONTRASEÑA (*)</label>
                    <input type="password" class="form-control bg-black" id="exampleInputPassword1" data-bs-theme="dark">
                    <div id="emailHelp" class="form-text text-danger">La contraseña es requerida</div>
                </div>
                <div class="col">
                    <label for="exampleInputPassword1" class="form-label text-white fw-bold">CONTRASEÑA (*)</label>
                    <input type="password" class="form-control bg-black" id="exampleInputPassword1" data-bs-theme="dark">
                    <div id="emailHelp" class="form-text text-danger">La contraseña es requerida</div>
                </div>
            </div>
            <p class="text-secondary">Ya tienes una cuenta ? <a href="{{ route('login') }}" class="text-warning">Ingresá</a>
            </p>
            <button type="submit" class="btn btn-secondary fw-bold px-5 mt-2 sm:w-100">REGISTRAR</button>
        </form>
    </header>

@endsection

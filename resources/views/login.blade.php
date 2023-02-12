@extends('layouts.template')

@section('title', 'Ingresar')

@section('content')
    <header>
        @include('layouts.nav')
        <div class="bg-secondary py-4">
            <h1 class="text-white fs-4 container fw-bold text-center mb-0">INICIAR SESIÓN</h1>
        </div>

        <form class="mx-auto my-5 form-login">
            <p class="text-secondary">INGRESÁ A TU CUENTA</p>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white fw-bold">CORREO ELECTRÓNICO (*)</label>
                <input type="email" class="form-control bg-black" id="exampleInputEmail1" aria-describedby="emailHelp"
                    data-bs-theme="dark">
                <div id="emailHelp" class="form-text text-danger">El correo electronico es requerido</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-white fw-bold">CONTRASEÑA (*)</label>
                <input type="password" class="form-control bg-black" id="exampleInputPassword1" data-bs-theme="dark">
                <div id="emailHelp" class="form-text text-danger">La contraseña es requerida</div>
            </div>
            <p class="text-secondary">No tienes una cuenta ? <a href="{{ route('register') }}"
                    class="text-warning">Registrate</a></p>
            <button type="submit" class="btn btn-secondary fw-bold px-5 mt-2 sm:w-100">INGRESAR</button>
        </form>
    </header>

@endsection

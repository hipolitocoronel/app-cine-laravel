<nav class="navbar navbar-expand-md container" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">CINEPOLIS</a>
        <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">PELÍCULAS</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#">PRECIOS</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#">PRÓXIMOS ESTRENOS</a>
                </li>
                <li class="nav-item mx-2 nav-login-btn-mobile">
                    <a class="nav-link" href="{{ route('login') }}">TU CUENTA</a>
                </li>
            </ul>
        </div>
        <a class="btn btn-outline-light nav-login-btn btn-sm" href="{{ route('login') }}">Tu cuenta</a>
    </div>
</nav>

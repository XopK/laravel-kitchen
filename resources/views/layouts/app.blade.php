<header>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(255, 237, 156)">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Рецепты вкусов</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/#recipes">Рецепты</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Мои рецепты</a>
                        </li>
                    @endauth
                </ul>
                <div class="d-flex align-items-center" style="gap: 20px;">
                    @guest
                        <a href="/register" class="nav-item nav-link">Регистрация</a>
                        <a href="/login" class="nav-item nav-link" style="margin-right: 10px">Вход</a>
                    @endguest

                    @auth
                        <span>Здраствуй, {{ Auth::user()->name }}</span>
                        <form action="{{ route('logout') }}" method="POST" class="form-inline">
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Выход">
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
</header>

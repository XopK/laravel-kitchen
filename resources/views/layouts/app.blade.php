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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Мои рецепты</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center" style="gap: 20px">
                    <a href="" class="nav-item nav-link">Регистрация</a>
                    <a href="" class="nav-item nav-link">Вход</a>
                    <form action="" method="POST" class="form-inline">
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Выход">
                    </form>
                </div>      
            </div>
        </div>
    </nav>
</header>

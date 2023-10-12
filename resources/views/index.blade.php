<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Рецепты вкусов</title>

</head>

<body>
    @extends('layouts.app')
    <main>
        <section>
            <div class="hero-photo">
                <div class="hero">
                    <div class="hero-text">
                        <h1>Рецепты вкусов</h1>
                        <p>Откройте вкусовые грани с нашими рецептами!</p>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="recipes">
            <div class="container">
                <h1 style="text-align: center; margin: 15px 0;">Рецепты</h1>
                <div class="list">
                    @foreach ($recipes as $item)
                        <div class="card mb-3" style="max-width: 1000px; border: none;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/images/{{$item->photo}}" class="card-img-top" alt="{{$item->photo}}">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title">{{$item->title}}</h3>
                                        <p class="card-text short-text">{{$item->description}}</p>
                                        <p class="card-text"><small class="text-body-secondary">Автор: {{$item->user->name}}</small>
                                        </p>
                                        <a class="btn" href="/detail/{{$item->id}}"
                                            style="background-color: rgb(255, 212, 71)">Подробнее...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section>
            <footer>
                <div class="text-center p-3" style="background-color: rgb(255, 237, 156); margin-top: 20px;">
                    © 2023 Copyright Книга рецептов
                </div>
            </footer>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

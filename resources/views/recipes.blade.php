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
            <div class="container" style="margin-top: 70px">
                <h2>{{$recipes->title}}</h2>
                <div class="d-flex" style="gap: 30px">
                    <img src="/images/{{$recipes->photo}}" alt="cake.png"
                        style="width: 45%">
                    <div class="text" style="max-width: 600px">
                        <p style="font-size: 17px">{{$recipes->description}}</p>
                        <p class="card-text" style="font-size: 20px"><small class="text-body-secondary">Автор:
                            {{$recipes->user->name}}</small></p>
                    </div>
                </div>
                <div class="more-detail">
                    <h2 style="margin-top: 40px">Ингредиенты</h2>
                    <p class="ingr">
                        {{$recipes->ingredients}}
                    </p>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

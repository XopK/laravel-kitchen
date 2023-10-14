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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    @extends('layouts.app')
    <div class="container " style="margin-top: 70px ">
        <div class="d-flex" style="align-items:center; justify-content: space-between">
            <h1>Мои рецепты</h1>
            <a href="{{ route('create') }}">+ Добавить рецепт</a>
        </div>
        <div class="recipes-block d-flex" style="margin-top: 30px; flex-wrap:wrap; gap: 25px">
            @foreach ($recipes as $item)
            <div class="card" style="width: 18rem;">
                <img src="/storage/img/{{$item->photo}}" class="card-img-top"
                    alt="{{$item->photo}}">
                <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <p class="card-text short-text">{{$item->description}}</p>
                    <a href="{{route('r.edit', ['recipes'=>$item->id])}}" class="btn" style="background-color: rgb(255, 212, 71); margin-bottom: 10px">Редактировать</a>
                    <form action="{{ route('r.destroy', ['recipes' => $item->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Удалить">
                    </form>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</body>

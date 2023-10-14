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
        <h1>Редактирование рецепта</h1>

        <form action="{{ route('r.update', ['recipes' => $recipes->id]) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="exampleInputTitle" class="form-label">Навазние рецепта</label>
                <input type="text" class="form-control" id="exampleInputTitle" aria-describedby="emailHelp" name="title" value="{{$recipes->title}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="6">{{$recipes->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Ингредиенты</label>
                <textarea class="form-control" name="ingredients" id="exampleFormControlTextarea1" rows="3">{{$recipes->ingredients}}</textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Фото</label>
                <input class="form-control" name="photo" type="file" id="formFile">
              </div>
            <button type="submit" class="btn" style="background-color: rgb(255, 212, 71)">Сохранить</button>
        </form>
    </div>
</body>

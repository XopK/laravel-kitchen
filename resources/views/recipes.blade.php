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
                <h2>Классическая шарлотка</h2>
                <div class="d-flex" style="gap: 30px">
                    <img src="/images/cake.png" alt="cake.png"
                        style="width: 45%">
                    <div class="text" style="max-width: 600px">
                        <p style="font-size: 17px">Классическая шарлотка. Важное сладкое блюдо советской и постсоветской
                            истории. Легкое, пышное тесто, максимум яблочной начинки — у шарлотки всегда был образ
                            приятного, простого и при этом лакомого и диетического блюда. Яблоки настоятельно
                            рекомендуем взять из кислых сортов — вроде антоновки. Их можно класть как сырыми, так и
                            предварительно слегка карамелизованными на сковородке. И сахара лучше не жалеть. Он
                            магическим образом распределяется в нужном количестве в тесте, а излишки образуют сладкую
                            корочку.</p>
                        <p class="card-text" style="font-size: 20px"><small class="text-body-secondary">Автор:
                                Татьяна</small></p>
                        <button type="button" class="btn btn-outline-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"></path>
                            </svg>
                            В избранное
                        </button>
                    </div>
                </div>
                <div class="more-detail">
                    <h4 style="margin-top: 40px">Ингредиенты</h4>
                    <ul class="push">
                        <li>1 стакан сахара</li>
                        <li>5 куриных яиц</li>
                        <li>Стакан пшеничной муки</li>
                        <li>7 яблок</li>
                        <li>1 столовая ложка растительного масла</li>
                        <li>1 чайная ложка разрыхлителя</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:./');
}

$animal_id = !empty($_GET['id']) ? $_GET['id'] : null;


if (!empty($animal_id)) :
    $animals = json_decode(file_get_contents("./api_data/animal_info.json"));
    $animal = array_filter($animals, function ($item) use ($animal_id) {
        return $item->id == $animal_id;
    });
    $animal = $animal[array_key_first($animal)];
?>


    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Single animals</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="./">Animal world</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item me-5 ms-5">
                            <a class="nav-link active" aria-current="page" href="./">Home</a>
                        </li>
                        <li class="nav-item me-5 ms-5">
                            <a class="nav-link active" aria-current="page" href="./single.php">Single Animal</a>
                        </li>
                        <li class="nav-item me-5 ms-5">
                            <a class="nav-link active" aria-current="page" href="./about.php">About Us</a>
                        </li>
                        <li class="nav-item me-5 ms-5">
                            <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                        </li>
                    </ul>
                    <a href="./auth/logout.php" class="btn btn-outline-success">Logout</a>
                </div>
            </div>
        </nav>
        <main class="mt-5">
            <h1 class="text-center">Single Animals</h1>
            <hr class="w-75 m-auto mt-3">
            <div class="container mt-5 d-flex justify-content-center mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $animal->image_link ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $animal->name ?></h5>
                        <p class="card-text"><?= 'Length_min:' . $animal->length_min . ' and length_max' . $animal->length_max . 'and weight_min' . $animal->weight_min . 'and weight_max' . $animal->weight_min ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?= $animal->name ?></li>
                        <li class="list-group-item"><?= $animal->latin_name ?></li>
                        <li class="list-group-item">A<?= $animal->animal_type ?></li>
                        <li class="list-group-item">A<?= $animal->active_time ?></li>
                        <li class="list-group-item">A<?= $animal->habitat ?></li>
                        <li class="list-group-item">A<?= $animal->geo_range ?></li>
                    </ul>

                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>

    </html>
<?php else : ?>


    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Single animals</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Animal world</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item me-5 ms-5">
                            <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
                        </li>
                        <li class="nav-item me-5 ms-5">
                            <a class="nav-link active" aria-current="page" href="./single.php">Single Animal</a>
                        </li>
                        <li class="nav-item me-5 ms-5">
                            <a class="nav-link active" aria-current="page" href="#">About Us</a>
                        </li>
                        <li class="nav-item me-5 ms-5">
                            <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                        </li>
                    </ul>
                    <a href="./auth/logout.php" class="btn btn-outline-success">Logout</a>
                </div>
            </div>
        </nav>
        <main class="mt-5">
            <h1 class="text-center">Single Animals</h1>
            <hr class="w-75 m-auto mt-3">
            <h2 class="mt-5 text-center">There Is No File</h2>
            <div class="container mt-5 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>

    </html>
<?php endif ?>
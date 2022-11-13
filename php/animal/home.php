<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:./');
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
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
                        <a class="nav-link active" aria-current="page" href="./">Single Animal</a>
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
    <main class="m-5">
        <h1 class="text-center">ALL ANIMALS</h1>
        <hr class="w-75 m-auto mt-3">
        <div class="m-4 row text-center">
            <?php
            $i = 20;
            for ($i = 0; $i <= 20; $i++) :
                $animals = json_decode(file_get_contents("https://zoo-animal-api.herokuapp.com/animals/rand"));
                $animals_list[] =(array)($animals);
                $encode  = json_encode($animals_list);
                file_put_contents('./api_data/animal_info.json', $encode);
            ?>

                <div id="book-wrapper" class="col-12 col-md-6 col-lg-3 mb-5">
                    <div class="card" style="width: 100%; height:100%;">
                        <img src="<?= $animals->image_link ?>" class="card-img-top" alt="...">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $animals->name; ?></li>
                            <li class="list-group-item"><?= $animals->animal_type ?></li>
                            <li class="list-group-item"><?= $animals->diet; ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="./single.php?id=<?= $animals->id ?>" class="card-link">More Details</a>
                        </div>
                    </div>
                </div>
            <?php endfor ?>

        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
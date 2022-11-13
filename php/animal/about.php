<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>About Us</title>
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
        <h1 class="text-center">About Us</h1>
        <hr class="w-75 m-auto mt-3">
        <div class="m-4 row text-center">
            <div class="col-6 mt-3"><img style="width: 50%; ;" src="./1.jpg" alt=""></div>
            <div class="col-3 mt-5 border p-2">
                <h3 class="mt-5">who are we</h3>
                <p>We are an educational website for children
                    It aims to increase knowledge of animals, the environment and the place of their upbringing
                    Teach children about the animal world and provide them with information about animals such as length, width, etc</p>
            </div>
        </div>
    </main>
</body>

</html>
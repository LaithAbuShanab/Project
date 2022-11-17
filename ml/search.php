<?php

session_start();
if(!isset($_SESSION['user'])){
    header("location:./index.php");
}
$info=$_SESSION['user'];

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        img {
            border-radius: 20%;
            width: 100px;
        }

        hr.style-four {
            height: 12px;
            border: 0;
            box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);
        }

        h3 {
            color: #5f7bcd;
        }
    </style>
</head>
<nav class="navbar  text-danger navbar-light bg-light">
    <h3 class=" mx-5 text-danger"><span class="text-dark">Your CV ID :</span> <?= $info->ID ?></h3>
    <div class=" d-flex mx-5 justify-content-end">
        <a href="./logout.php" class="btn btn-success">Create New resume</a>
    </div>
</nav>

<body>
    <div class="container w-75 mt-4">

        <div class="d-flex justify-content-around m-3">
            <div class="m-4">
                <img class="ms-5" src="<?= $info->img_user?>" class="rounded mx-auto d-block" alt="...">
            </div>
            <div class="m-4 d-flex justify-content-between flex-column">
                <h1 class="mt-3 text-primary mb-0"><?= $info->f_name .'   '. $info->l_name?></h1>

            </div>
            <div class="m-4  mt-5">
                <p class="mb-1 "><i class="bi bi-telephone-fill"></i> <span
                        class="text-primary"><?= $info->phone ?></span></p>
                <p class="mb-1"><i class="bi bi-envelope-fill"> </i> <span
                        class="text-primary"><?=$info->email ?></span></p>
                <p class="mb-1"><i class="bi bi-linkedin"> </i> <span class="text-primary"><?= $info->linkedin ?></span>
                </p>
                <p class="mb-1"><i class="bi bi-geo-alt-fill"> </i> <span
                        class="text-primary"><?=$info->address?></span></p>
            </div>
        </div>
        <hr class="style-four">
        <div class="row">
            <div class="col">
                <h3> Career OBJECTIVE</h3>
                <hr class="border border-primary border-2 opacity-75">
                <p><?= $info->objective ?></p>
            </div>
            <div class="col">
                <h3>WORK Expereance</h3>
                <hr class="border border-primary border-2 opacity-75">
                <h4><?= $info->ex1 ?></h4>
                <p><?= $info->des1 ?></p> </br>

                <h4><?= $info->ex2 ?></h4>
                <p><?= $info->des2 ?></p>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <h3>ABOUT ME</h3>

                    <hr class="border border-primary border-2 opacity-75"> <b><?= $info->about ?></b>
                </div>
                <div class="col">
                    <h3>EDUCATION</h3>
                    <hr class="border border-primary border-2 opacity-75">
                    <h4>uni </h4>
                    <div class=" justify-content-between d-flex">
                        <p><?= $info->uni ?></p><div></div>
                        <p><?= $info->Fstart ?></p>
                        <p><?= $info->end ?></p>
                    </div>
                    <h4>GPA</h4>
                    <p><?= $info->GPA ?>   %</p>
                    <h4>major</h4>
                    <p><?= $info->major ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>COURSES</h3>
                    <hr class="border border-primary border-2 opacity-75">
                    <b> course 1 : <?=  $info->c ?></b><br>
                    <b> course 2 : <?=  $info->more_c1?></b><br>
                    <b> course 3 : <?=  $info->more_c2 ?></b><br>
                    <b> course 4 : <?=  $info->more_c3 ?></b>
                  
                </div>
                <div class="col">
                    <h3>SKILLS</h3>
                    <hr class="border border-primary border-2 opacity-75">
                    <ul>
                        <li><?=  $info->skills?></li>
                        <li><?=  $info->more_skills1 ?></li>
                        <li><?=  $info->more_skills2?></li>
                        <li><?=  $info->more_skills3 ?></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
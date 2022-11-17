<?php
session_start();

function getAllCvs(){
   $data =  file_get_contents('../file.json');
   return json_decode($data);
}
function getCvById($cvId,$cvs){
    foreach($cvs as $key => $value ){
        if( $value->ID == $cvId )
        return $value;
    }
    return false;
}
$cvId = $_GET['id'] ??null;
$cvs = getAllCvs();//DATA

$cv = getCvById($cvId,$cvs);



function getId(){
    foreach($cvs as $key => $value ){
        if( $value->ID == $cvId )
        return $value;
    }
    return false;
}




?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Cv</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

<body>
    <div class="container w-75 mt-4">
        <div class=" d-flex justify-content-end">
            <a href="../dest.php" class="btn btn-success">Create New resume</a>
        </div>
        <div class="d-flex justify-content-around m-3">
            <div class="m-4">
<!--                 <img class="ms-5" src="<?= $info->f_name?>" class="rounded mx-auto d-block" alt="...">
 -->            </div>
            <div class="m-4 d-flex justify-content-between flex-column">
                <h3 class="mt-3 mb-0"><?= $cv->f_name .' '. $cv->l_name?></h3>
                <p class="mt-0 mb-5 ms-4"><i class="bi bi-geo-alt-fill"></i><?=$info->address?></p>
            </div>
            <div class="m-4 mt-5">
                <p class="mb-1"><i class="bi bi-telephone-fill"></i><?= $info->phone ?></p>
                <p class="mb-1"><i class="bi bi-envelope-fill"></i><?=$info->email ?></p>
                <p class="mb-1"><i class="bi bi-linkedin"></i><?= $info->linkedin ?>/</p>
            </div>
        </div>
        <hr class="style-four">
        <div class="row">
            <div class="col">
                <h3>OBJECTIVE</h3>
                <hr class="border border-primary border-2 opacity-75">
                <p><?= $info->objective ?></p>
            </div>
            <div class="col">
                <h3>WORK HISTORY</h3>
                <hr class="border border-primary border-2 opacity-75"> <b><?= $info->ex2 ?></b>
                <p><?= $info->ex1 ?></p>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <h3>ABOUT ME</h3>
                    <hr class="border border-primary border-2 opacity-75">
                    <!-- <p><?= $_SESSION['about'] ?> </p> -->
                </div>
                <div class="col">
                    <h3>EDUCATION</h3>
                    <hr class="border border-primary border-2 opacity-75">
                    <b><?= $info->uni ?></b><br>
                    <span><?=$info->major?></span>
                    <p><?= $info->cloege ?></p>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col">
                    <h3>COURSES</h3>
                    <hr class="border border-primary border-2 opacity-75">
                    <b><?= $_SESSION['course'] ?> - <?= $_SESSION['cdate'] ?></b>
                    <p><?= $_SESSION['Dcourse'] ?></p>
                    <b><?= $_SESSION['course1'] ?> - <?= $_SESSION['cdate1'] ?></b>
                    <p><?= $_SESSION['Dcourse1'] ?></p>
                    <b><?= $_SESSION['course2'] ?> - <?= $_SESSION['cdate2'] ?></b>
                    <p><?= $_SESSION['Dcourse2'] ?></p>
                </div>
                <div class="col">
                    <h3>SKILLS</h3>
                    <hr class="border border-primary border-2 opacity-75">
                    <ul>
                        <li><?= $_SESSION['skills'] ?></li>
                        <li><?= $_SESSION['skills1'] ?></li>
                        <li><?= $_SESSION['skills2'] ?></li>
                        <li><?= $_SESSION['skills3'] ?></li>
                        <li><?= $_SESSION['skills4'] ?></li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
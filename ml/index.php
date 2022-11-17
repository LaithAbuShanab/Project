<?php

session_start();

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<nav class="position-relative w-100 navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">CV CREATOR</a>
        <?php    ?>







        <form class="d-flex  " action="./check_id.php" method="GET">
            <?php 
                           
                           if(isset($_SESSION['error'])&& !empty($_SESSION['error'])){  
                                $alert='is-invalid';}
                        
                           
                        
                        $_SESSION['error']=null;
                        
                           
                           ?>

            <input class="form-control me-2 form-control <?= $alert?>" type="search" name="search"
                placeholder="inter your id " aria-label="Search">
            <button class="btn btn-outline-success " type="submit">Search</button>
        </form>
    </div>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>

<body>
    <div class=" container text-center  w-50 sss ">
        <h1 class="form_T_color">create your cv with US </h1>

    </div>
    <main>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>




        <div class="contaner  main_padding text-center">
            <h3 class="form_T_color">
                Fill your information to <br> prepare a CV for you
            </h3>
        </div></main>
        <div class="container mt-5">
            <form enctype="multipart/form-data " class="row g-3 mt-5container postion2" action="./validation.php"
                method="POST">
                <input type="hidden" name="ID" value="<?= uniqid() ?>">
                <div class="col-md-4">

                    <label for="validationServer01" class="form-label ">First name</label>
                    <input type="text" class="form-control is-valid" id="validationServer01" name="f_name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationServer02" class="form-label">Last name</label>
                    <input type="text" class="form-control is-valid" id="validationServer02" name="l_name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationServerUsername" class="form-label">phone number</label>
                    <div class="input-group has-validation">
                        <input type="tel" class="form-control is-valid" id="validationServerUsername"
                            aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" name="phone"
                            required>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
                <hr>
                <h1 class="text-center">Career Objective</h1>
                <div class="form-floating">
                    <textarea class="form-control is-valid" placeholder="Leave a comment here" name="objective"
                        id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Comments</label><br>.
                </div>
                <br>
                <hr>
                <br>
                <h1 class="text-center">About Me</h1>
                <div class="form-floating">
                    <textarea class="form-control is-valid" placeholder="Leave a comment here" name="about"
                        id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                </div>
                <hr class="mt-5">
                <h1 class="text-center">E-mails</h1>
                <div class="col-md-4">
                    <label for="validationServer02" class="form-label">Gmail</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                        <input type="email" name="email" class="form-control is-valid" id="validationServerUsername"
                            aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationServer02" class="form-label">LInkedIn-USER</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                        <input type="text" name="linkedin" class="form-control is-valid" id="validationServerUsername"
                            aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationServer02" class="form-label">address</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend3">!</span>
                        <input type="text" name="address" class="form-control is-valid" id="validationServerUsername"
                            aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
                <hr class="mt-5">
                <h1 class="text-center">education</h1>
                <div class="col-md-6">
                    <label for="validationServer03" class="form-label">univercity</label>
                    <input type="text" class="form-control is-valid" name="uni" id="validationServer03"
                        aria-describedby="validationServer03Feedback" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationServer04" class="form-label">GPA</label>
                    <input type="number" class="form-control is-valid" name="GPA" id="validationServer04" required>

                    </input>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationServer05" class="form-label">major</label>
                    <input type="text" name="major" class="form-control is-valid" id="validationServer05"
                        aria-describedby="validationServer05Feedback" required>
                    <div id="validationServer05Feedback" class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationServer01" class="form-label">start at</label>
                    <input type="date" class="form-control is-valid" name="Fstart" id="validationServer01" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationServer02" class="form-label">End at</label>
                    <input type="date" class="form-control is-valid" name="end" id="validationServer02" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>

                </div>

                <hr class="mt-5">
                <h1 class="text-center">skills</h1>
                <div class="col-md-3">
                    <label for="validationServer03" class="form-label">coursess</label>
                    <input type="text" class="form-control is-valid" id="validationServer03"
                        aria-describedby="validationServer03Feedback" name="c" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationServer04" class="form-label">more</label>
                    <input type="text" class="form-control is-valid" id="validationServer03"
                        aria-describedby="validationServer03Feedback" name="more_c1" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationServer04" class="form-label">more </label>
                    <input type="text" class="form-control is-valid" id="validationServer03"
                        aria-describedby="validationServer03Feedback" name="more_c2" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationServer04" class="form-label">more </label>
                    <input type="text" class="form-control is-valid" id="validationServer03"
                        aria-describedby="validationServer03Feedback" name="more_c3" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3">

                </div>
                <hr class="mt-5">
                <h1 class="text-center">skills</h1>
                <div class="col-md-3">
                    <label for="validationServer03" class="form-label">skills</label>
                    <input type="text" class="form-control is-valid" id="validationServer03"
                        aria-describedby="validationServer03Feedback" name="skills" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationServer04" class="form-label">more skills</label>
                    <input type="text" class="form-control is-valid" id="validationServer03"
                        aria-describedby="validationServer03Feedback" name="more_skills1" >
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
            
                <div class="col-md-3">
                    <label for="validationServer04" class="form-label">more skills</label>
                    <input type="text" class="form-control is-valid" id="validationServer03"
                        aria-describedby="validationServer03Feedback" name="more_skills2" >
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                
            
                <div class="col-md-3">
                    <label for="validationServer04" class="form-label">more skills</label>
                    <input type="text" class="form-control is-valid" id="validationServer03"
                        aria-describedby="validationServer03Feedback" name="more_skills3" >
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3">

                </div>
                <hr>
                <h1 class="text-center">Experience work</h1>
                <div class="col-md-6">
                    <label for="validationServer05" class="form-label">Experience</label>
                    <input type="text" class="form-control is-valid" id="validationServer05"
                        aria-describedby="validationServer05Feedback" name="ex1" required>
                    <div id="validationServer05Feedback" class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationServer05" class="form-label">DESCRIPTION</label>
                    <div class="form-floating">
                        <textarea class="form-control is-valid" placeholder="Leave a comment here"
                            id="floatingTextarea2" name="des1" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationServer05" class="form-label">Experience</label>
                    <input type="text" class="form-control is-valid" id="validationServer05"
                        aria-describedby="validationServer05Feedback" name="ex2" required>
                    <div id="validationServer05Feedback" class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationServer05" class="form-label">DESCRIPTION</label>
                    <div class="form-floating">
                        <textarea class="form-control is-valid" placeholder="Leave a comment here"
                            id="floatingTextarea2" name="des2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                </div>
                <div class="mb-3 mt-5 w-50 ml-0">
                    <input type="file" class="form-control is-valid " name="img_user" aria-label="file example"
                        required>
                    <div class="invalid-feedback">Example invalid form file feedback</div>
                </div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div class="margin text-center">
                    <button class="btn btn-success w-25 p-3" type="submit">Create</button>
                </div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>

        </div>
        </form>
        </form>
    

</body>
<?php
include "./footer.php";
?>

</html>
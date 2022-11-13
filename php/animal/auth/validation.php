<?php
session_start();

$_SESSION['error'] = null;

// username and password should be between 5 and 10 chars.

if ($_SERVER['REQUEST_METHOD'] != "POST" && empty($_POST)) // check if the form was submitted using POST method and is not empty
    die("You are a bad guy and you are trying to access this code directly!");

$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;


if (!empty($_POST['email']) && !empty($_POST['password'])) {

    $valid_user = null;

    //this variable will contain all the users in the db
    $users = file_get_contents('../api_data/users.json');
    $users = json_decode($users);

    //loop through the users
    foreach ($users as $user) {
        //check of the current user email equals the provided email
        if ($email == $user->email) {
            $valid_user = $user; //assign the found user to a variable
            break; //break the loop since we found a valid user
        }
    }

    if (!empty($valid_user)) {
        if ($password != $valid_user->password) {
            $error_msg = "Your Email Or Password Is Incorrect";
            $error = true;
        }
    } else {
        $error_msg = "Your Email Or Password Is Incorrect";
        $error = true;
    }
} else {
    $error_msg = "Your Email Or Password Is Incorrect";
    $error = true;
}

if ($error) {
    header("location:../");
    $_SESSION['error'] = $error_msg;
} else {
    $_SESSION['user'] = array(
        'display_name' => $valid_user->display_name
    );
    header("location:../home.php");
}
exit();

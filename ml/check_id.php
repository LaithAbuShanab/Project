<?php
session_start();
$ueser_info=json_decode(file_get_contents('./file.json'));
$search_term=!empty($_GET['search'])?$_GET['search']:null;
$arr_ID=array();

$error=true;
$error_msg="";
$_SESSION['error']=null;
$_SESSION['user']=null;
foreach ($ueser_info as $value) {


    if( $value->ID == $search_term ){
        $error=false;
        $arr_ID[]=$value;
        $_SESSION['user']=$value;
       
    }
    else{
        $error_msg="no id"; 
       
    }
}


if($error){
    $_SESSION['error']=$error_msg;
    header('location:./index.php');
}else{
    $_SESSION['user']=$value;
   header('location:./search.php');
   
}







?>
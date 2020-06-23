<?php

require_once( 'model/user.php' );

/*****************************
* ----- LOAD SIGNUP PAGE -----
*****************************/




function signupPage()
{


    $user = new stdClass();
    $user->id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;

    if (!$user->id):
        require('view/auth/signupView.php');
    else:
        require('view/homeView.php');
    endif;



    $email = $_POST['email'];
    $password = $_POST['password'];



    $userSignup = new user();
    $userSignup->setEmail($email);
    $userSignup->setPassword($password);

    $userSignup->createUser();



}

/****************************
* ----- SIGNUP FUNCTION -----
****************************/

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



    $header = 'From : <support@coding.com>' . '\n';
    $header .= 'Content-Type:text/html; charset="utf-8"' . '\n';

    $keyLenght = 16;
    $key ='';
    for ($i=1;$i<$keyLenght;$i++){
        $key .= mt_rand(0, 9);
    }

    $message = '
    <html>
        <body>
            <p>Your account has been almost added. Please confirm your account by clicking in the following link http://localhost:8888/codflix/codflix/index.php?action=confrimKey.php?' . urlencode($email) . '&key' .$key.'</p>
        </body>
    </html>
    ';

    $userSignup->createUser($key);
    mail($email, 'Confirm Account', $message );

}

/****************************
* ----- SIGNUP FUNCTION -----
****************************/


?>

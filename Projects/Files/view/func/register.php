<?php
/**
 * Created by PhpStorm.
 * User: Main
 * Date: 9/12/2015
 * Time: 5:31 PM
 */
include './controller/User.php';

if ($_POST) {
    $username = trim($_POST['name']);
    $password = trim($_POST['pass']);
    $repPassword = trim($_POST['repPass']);
    $email = trim($_POST['email']);
    $er = array();
    if (strlen($username) < 4 || strlen($username) > 20) {
        $er[] = 'Username must have 4 or 20 symbols !';
    }
    if (strlen($password) < 6 || strlen($password) > 30) {
        $er[] = 'Password must have more than 6 symbols !';
    }

    if ($repPassword !== $password) {
        $er[] = 'Passwords do not match ! ';
    }

    if (strlen($email) < 7 || strlen($email) > 50) {
        $er[] = 'Email must to have more than 7 symbols!';
    }

    if (count($er) > 0) {
        foreach ($er as $e) {
            echo '<div class="error">' . $e . '</div>';
        }
    } else {
        $reg = new User();
        $reg->regUser($username,$password,$email);
    }
}



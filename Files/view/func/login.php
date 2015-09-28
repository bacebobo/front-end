<?php
/**
 * Created by PhpStorm.
 * User: Main
 * Date: 9/13/2015
 * Time: 12:10 PM
 */
include './controller/User.php';
if ($_POST) {
    $username = trim($_POST['name']);
    $password = trim($_POST['pass']);
    $er = array();
    if (strlen($username) < 4 || strlen($username) > 20) {
        $er[] = 'Username must have 4 or 20 symbols !';
    }
    if (strlen($password) < 6 || strlen($password) > 30) {
        $er[] = 'Password must have more than 6 symbols !';
    }

    if (count($er) > 0) {
        foreach ($er as $e) {
            echo '<div class="error">' . $e . '</div>';
        }
    } else {
        $reg = new User();
        $reg->isConnected($username,$password);

    }
}
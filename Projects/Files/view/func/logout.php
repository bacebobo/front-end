<?php
/**
 * Created by PhpStorm.
 * User: Main
 * Date: 9/13/2015
 * Time: 2:12 PM
 */
session_start();
session_destroy();
header('Location: index.php');
exit;
<?php
/**
 * Created by PhpStorm.
 * User: Main
 * Date: 9/8/2015
 * Time: 10:31 PM
 */

require_once './view/header.php';
session_start();
if ($_SESSION == true) {
    echo '<nav>
    <a href="?p=home"> Файлове </a>
    <a href="?p=edit"> Редакция </a>
    <a href="?p=logout"> Излез </a>
    </nav>';
    if (isset($_GET['p'])) {
        $page = $_GET['p'];
        switch ($page) {
            // TODO pages
        }
    }
}
require_once './view/footer.php';

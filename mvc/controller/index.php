<?php
    $action = (empty($_GET['action'])) ? "" : $_GET['action'];

    include '../view/head.php';

    include '../view/menu.php';

    if ($action !== "Links") {
        if ($action === "Home" || $action === "") include '../model/home.php';
        else include '../model/contacts.php';
        include '../view/body.php';
    }
    else include '../view/links.php';

    include '../view/end.php';
?>
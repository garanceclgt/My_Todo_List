<?php

require_once  (dirname(__DIR__, 1) . '/models/database.php') ;
require_once  (dirname(__DIR__, 1) . '/models/todolist.php') ;




if(array_key_exists('add_task', $_POST)){
    $title       = trim($_POST['title']);
    $content     = $_POST['content'];
    if(empty($title)){
        $errors = "Veuillez entrer un titre pour la tâche";
    } else {
        create_task($title, $content);
        header('location: ../index.php');
        exit;
    }
}

$page = "add_task";
$content = 'add_task.phtml';
include '../views/layout.phtml';

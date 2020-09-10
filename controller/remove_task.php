<?php

require_once  (dirname(__DIR__, 1) . '/models/database.php') ;
require_once  (dirname(__DIR__, 1) . '/models/todolist.php') ;


// Verification de la réception du formulaire pour une suppression de tâche.
if(array_key_exists('remove_task', $_POST)){

    //Recupération des données correspondantes
    $ids = $_POST['del'];

    // Boucle sur les tâches à supprimer
    foreach ($ids as $id){
        delete_task($id);
    }


    // Redirection de l'utilisateur
    header('location: ../index.php');
    exit;
}

// Verification de la réception du formulaire pour passer une tâche au statut finie.
if(array_key_exists('update_task', $_POST)){

    //Recupération des données correspondantes
    $ids = $_POST['check'];

    // Boucle sur les tâches à mettre à jour
    foreach ($ids as $id){
        update_task_to_finish($id);
    }

    // Redirection de l'utilisateur
    header('location: ../index.php');
    exit;
}

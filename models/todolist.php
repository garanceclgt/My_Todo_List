<?php

//Connect to database
require_once 'database.php';

/*Function 1 : Recupérer la liste des tâches */

function get_all_task(): array
{

    $sql = "SELECT id, title, content, checked, created_at
            FROM task";

    return fetchAll($sql);
}

/*Function 2 : Supprime une tâche */

function delete_task($id): void
{
    $sql = "DELETE FROM task WHERE id = ?";
    execute($sql, [$id]);

}

/*Function 3 : Mettre à jour une tâche */

function update_task_to_finish( int $id): int
{
    $sql = "UPDATE task SET
                    checked = 1
            WHERE   id= ?";
    return execute($sql, [$id]);
}


/*Function 4 : Créer une tâche */

function create_task(string $title, string $content): int
{
    $sql = "INSERT INTO task (title, content, created_at) 
            VALUES ( ?, ?, NOW() );";
    return execute($sql, [$title, $content,]);
}
/*Function 5 : Récupère une tâche finie */

function get_finish_task(){
    $sql = "SELECT id, title, content, checked, created_at 
            FROM task 
            WHERE checked = 1";

    return fetchAll($sql);
}

/*Function 6 : Récupère la liste des tâches en cours. */
function get_inprogress_task(){
    $sql = "SELECT id, title, content, checked, created_at
            FROM task
            WHERE checked = 0";

    return fetchAll($sql);

}

<?php

require_once  (dirname(__DIR__, 1) . '/models/database.php') ;
require_once  (dirname(__DIR__, 1) . '/models/todolist.php') ;


$tasks = get_finish_task();

$page ="done";

$content = 'finish_task.phtml';
include '../views/layout.phtml';
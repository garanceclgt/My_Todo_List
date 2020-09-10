<?php


require_once(dirname(__DIR__, 1) . '/models/database.php');
require_once(dirname(__DIR__, 1) . '/models/todolist.php');

$tasks = get_inprogress_task();



$page ='todo';
$content = 'inprogress_task.phtml';
include '../views/layout.phtml';
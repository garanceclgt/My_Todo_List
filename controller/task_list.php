<?php
require_once(dirname(__DIR__, 1) . '/models/database.php');
require_once(dirname(__DIR__, 1) . '/models/todolist.php');

$finish_task = get_finish_task();

$inprogress_task = get_inprogress_task();




$page = "task_list";

$content = 'task_list.phtml';
include '../views/layout.phtml';
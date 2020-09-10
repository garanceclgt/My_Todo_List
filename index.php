<?php
require_once 'models/database.php';
require_once "models/todolist.php";

$tasks = get_all_task();

$page = "home";

$content = 'home.phtml';
include "index.phtml";

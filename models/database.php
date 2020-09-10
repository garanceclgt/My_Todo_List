<?php

///////////////////////////////////////////////////////////////////////
// Data Source Name : 1 SEULE REGLE : PAS DE MAJUSCULE
$dbname = "garance";
$dbuser = "root";
$dbpass = "";

// configuration de la connection
$pdo = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass);

// affiche les messages d'erreurs PDO
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
///////////////////////////////////////////////////////////////////////


// Permet d'affficher un resultat en fonction d'une requête SQL
function fetch(string $sql, array $params = []){
    global $pdo;

    $query = $pdo->prepare($sql);
    $query->execute($params);
    return $query->fetch(PDO::FETCH_ASSOC);
}

// Permet d'affficher plusieurs resultats en fonction d'une requête SQL

function fetchAll(string $sql, array $params = []){
    global $pdo;

    $query = $pdo->prepare($sql);
    $query->execute($params);
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

//Execute une requête SQL
function execute(string $sql, array $params= []) :int
{
    global $pdo;

    $query = $pdo->prepare($sql);
    $query->execute($params);

    // retourne l'id de la dernière ligne impactée
    return intval($pdo->lastInsertId());
}

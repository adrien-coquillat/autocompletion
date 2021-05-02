<?php
$recherche = $_GET['search'];
$suggests = getSuggests($recherche);
echo json_encode($suggests);

// Initialiser la connection
function getDb() {
    try {
        $db = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (Exception $e) {
        die($e->getMessage());
    }
};

function getSuggests($recherche)
{
    $db = getDb();
    $sth = $db->query("SELECT nom FROM dictionnaire where nom like '$recherche%'");
//    $sth->setFetchMode(PDO::FETCH_CLASS, Entity::class);
//    var_dump($sth->fetchAll());
    return $sth->fetchAll(PDO::FETCH_ASSOC);
}


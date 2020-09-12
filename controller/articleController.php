<?php

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {

    $getSingle = $database->prepare("SELECT * FROM articles WHERE id = :id");

    $getSingle->execute(array(
        "id" => $_GET['id']
    ));

    $article = $getSingle->fetch();

    // Si aucun contenu trouvé en BDD
    if(!$article) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }


    //var_dump($article);
} else {
   $getAll = $database->prepare("SELECT * FROM articles ORDER BY date DESC");
   $getAll->execute();
   $articles = $getAll->fetchAll();
}
<?php
$title = '';
$content = '';
$error = '';
if(isset($_POST['title']) && isset($_POST['content'])) {

    $data = [
        'title' => htmlspecialchars($_POST['title']),
        'content' => htmlspecialchars($_POST['content'])
    ];

    // Verif
    if($_POST['title'] != '' && $_POST['content'] != '') {


        // Préparation
        $addArticle = $database->prepare("INSERT INTO articles (titre, contenu) VALUES (:title, :content)");

        // Execution
        $addArticle->execute($data);

    } else {
        $title = $data['title'];
        $content = $data['content'];
        $error = "Un champ n'est pas correctement rempli";
    }

}

$lastArticles = $database->prepare("SELECT id, titre FROM articles ORDER BY date DESC LIMIT 3");
$lastArticles->execute();
$articles = $lastArticles->fetchAll();









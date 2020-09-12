<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php echo $error; ?>
<form action="" method="post">
    <div>
        <label for="title" >Titre</label>
        <input type="text" name="title" id="title"
               value="<?php echo $title; ?>">
    </div>
    <div>
        <label for="content">Contenu</label>
        <textarea name="content" id="content"><?php echo $content; ?></textarea>
    </div>
    <button type="submit">Envoyer</button>
</form>


<section>
    <h1>Nos derniers articles</h1>
    <!-- Convention d'écriture -->
    <?php foreach($articles as $article) : ?>
        <article>
            <h4><?= $article['titre'] ?></h4>
            <a href="article.php?id=<?= $article['id'] ?>">
                Lire l'article
            </a>
        </article>
    <?php endforeach; ?>


</section>



</body>
</html>
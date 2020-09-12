<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php if(isset($article)) : ?>
    <article>
        <h1><?= $article['titre'] ?></h1>
        <p>
            <?= $article['contenu'] ?>
        </p>
    </article>
<?php elseif(isset($articles)) : ?>
    <?php foreach($articles as $article) : ?>
        <h4><?= $article['titre'] ?></h4>
        <a href="article.php?id=<?= $article['id'] ?>">Lire l'article</a>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>
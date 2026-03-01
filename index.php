<?php
// Version démo sans base de données
$posts = [
    [
        'id' => 1,
        'title' => 'Bienvenue sur Web Security',
        'slug' => 'bienvenue-web-security',
        'content' => 'Ceci est une version démo du site. Connectez une base de données MySQL pour accéder au contenu complet.',
        'image' => 'default.jpg'
    ],
    [
        'id' => 2,
        'title' => 'Les Bases de la Sécurité',
        'slug' => 'bases-securite',
        'content' => 'Apprenez les principes fondamentaux de la sécurité web.',
        'image' => 'security.jpg'
    ],
    [
        'id' => 3,
        'title' => 'Protection contre les Attaques',
        'slug' => 'protection-attaques',
        'content' => 'Découvrez comment protéger votre application contre les menaces courantes.',
        'image' => 'protection.jpg'
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Russo+One&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php
    include "includes/header.html";
    ?>
    <main class="main">
        <section class="post-section">
            <?php
            foreach ($posts as $post) {
                ?>
                <article class="post">
                    <?php

                    echo '<h1 class="title">' . htmlspecialchars($post['title']) . '</h1>';
                    echo '<p class="post-content text">' . htmlspecialchars($post['content']) . '</p>';
                    echo '<img class="post-img" src="' . htmlspecialchars($post['image']) . '" alt="">';
                    ?>
                </article>
                <?php
            }
            ?>
        </section>
    </main>
    <?php
    include "includes/footer.html";
    ?>
</body>

</html>
<?php
// grâce à l'url rappel-php.test?article.php?id=1
// var_dump($_GET)
// récupérer la valeur id passée en $_GET dans l'url
// ouvrir une connexion à la DB (copier / coller, pour le moment, c'est très bien)
// et chercher l'article en BDD grâce à son id
// afficher les données de l'article avec un var_dump
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
    if ($id === null){
        echo 'Article non trouvé';
    }

    if ($id){
        $pdo = new PDO('mysql:host=localhost;dbname=rappel_php', 'root');
        $requete = $pdo->prepare("SELECT * FROM article WHERE id = (?)");
        $requete->execute([$id]);
        $article = $requete->fetch();

        if($article === false){
            $article = $pdo->query("SELECT * FROM article WHERE id = 1")->fetch();
        }

        var_dump($article);
    } else {
        echo 'veuillez entrer un nombre entier';
    }
}
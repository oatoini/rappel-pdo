<?php
$pdo=new pdo("mysql:host=localhost;dbname=rappel_php","root","");
$req=$pdo->prepare("SELECT * FROM article");
$req->setFetchMode(pdo::FETCH_ASSOC);
$req->execute();
$articles=$req->fetchAll();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;900&family=Roboto:wght@100;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Acceuil - Monito</title>
</head>
<body>
<?php
    include ('inc/header.php');
?>
<section>
    <div class="container">
        <div class="section-title">
            <div>
                <span>Whats new ?</span>
                <h3>Take a look At some of our Pets</h3>
            </div>
            <button class="btn">View more</button>
        </div>

        <div class="product-grid">
            <?php
            foreach($articles as $article) {
                $dateJour = new DateTime();
                $age = $dateJour->diff(new \DateTime($article["birthday"]));
                echo '<article class="card" >
                            <div class="card-img" >
                                <img src = "img/image_1.jpg" alt = "chien" >
                            </div >
                            <h4 > ' .$article["name"].' </h4 >
                            <dl >
                                <dt >Genre </dt >
                                <dd > '.$article["genre"].'</dd >
                                <dt > Age</dt >
                                <dd > '.$age->y.' ans '.$age->m.' mois </dd >
                            </dl >
                            <strong > '.($article["price"] / 100).' € </strong >
                        </article >'
                ;
                ?>
            <?php }
            ?>
            <article class="card">
                <div class="card-img">
                    <img src="img/image_2.jpg" alt="chien">
                </div>
                <h4>MO234 - Pet White Crystal</h4>
                <dl>
                    <dt>Genre</dt>
                    <dd>Male</dd>
                    <dt>Age</dt>
                    <dd>02 months</dd>
                </dl>
                <strong>7.900.000 VDN</strong>
            </article>

            <article class="card">
                <div class="card-img">
                    <img src="img/image_3.jpg" alt="chien">
                </div>
                <h4>MO234 - Pet White Crystal</h4>
                <dl>
                    <dt>Genre</dt>
                    <dd>Male</dd>
                    <dt>Age</dt>
                    <dd>02 months</dd>
                </dl>
                <strong>7.900.000 VDN</strong>
            </article>

            <article class="card">
                <div class="card-img">
                    <img src="img/image_4.jpg" alt="chien">
                </div>
                <h4>MO234 - Pet White Crystal</h4>
                <dl>
                    <dt>Genre</dt>
                    <dd>Male</dd>
                    <dt>Age</dt>
                    <dd>02 months</dd>
                </dl>
                <strong>7.900.000 VDN</strong>
            </article>

            <article class="card">
                <div class="card-img">
                    <img src="img/image_5.jpg" alt="chien">
                </div>
                <h4>MO234 - Pet White Crystal</h4>
                <dl>
                    <dt>Genre</dt>
                    <dd>Male</dd>
                    <dt>Age</dt>
                    <dd>02 months</dd>
                </dl>
                <strong>7.900.000 VDN</strong>
            </article>

            <article class="card">
                <div class="card-img">
                    <img src="img/image_6.jpg" alt="chien">
                </div>
                <h4>MO234 - Pet White Crystal</h4>
                <dl>
                    <dt>Genre</dt>
                    <dd>Male</dd>
                    <dt>Age</dt>
                    <dd>02 months</dd>
                </dl>
                <strong>7.900.000 VDN</strong>
            </article>

            <article class="card">
                <div class="card-img">
                    <img src="img/image_7.jpg" alt="chien">
                </div>
                <h4>MO234 - Pet White Crystal</h4>
                <dl>
                    <dt>Genre</dt>
                    <dd>Male</dd>
                    <dt>Age</dt>
                    <dd>02 months</dd>
                </dl>
                <strong>7.900.000 VDN</strong>
            </article>

            <article class="card">
                <div class="card-img">
                    <img src="img/image_8.jpg" alt="chien">
                </div>
                <h4>MO234 - Pet White Crystal</h4>
                <dl>
                    <dt>Genre</dt>
                    <dd>Male</dd>
                    <dt>Age</dt>
                    <dd>02 months</dd>
                </dl>
                <strong>7.900.000 VDN</strong>
            </article>
        </div>

    </div>
</section>

<?php
include ('inc/footer.php');
?>

</body>
</html>
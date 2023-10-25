<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/post-cree.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Document</title>

    <nav role="navigation">
        <div id="menuToggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <a id="home" href="../index.html">
                    <li>Home</li>
                </a>
                <a href="calendrier.html">
                    <li>Calendrier</li>
                </a>
                <a href="inspi.php">
                    <li>Inspiration</li>
                </a>
                <a href="../index.html"><img src="../img/logo-blanc.png" alt="logo"></a>
                <a href="echange.html">
                    <li>Échange</li>
                </a>
                <a href="compte.html">
                    <li>Compte</li>
                </a>
            </ul>
        </div>
    </nav>
</head>
<body>
<?php
    $host = "localhost"; //serveur
    $username = "root"; //identifiant pour acceder à la base de données
    $password = "root"; //mdp de username
    $dbname = "Learning Lab"; //Nom de la base de données


    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); //variable connexion : accès à la base de données
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->GetMessage();
    }


    $sql = "INSERT INTO posts(posts_titre, posts_image, posts_user, posts_pp)
    VALUES ('{$_POST['titre']}', '{$_POST['image']}','{$_POST['username']}', 'https://cours-informatique-gratuit.fr/wp-content/uploads/2014/05/compte-utilisateur-1.png')";
    $conn->exec($sql);
    ?>
    <h2>Votre post a bien été créé !</h2>

    <script src="script.js"></script>
</body>
<footer>
        <div class="column1">
            <img src="../img/logo-blanc.png" alt="logo">
        </div>
        <div class="column2">
            <p>5 rue Gathier de châtillon <br> Lille, 59000 <br> ESPACE INKERMANN</p>
        </div>
        <div class="column3">
            <img src="../img/tiktok.png" alt="tiktok">
            <img src="../img/linkedin.png" alt="linkedin"><br><br>
            <a href="#">Mentions légales</a><br>
            <a href="#">Politique de confidentialité</a><br>
            <a href="#">Termes et conditions</a>
        </div>
        <div class="column4">
            <p>S'abonner à notre newsletter</p>
            <form id="newsletter-form" action="#" method="post">
                <input type="email" name="email" placeholder="Votre adresse e-mail" required>
                <button type="submit">></button>
        </div>
    </footer>
</html>
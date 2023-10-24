<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="poster.css">
    <link rel="stylesheet" href="global.css">
    <title>Document</title>

    <nav role="navigation">
        <div id="menuToggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <a id="home" href="index.php">
                    <li>Home</li>
                </a>
                <a href="#">
                    <li>Calendrier</li>
                </a>
                <a href="#">
                    <li>Inspiration</li>
                </a>
                <img src="" alt="logo">
                <a href="#">
                    <li>Échange</li>
                </a>
                <a href="#">
                    <li>Login</li>
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
        echo "ok";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->GetMessage();
    }


    $sql = "INSERT INTO posts(posts_titre, posts_image, posts_user, posts_pp)
    VALUES ('{$_POST['titre']}', '{$_POST['image']}','{$_POST['username']}', 'https://cours-informatique-gratuit.fr/wp-content/uploads/2014/05/compte-utilisateur-1.png')";
    $conn->exec($sql);
    ?>
    <h2>Votre article à bien été ajouté !</h2>



    <script src="script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">
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
                <a href="inspi.php">
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
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->GetMessage();
    }


    $affichage = "SELECT posts_id, posts_image, posts_titre, posts_pp, posts_user FROM posts";
    $resultat = $conn->prepare($affichage);
    $resultat->execute();
    ?>

    <h2>Créer un post</h2>
    <form action="post-cree.php" method="post">
        Titre du post: <input type="text" name="titre" placeholder="https://monimage.png">
        Lien de votre image: <input type="text" name="image">
        Nom d'utilisateur: <input type="text" name="username">
        <input type="submit">
    </form>



    <script src="script.js"></script>
</body>

</html>
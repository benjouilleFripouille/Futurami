<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">


    <title>FuturaMMI</title>
</head>

<body>

    <div class="bodyBis">

        <!-- Burger -->
        <div class="container">
            <nav class="navbar">
                <div class="hamburger-menu">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                </div>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#accueil" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="#metierDex" class="nav-link">Métier-dex</a>
                    </li>
                    <li class="nav-item">
                        <a href="#miniJeu" class="nav-link">Mini-jeu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#butMMI" class="nav-link">Le BUT MMI</a>
                    </li>
                    <li class="nav-item">
                        <a href="#createurs" class="nav-link">Les créateurs</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Section Accueil -->
        <section class="Accueil" id="accueil">
            <h1 class="titreAccueil"> FuturaMMI </h1>
            <img src="./Img/Nuages/Blanc/Nuage2.png" alt="" class="B2">
            <img src="./Img/Nuages/Blanc/Nuage3.png" alt="" class="B3">
        </section>

        <!-- Section Métier-dex -->
        <section class="MetierDex1" id="metierDex">
            <h1 class="titreMetier"><a href="#"> Métier-dex </a></h1>
            <img src="./Img/Nuages/Blanc/Nuage1.png" alt="" class="B1">
            <img src="./Img/Nuages/Blanc/Nuage2.png" alt="" class="B2_bis">
            <img src="./Img/Nuages/Blanc/Nuage2.png" alt="" class="B2_bis">
        </section>

        <!-- Section Mini-jeu -->
        <section class="MiniJeu1" id="miniJeu">
            <h1 class="titreJeu"><a href="#"> Mini-Jeu </a></h1>
            <img src="./Img/Nuages/Gris/Nuage1.png" alt="" class="G1">
            <img src="./Img/Nuages/Gris/Nuage2.png" alt="" class="G2">
        </section>

        <!-- Section BUT MMI -->
        <section class="BUTmmi" id="butMMI">
            <div class="logoBUT"></div>
            <div class="defMMI">
                <h2> Le BUT MMI </h2>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem pariatur rem incidunt officia alias autem soluta fugiat id, nostrum voluptatibus, aperiam non error laborum! Deleniti harum similique est veniam voluptatibus necessitatibus autem dolorem fuga ea. Minima, nihil cumque dolore inventore officia unde, commodi recusandae odit dolorem non dicta ad dolores? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum labore aliquam veritatis officia doloribus tenetur modi temporibus odio voluptatibus sequi.</p>
            </div>
            <img src="./Img/Nuages/Noir/Nuage1.png" alt="" class="N1">
            <img src="./Img/Nuages/Noir/Nuage2.png" alt="" class="N2">
            <img src="./Img/Nuages/Noir/Nuage3.png" alt="" class="N3">

        </section>

        <!-- Section "les créateurs" -->
        <section class="nous" id="createurs">
            <h1 class="titreNous"> Qui sommes-nous ? </h1>
            <div class="containerNous">
                <div class="carte benj"></div>
                <div class="carte jules"></div>
                <div class="carte leo"></div>
                <div class="carte marina"></div>
            </div>
        </section>

        <!-- Enveloppe -->
            <img src="/Img/enveloppe.png" alt="" class="modal-btn">
            <div class="modal-bg">
                <div class="modal">
                    <h2>Contactez-nous !</h2>
                    <form method="post">
                        <div class="nomPrenom">
                            <div class="input-box">
                            </div>
                            <div class="input-box">
                            </div>
                        </div>
                        <div class="input-box">
                        </div>
                        <div class="input-box">
                            <input type="text" name="objet" id="objet" required>
                            <label for="prenom">Objet</label>
                        </div>
                        <div class="message-box">
                            <textarea id="message" name="message" required></textarea>
                            <label for="message">Entrez votre message</label>
                        </div>
                        <div class="input-box">
                            <input type="submit" value="Envoyer">
                        </div>
                    </form>
                    <div class="modal-close">
                        <div class="trait t1"></div>
                        <div class="trait t2"></div>
                    </div>
                </div>
            </div>
    </div>

    <script type="text/javascript" src="java.js"></script>
</body>
</html>
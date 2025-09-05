<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://hitboxmakers.fr/">
    <meta property="og:title" content="Hitbox Makers">
    <meta property="og:description" content="48h pour faire un jeu">
    <meta property="og:image" content="http://hitboxmakers.fr/img/animationHitBox.gif">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="oscars.css">
    <link rel="icon" type="image/png" href="favicon.png">
    <title>Hitbox Makers</title>
    <meta name="description" content="48h pour faire un jeu">
    <style>
        h1.center {
            text-align: center;
        }

        h1.center > img {
            display: inline-block;
            height: 2em;
            vertical-align: middle;
        }

        .workshop {
            border-radius: 2px;
            /*border: 1px solid rgba(128, 128, 128, 0.29);*/
            margin: 10px;
            padding: 20px;
            margin-top: 30px;
        }

        .workshop h2 {
            margin-top: 0;
        }

        .infos {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .infos > div > a {
            position: relative;
            top: 50%;
            transform: translate(0, -50%);
        }

        .infos ul {
            list-style: none;
            padding: 0;
        }

        .infos li:before {
            background-image: url('img/logo.png');
            background-size: 15px 15px;
            display: inline-block;
            width: 15px;
            height: 15px;
            content: "";
            vertical-align: middle;
            margin-right: 3px;
        }


    </style>
</head>
<body>
<header>
    <img src="2023/JamHeader.png" alt="">
    <hr>
    <nav id="socials">
        <a target="_blank" href="https://discord.gg/ptmJWfd"><img src="img/discord.png" alt="Discord"></a>
        <a target="_blank" href="https://www.twitch.tv/hitboxmakers"><img src="img/twitch.png" alt="Twitch"></a>
        <a target="_blank" href="https://www.youtube.com/channel/UCt32L1Ao_KXadv-tu3z-IDQ"><img src="img/yt.svg"
                                                                                                alt="Youtube"></a>
        <a target="_blank" href="https://twitter.com/hitboxmakers"><img src="img/twitter.svg" alt="Twitter"></a>
        <a target="_blank" href="https://hitboxmakers.itch.io/"><img src="img/itchio.svg" alt="Itch.io"></a>
    </nav>
</header>

<div class="content">
    <h1>Les Ateliers 2023</h1>
    <?php
    $list = [
        array(
            "title" => "Apprendre à créer un jeu de plateforme",
            "when" => "Mardi 21 Mars, à partir de 19h",
            "desc" => "
Niveau Débutant<br> Avec GDevelop (un outil gratuit), Découvrez un outil très simple pour créer des jeux vidéos sans savoir coder.
<br>Pour en profiter au mieux, venez avec votre ordinateur portable !
",
            "where" => " Pixel Players - 49 boulevard Preuilly, 37000 Tours",
            "who" => array(
                "<a href='https://vfabien21.itch.io/'>Fabien Vidal</a>",
            ),
            "link" => "https://docs.google.com/forms/d/1EHMx3lrxUkDYVnmUDxxweWuFaB01uDxwBiQWXd_v6HA/viewform",
            "img" => "2023/workshop/img/AtelierGdevelop.png"
        ),
        array(
            "title" => "Chara Design : concevoir des personnages intéressants",
            "when" => "Mercredi 22 Mars, à partir de 19h",
            "desc" => "
Niveau Débutant et Intermédiaire <br>
Comment créer des personnages riches, qu'on a envie d'aimer ou de détester ? Comment rendre visible leurs principaux 
traits en quelques coups de crayon ? Un atelier pour donner du caractère à vos jeux.
",
            "where" => " Pixel Players - 49 boulevard Preuilly, 37000 Tours",
            "who" => array(
                "<a href='https://lejeuquiprovoquedeschoses.com/interview/matthieu-boissinot/'>Matthieu Boissinot</a>",
            ),
            "link" => "https://docs.google.com/forms/d/1EHMx3lrxUkDYVnmUDxxweWuFaB01uDxwBiQWXd_v6HA/viewform",
            "img" => "2023/workshop/img/AtelierCharadesign.png"
        ),
        array(
            "title" => "Ask Me Anything : \"Game Jam, retour d'expérience de participant.e.s\"",
            "when" => "Jeudi 23 Mars, à partir de 19h",
            "desc" => "
Niveau Toutes et Tous <br>
Posez toutes vos questions, et écoutez les récits passionnés des participant.e.s des éditions précédentes. <br>
C'est un moment de discussion convivial pour découvrir et se rencontrer, et faire que cette Game Jam soit un moment agréable pour toutes et tous.
",
            "where" => " Pixel Players - 49 boulevard Preuilly, 37000 Tours",
            "who" => array(
                "des participant.e.s des éditions précédentes",
            ),
            "link" => "https://docs.google.com/forms/d/1EHMx3lrxUkDYVnmUDxxweWuFaB01uDxwBiQWXd_v6HA/viewform",
            "img" => "2023/workshop/img/AMAGamejamv2.png"
        ),
        array(
            "title" => "Jam de la Loose : \"1h pour créer un jeu, contre le spleen du dimanche soir\"",
            "when" => "Dimanche 26 Mars, de 19h à 20h",
            "desc" => "
Niveau Intermédiaire à Expérimenté <br>
Posez toutes vos questions, et écoutez les récits passionnés des participant.e.s des éditions précédentes. <br>
C'est un moment de discussion convivial pour découvrir et se rencontrer, et faire que cette Game Jam soit un moment agréable pour toutes et tous.
",
            "where" => "Sur <a href='https://discord.gg/ptmJWfd'>Discord</a> et sur <a href='https://jamdelaloose.fr'>jamdelaloose.fr</a>",
            "who" => array(
                "",
            ),
            "link" => "https://discord.gg/ptmJWfd",
            "img" => "img/JamDeLaLoose_Full.png"
        ),
        array(
            "title" => "Mettre des sensations dans un jeu de plateforme",
            "when" => "Mardi 28 Mars, à partir de 19h",
            "desc" => "
Niveau Débutant à Expérimenté <br>
Comment créer des bonnes sensations dans un jeu de plateforme ? Rature vous propose d'explorer plusieurs effets : contrôles, sons, animations... 
",
            "where" => "Sur <a href='https://discord.gg/ptmJWfd'>Discord</a>",
            "who" => array(
                "<a href='https://rature.itch.io/'>Rature</a>",
            ),
            "link" => "https://docs.google.com/forms/d/1EHMx3lrxUkDYVnmUDxxweWuFaB01uDxwBiQWXd_v6HA/viewform",
            "img" => "2023/workshop/img/AtelierGamefeel.png"
        ),
        array(
            "title" => "Ask Me Anything : \"Rencontrer les studios de jeu pros et indés des Tours\"",
            "when" => "Mercredi 29 Mars, à partir de 19h",
            "desc" => "
Pour Toutes et Tous <br>
Un moment sympa, un verre à la main, pour poser toutes vos questions aux développeuses et développeurs de jeu vidéo tourangeaux qui ont sorti des jeux ces derniers mois
",
            "where" => "Pixel Players - 49 boulevard Preuilly, 37000 Tours",
            "who" => array(
                "<a href='https://play.google.com/store/apps/details?id=com.Nerisma.DoE'>Dungeon of Eternity</a>",
                "<a href='https://lesalondesenigmes.com/'>Le salon des énigmes</a>",
                "<a href='https://thepioneersgame.com/fr'>The Pioneers</a>",
                "<a href='https://www.runnerparty.com/'>Runner Party</a>",
                "et d'autres..."
            ),
            "link" => "https://docs.google.com/forms/d/1EHMx3lrxUkDYVnmUDxxweWuFaB01uDxwBiQWXd_v6HA/viewform",
            "img" => "2023/workshop/img/AMAPros.png"
        ),
        array(
            "title" => "Créer du son pour un jeu et l'intégrer facilement",
            "when" => "Jeudi 30 Mars, à partir de 19h",
            "desc" => "
Niveau Débutant et Intermédiaire<br>
Pendant la Game Jam, Tristana mettra à disposition un mini studio d'enregistrement de son. Mais comment bien l'utiliser ? Une introduction pour penser le son dès la conception du jeu, afin pour créer une atmosphère et l'intégrer facilement ? <br>
Pour en profiter au mieux, venez avec votre ordinateur portable ! 
",
            "where" => "Pixel Players - 49 boulevard Preuilly, 37000 Tours",
            "who" => array(
                "<a href='https://www.facebook.com/alelyaofficiel/'>Tristana Viana</a>",
                "<a href='https://jeremiefremont.com/'>Jérémie Fremont</a>",
            ),
            "link" => "https://docs.google.com/forms/d/1EHMx3lrxUkDYVnmUDxxweWuFaB01uDxwBiQWXd_v6HA/viewform",
            "img" => "2023/workshop/img/AtelierSon.png"
        ),
    ];

    foreach ($list as $it) {
        echo("
        <div class='workshop'>
            <div style='display: flex; justify-content: space-between'>
                <div>
                    <h2>" . $it['title'] . "</h2>
                    <h4>" . $it['when'] . "</h4>
                    <span class='desc'>" . $it['desc'] . "</span>
                </div>
                <div>
                    <img style='max-width: 200px' src='" . $it['img'] . "' alt='" . $it['img'] . "'>
                </div>
            </div>
            <div class='infos'>
                <div>
                    <strong>Où</strong> <br>
                    <span>" . $it['where'] . "</span> <br> <br>
                    <strong>Quand</strong> <br>
                    <span>" . $it['when'] . "</span>
                </div>
                <div>
                    <h4>Présenté par:</h4>
                    <ul>
                    ");
        foreach ($it['who'] as $p) {
            echo("<li>$p</li>");
        }
        echo("
                    </ul>
                </div>
                <div>
                    <a href='" . $it['link'] . "' target='_blank'>
                        <button class='secondary-btn' > Je veux participer !</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>

        ");
    }
    ?>
</div>
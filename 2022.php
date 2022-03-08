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
  </style>
</head>
<body>
<header>
  <img src="img/header_hitbox.png" alt="">
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
  <h1>GAME JAM HITBOX MAKERS 2022</h1>
  <h1 class="center"><img src="img/logo.png" alt="hitbox makers">&nbsp;&nbsp;X&nbsp;&nbsp;<img src="img/ggj.png"
        alt="global game jam"></h1>
  <div id="games"></div>
</div>
<div id="template" style="display: none">
  <div onclick="display({{id}})">
    <h2>{{title}}</h2>
    <div class="img">
      <img src='2022/{{img}}' alt=''>
    </div>
    <p><em class="oscar">{{oscar}}</em></p>
    <a href='{{link}}' target="_blank">Jouer à {{title}}</a>
    <p>{{desc}}</p>
  </div>
</div>

<div id="modal" onclick="closeModal()"></div>

<div id="modal-template" style="display: none">
  <div>
    <h2>{{title}}</h2>
    <div class="flex">
      <div class="img">
        <img src='2022/{{img}}' alt=''>
      </div>
      <div class="info">
        <p><em class="oscar">{{oscar}}</em></p>
        <br>
        <div class="team">
          Réalisé par : <br>
          {{for user in team}}
          <strong>{{user.name}}</strong> {{user.functions}} <br>
          {{endfor}}
        </div>
        <a href='{{link}}' target="_blank">Jouer à {{title}}</a>
      </div>
    </div>
    <p>{{desc}}</p>
  </div>
</div>

<footer>
  <br> Fuelled with love by <a href="https://paloaltours.org" target="_blank">Palo Altours</a>.
</footer>

<script src="oscars.js"></script>
<script>
    const games = [
        new Game("Cactanthropy", "cactanthropy.jpg", "Oscar de la glisse",
            "https://obsidianstudio.itch.io/cactanthropy",
            `Infinite Runner You are a well-known and seasoned Nevada poacher. While on a buffalo hunt, a nature spirit
         observes you while you are hunting an ancestral buffalo. He puts a curse on you. At night, in the moonlight,
         your self is not the same, you look at your shadow: it is that of a cactus, you have heard about this curse,
          the cactanthropic affliction of the ancestral buffalo. Your only solution is to lift the curse before dawn and
           to do this there is only one way out, to catch the shadow of yourself, your dark cactanthrope form. You go
            down a slope at high speed and have to dodge obstacles, you can switch to your were-cactus form to keep
            going and avoid the impassable obstacles that block your way... We thought about a game developed on
            G-Develop, we needed assets and we did it with piksel-art.`,
            [
                new User("Martin Gasque", "Game Designer, Développeur"),
                new User("Clément Gasque", "Sound Designer, Compositeur"),
                new User("Solène Charton", "Visual Artist"),
                new User("Mathias Calleja", "Character Designer")
            ]
        ),
        new Game("Cat-Ktus", "cat-ktus-ss1.png", "Oscar du jeu inspiré de faits réels",
            "https://mattboiss.itch.io/cat-ktus",
            `Cat's are usually sleepy, lazy creatures but sometimes you buy some nice Cactus and they suddenly go full
         Berzerk on it. You control 1 one of our cats (Jericho or Merlin) who are quite in shape. Your goal ? Destroy
         all oh these nasty cactus all over the room but be careful, it's quite exhausting to roll everywhere so you
         gotta have a snack or two or all to not fall empty and sleepy again. Just use WASD and Space to control those
         furry horror and let's make some chaos.`,
            [
                new User("Matthieu Boissinot", "Développeur")
            ]
        ),
        new Game("DUAL", "dual.png", "Oscar du meilleur jeu solo", "https://rature.itch.io/dual",
            `2d fighting game (2 players local)`,
            [
                new User("Rature", "Développeur")
            ]
        ),
        new Game("Globalls", "globalls.png", "Oscar des casses têtes à la pelle",
            "https://myutsu12.itch.io/globalls",
            `You control two globalls, one blue and one red. The blue is going in the direction you pick, but the red
        one is always going in the opposite direction! Make sure each globall arrives at his destination and avoid the
        obstacles and traps!`,
            [
                new User("TinyHat", ""),
                new User("MyuTsu", ""),
                new User("RootKit", ""),
                new User("Thomas37", "")
            ]
        ),
        new Game("Le pot de fleur", "lepotdefleur.png", "Oscar du jeu en carton",
            "https://globalgamejam.org/2022/games/le-pot-de-fleur-4",
            `This is a game about a flower pot.`,
            [
                new User("Jean-Daniel Doriac", ""),
                new User("Yoann Carlos", ""),
                new User("Dorian Fonseca", ""),
                new User("Frédéric Frenot", ""),
                new User("Pierre-Emmanuelle Macé", ""),
            ]
        ),
        new Game("MECH TWINS vs ANIMAL FARM", "mechtwins.png", "Oscar du meilleur meuh-ca",
            "https://globalgamejam.org/2022/games/mech-twins-vs-animal-farm-2",
            `Vous contrôlez un duo de mechas qui doivent défendre la ville contre une invasion d'animaux fermiers
        envoyés par le Roi Cactus pour détruire la civilisation capitaliste ! Alternez tirs et boucliers pour vous
        frayer un chemin jusqu'au Roi Cactus et arrêter l'invasion !`,
            [
                new User("METAYER Grégoire 'Dexhort'", "code & Unity integration"),
                new User("DUTHIER Matiaz 'Zed'", "3d assets &  animation & UI"),
                new User("Karmaa", "3D assets & animation"),
                new User("soundstrider", "music composition & sound FX creation"),
            ]
        ),
        new Game("Parallel Worlds", "logo.png", "Oscar des carrés et des switchs",
            "https://globalgamejam.org/2022/games/parallel-worlds-4",
            `Switch between two worlds to find the artifact that will bring them together.`,
            [
                new User("Arakinos", ""),
                new User("DarkShadows", ""),
                new User("Death_K", ""),
            ]
        ),
        new Game("Spartcactus Legacy", "spartcactus.png", "Oscar de la meilleure cinématique",
            "https://dhraklord.itch.io/spartcactus-legacy",
            `Third Person Shooter où vous incarnez un cactus devant sauver la princesse Pika, enlevée lors d'un raid
        sur le village cactus, par GROS SAPIN PAS CONTENT, le roi des conifers, les sapins des enfers. Faîtes face à
        divers obstacles afin d 'arriver jusqu'à la princesse !`,
            [
                new User("Emilie Barboiron", ""),
                new User("Lucien Defosse", ""),
                new User("Maxime Pinet", ""),
                new User("Florent", ""),
                new User("Manda", ""),
            ]
        ),
        new Game("Super Dumb Scientist", "superdumbscientist.jpg", "Oscar Don't starve the scientist",
            "https://globalgamejam.org/2022/games/super-dumb-scientist-0",
            `Super Dumb Scientist John Lilly completely destroy the world after failing yet another experiment... This
         is him, dumber than ever, in his quest to come back in time to repair his mistake and eventually watch the last
          season of The Young And The Restless`,
            [
                new User('Paul "Aznoqmous" Landreau', "Art & Code"),
                new User('Thomas "Howlite" Bittner', "All Sound Design"),
                new User('Sébastien "Nerisma" Servouze', "Code"),
            ]
        ),
        new Game("Tic Tac", "tictac.png", "Oscar du jazz et des cactus",
            "https://peterdu92.itch.io/tic-tac",
            `Le but du jeu est de détruire les cactus présent sur la map ;) -- Credit -- - Les Graphistes ont était fait
                par HikaruLaw - Les sons ont était fait par Nosh`,
            [
                new User("HikaruLaw", ""),
                new User("Juste une plante", ""),
                new User("PeterTV", ""),
            ]
        ),
        new Game("To be or not to be a Cactus", "tobeornottobe.png", "Oscar de la plus jolie paire de fesses",
            "https://globalgamejam.org/2022/games/be-or-not-be-cactus-2",
            `3D Artist from France, also teaching 3D art at Brassart School in Tours.`,
            [
                new User("Bertrand Ciesielski", "tout")
            ]
        )
    ];
    init();
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <style>
        /* CSS */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('assets/images/background/impot.jpg'); /* Remplacez par le chemin de votre image */
            background-size: cover; /* Pour s'adapter à toute la surface */
            background-position: center; /* Centrer l'image */
            background-repeat: no-repeat; /* Pas de répétition de l'image */
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background-color: #2c9a52;
            color: white;
            height: 50px;
        }

        /* Menu */
        nav {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-grow: 1;
        }

        nav a {
            color:#218a43; 
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            background-color: white;
        }

        .logo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-top: 20px;
        }
        P {
            margin-left: 10px;
        }

        /* Logo */
        #logo {
            font-weight: bold;
            font-size: 2em;
            display: flex;
        }

        /* Main content */
        main {
            display: flex;
            justify-content: flex-end; /* Aligner à droite */
            align-items: center;
            padding: 20px;
            height: 80vh; /* Hauteur pour centrer verticalement */
        }

        /* Conteneur de texte */
        #text-container {
            background-color: white; /* Fond blanc */
            color: black; /* Couleur du texte noire */
            padding: 20px;
            border-radius: 5px; /* Bords arrondis */
            font-size: 1.5rem; /* Taille de la police augmentée */
            font-style: italic; /* Texte en italique */
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div id="logo" >
            <div>
                <img class="logo" src="assets/images/background/logo.png" alt="logo">
            </div>
            <p>Teledec</p>
               
           </div>
        <nav>
            <a href="#">Accueil</a>
            <a href="{{route('connexion')}}">Connexion</a>
        </nav>
    </header>

    <!-- Main content -->
    <main>
        <!-- Conteneur de texte -->
        <div id="text-container">
            <h2>Gérer vos impôts facilement</h2>
            <p>Découvrez comment nous pouvons vous aider à gérer vos impôts <br>
            de manière simple et efficace.</p>
        </div>
    </main>

</body>

</html>

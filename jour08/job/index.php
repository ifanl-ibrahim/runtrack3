<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RunTrack3</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <header>
        <nav class="nav-extended">
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="index.php">Accueil</a></li>
                    <li class="tab"><a href="index.php">Inscription</a></li>
                    <li class="tab"><a href="index.php">Connexion</a></li>
                    <li class="tab"><a href="index.php">Rechercher</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <form action="">
                <p>
                    <label>
                        <input type="radio">
                        <span>Monsieur</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="radio">
                        <span>Madame</span>
                    </label>
                </p>
                <div>
                    <i class="small material-icons">assignment_ind</i>
                    <input type="text" placeholder="Nom">
                </div><br>
                <div>
                    <i class="small material-icons">assignment</i>
                    <input type="text" placeholder="Prénom">
                </div><br>
                <div>
                    <i class="small material-icons">location_city</i>
                    <input type="text" placeholder="Adresse">
                </div><br>
                <div>
                    <i class="small material-icons">mail</i>
                    <input type="email" placeholder="E-mail">
                </div><br>
                <div>
                    <i class="small material-icons">lock</i>
                    <input type="password" placeholder="Mot de passe">
                </div><br>
                <div>
                    <i class="small material-icons">lock_outline</i>
                    <input type="password" placeholder="Confirer votre mot de passe">
                </div><br>
                <p>
                    <label class="filled-in">
                        <input type="checkbox">
                        <span>Informatique</span>
                    </label>
                </p>
                <p>
                    <label class="filled-in">
                        <input type="checkbox">
                        <span>Voyage</span>
                    </label>
                </p>
                <p>
                    <label class="filled-in">
                        <input type="checkbox">
                        <span>Sport</span>
                    </label>
                </p>
                <p>
                    <label class="filled-in">
                        <input type="checkbox">
                        <span>Lecture</span>
                    </label>
                </p>
                <button type="button">Valider</button>
            </form>
        </section>
    </main>
    <footer>
		<nav class="z-depth-0">
			<ul class="justify">
				<li><a href="index.php">Accueil</a></li>
				<li><a href="index.php">Inscription</a></li>
				<li><a href="index.php">Connexion</a></li>
				<li><a href="index.php">Rechercher</a></li>
			</ul>
		</nav>
	</footer>
</body>
</html>
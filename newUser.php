<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>


<form class="w3-container" action="models.php" method="post">

    <br>
    <p>
    <label>pseudo</label>
    <input class="w3-input w3-text-blue" type="text" placeholder="veuillez saisir votre pseudo" name="pseudo" value="" autofocus>
    </p>
    <p>
    <label>mot de passe</label>
    <input class="w3-input w3-text-blue" type="password" placeholder="tapez votre mot de passe" name="mdp" value="">
    </p>
    <br>
    <p>
    <label>Répétez le mot de passe</label>
    <input class="w3-input w3-text-blue" type="password" placeholder="Répétez le mot de passe" name="rMdp" value="">
    </p>
    <br>
    <p><input type="checkbox" id="checkbox" name="checkbox">J'accepte les termes d'utilisations.</p>
    <br>
    <br>
    <button type="submit"class="enregistrer">Enregistrer</button>
    <script src="script.js"></script>
    <br>
    <br>
    <p>Vous avez déjà un compte cliquez <a href="login.php">ici</a></p>
</form>


    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <h1>Se connecter</h1>

    <p class="choose-email">Entrer votre email et votre mot de passe</p>
    </div>
    <div class="inputs">
        <input type="email" placeholder="Email" />
        <input type="password" placeholder="Mot de passe">
    </div>

    <p class="inscription" > <a href="{{ route('password.request') }}">Mot de passe oublié?</a></p>
    <div align="center">
        <button type="submit">Se connecter</button>
    </div>
</form>
</body>
</html>

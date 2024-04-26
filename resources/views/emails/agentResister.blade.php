<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue chez nous</title>
</head>
<body>
    <h1>Bienvenue, {{ $agent->nom }} {{ $agent->prenom }}!</h1>
    <p>Votre compte a été créé avec succès. Voici vos informations de connexion :</p>
    <p><strong>Email:</strong> {{ $agent->email }}</p>
    <p><strong>Mot de passe:</strong> {{ $password }}</p>
    <p>Veuillez utiliser ces informations pour vous connecter à notre système.</p>
</body>
</html>

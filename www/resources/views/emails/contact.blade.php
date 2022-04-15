<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Formulaire de contact API cocktails</h2>
<p>Réception d'un contact depuis l'API cocktails :</p>
<ul>
    <li><strong>Prénom</strong> : {{$contact['firstname']}}</li>
    <li><strong>Nom</strong> : {{$contact['lastname']}}</li>
    <li><strong>Email</strong> : {{$contact['email']}}</li>
    <li><strong>Message</strong> : {{$contact['message']}}</li>
</ul>
</body>
</html>

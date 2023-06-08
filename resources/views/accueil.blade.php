<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="{{ asset('stylePage.css') }}" >
    <title>Projet</title>
</head>
<body>
    <div class="grdConteneur">
        <div class="barre">
            <h2></h2>
        </div> 
        <div class="champ">
            <label for="">Nom</label>
            <input id="idNom" type="text" placeholder="Nom" name="nom">
            <label for="idPre">Prenom</label>
            <input id="idPre" type="text" placeholder="Prenom" name="prenom">
            <br>
            <label for="idEmail">Email</label>
            <input id="idEmail" type="email" placeholder="Adresse E-mail" name="adremail">
          
            <label for="idPassword">Mot de Passe</label>
            <input type="password" id="" placeholder="Mot de Passe">
            <br>
            <label for="idPwdRep">  Répéter le mot de passe</label>
            <input type="password" id="idPwdRep" placeholder="Répéter le mot de passe">

          
        </div>
    </div>
    
</body>
</html>
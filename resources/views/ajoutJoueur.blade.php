<h1>Ajouter un joueur</h1>
<a href="listeJoueur">Liste des joueurs</a><br><br>
<form action="ajout" method="POST">
    @csrf
    <input type="text" name="nom" placeholder="Ajoueur le nom du joueur"><br><br>
    <input type="text" name="prenom" placeholder="Ajoueur le prenom du joueur"><br><br>
    <input type="text" name="email" placeholder="Ajoueur le email du joueur"><br><br>
    <input type="text" name="poste" placeholder="Ajoueur le poste du joueur"><br><br>
    <input type="text" name="numero" placeholder="Ajoueur le numero du joueur"><br><br>
    <input type="text" name="nationalite" placeholder="Ajoueur le nationalite du joueur"><br><br>
    <button type="submit">Ajouter</button>
</form>
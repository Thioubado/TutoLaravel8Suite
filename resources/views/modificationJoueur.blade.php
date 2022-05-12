<h1>Modifier joueur</h1>
<form action="modificationJoueur" method="POST">
    @csrf
    <input type="text" name="nom" placeholder="Ajoueur le nom du joueur" value="{{$joueurs['nom']}}"><br><br>
    <input type="text" name="prenom" placeholder="Ajoueur le prenom du joueur" value="{{$joueurs['prenom']}}"><br><br>
    <input type="text" name="email" placeholder="Ajoueur le email du joueur" value="{{$joueurs['email']}}"><br><br>
    <input type="text" name="poste" placeholder="Ajoueur le poste du joueur" value="{{$joueurs['poste']}}"><br><br>
    <input type="text" name="numero" placeholder="Ajoueur le numero du joueur" value="{{$joueurs['numero']}}"><br><br>
    <input type="text" name="nationalite" placeholder="Ajoueur le nationalite du joueur" value="{{$joueurs['nationalite']}}"><br><br>
    <button type="submit">Modifier</button>
</form>
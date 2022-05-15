<h1>Modifier joueur</h1>
<form action="modificationJoueur" method="POST">
    @csrf
    <input type="text" name="nom" value="{{$joueurs['nom']}}"><br><br>
    <input type="text" name="prenom" value="{{$joueurs['prenom']}}"><br><br>
    <input type="text" name="email" value="{{$joueurs['email']}}"><br><br>
    <input type="text" name="poste"  value="{{$joueurs['poste']}}"><br><br>
    <input type="text" name="numero"  value="{{$joueurs['numero']}}"><br><br>
    <input type="text" name="nationalite"  value="{{$joueurs['nationalite']}}"><br><br>
    <button type="submit">Modifier</button>
</form>
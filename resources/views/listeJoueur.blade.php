<h1>La liste des joueurs</h1>
<a href="ajoutJoueur"> Ajout de joueur</a><br><br>
<table border='1'>
    <tr>
        <td>ID</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Email</td>
        <td>Poste</td>
        <td>Numero</td>
        <td>nationalite</td>
        <td>Operation </td>
    </tr>
    @foreach($joueurs as $joueur)
    <tr>
        <td>{{$joueur['id']}}</td>
        <td>{{$joueur['nom']}}</td>
        <td>{{$joueur['prenom']}}</td>
        <td>{{$joueur['email']}}</td>
        <td>{{$joueur['poste']}}</td>
        <td>{{$joueur['numero']}}</td>
        <td>{{$joueur['nationalite']}}</td>
        <td><a href={{"modificationJoueur/".$joueur['id']}}>Modifier</a></td>
        <td><a href={{"delete/".$joueur['id']}}">supprimer</a></td>
        </tr>
    @endforeach
</table>
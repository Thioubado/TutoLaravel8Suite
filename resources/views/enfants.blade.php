<h1>Liste d'enfants</h1>
<table border='1'>
    <tr>
        <td>ID</td>
        <td>Prenom</td>
        <td>Nom</td>
        <td>Email</td>
        <td>Addres</td>
        <td>Operation</td>
    </tr>
    @foreach($enfants as $enfant)

    <tr>
        <td>{{$enfant['id']}}</td>
        <td>{{$enfant['prenom']}}</td>
        <td>{{$enfant['nom']}}</td>
        <td>{{$enfant['email']}}</td>
        <td>{{$enfant['address']}}</td>
        <td><a href={{"delete/".$enfant['id']}}>Delete </a></td>
    </tr>

    @endforeach
</table>
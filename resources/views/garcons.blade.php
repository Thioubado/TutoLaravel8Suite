<h1>Liste des garcons</h1>

<table>
    <tr>
        <td>Id</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>email</td>
        <td>address</td>
        <td>Operation</td>
    </tr>

    @foreach($garcons as $garcon)

    <tr>
        <td>{{$garcon['id']}}</td>
        <td>{{$garcon['nom']}}</td>
        <td>{{$garcon['prenom']}}</td>
        <td>{{$garcon['email']}}</td>
        <td>{{$garcon['address']}}</td>
        <td> <a href= {{"delete/".$garcon['id']}}>Delete</a></td>
    </tr>
    @endforeach
</table>
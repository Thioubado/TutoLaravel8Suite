<h1>Liste d'amies</h1>
<table border='1'>
    <tr>
        <td>Id</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Email</td>
        <td>Address</td>
        <td>Operations</td>
    </tr>
    @foreach($amies as $amie)
    <tr>
        <td>{{$amie['id']}}</td>
        <td>{{$amie['name']}}</td>
        <td>{{$amie['prenom']}}</td>
        <td>{{$amie['email']}}</td>
        <td>{{$amie['address']}}</td>
        <td><a href={{"delete/".$amie['id']}}>Delete</a></td>
    </tr>
    @endForeach
</table>
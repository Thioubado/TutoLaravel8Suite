<h1>Show list of members</h1>

<table border='1'>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>adresse mail</td>
        <td>adresses</td>
    </tr>

    @foreach($members as$member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['adresse mail']}}</td>
        <td>{{$member['adresses']}}</td>
    </tr>
    @endforeach
</table>
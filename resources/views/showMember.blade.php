<h1>Show member list from databse</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Eamil</td>
        <td>Address</td>
    </tr>

    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['address']}}</td>
    </tr>

    @endforeach
</table>
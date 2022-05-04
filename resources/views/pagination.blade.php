<h1>Elaboration de la pagination</h1>

<table border='1'>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>adresse mail</td>
        <td>adresse postale</td>
    </tr>
    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['adresse mail']}}</td>
        <td>{{$member['adresse postale']}}</td>
    </tr>
    @endforeach
</table>

<span>
    {{$members -> links()}}
</span>

<style>
    .w-5{
        display:none;
    }
</style>
<h1>update page</h1>
<form action="/edit" method="post">
 @csrf
<input type="hidden" name="id" value="{{$data['id']}}">
<input type="text" name="nom" value="{{$data['nom']}}"><br><br>
<input type="text" name="prenom" value="{{$data['prenom']}}"><br><br>
<input type="text" name="email" value="{{$data['email']}}"><br><br>
<input type="text" name="address" value="{{$data['address']}}"><br><br>
<button type="submit">Update</button>
</form>
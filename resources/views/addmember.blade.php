<h1>Add Member page</h1>
@if(session('user'))
<h3 style='color:green'>{{session('user')}} has been added</h3>
@endif

<form action="add" method="post">
    @csrf
    <input type="text" name="user" placeholder="put the your name">
    <input type="text" name="email" placeholder="put the your email">
    <input type="password" name="password" placeholder="put the your password">
    <button type="Submit">Add Member</button>
</form>
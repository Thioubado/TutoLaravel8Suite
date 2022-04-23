<h1>Add Member page</h1>

<form action="add" method="post">
    @csrf
    <input type="text" name="text" placeholder="put the your name">
    <input type="text" name="email" placeholder="put the your email">
    <input type="text" name="password" placeholder="put the your password">
    <button type="Submit">Add Member</button>
</form>
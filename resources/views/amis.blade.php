<h1>Liste des amis</h1>

<form action="ajouter" method="post">
    @csrf
    <input type="text" name="nom" placeholder="Enter your name"><br><br>
    <input type="text" name="prenom" placeholder="Enter your prenom"><br><br>
    <input type="text" name="email" placeholder="Enter your email"><br><br>
    <input type="text" name="address" placeholder="Enter your address"><br><br>
    <input type="int" name="numero" placeholder="Enter your number phone"><br><br>
    <button type="submit">Ajouter Amis</button>
</form>
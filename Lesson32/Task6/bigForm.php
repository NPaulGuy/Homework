<form method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" placeholder="Name"><br>
    <label>Surname:</label><br>
    <input type="text" name="surname" placeholder="Surname"><br>
    <label>Password:</label><br>
    <input type="password" name="password" placeholder="Password"><br>
    <label>Email:</label><br>
    <input type="email" name="email" placeholder="E-mail" value="<?= $_SESSION['email'] ?? ''?>"><br>
    <input type="submit" value="Ввод">
</form>
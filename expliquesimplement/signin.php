<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Explique Simplement</title>
</head>

<style>

</style>

<body>
    <div>
        <form action="add.php" method="post">
            <input type="text" name="pseudo">
            <input type="email" placeholder="entrez votre adresse e-mail" name="mail">
            <br><br>
            <input type="password" placeholder="entrez votre mot de passe" name="pwd">
            <br><br>
            <input type="password" placeholder="confirmez votre mot de passe" name="pwdc">
            <br><br>
            <select name="sexe">
                <option>M</option>
                <option>F</option>
            </select>
            <br><br>
            <input type="submit" value="ADD">
        </form>
        
    </div>
</body>
</html>
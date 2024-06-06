<!DOCTYPE html>
<html>
<head>
    <title>Obrazac za upload datoteke</title>
</head>
<body>
    <form action="obrada.php" method="post" enctype="multipart/form-data">
        Odaberite datoteku: <input type="file" name="datoteka">
        <input type="submit" value="Pošalji">
    </form>
</body>
</html>
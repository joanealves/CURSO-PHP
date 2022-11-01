<!-- exemplo no form -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <form action="teste.php" method="post">
        <input type="text"  name="name" placeholder="Seu nome">
        <input type="email"  name="email" placeholder="Seu email">
        <input type="text"  name="age" placeholder="Sua idade">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CursoPhp</title>
</head>
<body>
    <form action="teste.php" method="post" enctype="multipart/form-data">
        <input type="file" name="img">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
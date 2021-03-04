<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Простая форма отправки данных</title>
</head>
<body>
<form action="send.php" method="post">
    <input type="hidden" name="feature" value="10">
    <div><input type="text" name="name" placeholder="Имя"></div>
    <div><input type="email" name="email" placeholder="E-mail"></div>
    <div><input type="checkbox" checked="checked" name="policy" id="policy"> <label for="policy">Я принимаю этот мир</label></div>
    <div><input type="submit" name="submit" value="Перейти"></div>
</form>

</body>
</html>
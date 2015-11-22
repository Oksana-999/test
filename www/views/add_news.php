<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Новостная лента</title>
</head>
<body>
<!-- VIEWS- внешний вид(это видит пользователь) - ЛОГИКА ОТОБРАЖЕНИЯ- HTML-код с
небольшими вставками PHP здесь не должно быть запроса к Б.Д.-->
<form method="post">
    Название новости:<br/>
    <input type="text" name="news" /><br /><br />
    Текст новости:<br/>
    <input type="text" name="text" /><br /><br />
    <input type="submit" value="Добавить новость" /><br />
</form>
</body>
</html>
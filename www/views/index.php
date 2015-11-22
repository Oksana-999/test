<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<!-- VIEWS- внешний вид(это видит пользователь) - ЛОГИКА ОТОБРАЖЕНИЯ- HTML-код с
небольшими вставками PHP здесь не должно быть запроса к Б.Д.-->
<table border="1">
    <tr>
        <th>НОВОСТИ</th> <!-- 1час 20-->
    </tr>
    <tr>
        <?php foreach ($items as $item ):?>
    <tr>
        <td><a href="show_news.php?id=<?php echo $item['id'];?>"><?php echo $item['news']; ?></a></td>
    </tr>
    <?php endforeach;?>
</table>
<br /><br />
<a href="./add.php">Добавить новость</a>

</body>
</html>
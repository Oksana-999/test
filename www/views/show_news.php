<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Новостная лента</title>
</head>
<body>
<!-- VIEWS- внешний вид(это видит пользователь) - ЛОГИКА ОТОБРАЖЕНИЯ- HTML-код с
небольшими вставками PHP здесь не должно быть запроса к Б.Д.-->
<?php foreach ($show as $s ):?>
    <div align="center">
        <div style="max-width: 700px; background: #ffccff; padding-left: 25px; padding-right: 25px; -moz-box-shadow: 0.4em 0.4em 0.4em -0.1em rgba(0,0,6,0.5);
-webkit-box-shadow: 0.4em 0.4em 0.4em -0.1em rgba(0,0,6,0.5);
box-shadow: 0.4em 0.4em 0.4em -0.1em rgba(0,0,6,0.5);">
            <h3><?php echo $s['text'];?></h3>
        </div>
    </div>
<?php endforeach;?>

<h3><a href="./index.php">На главную</a></h3>

</body>
</html>
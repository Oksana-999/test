<?php
//КОНТРОЛЛЕР формы, добавление в Б.Д. новой фотографии- принимает запрос,
//анализирует, чего вообще хочет пользователь и управляет логикой работы всей программы
//получает данные от модели и выдаёт моделям команды на изменение данных
require __DIR__ . '/models/news.php';

$items = News_getAll();//получаем все News из функции
//print_r($items);  //отладка
//echo date ('d-m-Y_H-i-s');// время и дата//echo"<br />";//echo date('Y-m-d H:i:s');//время и дата
include __DIR__ . '/views/index.php';

//include __DIR__ . '/views/show_news.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Новостная лента</title>
</head>
<body>

</body>
</html>
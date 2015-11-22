<?php
    //МОДЕЛЬ- библиотека с функциями. Она изолирована от внешнего мира, т.е., сама не
    //копается в массивах GET и POST и, что очень важно, ничего не выводит на экран.
    //Задача модели – просто принять от контроллера команду и вернуть результат.
require_once __DIR__ . '/../functions/sql.php';
    //__DIR__- текущая папка, в кот. нах. скрипт(models);
    //подним. на уровень выше, в папку (www)
    //относительно неё заходим в (functions)
function News_getAll()
{
    $sql = 'SELECT * FROM messages ORDER BY dt DESC';
    return Sql_query($sql);	//вызываем функцию, возвращаем результат запроса			/* примерно 45 мин return array(array('title' => 'Фото 1', 'path' => '/img/photo1.jpg'), array('title' => 'Фото 2', 'path' => '/img/photo2.jpg'), array('title' => 'Фото 3', 'path' => '/img/photo3.jpg'));*/
}

function News_insert($data)
{
    $sql = "INSERT INTO messages (dt, news, text) VALUES
	('" . date('Y-m-d H:i:s') . "', '" . $data['news'] . "', '" . $data['text'] . "')";
    //echo $sql;die; //отладка
    Sql_exec($sql);
}

function Selection_id($get)
{
    $sql = "SELECT id, text FROM messages WHERE id=$get";
    //echo $sql; //отладка
    return Sql_query($sql);
}

?>

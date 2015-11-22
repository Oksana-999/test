<?php
//КОНТРОЛЛЕР- принимает запрос,
//анализирует, чего вообще хочет пользователь и управляет логикой работы всей программы
//получает данные от модели и выдаёт моделям команды на изменение данных
require __DIR__ . '/models/news.php';

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
}

if (isset($_GET['id'])) {
    // echo $_GET['id'];die;  //отладка
    $get = $_GET['id'];
    $show = Selection_id($get);
    //print_r ($show); die; //отладка
}
include __DIR__ . '/views/show_news.php';
?>
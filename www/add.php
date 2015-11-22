<?php
//КОНТРОЛЛЕР формы, добавление в Б.Д. новой фотографии- принимает запрос,
//анализирует, чего вообще хочет пользователь и управляет логикой работы всей программы
//получает данные от модели и выдаёт моделям команды на изменение данных
require __DIR__ . '/models/news.php';
if (!empty($_POST)) {

    $data = array(); //масиив- ДАННЫЕ (назв. картинки и
    //имя файла, куда мы её кладём)
    if (!empty($_POST['news'])) {   //1 час 27 Geekbrains урок 8
        $data['news'] = $_POST['news'];

    }

    if (!empty($_POST['text'])) {
        $data['text'] = $_POST['text'];

    }


    //var_dump($data);die;  //отладка
    if (isset($data['news']) && isset($data['text'])) {
        News_insert($data);
        //die; //отладка
        header('Location: index.php');
        die;
    }
}

include __DIR__ . '/views/add_news.php';
?>
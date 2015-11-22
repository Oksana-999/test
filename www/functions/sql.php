<?php
//вспомогательные функции для работы с Б.Д.
function Sql_connect() //соединение с Б.Д.
{
    mysql_connect('localhost', 'root', '19425') or die('Нет подключения к базе!');
    mysql_select_db('newsline') or die('База данных не найдена!');
    //Языковая настройка: кирилица
    mysql_query ("set_client='utf8'");
    mysql_query ("set character_set_results='utf8'");
    mysql_query ("set collation_connection='utf8_general_ci'");
    mysql_query ("SET NAMES utf8");
}

function Sql_exec($sql) // функция просто выполняет запрос
{
    Sql_connect();
    mysql_query($sql);

}

function Sql_query($sql) //запрос к Б.Д. функция не знает кокой будет запрос, можнo
{						//выполнять любые запросы
    Sql_connect();
    $res = mysql_query($sql);	//print_r($res);

    $ret = array(); //созд. пустой массив
    while (false !== ($row = mysql_fetch_assoc($res)))
    {				//mysql_fetch_assoc  индексы- названия столбцов
        $ret[] = $row;//print_r($row);//в пустой массив добавляем значения из Б.Д. по одному
    }
    return $ret; //возвр. результат
}
?>
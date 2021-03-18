<!doctype html>
<html lang="ru">
<head>
    <title>Админ-панель</title>
</head>
<body>
<?php
$host="localhost";    //хост
$user='root';        //пользователь
$pass='';             //установленный вами пароль
$db_name="mysql";    //название бд
$link=mysqli_connect($host,$user,$pass,$db_name); //коннектимся
//$is_db_selected = mysqli_select_db($link, $db_name);        //выбираем БД

/*if (isset($_GET['del_id'])) { //проверяем, есть ли переменная на удаление
    $sql = mysql_query('DELETE FROM `messages` WHERE `id` = '.$_GET['del_id']); //удаляем строку из таблицы
}

if (isset($_GET['red_id'])) { //Проверяем, передана ли переменная на редактирования
    if (isset($_POST['name'])) { //Если новое имя предано, то обновляем и имя и цену
        $sql = mysql_query('UPDATE `messages` SET '
            .'`name` = "'.$_POST['name'].'",'
            .'`message` = '.$_POST['message'].' '
            .'WHERE `id` = '.$_GET['id']);
    }
}
?>
<table border='0'>
    <tr>
        <td>Идентификатор</td>
        <td>Имя</td>
        <td>Комментарий</td>
    </tr>
    <?php
    $sql = mysqli_query("SELECT `id`, `name`, `message` FROM `messages`", $link);
    while ($result = mysqli_fetch_array($sql)) {
        echo     '<tr><td>'.$result['id'].'</td>'.
            '<td>'.$result['name'].'</td>'.
            '<td>'.$result['message'].'</td>'.
            '<td><a href="?del_id='.$result['id'].'">Удалить</a></td>'.
            '<td><a href="?red_id='.$result['id'].'">Редактировать</a></td></tr>';
    }
    ?>
</table>*/
//Достаем запсись из БД
$sql = mysqli_query($link, "SELECT * FROM `item`") or die( mysqli_error($link) ); //запрос к БД
$result = mysqli_fetch_array($sql); //получение самой записи
//Отрисовываем форму. Обратите внимание, что фигурную скобку условия if мы закроем только после формы.
//Т.е. если переменная red_id не передана, то форма не отрисуется
//И не важно, что посреди цыкла мы закрываем тег PHP , его работа продолжается, пока скобка не закроется
?>
<table>
    <form action="" method="post">
        <tr>
            <td>Клиент:</td>
            <td><input type="text" name="Name" value="<?php echo ($result['db_klient']); ?>"></td>
            <td>Номер:</td>
            <td><input type="text" name="Price" size="3" value="<?php echo ($result['db_nomer']); ?>"></td>
        </tr>
        <!--<tr>
            <td colspan="2"><input type="submit" value="OK"></td>
        </tr>-->
    </form>
</table>
</body>
</html>
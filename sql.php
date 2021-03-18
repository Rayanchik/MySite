<?php
//header('Content-Type: text/html; charset=utf-8');
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'item';
$db_charset = 'utf8';
$is_connected = @mysqli_connect($db_host, $db_username, $db_password);
$con = mysqli_connect($db_host,$db_username, $db_password) or die(mysqli_connect_error());
$is_db_selected = $is_connected ? @mysqli_select_db($con, $db_name) : FALSE;
$errors = array();
if (!$is_connected) $errors[] = 'Не могу соединиться с базой данных';
if (!$is_db_selected) $errors[] = 'Не могу найти базу данных';
if (!empty($_POST['f_submit']) AND $is_connected AND $is_db_selected)
{
    if (!empty($_POST['f_submit']) AND $is_connected AND $is_db_selected)
{
    if (empty($_POST['f_text']) OR !trim($_POST['f_text']))
    {
        $errors[] = 'Не введен текст сообщения!';
    }
    else
    {
        if (mb_strlen(trim($_POST['f_text']), 'utf-8')>255)
        {
            $errors[] = 'Текст сообщения не может превышать 255 символов!';
        }
        else
        {
            $sql = 'INSERT INTO `messages` SET
							`message`="'.mysqli_real_escape_string(trim($_POST['f_text'])).'",
							`name`="'.mysqli_real_escape_string(trim($_POST['n_text'])).'",
							`date`=NOW()
				';

            $result = mysqli_query($sql)
            or die('Query error: <code>'.$sql.'</code>');

            //Header('Location:?');
        }
    }
}
}
?>
    <form action="?" method="post" class="comment">
        Имя <input type="text" name="n_text" value=""><br><br>
        Текст сообщения <textarea name="f_text" value=""></textarea><br><br>
        <input type="submit" name="f_submit" value="Отправить"/>
    </form>
<    

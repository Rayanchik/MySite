<?php
 session_start();
 if(!isset($_SESSION['loggedin'])){
     header("Location: sign.php");
     exit;
 }
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="style/styles.css" rel="stylesheet">
</head>
<body>
<header>
</header>
<content>
    <div class = "otzyv">
        <p>Секретная таблица из базы данных</p>
        <?php
            include_once "delete.php";
        ?>
    </div>
</content>
<section>
    <p><a href="exit.php">Выйти</a></p>
</section>
<footer class="clear">
</footer>

</body>

</html>
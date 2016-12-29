<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(empty($_SESSION['login'])):?>
        <form method="post">
            <label>Login
                <input type="text" name="login"/>
            </label>
            <input type="submit" name="log in"/>
        </form>
        <?php else:?>
        <?php endif;?>
        ?>
    </body>
</html>

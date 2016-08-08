<?php
/**
 * Created by PhpStorm.
 * User: skylerdegrote
 * Date: 8/7/16
 * Time: 4:01 PM
 */
$pageTitle = "Log In";

?>

<!Doctype html>
<html>
    <head>
        <title><?php echo $pageTitle ?></title>

    </head>
    <body>
    <?php
        include ("includes/header.php");
    ?>
        <form action="process_login.php" method="post">
            <label title="username">Username:</label> <input title="username" type="text" name="username" value=" "><br>
            <label title="password">Password:</label> <input title="password" type="password" name="password" value=""><br>
            <input type="submit" value="Log In" name="submit"><input type="button" value="Register" name="register">
        </form>
    </body>
</html>

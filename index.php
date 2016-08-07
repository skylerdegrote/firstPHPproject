<?php
/**
 * Created by PhpStorm.
 * User: skylerdegrote
 * Date: 8/6/16
 * Time: 5:22 PM
 */


//INCLUDE THE DATABASE.PHP FILE
include('config/database.php');

//INCLUDE THE FUNCTIONALITY FILE
include('functionality/mainScript.php');

// THIS IS CONFIGURING THE DATABASE
if(isset($_POST['createDB'])){
    $crt_db=trim($_POST['crt_db']);
    $error_cdb=FALSE;
    if(strlen($crt_db)<1){
        $error_cdb=TRUE;
    }
    if($error_cdb==FALSE){
        $db->query("CREATE DATABASE ".$crt_db);
    }
}
$db_results=$db->query("SHOW DATABASES");
if($db_results->num_rows>0){
    while($_dbrow=$db_results->fetch_assoc())
    {
        $databases[]=$_dbrow;
    }
}
?>

<!-- START HTML CODE HERE -->
<!DOCTYPE html>
<html>
    <head>
        <?php
            $pageTitle = 'home';
        ?>

<!-- php code goes here -->
    <?php
        $pageTitle = "Home";
        $navHighlight = "home";
    ?>
<!-- links go here -->
    <!-- connect to sass-->
    </head>
    <body>
        <header>
            <?php
            include ('includes/header.php');
            ?>
        </header>
        <main>

        </main>
        <footer></footer>
    </body>
</html>
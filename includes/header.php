
<?php
    include ("../process_login.php");

?>
<!DOCTYPE html>
<head>
<title> <?php echo $page_title ?></title>
<link type="text/css" rel="stylesheet" href="../styles/header.css"/>
</head>

<body>

<header>
    <div class="navigation">
        <ul>
            <li <?php if($page_title == 'home') {echo 'id="activeNavLink"';} ?>><a href="index.php">Home</a></li>
            <li class="alignRight" <?php if($page_title == 'log in') {echo 'id="activeNavLink"';} ?>><a href="log-in.php">Log In</a></li>
            <li class="alignRight"><?php echo $username ?></li>
        </ul>
    </div>
</header>


</body>
</html>

<!Doctype html>
<html>
<head>
    <title><?php echo $pageTitle ?></title>

</head>
<body>
<?php
include ("includes/header.php");
?>

<?php
        //set default values using ternary operator
    //boolean test ?  value_if_true : value_if_false
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';


    //DETECT if the form has been submitted
    if(isset($_POST['submit'])){
        echo "form was submitted";
    }

        echo "{$username}";
?>

</body>
</html>

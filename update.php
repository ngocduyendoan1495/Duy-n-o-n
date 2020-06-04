<?php
     session_start();
     ob_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Information Update</title>

</head>
<body>

<?php
    if(!$_SESSION['userArray']) {
        header('location:index.php');
    }
?>

</body>
</html>


<?php
     ob_end_flush();
?>
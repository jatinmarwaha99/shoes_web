<?php require('conn.php');?>
<?php 
    session_destroy();
    header('Location:index.php');
?>
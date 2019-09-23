<?php
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        require 'config/connect.php';
        $query = "DELETE from jobs where id=$id";
        $pdo->query($query);
    }
?>
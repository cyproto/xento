<?php 
    try{
        $pdo = new PDO("pgsql:host=localhost;dbname=ykarande", "postgres", "yash");
    }
    catch(PDOException $e){
        echo $e->getMessage();
}
?>
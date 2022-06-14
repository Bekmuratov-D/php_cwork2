<?php

    $text = $_POST['message'];
    $id = $_POST['id'];
    $mysql = new mysqli('std-mysql', 'std_1739_cworkphp', 'Bigbos2002', 'std_1739_cworkphp');
    mysqli_query($mysql, "UPDATE `comment` SET `text` = '$text' WHERE `comment`.`id_com` = '$id'");
    header('location: /');
?>
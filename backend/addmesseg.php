<?php
    
    include_once 'database.php';
    include_once 'function.php';
    
    $message = $_POST['message'];
    $date = date(format: 'Y-m-d H:i:s');
    $user = $_POST['username'];
    $page = $_POST['page'];

    $mysql = new mysqli('std-mysql', 'std_1739_cworkphp', 'Bigbos2002', 'std_1739_cworkphp');
    
    $mysql->query('INSERT INTO comment (`text`, date, `user_com`, `id_page`) VALUES (' . add_quotes($message) . ',' . add_quotes($date) . ',' . add_quotes($user) . ',' . add_quotes($page) . ')');


    
    $mysql->close();
    header('Location: /page');

?>
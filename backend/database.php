<?php
function connect_db() {
    $host = 'std-mysql';
    $user = 'std_1739_cworkphp';
    $db = 'std_1739_cworkphp';
    $pass = 'Bigbos2002';

    $my_db = new mysqli($host, $user, $pass, $db);
    if ($my_db->connect_error) {
        die("Connection failed: " . $my_db->connect_error);
    }
    return $my_db;
}
   
function sql_query($sql) {
    $connection = connect_db();
    $result = $connection->query($sql);
    $connection->close();
    return $result;
}

function add_quotes($str) {
    return '\'' . $str . '\'';
}


?>
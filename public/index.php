<?php

try {
    $host = 'db';
    $database = 'test_db';
    $user     = 'test_db';
    $password = 'test_db!';

    $pdo = new PDO("mysql:host={$host};dbname={$database};", $user, $password, [
        PDO::ATTR_EMULATE_PREPARES => false
    ]);

    $stmt = $pdo->query('SHOW TABLES');
    while ($result = $stmt->fetch(PDO::FETCH_NUM)){
        $table_names[] = $result[0];
    }

    echo'<div class="center"><h1>Databese Connect</h1></div>';
    echo '<pre>';
    var_dump($table_names);
    echo '</pre>';


} catch (PDOException $e) {
    exit('データベース接続失敗。'.$e->getMessage());
}

echo phpinfo();

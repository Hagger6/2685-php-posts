<?php
session_start();
$host = 'localhost';
$database = '2685_php_posts';
$user = 'root';
$password = '';
function dd(string|array|int|object|bool $itm, bool $die = false): void
{
    echo '<pre style="background: #112; color: #3f3; padding: 10px;">';
    var_dump($itm);
    echo '</pre>';
    if ($die)
        die();
}
$db = new mysqli(username: $user, password: $password, hostname: $host, database: $database);
 
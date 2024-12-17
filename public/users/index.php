<?php
include '../load.php';

$qry = 'SELECT * FROM `pst_users` LIMIT 10;';
foreach ($users as $user) {
    include '../components/users/user.php';
}
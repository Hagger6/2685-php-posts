<?php
include '../../load.php';

$qry = 'SELECT * FROM `pst_users` LIMIT 10;';
$res = $db->query($qry);

$users = mysqli_fetch_all($res, MYSQLI_ASSOC);

foreach ($users as $user) {
    include '../../components/users/user.php';
}
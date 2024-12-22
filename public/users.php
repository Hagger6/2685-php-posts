<?php
include '../../load.php';
// Super Global Array $_GET
$id = $_GET['id'];
$qry = "SELECT * FROM `pst_users` WHERE `id` = '$id';";
$res = $db->query($qry);
$user = mysqli_fetch_object($res);
dd($user->name);


 
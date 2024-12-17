<?php
include 'load.php';
$qry_posts = "SELECT * FROM `pst_posts` WHERE `user_id` = '$id';";
$res_posts = $db->query($qry_posts);
$posts = mysqli_fetch_all($res_posts, MYSQLI_ASSOC);
dd($posts);
<?php
include '../load.php';
//super global array $_get
$id = $_GET['id'];
?>
<div class="m-5 p-2 flex" style="border: solid 1px; margin: 20px 0; max-width: 300px;"> 
    <h2><?= $user['name']; ?></h2>
    <p><?= $user['email']; ?></p>
    <p><?= $user['mobile']; ?></p>
    <p><?= $user['roles']; ?></p>  
    <a href="/user.php?id=<?=$user['id']?>">View</a>
</div>


<div style="border: solid 1px; margin: 20px 0; max-width: 300px;">
    <h2><?= $user['title']; ?></h2>
    <p><?= $user['body']; ?></p>
    <p><?= $user['user_id']; ?></p>
    <p><?= $user['post_status_id']; ?></p>
    <a href="/user.php?id=<?=$user['user_id']?>">View</a>
</div>
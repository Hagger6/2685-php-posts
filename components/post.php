<div style="border: solid 1px; margin: 20px 0; max-width: 300px;">
    <h2><?= $post['title']; ?></h2>
    <p><?= $post['body']; ?></p>
    <p><?= $post['user_id']; ?></p>
    <p><?= $post['post_status_id']; ?></p>
    <a href="/post.php?id=<?=$post['id']?>">View</a>
</div>
<!-- views/posts.view.php -->
<div class="post-list">
    <h1>Blog Posts</h1>
    <?php if (!empty($posts)): ?>
        <?php foreach ($posts as $post): ?>
            <div class="post-item">
                <h2><?php echo htmlspecialchars($post['title']); ?></h2>
                <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
                <small>Auteur: <?php echo htmlspecialchars($post['author']); ?> | Geplaatst op: <?php echo htmlspecialchars($post['created_at']); ?></small>
            </div>
            <hr>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Geen posts gevonden.</p>
    <?php endif; ?>
</div>

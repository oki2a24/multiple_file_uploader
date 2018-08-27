<?php foreach ($articles as $article_item): ?>
    <h3><?php echo $article_item['id']; ?></h3>
    <?php echo $article_item['message']; ?>
<?php endforeach; ?>
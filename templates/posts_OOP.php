<body>
    <div class="container">
        <h1>Social Platform</h1>
        <div class="row">
            <?php foreach ($posts as $post) : ?>
                <div class="col">
                    <div class="card">
                        <h3><?= $post->getPostTitle() ?></h3>
                        <div class="date"><?= $post->getPostDate()->format('d/m/Y H:i') ?></div>
                        <hr>
                        <div class="card-footer">
                            <div><i class="fa-regular fa-user"></i> <?= $post->getPostUsername() ?></div>
                            <div><i class="fa-regular fa-thumbs-up"></i> <?= $post->getPostLikes() ?></div>
                        </div>
                        <?php foreach ($post->tags as $tag) : ?>
                            <span class="tag"><?= $tag ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
<body>
    <div class="container">
        <h1>Social Platform</h1>
        <div class="row">
            <?php foreach ($posts as $post) : ?>
                <div class="col">
                    <div class="card">
                        <h3><?= $post['title'] ?></h3>
                        <div class="date"><?= date('d/m/Y H:i', strtotime($post['date'])) ?></div>
                        <hr>
                        <div class="card-footer">
                            <div><i class="fa-regular fa-user"></i> <?= $post['username'] ?></div>
                            <div><i class="fa-regular fa-thumbs-up"></i> <?= $post['likes'] ?></div>
                        </div>
                        <?php $post['tags'] = json_decode($post['tags'], true); ?>
                        <?php foreach ($post['tags'] as $tag) : ?>
                            <span class="tag"><?= $tag ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
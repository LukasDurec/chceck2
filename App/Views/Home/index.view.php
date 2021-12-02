<?php /** @var Array $data */ ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-start flex-wrap">
            <?php foreach ($data['posts'] as $post) { ?>

                <div class="card mb-3">
                    <img src="<?= \App\Config\Configuration::LOAD_DIR . $post->getImage() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title"><?= $post->getTitle() ?></h2>
                        <h5 class="card-text"><?= $post->getSubtitle() ?></h5>
                        <a href="?c=home&a=addLike&postid=<?= $post->getId() ?>" class="btn btn-primary">
                            <?= $post->getLikes() ?>
                            <i class="bi bi-hand-thumbs-up"></i>
                        </a>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
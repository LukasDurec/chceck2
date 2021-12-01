<?php /** @var Array $data */ ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-start flex-wrap">
            <?php foreach ($data['posts'] as $post) { ?>
                <div class="card" style="width: 18rem; margin: 5px">
                    <img src="<?= \App\Config\Configuration::UPLOAD_DIR . $post->getImage() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
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
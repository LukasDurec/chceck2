<?php /** @var Array $data */ ?>

<table class="table">
    <thead class="table-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Subtitle</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data['posts'] as $post) { ?>
    <tr>
        <th scope="row"><?= $post->getId() ?></th>
        <td><?= $post->getTitle() ?></td>
        <td><?= $post->getSubtitle() ?></td>
        <td>
            <a href="#" class="btn btn-success">
                <i class="bi bi-receipt"></i>
            </a>
            <a href="#" class="btn btn-info">
                <i class="bi bi-arrow-up-circle-fill"></i>
            </a>
            <a href="?c=home&a=delete&postid=<?= $post->getId() ?>" class="btn btn-danger">
                <i class="bi bi-x-square-fill"></i>
            </a>


        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>

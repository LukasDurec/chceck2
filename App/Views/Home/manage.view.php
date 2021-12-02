<?php /** @var Array $data */ ?>

<table class="table">
    <thead class="table-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Subtitle</th>
        <th scope="col">Actions</th>
        <th>
        <a href="?c=home&a=post" class="btn btn-warning"> Create new
        </a>
        </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data['posts'] as $post) { ?>
    <tr>
        <th scope="row"><?= $post->getId() ?></th>
        <td><?= $post->getTitle() ?></td>
        <td><?= $post->getSubtitle() ?></td>
        <td colspan="2">
            <button type="button"  data-bs-toggle="modal" data-bs-target="#view" class="btn btn-success">
                <i class="bi bi-receipt"></i>
            </button>
            <button type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-info">
                <i class="bi bi-arrow-up-circle-fill"></i>
            </button>

            <a href="?c=home&a=delete&postid=<?= $post->getId() ?>" class="btn btn-danger">
                <i class="bi bi-x-square-fill"></i>
            </a>

            <!-- Modal UPDATE-->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Update</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <form method="post" enctype="multipart/form-data" action="?c=home&a=update">
                                        <div>

                                            <div class="input-group input-group-lg">
                                                <span class="input-group-text" id="inputGroup-sizing-lg">Title</span>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="title" value="<?= $post->getTitle() ?>">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-default">Subtitle</span>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="subtitle" value="<?= $post->getSubtitle() ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="hidden" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="postid" value="<?= $post->getId() ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Obrázok</label>
                                                <input name="file" class="form-control" id="formFile" type="file" ">
                                            </div>

                                            <div class="input-group">
                                                <span class="input-group-text">Text</span>
                                                <textarea class="form-control" aria-label="With textarea" name="content"><?= $post->getContent() ?>"</textarea>
                                            </div>


                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal VIEW-->
            <div class="modal fade" id="view" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Update</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                                <div class="row">
                                    <div class="d-flex justify-content-start flex-wrap">
                                        <?php foreach ($data['posts'] as $post) { ?>

                                            <div class="card mb-3" style="height: 10em">
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

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>

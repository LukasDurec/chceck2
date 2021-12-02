<?php /** @var [] $data */ ?>
<div class="row">
    <div class="col">
        <form method="post" enctype="multipart/form-data" action="?c=home&a=upload">
            <div>

                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Title</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="title">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Subtitle</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="subtitle">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Obrázok</label>
                    <input name="file" class="form-control" id="formFile" type="file">
                </div>

                <div class="input-group">
                    <span class="input-group-text">Text</span>
                    <textarea class="form-control" aria-label="With textarea" name="content"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Odoslať</button>
                </div>

            </div>
        </form>
    </div>
</div>
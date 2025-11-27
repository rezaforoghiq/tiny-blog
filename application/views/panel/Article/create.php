<?php $this->include("panel.layouts.header") ?>

    <section class="container-fluid">
        <section class="row">
            <section class="col-md-2 p-0">
            <?php $this->include("panel.layouts.sidebar") ?>
            </section>
            <section class="col-md-10 pt-3">

                <form action="<?= $this->url("article/store") ?>" method="post">
                    <section class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="title ...">
                    </section>
                    
                    <section class="form-group">
                        <label for="cat_id">Category</label>
                        <select class="form-control" name="cat_id" id="cat_id">
                        <?php foreach($categories as $category){ ?>
                            <option value="<?= $category["id"] ?>"><?= $category["name"] ?></option>
                        <?php } ?>
                        </select>
                    </section>
                    <section class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" name="body" id="body" rows="5" placeholder="body ..."></textarea>
                    </section>
                    <section class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </section>
                </form>

            </section>
        </section>
    </section>

    <?php $this->include("panel.layouts.footer") ?>
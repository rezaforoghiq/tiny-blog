<?php $this->include("panel.layouts.header") ?>
    <section class="container-fluid">
        <section class="row">
            <section class="col-md-2 p-0">
            <?php $this->include("panel.layouts.sidebar") ?>
            </section>
            <section class="col-md-10 pt-3">

                <form action="<?= $this->url("category/update/". $category["id"]) ?>" method="post">
                    <section class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?= $category["name"] ?>">
                    </section>
                    <section class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </section>
                </form>

            </section>
        </section>
    </section>

    <?php $this->include("panel.layouts.footer") ?>
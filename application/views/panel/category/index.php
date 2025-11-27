<?php $this->include("panel.layouts.header") ?>

    <section class="container-fluid">
        <section class="row">
            <section class="col-md-2 p-0">
            <?php $this->include("panel.layouts.sidebar") ?>
            </section>
            <section class="col-md-10 pt-3">

                <section class="mb-2 d-flex justify-content-between align-items-center">
                    <h2 class="h4">Categories</h2>
                    <a href="<?php $this->url("category/create") ?>" class="btn btn-sm btn-success">Create</a>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>setting</th>
                            </tr>
                        </thead>
                        <?php foreach($categories as $category){ ?>
                        <tbody>
                     
                            <tr>
                                <td><?= $category["id"] ?></td>
                                <td><?= $category["name"] ?></td>
                                <td>
                                    <a href="<?= $this->url("category/edit/". $category["id"]) ?>" class="btn btn-info btn-sm">Edit</a>
                                    <a href="<?= $this->url("category/delete/". $category["id"]) ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                           

                        </tbody>
                        <?php } ?>
                    </table>
                </section>


            </section>
        </section>
    </section>


    <?php $this->include("panel.layouts.footer") ?>



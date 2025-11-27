<?php $this->include("app.layouts.header", compact("categories")) ?>

    <section class="container my-5">
        <!-- Example row of columns -->
        <section class="row">
           <?php foreach($articles as $article){ ?>
                <section class="col-md-4">
                    <h2 class="h5 text-truncate"><?= $article["title"] ?></h2>
                    <p><?= substr($article["body"], 0, 60). " ..." ?></p>
                    <p><a class="btn btn-primary" href="<?= $this->url("home/detail/". $article["id"]) ?>" role="button">View details »</a></p>
                </section>
            <?php } ?>
               
        </section>
    </section>

    <?php $this->include("app.layouts.footer") ?>
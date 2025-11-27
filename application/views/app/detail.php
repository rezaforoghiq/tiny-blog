<?php $this->include("app.layouts.header", compact("categories")) ?>

    <section class="container my-5">
        <!-- Example row of columns -->
        <section class="row">
            <section class="col-md-12">
                <?php if(isset($article) && $article != null){ ?>
                <h1><?= $article["title"] ?></h1>
                <h5 class="d-flex justify-content-between align-items-center">
                    <a href="<?= $this->url("home/category/" . $article["cat_id"]) ?>"><?= $article["cat_name"] ?></a>
                    <span class="date-time"><?= $article["created_at"] ?></span>
                </h5>
                <article class="bg-article p-3"><?= $article["body"] ?></article>
                <?php }else{ ?>
            
                    <section>post not found!</section>

                <?php } ?>
             
            </section>
        </section>
    </section>

    <?php $this->include("app.layouts.footer") ?>
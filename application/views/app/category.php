<?php $this->include("app.layouts.header", compact("categories")) ?>

<section class="container my-5">

    <section class="row">
        <section class="col-12">
            <h1>
                <?php
                    if(isset($category) && $category != null){
                        echo $category["name"];
                    }
                ?>
            </h1>
            <hr>
        </section>
    </section>


    <section class="row">
        <?php
            if(isset($articles) || $articles != null){
                foreach($articles as $article){ 
        ?>
        <section class="col-md-4">
            <h2 class="h5 text-truncate"><?= $article["title"] ?></h2>
            <p><?= substr($article["body"], 0, 120) . " ..." ?></p>
            <p><a class="btn btn-primary" href="<?= $this->url("home/detail/". $article["id"]) ?>" role="button">View details »</a></p>
        </section>
        <?php
                }
            }
            else{ ?>

            <h1>There are no articles in this category</h1>

            <?php } ?>

    </section>

    <?php if(!isset($category) || $category == null){ ?>
    <section class="row">
        <section class="col-12">
            <h1>Category not found</h1>
        </section>
    </section>
    <?php } ?>

</section>
</section>

<?php $this->include("app.layouts.footer") ?>
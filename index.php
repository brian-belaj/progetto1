<!doctype html>
<html lang="en">

<?php require 'partials/head.php'?>

<body>
    <!-- header from partials -->
    <?php require 'partials/header.php'?>

    <main>
        <!-- carosello da partials -->
        <?php require'partials/carousel.php'?>

        <section class="mt-3 container">
            <div class="text-center mx-5 h4">
                <?php echo __('text_h1') ?>
            </div>
        </section>
        <section class="mt-5 container">
            <!-- lista articoli da partials -->
            <?php require 'partials/_news.php'?>
        </section>
        <section class="mt-5 container">
            <picture>
                <img src="/images/immagini/IMG_4170.jpg" class="d-block w-100" alt="...">
            </picture>
        </section>
        <section class="mt-5 container">
            <div class="text-center mx-5 h4">
                <?php echo __('intro')?>
            </div>
        </section>
        <section class="mt-5 container">
            <div class="row">
            <?php foreach (ARTICLES as $article_item) :?>
                <article class="col-6 col-lg-3">
                    <div class="card border-0">
                        <img src="<?php echo $article_item['immagine']?>" class="card-img-top"
                            alt="...">
                        <div class="card-body px-0">
                            <h5 class="card-title"><?php echo $article_item['titolo']?></h5>
                            <p class="card-text">
                                <?php echo $article_item['titolo']?>
                            </p>
                            <div class="d-flex">
                                <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach ?>
            </div>
        </section>
    </main>

    <?php require 'partials/footer.php'?>

    <?php require 'partials/script.php'?>
</body>

</html>
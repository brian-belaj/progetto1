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
                Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
            </div>
        </section>
        <section class="mt-5 container">
            <div class="row">
                <article class="col-6 col-lg-3">
                    <div class="card border-0">
                        <img src="/images/immagini/IMG_4175.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body px-0">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <div class="d-flex">
                                <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-6 col-lg-3">
                    <div class="card border-0">
                        <img src="/images/immagini/IMG_4175.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body px-0">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <div class="d-flex">
                                <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-6 col-lg-3">
                    <div class="card border-0">
                        <img src="/images/immagini/IMG_4175.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body px-0">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <div class="d-flex">
                                <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-6 col-lg-3">
                    <div class="card border-0">
                        <img src="/images/immagini/IMG_4175.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body px-0">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <div class="d-flex">
                                <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <?php require 'partials/footer.php'?>

    <?php require 'partials/script.php'?>
</body>

</html>
<?php require('partials/_header_new.php') ?>
<?php
    if(!isset($article_detail)){
        http_response_code(404);
        require('partials/404.php');
        die();
    }
?>
<main>
    <section class="mt-5 container">
        <article class="row gx-0">
            <div class="col-12 col-lg-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner mb-2">
                    <?php $str_active = 'active'; ?>
                    <?php foreach($articles_photos as $articles_photo):?>
                        <div class="carousel-item <?php echo $str_active ?>">
                            <img src="/images/immagini/<?php echo $articles_photo['url']?>" class="d-block w-100" alt="<?php echo $articles_photo['alt_text']?>">
                        </div>
                        <?php $str_active = ''; ?>
                    <?php endforeach?>
                    </div>
                    <div class="d-flex flex-row">
                    <?php $counter = 0; ?>
                    <?php foreach($articles_photos as $articles_photo):?>
                        <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $counter?>" class="<?php echo $str_active ?> me-2" aria-current="true" aria-label="Slide 1">
                            <img src="/images/immagini/<?php echo $articles_photo['url']?>" class="d-block w-100" alt="...">
                        </a>
                    <?php $counter++;?>
                    <?php $str_active = ''; ?>

                    <?php endforeach?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <section class="p-3">
                    <h4 class="mt-3">
                    <?php echo ARTICLEDETAIL['name']?>
                    </h4>
                    <p>
                    <?php echo ARTICLEDETAIL['description']?>
                    </p>
                    <a class="btn btn-primary" href="/list.php">
                        Read More
                    </a>
                </section>
            </div>
        </article>
    </section>

    <?php require('partials/_footer.php') ?>
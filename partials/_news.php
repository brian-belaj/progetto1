<?php foreach ($news_home as $news_item) : ?>
    <?php if ($news_item['ordine'] % 2 == 0) : ?>
        <!-- non si può fare diversamente da ordine?-->
        <article class="row gx-0">
<<<<<<< Updated upstream
            <div class="col-12 col-lg-6"><img src="/images/immagini/IMG_4155.jpg" class="d-block w-100" alt="..."></div>
            <div class="col-12 col-lg-6">
                <section class="p-3">
                    <caption>25 Agosto 2021</caption>
=======
            <div class="col-12 col-lg-6"><img src="/images/news/<?php echo $news_item['img'] ?>" class="d-block w-100" alt="<?php echo $news_item['text_alt'] ?>"></div>
            <div class="col-12 col-lg-6">
                <section class="p-3">
                    <caption><?php echo $news_item['data_news'] ?></caption>
>>>>>>> Stashed changes
                    <h4 class="mt-3">
                        Vestibulum id ligula porta felis euismod semper.
                    </h4>
                    <p>
                        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                        justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo
                        odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue.
                    </p>
                    <a class="btn btn-primary" href="/list.php">
                        Read More
                    </a>
                </section>
            </div>
        </article>

    <?php else : ?>

        <article class="row gx-0">
            <div class="col-12 col-lg-6">
                <section class="p-3">
<<<<<<< Updated upstream
                    <caption>20 Agosto 2021</caption>
=======
                    <caption><?php echo $news_item['data_news'] ?></caption>
>>>>>>> Stashed changes
                    <h4 class="mt-3">
                        Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
                        elit.
                    </h4>
                    <p>
                        Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at
                        lobortis. Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis euismod
                        semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                        fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum
                        faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.
                    </p>
                    <a class="btn btn-primary" href="/list.php">
                        Read More
                    </a>
                </section>
            </div>
<<<<<<< Updated upstream
            <div class="col-12 col-lg-6"><img src="/images/immagini/IMG_4155a.jpg" class="d-block w-100" alt="..."></div>
=======
            <div class="col-12 col-lg-6"><img src="/images/news/<?php echo $news_item['img'] ?>" class="d-block w-100" alt="<?php echo $news_item['text_alt'] ?>"></div>
>>>>>>> Stashed changes
        </article>

    <?php endif ?>
<?php endforeach ?>
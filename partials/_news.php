<?php $counter = 0 ?>

<?php foreach (NEWS as $news_item) : ?>
    <?php if ($counter % 2 == 0) : ?>
        <article class="row gx-0">
            <div class="col-12 col-lg-6"><img src="<?php echo $news_item['immagine']?>" class="d-block w-100" alt="..."></div>
            <div class="col-12 col-lg-6">
                <section class="p-3">
                    <caption><?php echo $news_item['data']?></caption>
                    <h4 class="mt-3">
                        <?php echo $news_item['titolo']?> 
                    </h4>
                    <p>
                        <?php echo $news_item['testo']?> 
                    </p>
                    <a class="btn btn-primary" href="/list.php">
                        <?php echo __('r_m_btn')?>
                    </a>
                </section>
            </div>
        </article>

    <?php else : ?>

        <article class="row gx-0">
            <div class="col-12 col-lg-6">
                <section class="p-3">
                    <caption><?php echo $news_item['data']?></caption>
                    <h4 class="mt-3">
                       <?php echo $news_item['titolo']?> 
                    </h4>
                    <p>
                        <?php echo $news_item['testo']?> 
                    </p>
                    <a class="btn btn-primary" href="/list.php">
                       <?php echo __('r_m_btn')?>
                    </a>
                </section>
            </div>
            <div class="col-12 col-lg-6"><img src="<?php echo $news_item['immagine']?>" class="d-block w-100" alt="..."></div>
        </article>

    <?php endif ?>
    <?php $counter++ ?>
<?php endforeach ?>
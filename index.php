<?php require('partials/_header_new.php') ?>

    <main>
    <!-- -->
    <?php require('partials/_carousel.php') ?>
        <section class="mt-3 container">
            <div class="text-center mx-5 h4">
                <?php echo __('text_h1') ?>
            </div>
        </section>
        <section class="mt-5 container">

        <?php require('partials/_news.php') ?>

        </section>
        

    <section class="mt-5 container">
        <div class="text-center mx-5 h4">
            <?php echo __('intro') ?>
        </div>
    </section>
    <section class="mt-5 container">
        <div class="row">
 <!-- --------------------------------------- -->
<?php require('partials/_article.php') ?>
 <!-- --------------------------------------- -->
 
        </div>
    </section>
</main>
<?php require('partials/_footer.php') ?>
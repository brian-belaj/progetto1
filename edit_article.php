<?php require 'partials/_header_new.php' ?>

<?php
if (!isset($article_detail)) {
    http_response_code(404);
    require('partials/404.php');
    die();
}
if (isset($_POST['id'])) {
    $article_id = $_POST['id'];
    echo ($_POST['name']);

    if (strlen($_POST['name']) > 0) {
        $updated_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    } else {
        echo "titolo obbligatorio";
        die();
    }
    $updated_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    var_dump($updated_name);


    $updated_img = $_POST['img'];
    $updated_ord = $_POST['ord'];
    $updated_price = $_POST['price'];
    $updated_category = $_POST['category'];
    $sth = $pdo->prepare("UPDATE article SET `name`= '$updated_name', `img`= '$updated_img',
    `ord`= '$updated_ord', `price`= '$updated_price', `category`= '$updated_category'  WHERE id = $article_id");
    $sth->execute();
    $sth = $pdo->prepare("SELECT * FROM article WHERE id = $article_id");
    $sth->execute();

    $article_detail = $sth->fetch(\PDO::FETCH_ASSOC);
}
?>
<main>

    <form action="" method="POST">

        <div class="form-group p-4">
            <input type="hidden" class="form-control" name="id" value="<?php echo $article_detail['id'] ?>">
        </div>

        <div class="form-group p-4">
            <label class="fs-3">Titolo</label>
            <input type="text" class="form-control" name="name" value="<?php echo $article_detail['name'] ?>">
        </div>


        <div class="form-group p-4">
            <label class="fs-3">Immagine</label>
            <input type="text" class="form-control" name="img" value="<?php echo $article_detail['img'] ?>">
        </div>


        <div class="form-group p-4">
            <label class="fs-3">Ordine</label>
            <input type="text" class="form-control" name="ord" value="<?php echo $article_detail['ord'] ?>">
        </div>

        <div class="form-group p-4">
            <label class="fs-3">Prezzo</label>
            <input type="text" class="form-control" name="price" value="<?php echo $article_detail['price'] ?>">
        </div>


        <div class="form-group p-4">
            <label class="fs-3">Categoria</label>
            <input type="text" class="form-control" name="category" value="<?php echo $article_detail['category'] ?>">
        </div>

        <div class="form-group p-4">
            <button type="submmit" class="btn btn-outline-primary">Salva</button>
        </div>

    </form>




    <!--  <?php var_dump($article_detail); ?>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $article_detail['id'] ?>">
        <input type="text" name="name" value="<?php echo $article_detail['name'] ?>">
        <input type="text" name="img" value="<?php echo $article_detail['img'] ?>">
        <input type="text" name="ord" value="<?php echo $article_detail['ord'] ?>">
        <input type="text" name="price" value="<?php echo $article_detail['price'] ?>">
        <input type="text" name="category" value="<?php echo $article_detail['category'] ?>">
        <button type="submit">Salva</button>
    </form>
-->
</main>




<?php require 'partials/footer.php' ?>
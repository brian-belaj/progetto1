<?php require 'partials/_header_new.php'?>

<?php 
if (!isset($article_detail)) {
    http_response_code(404);
    require('partials/404.php');
    die();
}
if (isset ($_POST['id'])){
    $article_id = $_POST['id'];
    $updated_name = $_POST['name'];
    $sth = $pdo->prepare("UPDATE article SET `name`= '$updated_name' WHERE id = $article_id");
    $sth->execute();
    $sth = $pdo->prepare("SELECT * FROM article WHERE id = $article_id");
    $sth->execute();

    $article_detail = $sth->fetch(\PDO::FETCH_ASSOC);
}
?>
<main>
    <?php   ($article_detail) ?>
    <form class="form-row" action="" method="POST">
        <div class="form-group col-md-6">
        <input class="form-control" type="hidden" name="id" value="<?php echo $article_detail['id']?>"><br>
        <input class="form-control" type="text" name="name"  value="<?php echo $article_detail['name']?>"><br>
        <input class="form-control" type="text" name="img" value="<?php echo $article_detail['img']?>" ><br>
        <input class="form-control" type="text" name="ord" value="<?php echo $article_detail['ord']?>" ><br>
        <input class="form-control" type="text" name="price" value="<?php echo $article_detail['price']?>" ><br>
        <input class="form-control" type="text" name="category" value="<?php echo $article_detail['category']?>"><br>
        <button class="btn btn-outline-primary d-flex justify-content-center" type="submit">Salva</button>
        </div>
    </form>
</main>


<?php require 'partials/footer.php' ?>
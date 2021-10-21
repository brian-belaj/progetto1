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
    <?php var_dump($article_detail); ?>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $article_detail['id']?>">
        <input type="text" name="name" value="<?php echo $article_detail['name']?>">
        <input type="text" name="img" value="<?php echo $article_detail['img']?>" >
        <input type="text" name="ord" value="<?php echo $article_detail['ord']?>" >
        <input type="text" name="price" value="<?php echo $article_detail['price']?>" >
        <input type="text" name="category" value="<?php echo $article_detail['category']?>" >
        <button type="submit">Salva</button>
    </form>
</main>


<?php require 'partials/footer.php' ?>
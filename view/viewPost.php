<?php
require_once "../handler/handler.php";
require_once "../htdocs/connection.php";

$idP = $_GET['idP'];

$article = viewPost($Con, $idP);
$post = mysqli_fetch_array($article)

?>

<?php include "../view/partials/top.php"; ?>

<div class="A1 col">
    <div>
        <!--            <p>Meta employees lost big on real estate investments touted by a colleague.</p>-->
    <h1><?php echo $post['title'] ?></h1>
        <br>
    <img class="img gmbar" src="/<?php echo $post['image_path'] ?>">
<!--    <p style="margin-bottom: 1rem;">📷 --><?php //echo $post['photo_desc'] ?><!--</p>-->
<!--    <h4>oleh: --><?php //echo $post['author'] ?><!--</h4>-->
    <p style="margin-top: 5px;"><?php echo $post['created_at'] ?></p>
    <p class="txt2"><?php echo $post['description'] ?></div>
</div>

<?php include "../view/partials/bot.php"; ?>

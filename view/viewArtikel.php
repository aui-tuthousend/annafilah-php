<?php
require_once "../handler/handler.php";
require_once "../htdocs/connection.php";

$idP = $_GET['idP'];

$article = viewArtikel($Con, $idP);
$art = mysqli_fetch_array($article)

?>

<?php include "../view/partials/top.php"; ?>

<div class="A1 col">
    <div>
        <!--            <p>Meta employees lost big on real estate investments touted by a colleague.</p>-->
    <h1><?php echo $art['title'] ?></h1>
        <br>
    <img class="img gmbar" src="/<?php echo $art['image_path'] ?>">
    <p style="margin-bottom: 1rem;">📷 <?php echo $art['photo_desc'] ?></p>
    <h4>oleh: <?php echo $art['author'] ?></h4>
    <p style="margin-top: 5px;"><?php echo $art['created_at'] ?></p>
    <p class="txt2"><?php echo $art['description'] ?></div>
</div>

<?php include "../view/partials/bot.php"; ?>

<?php
require_once "../handler/handler.php";
require_once "../htdocs/connection.php";

$article = getArtikel($Con);

?>

<?php include "../view/partials/top.php"; ?>

<main>
    <h1 class="tit">Artikel</h1>
    <div class="can">
        <div class="grid-con">
            <?php
            while ($art = mysqli_fetch_array($article)){
            ?>
            <a href="viewArtikel.php?idP=<?=$art['id'] ?>" class="cover">
                <img class="img" src="/<?php echo $art['image_path'] ?>" alt="<?php echo $art['photo_desc'] ?>">
                <p><?php echo $art['photo_desc'] ?></p>
            </a>
            <?php
            }
            ?>
        </div>
    </div>
</main>

<a href="createArtikel.php"><h4>create</h4></a>


<?php include "../view/partials/bot.php"; ?>

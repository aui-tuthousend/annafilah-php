<?php
require_once "../handler/handler.php";
require_once "../htdocs/connection.php";

$posts = getPost($Con);

?>

<?php include "../view/partials/top.php"; ?>

<main>
    <h1 class="tit">Galeri Kegiatan</h1>
    <div class="can">
        <div class="grid-con">
            <?php
            while ($post = mysqli_fetch_array($posts)){
            ?>
            <a href="viewPost.php?idP=<?=$post['id'] ?>" class="cover">
                <img class="img" src="/<?php echo $post['image_path'] ?>">
            </a>
            <?php
            }
            ?>
        </div>
    </div>
</main>

<a href="createPost.php"><h4>create</h4></a>


<?php include "../view/partials/bot.php"; ?>

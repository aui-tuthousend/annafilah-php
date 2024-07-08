<?php include "../view/partials/top.php"; ?>


<style>
    .par{
        padding: 0 10rem 0 10rem;
    }
</style>

<div class="par">

    <form action="/handler/storePost.php" method="POST" enctype="multipart/form-data" class="form col">
        <div class="col">
            <label for="">Judul Artikel</label>
            <input type="text" class="txt" name="title" placeholder="titel artikel">
        </div>

        <div class="col">
            <label for="">Deskripsi</label>
            <textarea id="form1" name="description" placeholder="deskripsi" class="txt-f"></textarea>
<!--            <input type="text" class="txt" name="description" placeholder="desc artikel">-->
        </div>

        <div class="col">
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/jpeg, image/png" required>
        </div>

        <button type="submit" class="but">
            <h4>Submit</h4>
        </button>
    </form>
</div>

<?php include "../view/partials/bot.php"; ?>

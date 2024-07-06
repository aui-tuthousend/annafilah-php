<?php include "../view/partials/top.php"; ?>


<style>
    .par{
        padding: 0 10rem 0 10rem;
    }
</style>

<div class="par">

    <form action="/handler/storeArtikel.php" method="POST" enctype="multipart/form-data" class="form col">
        <div class="col">
            <label for="">Judul Artikel</label>
            <input type="text" class="txt" name="title" placeholder="titel artikel">
        </div>

        <div class="col">
            <label for="">Deskripsi</label>
            <input type="text" class="txt" name="description" placeholder="desc artikel">
        </div>

        <div class="col">
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/jpeg, image/png" required>
        </div>

        <div class="col">
            <label for="">image description</label>
            <input type="text" class="txt" name="potoDesc" placeholder="deskripsi foto">
        </div>

        <div class="col">
            <label for="">author</label>
            <input type="text" class="txt" name="author" placeholder="Author">
        </div>
        <br>

        <button type="submit" class="but">
            <h4>Submit</h4>
        </button>
    </form>
</div>

<?php include "../view/partials/bot.php"; ?>

<?php
    require_once "../handler/handler.php";
    require_once "../htdocs/connection.php";

    $pro = getProgram($Con);
    $prog = viewProgram($Con, 1);
?>

<?php include "../view/partials/top.php"; ?>

<div class="c1 row-sb">
    <div class="col c1-1">
        <h1>Mari bersama membantu mereka meraih cita-cita!</h1>
        <p>“Sesungguhnya Allah mengangkat dengan kitab Al-Qur’an ini beberapa kaum dan juga dengan kitab Al-Qur’an ini Allah merendahkan yang lainnya.”
            <br>(HR. Muslim)
        </p>
        <a href="profile.html">
            <button class="but">
                <h4>Tentang Kami</h4>
            </button>
        </a>
        <div class="c1-2 row">
            <div class="row-c">
                <img src="/images/png/brain.png" width="40" height="40">
                <h4>Cerdas</h4>
            </div>
            <div class="row-c">
                <img src="/images/png/donation.png" width="40" height="40">
                <h4>Mulia</h4>
            </div>
            <div class="row-c">
                <img src="/images/png/teamwork.png" width="40" height="40">
                <h4>Berdaya <br>Guna</h4>
            </div>
        </div>
    </div>
    <div>
        <img src="/images/binaan.png" alt="binaan annafilah" class="g1">
    </div>
</div>

<!--                   c2222222222222222                          -->

<div class="c2">
    <div class="c2-1 row-sb">
        <h1>Latar Belakang</h1>
        <h3>Salah satu upaya pendampingan yang dilakukan Yayasan Annafilah terhadap anak-anak binaan adalah dengan mengarahkan mereka untuk mempelajari dan menghafal Al Qur’an, mengingat banyak sekali keberkahan di dalamnya. Sebagian besar binaan mengenyam pendidikan di pondok pesantren tahfidz dan lainnya di sekolah swasta Islam. Khusus anak-anak yang tidak mengenyam pendidikan di pesantren, maka wajib bagi mereka untuk mengikuti kelas tahfidz di Rumah Tahfidz Annafilah, sehingga meskipun tidak di pesantren, anak-anak tetap bisa menghafal Al Qur’an dengan bimbingan asatidzah yang juga seorang hafidzah.</h3>
    </div>
</div>

<!--                c3333333333333333333333333 -->
<div class="c3 col" id="Program">
    <h1>Program</h1>
    <p>Untuk mencapai visi misi dakwah organisasi, kami membagi dalam beberapa program yang bersifat rutin dan insidentil. Fokus program merupakan peningkatan kemampuan baca Al Qur'an, pendidikan, kesehatan, dan pemberdayaan di bidang ekonomi.</p>
    <div class="row-sb-c">
        <button class="scroll-btn left-btn">&larr;</button>
        <div class="c3-1">
            <?php
            while ($program = mysqli_fetch_array($pro)){
//                echo $program['title'], " ";
            ?>
            <div class="block col">
                <div class="coverr">
                    <img src="/<?php echo $program['image_path'] ?>" alt="" class="img program">
                </div>
                <h1 style="width: 230px;"><?php echo $program['title'] ?></h1>
                <p><?php echo $program['description'] ?></p>
            </div>
            <?php
            }
            ?>

        </div>
        <button class="scroll-btn right-btn">&rarr;</button>
    </div>
</div>


<!--            c4444444444     -->

<div class="ce4 col-c">
    <h3>JUMLAH BINAAN</h3>
    <br>
    <div class="c4-1 row-sb-c">
        <div class="prog col-c">
            <h4>TK</h4>
            <p>8 anak</p>
        </div>
        <div class="prog col-c">
            <h4>SD</h4>
            <p>16 anak</p>
        </div>
        <div class="prog col-c">
            <h4>SMP</h4>
            <p>7 Siswa</p>
        </div>
        <div class="prog col-c">
            <h4>SMA</h4>
            <p>15 Siswa</p>
        </div>
    </div>
</div>

<!--    c5555555555555555555555     -->
<div class="c5">
    <div class="c5-1 col">
        <h1>Mitra Kebaikan</h1>
        <p>Alhamdulillah beberapa lembaga negeri maupun swasta telah menjadi mitra kami dalam mejalankan visi misi dakwah ini, selanjutnya dengan senang hati kami tunggu partisipasi lembaga Bapak/Ibu! </p>
        <div class="mitra">
            <img src="/images/png/brain.png" alt="" class="pt">
            <img src="/images/png/teamwork.png" alt="" class="pt">
            <img src="/images/png/donation.png" alt="" class="pt">
            <img src="/images/png/brain.png" alt="" class="pt">
            <img src="/images/png/teamwork.png" alt="" class="pt">
            <img src="/images/png/donation.png" alt="" class="pt">
            <img src="/images/png/brain.png" alt="" class="pt">
            <img src="/images/png/teamwork.png" alt="" class="pt">
        </div>
    </div>
</div>

<!--c 666666666666666666-->
<div class="c6 col">
    <h1>Testimoni Donatur</h1>
    <div class="testi row-sb">
        <div class="moni col">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>
            <div class="row-sb">
                <img src="/images/png/tes1.png" alt="" class="pt">
                <h4>jimbe, <br> donatur A</h4>
            </div>
        </div>

        <div class="moni col">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>
            <div class="row-sb">
                <img src="/images/png/tes2.png" alt="" class="pt">
                <h4>Jaylen, <br> donatur B</h4>
            </div>
        </div>

        <div class="moni col">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>
            <div class="row-sb">
                <img src="/images/png/tes3.png" alt="" class="pt">
                <h4>Edwards, <br> donatur C</h4>
            </div>
        </div>

    </div>
</div>

<!--c7777777777777777777777-->
<div class="c7 col-c">
    <h1>Alamat: <br> Pagesangan Town House, Pagesangan 2A Jambangan <br> Surabaya <br> <br>

        SK Kemenkumham : AHU-AH.01.06-0008862 <br>
        BSI 7057905209 <br>
        BCA 4299921414 <br>
        Mandiri 1420011461471 <br>
        an Yayasan Annafilah</h1>
    <!--        <img src="img/guru.png" alt="" class="img" width="540">-->
</div>

<!--    c 88888888888888888-->
<div class="c8" id="regis">
    <div class="col-c">
        <h1>Pendaftaran Donatur</h1>
        <br>
        <p>"Sedekah itu dapat memadamkan kesalahan, sebagaimana sebongkah es yang meleleh di atas batu karang” <br>(HR. Ibnu Hibban No. 5567. Hadis sahih)</p>
    </div>
    <form action="/createDonatur" method="POST" enctype="multipart/form-data" class="form col">
        <div class="col">
            <label for="">Nama</label>
            <input type="text" class="txt" name="nama" placeholder="Nama anda">
        </div>

        <div class="col">
            <label for="">Nomor Telpon</label>
            <input type="number" class="txt" name="nomor" placeholder="Nomor anda">
        </div>

        <div class="col">
            <label for="">Email</label>
            <input type="email" class="txt" name="email" placeholder="Email anda">
        </div>

        <div class="row-sb sign">
            <div class="col">
                <label for="form1">Pesan</label>
                <textarea id="form1" name="pesan" class="txt-f"></textarea>
            </div>
            <button type="submit" class="but">
                <h4>Daftar</h4>
            </button>
        </div>
    </form>
</div>


<?php include "../view/partials/bot.php"; ?>

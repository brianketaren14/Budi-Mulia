<section class="container">
    <?php foreach ($data as $berita) { ?>
        <div class="row mb-3">
            <div class="col-sm-6">
                <h1><?= $berita["judul"] ?></h1>
            </div>
            <div class="col-sm-6 d-flex align-items-center justify-content-end" style="gap:10px;">
                <small><?= $berita["nama"] ?> | <?= $berita["tgl"] ?></small>
                <img src="<?= base_url() ?>assets/penulis/<?= $berita['foto'] ?>" style="width:48px; height:48px;" class="rounded-circle border">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="<?= base_url() ?>assets/gambar/<?= $berita['gambar'] ?>" alt="" class="w-100 mb-3" style="height: 70vh;">
            </div>
        </div>
        <div class="row container">
            <?= $berita['isi'] ?>
        </div>
    <?php }  ?>
</section>
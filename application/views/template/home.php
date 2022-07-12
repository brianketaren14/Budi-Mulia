<main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 1)), url(https://images.unsplash.com/photo-1591123120675-6f7f1aae0e5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80); background-size: cover; background-position: center; height:60vh;">
        <div class="col-md-6 px-0">
            <h1 class="">Budi Mulia</h1>
            <p class="lead my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a massa sed enim fringilla hendrerit. Fusce et cursus purus. </p>
            <p class="lead mb-0"><a href="<?= BASE_URL("About") ?>" class="text-white fw-bold">Continue reading...</a></p>
        </div>
    </div>
</main>
<section class="container">
    <?php foreach ($data as $berita) { ?>
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="<?= base_url() ?>assets/gambar/<?= $berita['gambar'] ?>" class="img-fluid h-100 w-100">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?= $berita["judul"] ?></h5>
                        <p class="card-text"><?= $berita["sinopsis"] ?></p>
                        <p class="card-text"><small class="text-muted"><?= $berita["nama"] ?> | <?= $berita["tgl"] ?></small></p>
                        <a href="<?= BASE_URL("Berita/" . $berita["id_berita"]) ?>" class="btn btn-dark">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    <?php }  ?>
</section>
<br>
<br>
<br>
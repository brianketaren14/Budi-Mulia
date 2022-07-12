<!-- konten -->
<div class="section">
    <div class="container">
        <h3>Edit Berita</h3>
        <div class="box">
            <form action="<?= base_url('Admin/edit_data') ?>" method="POST" enctype="multipart/form-data">
                <?php foreach ($data as $berita) { ?>
                    <select name="id_penulis" class="input-control" required>
                        <option value="">--Pilih Penulis--</option>
                        <?php foreach ($penulis as $penulis) { ?>
                            <option value="<?php echo $penulis['id_penulis'] ?>" <?php echo ($penulis['id_penulis'] == $berita['id_penulis']) ? 'selected' : ' ';  ?>><?php echo $penulis["nama"]  ?></option>
                        <?php }  ?>
                    </select>

                    <input type="hidden" name="id_berita" value="<?= $berita['id_berita']; ?>" class="input-control">
                    <input type="text" name="judul" class="input-control" placeholder="Judul Berita" value="<?= $berita['judul'] ?>" required>
                    <input type="date" name="tgl" class="input-control" placeholder="Tanggal" value="<?= $berita['tgl'] ?>" required>
                    <img src="<?= base_url() ?>assets/gambar/<?= $berita['gambar'] ?>" alt="" width="150px" height="150px" style="border-radius:50%;">
                    <input type="hidden" name="gambarlama" value="<?= $berita['gambar'] ?>" class="input-control">
                    <br>
                    <br>

                    <input type="file" name="gambar" class="form-control">
                    <br>
                    <h6>Sinopsis</h6>
                    <textarea name="sinopsis" class="input-control" placeholder="Sinopsis"><?= $berita['sinopsis'] ?></textarea>
                    <br>
                    <h6>Isi Berita</h6>
                    <textarea name="isi" class="input-control" placeholder="Isi"><?= $berita['isi'] ?></textarea>
                    <br>
                <?php }  ?>
                <button type="submit" name="submit" value="simpan" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('sinopsis');
    CKEDITOR.replace('isi');
</script>
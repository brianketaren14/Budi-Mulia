<div class="section">
    <div class="container">
        <h3>Tambah Berita</h3>
        <div class="box">
            <?php echo form_open_multipart('Admin/insert_data');  ?>
            <select name="penulis" class="input-control" required>
                <option value="">--Pilih Penulis--</option>
                <?php foreach ($data as $penulis) { ?>
                    <option value="<?php echo $penulis['id_penulis'] ?>"><?php echo $penulis["nama"]  ?></option>
                <?php }  ?>
            </select>
            <input type="text" name="judul" class="input-control" placeholder="Judul Berita" required>
            <input type="date" name="tgl" class="input-control" placeholder="Tanggal" required>
            <input type="file" name="gambar" class="form-control" required>
            <br>
            <h6>Sinopsis</h6>
            <textarea name="sinopsis" class="input-control" placeholder="Sinopsis"></textarea>
            <br>
            <h6>Isi Berita</h6>
            <textarea name="isi" class="input-control" placeholder="Isi"></textarea>
            <br>
            <button type="submit" name="submit" value="simpan" class="btn btn-success">Create</button>
            <?php echo form_close();  ?>
        </div>

    </div>
</div>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('sinopsis');
    CKEDITOR.replace('isi');
</script>
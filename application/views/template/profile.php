<main class="form-signin container">
    <div class="d-flex justify-content-center">
        <?php echo form_open_multipart('login/register_data', 'class="col-6 border ps-2 pe-2 pt-2 pb-2"');
        foreach ($data as $penulis) {
        ?>

            <center>
                <img class="" src="https://cdn-icons-png.flaticon.com/512/3313/3313480.png" alt="" width="72" height="57">
                <h3>Profile</h3>
            </center>
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" value="<?= $penulis['nama'] ?>">
            </div>
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto">
            </div>
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" value="<?= $penulis['username'] ?>">
            </div>
            <div class=" mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="password" value="<?= md5($penulis['password']) ?>">
            </div>

            <button type=" submit" class="btn btn-primary">Submit</button>
        <?php }
        echo form_close();  ?>
    </div>
</main>
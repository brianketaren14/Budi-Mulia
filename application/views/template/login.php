<main class="form-signin container">
    <div class="d-flex justify-content-center ">
        <form class="col-6 border ps-2 pe-2 pt-2" style="height:70vh;" method="post" action="<?= base_url('login/login_action'); ?>">
            <center>
                <img class="" src="https://cdn-icons-png.flaticon.com/512/3313/3313480.png" alt="" width="72" height="57">
                <h3>Login</h3>
            </center>
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" name="submit" value="Login" class="btn btn-primary">Submit</button>
            <br>
            <br>

            <p>Belum Punya Akun? Daftar Sekarang</p>
            <a type="submit" name="submit" value="Login" class="btn btn-primary" href="<?= base_url('login/register') ?>">Daftar</a>

        </form>

    </div>
</main>
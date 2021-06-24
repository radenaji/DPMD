<div class="container-fluid mt-3">
    <div class="row">   
        <div class="col-md-4 offset-4">
            <div class="card">
                <div class="card-header bg-dark">
                    <center><img src="img/logo.png" width="120px"    alt=""></center>
                </div>
                <div class="card-body">
                    <?php
                        if(!empty($_GET['s'])){
                            if($_GET['s'] == "1"){
                        ?>  
                        <div class="alert alert-warning">
                                <strong> MAAF </strong>Email Anda Belum Terdaftar...!
                        </div>
                        <?php
                        }else if($_GET['s'] == 2){
                            ?>
                            <div class="alert alert-danger">
                                <strong> MAAF </strong>Kata Sandi Anda Salah...!
                        </div> 
                        <?php
                        }
                    }
                    ?>
                    <form action="login_proses.php" method="post">
                        <div class="form-group">
                            <label for="email"> E-Mail </label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukan E-mail Anda..." required>
                        </div>
                        <div class="form-group">
                            <label for="password"> Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Kata Sandi Anda..." required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info" type="submit">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

            
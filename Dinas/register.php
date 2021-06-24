<div class="container-fluid mt-4">
 
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    FORM REGISTER
                </div>
                <div class="card-body">
                    <form action="register_proses.php" method="post" enctype="multipart/form-data">
                   <?php
                    if(!empty($_GET['s'])){
                         if($_GET['s'] == "1"){
                        ?>
                        <div class="alert alert-success">
                                <strong> SELAMAT! </strong>Anda Berhasil Daftar, silahkan login!
                        </div>
                        <?php
                        }else{
                        ?>
                        <div class="alert alert-danger">
                                <strong> MAAF </strong>Anda Gagal Mendaftar, silahkan ulangi!.!
                        </div>
                        <?php
                        }
                    }
                    ?>  
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nama"> Nama Peserta</label>
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama Lengkap Anda" >
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="NIS"> NIS / NPM</label>
                                <input type="number" id="nis" name="nis" class="form-control" placeholder="Masukan NIS/NPM Anda" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <div class="jk">Jenis Kelamin</div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="jk" value="laki-laki" checked> Laki Laki
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="jk" value="perempuan">  Perempuan
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="tgl"> Tempat tanggal lahir </label>
                                <input type="date" id="tgl" name="tgl" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="email"> E-mail</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Masukan Email Anda" >
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="password"> Kata Sandi</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Masukan Kata Sandi Anda" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="asal"> Asal Pendidikan</label>
                                <input type="text" id="asal" name="asal" class="form-control" placeholder="Masukan Asal Pendiidikan" >
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col">       
                            <div class="form-group">
                                <label for="cover">Lampirkan Surat Pengantar/proposal </label>
                                <input type="file"  name="cover" id="cover" class="form-control">
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info"> DAFTAR</label>
                            <button type="reset" class="btn btn-warning">RESET </button>
                        </div>
                   
                    </form>
                </div>
            </div>
        </div>
   
</div>


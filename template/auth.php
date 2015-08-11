		<?php include('header.php'); ?>
        
        <div class="gap"></div>

        <div class="container">
            <div class="row" data-gutter="60">
                <div class="col-md-4">
                    <h3>Selamat datang di mobiltnt.com</h3>
                    <p>Untuk memudahkan Anda dalam melakukan aktifitas di mobiltnt.com, kami menyediakan sarana untuk memonitoring segala transaksi yang sudah pernah dan sedang Anda lakukan.</p>
                    <p>Dapatkan kemudahan dalam sewa menyewa mobil!</p>
                    
                    <div class="gap"></div>
                </div>
                
                <div class="col-md-4">
                    <h3>Login</h3>
                    <form>
                        <div class="form-group form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-show"></i>
                            <label>Email</label>
                            <input class="form-control" placeholder="username@email.com" type="text" />
                        </div>
                        <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                            <label>Password</label>
                            <input class="form-control" type="password" placeholder="sandi rahasia" />
                        </div>
                        <input class="btn btn-danger" type="submit" value="Masuk" />
                    </form>
                    
               	 	<div class="gap"></div>
                </div>
                
                <div class="col-md-4">
                    <h3>Baru di mobiltnt.com?</h3>
                    <form id="register-form">
                    	<div class="register-step1">
                            <div class="form-group form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-show"></i>
                                <label>Email</label>
                                <input class="form-control" placeholder="username@email.com" type="text" />
                            </div>
                            <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                <label>Password</label>
                                <input class="form-control" type="password" placeholder="sandi rahasia" />
                            </div>
                            <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                <label>Konfirmasi Password</label>
                                <input class="form-control" type="password" placeholder="konfirmasi sandi rahasia" />
                            </div>
                        </div>
                        <div class="register-step2">
                            <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                <label>Nama Lengkap</label>
                                <input class="form-control" placeholder="John Doe" type="text" />
                            </div>
                            <div class="form-group form-group-icon-left"><i class="fa fa-phone input-icon input-icon-show"></i>
                                <label>No HP</label>
                                <input class="form-control" placeholder="0811XXXXXXXX" type="text" />
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" placeholder="Jl. Tarian Raya Timur, Kelapa Gading"></textarea>
                            </div>
                        </div>
                        <input class="btn btn-danger" type="submit" value="Daftar" />
                    </form>
                </div>
            </div>
        </div>
        
        <div class="gap"></div>
        
        <?php include('footer.php'); ?>
		<?php include('header.php'); ?>
        
        <div class="container">
            <h1 class="page-title">Pengaturan</h1>
        </div>
        
        <div class="container">
            <div class="row">
            
                <?php include('user_menu.php'); ?>
                
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-5">
                            <form action="">
                                <h4>Data User</h4>
                                <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon"></i>
                                    <label>Nama Lengkap</label>
                                    <input class="form-control" value="John" type="text" />
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-envelope input-icon"></i>
                                    <label>E-mail</label>
                                    <input class="form-control" value="johndoe@gmail.com" type="text" />
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-phone input-icon"></i>
                                    <label>No Hp</label>
                                    <input class="form-control" value="+1 202 555 0113" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>Alamat Lengkap</label>
                                    <textarea class="form-control">United Kingdom</textarea>
                                </div>
                                <hr>
                                <input type="submit" class="btn btn-danger" value="Perbarui Data">
                            </form>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <h4>Ubah Password</h4>
                            <form>
                                <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon"></i>
                                    <label>Password Lama</label>
                                    <input class="form-control" type="password" />
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon"></i>
                                    <label>Password Baru</label>
                                    <input class="form-control" type="password" />
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon"></i>
                                    <label>Konfirmasi Password Baru</label>
                                    <input class="form-control" type="password" />
                                </div>
                                <hr />
                                <input class="btn btn-danger" type="submit" value="Ubah Password" />
                            </form>
                        </div>
                    </div>
					<div class="gap"></div>
                </div>
            </div>
        </div>
        
        <?php include('footer.php'); ?>
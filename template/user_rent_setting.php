		<?php include('header.php'); ?>
        
        <div class="container">
            <h1 class="page-title">Pengaturan Rental</h1>
        </div>
        
        <div class="container">
            <div class="row">
            
                <?php include('user_menu.php'); ?>
                
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-5">
                            <form action="">
                                <h4>Data Rental</h4>
                                <div class="form-group form-group-icon-left"><i class="fa fa-car input-icon"></i>
                                    <label>Nama Rental</label>
                                    <input class="form-control" value="TRAC" type="text" />
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-envelope input-icon"></i>
                                    <label>E-mail</label>
                                    <input class="form-control" value="johndoe@gmail.com" type="text" />
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-phone input-icon"></i>
                                    <label>Telpon Kantor</label>
                                    <input class="form-control" value="+1 202 555 0113" type="text" />
                                </div>
                                <hr>
                                <h4>Data Kontak</h4>
                                <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon"></i>
                                    <label>Nama</label>
                                    <input class="form-control" value="John Doe" type="text" />
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-phone input-icon"></i>
                                    <label>No HP</label>
                                    <input class="form-control" value="+1 202 555 0113" type="text" />
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <h4>Detail Lokasi</h4>
                            <form>
                                <div class="form-group form-group-icon-left"><i class="fa fa-location-arrow input-icon"></i>
                                    <label>Propinsi</label>
                                    <select class="form-control" />
                                    	<option>Pilih Propinsi</option>
                                        <option>DKI Jakarta</option>
                                    </select>
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-location-arrow input-icon"></i>
                                    <label>Kota</label>
                                    <select class="form-control" />
                                    	<option>Pilih Kota</option>
                                        <option>Jakarta Timur</option>
                                        <option>Jakarta Barat</option>
                                        <option>Jakarta Utara</option>
                                        <option>Jakarta Selatan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Alamat Lengkap</label>
                                    <textarea class="form-control">United Kingdom</textarea>
                                </div>
                                <div class="form-group">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.3544979699761!2d106.910664!3d-6.169707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f52b6aebe9c9%3A0x781d3ffd97ac50b5!2sJl.+Tarian+Raya+Tim.+Blok+J+No.32%2C+Klp.+Gading%2C+Kota+Jkt+Utara%2C+Daerah+Khusus+Ibukota+Jakarta+14240!5e0!3m2!1sen!2sid!4v1439263175918" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </form>
                        </div>
                    </div>
					<div class="gap-small"></div>
                    <div class="row">
                    	<div class="col-md-12">
                            <hr />
                            <h4>Fitur Rental</h4>
                        	<table class="table table-feature">
                                <thead>
                                    <th class="center-col">Fitur</th>
                                    <th>Deskripsi</th>
                                    <th class="center-col">Tersedia</th>
                                </thead>
                                <tbody>
                                    <tr class="active">
                                        <td class="center-col"><img src="img/gps.png"></td>
                                        <td>GPS</td>
                                        <td class="center-col">
                                            <input class="i-check" type="checkbox" />
                                        </td>
                                    </tr>
                                    <tr class="active">
                                        <td class="center-col"><img src="img/baby-seat.png"></td>
                                        <td>Tempat duduk bayi</td>
                                        <td class="center-col">
                                            <input class="i-check" type="checkbox" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <input type="submit" class="btn btn-danger" value="Perbarui Data">
                        </div>
                    </div>
					<div class="gap"></div>
                </div>
            </div>
        </div>
        
        <?php include('footer.php'); ?>
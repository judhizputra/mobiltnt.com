		<?php include('header.php'); ?>
        
        <div class="gap"></div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Kelengkapan Data Rental</h3>
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-daterange" data-date-format="M d, D">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group form-group-icon-left">
                                            	<i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                <label>Tanggal Pinjam</label>
                                                <input class="form-control" name="start" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-group-icon-left">
                                            	<i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                <label>Tanggal Kembali</label>
                                                <input class="form-control" name="end" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Waktu Pinjam</label>
                                                <input class="time-pick form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Waktu Kembali</label>
                                                <input class="time-pick form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kriteria</label>
                                            <select class="form-control">
                                            	<option>Lepas Kunci</option>
                                            	<option>Dengan Supir</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>BBM</label>
                                            <select class="form-control">
                                            	<option>Tanpa BBM</option>
                                            	<option>Rp 100.000</option>
                                            	<option>Rp 200.000</option>
                                            	<option>Rp 300.000</option>
                                            	<option>Rp 400.000</option>
                                            	<option>Rp 500.000</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Lokasi Penjemputan / Pengantaran</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Keterangan Tambahan</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gap"></div>
                            <div class="col-md-12">
                                <table class="table table-feature">
                                	<thead>
                                    	<th class="center-col">Fitur</th>
                                    	<th>Deskripsi</th>
                                    	<th class="center-col">Kuantitas</th>
                                    	<th class="center-col">Tambah</th>
                                    </thead>
                                    <tbody>
                                        <tr class="active">
                                            <td class="center-col"><img src="img/gps.png"></td>
                                            <td>GPS</td>
                                            <td class="center-col">
                                            	<select>
                                                	<option>0</option>
                                                    <option>1</option>
                                                </select>
                                            </td>
                                            <td class="center-col">
                                            	<input class="i-check" type="checkbox" />
                                            </td>
                                        </tr>
                                        <tr class="active">
                                            <td class="center-col"><img src="img/baby-seat.png"></td>
                                            <td>Tempat duduk bayi</td>
                                            <td class="center-col">
                                            	<select>
                                                	<option>0</option>
                                                    <option>1</option>
                                                </select>
                                            </td>
                                            <td class="center-col">
                                                <input class="i-check" type="checkbox" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <h3>Lengkapi Data Anda</h3>
                    <p>Untuk mempersingkat proses booking silahkan login ke <a href="auth.php">akun</a> Anda.</p>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No HP</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" type="email" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Konfirmasi Password</label>
                                    <input class="form-control" type="password" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" checked/>Saya menyetujui <a href="terms.php">Syarat dan Ketentuan</a> mobiltnt.com
                            </label>
                        </div>
                    </form>
                    <hr>
                    <h3>Pilih Metode Pembayaran</h3>
                    <div class="row">
                        <div class="col-md-4 col-xs-4">
                        	<a href="#"><img class="pp-img img-thumbnail" src="img/payment/bca-clickpay.png" alt="Logo BCA KlikPay" title="Pembayaran via BCA KlikPay" /></a>
                        </div>
                        <div class="col-md-4 col-xs-4">
                        	<a href="#">
                            	<img class="pp-img img-thumbnail" src="img/payment/mandiri-clickpay.png" alt="Logo Mandiri Clickpay" title="Pembayaran via Mandiri Clickpay" />
                            </a>
                        </div>
                        <div class="col-md-4 col-xs-4">
                        	<a href="#">
                            	<img class="pp-img img-thumbnail" src="img/payment/epay-bri.png" alt="Logo E-pay BRI" title="Pembayaran via E-pay BRI" />
                            </a>
                        </div>
                        <div class="col-md-4 col-xs-4">
                        	<a href="#">
                            	<img class="pp-img img-thumbnail" src="img/payment/visa-master.png" alt="Logo Visa & Master" title="Pembayaran via Visa & Master" />
                            </a>
                        </div>
                        <div class="col-md-4 col-xs-4">
                        	<a href="#">
                            	<img class="pp-img img-thumbnail" src="img/payment/atm-bersama.png" alt="Logo ATM Bersama" title="Pembayaran via ATM Bersama" />
                            </a>
                        </div>
                        <div class="col-md-4 col-xs-4">
                        	<a href="#">
                            	<img class="pp-img img-thumbnail" src="img/payment/alfa-group.png" alt="Logo Alfa Group" title="Pembayaran via Alfa Group" />
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="#" class="btn btn-danger">Proses Pembayaran</a>
                        </div>
                        <div class="gap-small"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="booking-item-payment">
                        <header class="clearfix">
                            <a class="booking-item-payment-img" href="#">
                                <img src="img/example-car.png" alt="Image Alternative text" title="Image Title" />
                            </a>
                            <h5 class="booking-item-payment-title"><a href="detail.php">Lamborgini Aventador</a></h5>
                        </header>
                        <ul class="booking-item-payment-details">
                            <li>
                                <h5>Rental selama 7 hari</h5>
                                <div class="booking-item-payment-date">
                                    <p class="booking-item-payment-date-day">1 Agustus</p>
                                    <p class="booking-item-payment-date-weekday">Sabtu</p>
                                </div><i class="fa fa-arrow-right booking-item-payment-date-separator"></i>
                                <div class="booking-item-payment-date">
                                    <p class="booking-item-payment-date-day">5 Agustus</p>
                                    <p class="booking-item-payment-date-weekday">Rabu</p>
                                </div>
                            </li>
                            <li>
                                <h5>Rincian biaya rental</h5>
                                <ul class="booking-item-payment-price">
                                    <li>
                                        <p class="booking-item-payment-price-title">Bensin</p>
                                        <p class="booking-item-payment-price-amount">Rp 100.000</p>
                                    </li>
                                    <li>
                                        <p class="booking-item-payment-price-title">Driver</p>
                                        <p class="booking-item-payment-price-amount">Rp 150.000<small>/hari</small></p>
                                    </li>
                                    <li>
                                        <p class="booking-item-payment-price-title">Rental</p>
                                        <p class="booking-item-payment-price-amount">Rp 350.000<small>/hari</small></p>
                                    </li>
                                    <li>
                                        <p class="booking-item-payment-price-title">Pajak 10%</p>
                                        <p class="booking-item-payment-price-amount">Rp 260.000<small></small>
                                        </p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <p class="booking-item-payment-total">Total biaya rental: <span>Rp 2.860.000</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>
        
        <?php include('footer.php'); ?>
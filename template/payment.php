		<?php include('header.php'); ?>
                
        <div class="container">
        	<ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="result.php">Rental mobil di Jakarta</a></li>
                <li><a href="detail.php">Lamborgini Aventador</a></li>
                <li class="active">Pembayaran</li>
            </ul>
            <hr>
            <div class="row">
                <div class="col-md-8">
                    <h3>Metode Pembayaran</h3>
                    <div class="row">
                        <div class="col-md-4 col-xs-4">
                        	<img class="pp-img img-thumbnail" src="img/payment/bca-clickpay.png" alt="Logo BCA KlikPay" title="Pembayaran via BCA KlikPay" />
                        </div>
                        <div class="col-md-4 col-xs-4">
                           	<img class="pp-img img-thumbnail" src="img/payment/mandiri-clickpay.png" alt="Logo Mandiri Clickpay" title="Pembayaran via Mandiri Clickpay" />
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <img class="pp-img img-thumbnail" src="img/payment/epay-bri.png" alt="Logo E-pay BRI" title="Pembayaran via E-pay BRI" />
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <img class="pp-img img-thumbnail" src="img/payment/visa-master.png" alt="Logo Visa & Master" title="Pembayaran via Visa & Master" />
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <img class="pp-img img-thumbnail" src="img/payment/atm-bersama.png" alt="Logo ATM Bersama" title="Pembayaran via ATM Bersama" />
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <img class="pp-img img-thumbnail" src="img/payment/alfa-group.png" alt="Logo Alfa Group" title="Pembayaran via Alfa Group" />
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
                        	<li><h5>Kode Order :  <a href="#">#TNT2015080001</a></h5></li>
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
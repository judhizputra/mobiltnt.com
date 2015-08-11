		<?php include('header.php'); ?>
                
        <div class="container">
        	<ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Order Detail</li>
            </ul>
            <hr>
            <div class="row">
                <div class="col-md-12">
                
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                        	<div class="row">
                                <div class="text-center">
                                    <h4>Order #TNT-20150805001</h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Detail Penyewa</div>
                                        <div class="panel-body">
                                            <strong>John Doe</strong><br>
                                            Jalan Tarian Raya Timur Blok J 32, Kelapa Gading, Jakarta Utara
                                            <br>
                                            <abbr title="Email"><i class="fa fa-envelope"></i> </abbr>
                                            <a href="mailto:johndoe@yahoo.com">johndoe@yahoo.com</a>
                                            <br>
                                            <abbr title="No HP"><i class="fa fa-phone"></i> </abbr>
                                            087876688976 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel panel-default height">
                                        <div class="panel-heading">Detail Rental</div>
                                        <div class="panel-body">
                                            <strong>TRAC</strong><br>
                                            Jalan Tarian Raya Timur Blok J 32, Kelapa Gading, Jakarta Utara<br>
                                            <abbr title="Email"><i class="fa fa-envelope"></i> </abbr>
                                            <a href="mailto:johndoe@yahoo.com">johndoe@yahoo.com</a>
                                            <br>
                                            <abbr title="No HP"><i class="fa fa-phone"></i> </abbr>
                                            087876688976 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">Referensi Pesanan</div>
                                <div class="panel-body">
                                	<div class="table-responsive">
                                    	<table class="table table-condensed borderless">
                                            <tr>
                                                <td style="width:25%;">Tanggal Pesan</td>
                                                <td>: 1 Agustus 2015</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Sewa</td>
                                                <td>: 2 Agustus 2015 <i class="fa fa-arrow-right"></i> 6 Agustus 2015</td>
                                            </tr>
                                            <tr>
                                                <td>Total Biaya</td>
                                                <td>: Rp 650.000</td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>: <span class="btn btn-danger btn-xs">Belum Dibayar</span></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">Rincian Pesanan</div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <td><strong>Deskripsi</strong></td>
                                                    <td class="text-center"><strong>Harga</strong></td>
                                                    <td class="text-center"><strong>Jumlah</strong></td>
                                                    <td class="text-right"><strong>Total</strong></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="detail.php">Lamborgini Aventador</a></td>
                                                    <td class="text-center">Rp 100.000</td>
                                                    <td class="text-center">5 hari</td>
                                                    <td class="text-right">Rp 500.000</td>
                                                </tr>
                                                <tr>
                                                    <td>Supir</td>
                                                    <td class="text-center">Rp 10.000</td>
                                                    <td class="text-center">5 hari</td>
                                                    <td class="text-right">Rp 50.000</td>
                                                </tr>
                                                <tr>
                                                    <td>Bensin</td>
                                                    <td class="text-center">Rp 100.000</td>
                                                    <td class="text-center"> - </td>
                                                    <td class="text-right">Rp 100.000</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Fitur</strong> <em>(bayar langsung ke rental)</em></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="sub-item"><i class="fa fa-plus-square"></i> GPS</span></td>
                                                    <td></td>
                                                    <td class="text-center">1 unit</td>
                                                    <td class="text-right">-</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="sub-item"><i class="fa fa-plus-square"></i> Tempat duduk bayi</span></td>
                                                    <td></td>
                                                    <td class="text-center">1 unit</td>
                                                    <td class="text-right">-</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="text-center"><strong>Total Biaya</strong></td>
                                                    <td class="text-right"><strong>Rp 650.000</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        	<input type="submit" class="btn btn-danger" value="Proses Pembayaran">
                            <div class="gap"></div>
                        </div>
                    </div>
        
        		</div>
            </div>
        </div>
        
        <?php include('footer.php'); ?>
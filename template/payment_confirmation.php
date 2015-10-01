		<?php include('header.php'); ?>
                
        <div class="container">
        	<ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Konfirmasi Pembayaran</li>
            </ul>
            <hr>
            <div class="row">
                <div class="col-md-12">
                
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                        	<div class="row">
                                <div class="text-center">
                                    <h4>Konfirmasi Pembayaran</h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="">
                                        <div class="form-group form-group-icon-left"><i class="fa fa-barcode input-icon"></i>
                                            <label>Kode Order</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                        <div class="form-group form-group-icon-left"><i class="fa fa-bank input-icon"></i>
                                            <label>Bank Pembayaran</label>
                                            <select class="form-control">
                                                <option>Pilih Bank</option>
                                                <option>BANK CENTRAL ASIA</option>
                                                <option>BANK RAKYAT INDONESIA</option>
                                                <option>BANK NEGARA INDONESIA</option>
                                            </select>
                                        </div>
                                        <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon"></i>
                                            <label>Pemilik Rekening</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                        <div class="form-group form-group-icon-left"><i class="fa fa-bank input-icon"></i>
                                            <label>Bank Penerima</label>
                                            <select class="form-control">
                                                <option>Pilih Bank</option>
                                                <option>BANK CENTRAL ASIA</option>
                                                <option>BANK MANDIRI</option>
                                            </select>
                                        </div>
                                        <div class="form-group form-group-icon-left"><i class="fa fa-money input-icon"></i>
                                            <label>Jumlah Pembayaran</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                        <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon"></i>
                                            <label>Tanggal Pembayaran</label>
                                            <input class="date-pick form-control" type="text" data-date-format="DD d MM yyyy"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr>
                            <input type="submit" class="btn btn-danger" value="Konfirmasi">
                            <div class="gap"></div>
                        </div>
                    </div>
        		</div>
            </div>
        </div>
        
        <?php include('footer.php'); ?>
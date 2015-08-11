		<?php include('header.php'); ?>
        
        <div class="container">
            <h1 class="page-title">Riwayat Pesanan</h1>
        </div>
        
        <div class="container">
            <div class="row">
            
                <?php include('user_menu.php'); ?>
                
                <div class="col-md-9 table-responsive">
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Tampilkan hanya order yang sedang aktif</label>
                    </div>
                    <table class="table table-bordered table-striped table-booking-history">
                        <thead>
                            <tr>
                                <th>No Order</th>
                                <th>Mobil Rental</th>
                                <th>Lokasi</th>
                                <th>Tanggal Order</th>
                                <th>Tanggal Sewa</th>
                                <th>Biaya</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#TNT-20150805001</td>
                                <td>Toyota Avanza</td>
                                <td>Jakarta</td>
                                <td>1 Agu 2015</td>
                                <td>3 Agu 2015 <i class="fa fa-long-arrow-right"></i> 5 Agu 2015</td>
                                <td>Rp 2.000.000</td>
                                <td class="text-center"><a href="user_order_detail.php" class="btn btn-warning btn-xs">Dalam Proses</a></td>
                            </tr>
                            <tr>
                                <td>#TNT-20150805002</td>
                                <td>Honda Mobilio</td>
                                <td>Semarang</td>
                                <td>1 Mar 2015</td>
                               	<td>3 Mar 2015 <i class="fa fa-long-arrow-right"></i> 5 Mar 2015</td>
                                <td>Rp 3.000.000</td>
                                <td class="text-center"><a href="user_order_detail.php" class="btn btn-success btn-xs">Sudah Diantar</a></td>
                            </tr>
                            <tr>
                                <td>#TNT-20150805003</td>
                                <td>Suzuki Ertiga</td>
                                <td>Bandung</td>
                                <td>1 Apr 2015</td>
                                <td>3 Apr 2015 <i class="fa fa-long-arrow-right"></i> 5 Apr 2015</td>
                                <td>Rp 4.000.000</td>
                                <td class="text-center"><a href="user_order_detail.php" class="btn btn-danger btn-xs">Mobil Ditolak</a></td>
                            </tr>
                            <tr>
                                <td>#TNT-20150805004</td>
                                <td>Suzuki APV</td>
                                <td>Bandung</td>
                                <td>1 Apr 2015</td>
                                <td>3 Apr 2015 <i class="fa fa-long-arrow-right"></i> 5 Apr 2015</td>
                                <td>Rp 4.000.000</td>
                                <td class="text-center"><a href="user_order_detail.php" class="btn btn-danger btn-xs">Belum Dibayar</a></td>
                            </tr>
                            <tr>
                                <td>#TNT-20150805005</td>
                                <td>Toyota Innova</td>
                                <td>Bandung</td>
                                <td>1 Apr 2015</td>
                                <td>3 Apr 2015 <i class="fa fa-long-arrow-right"></i> 5 Apr 2015</td>
                                <td>Rp 4.000.000</td>
                                <td class="text-center"><a href="user_order_detail.php" class="btn btn-success btn-xs">Sudah Dibayar</a></td>
                            </tr>
                            <tr>
                                <td>#TNT-20150805006</td>
                                <td>Toyota Innova</td>
                                <td>Bandung</td>
                                <td>1 Apr 2015</td>
                                <td>3 Apr 2015 <i class="fa fa-long-arrow-right"></i> 5 Apr 2015</td>
                                <td>Rp 4.000.000</td>
                                <td class="text-center"><a href="user_order_detail.php" class="btn btn-info btn-xs">Mobil Diterima</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        
        <?php include('footer.php'); ?>
		<?php include('header.php'); ?>
        
		<div class="container">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a>
                </li>
                <li><a href="result.php">Rental mobil di Jakarta</a>
                </li>
                <li class="active">Lamborgini Aventador</li>
            </ul>
            <div class="booking-item-details">

                <header class="booking-item-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="lh1em">Lamborgini Aventador</h1>
                        </div>
                        <div class="col-md-4">
                            <p class="booking-item-header-price"><span class="text-lg">Rp 1.500.000</span>/hari</p>
                        </div>
                    </div>
                </header>
                <div class="gap gap-small"></div>
                <div class="row row-wrap">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-7">
                                <img src="img/example-car.png" alt="Image Alternative text" title="Image Title" />
                            </div>
                            <div class="col-md-5">
                                <div class="booking-item-price-calc">
                                    <div class="row row-wrap">
                                        <div class="col-md-12">
                                            <ul class="list">
                                                <li>
                                                	<p>Harga per Hari <span>Rp 1.500.000</span></p>
                                                </li>
                                                <li>
                                                	<p>Harga Rental <span>Rp 4.500.000</span></p>
                                                    <small>3 hari (1 Agustus - 3 Agustus)</small>
                                                </li>
                                                <li>
                                                    <p>Pajak 10% <span>Rp 450.000</span></p>
                                                </li>
                                                <li>
                                                    <p>Total Biaya <span>Rp 4.950.000</span></p>
                                                </li>
                                            </ul>
                                            <a href="checkout.php" class="btn btn-danger">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-small">Arrive at your destination in style with this air-conditioned automatic. With room for 4 passengers and 2 pieces of luggage, it's ideal for small groups looking to get from A to B in comfort. Price can change at any moment so book now to avoid disappointment!</p>

                        <hr>
                        <div class="row row-wrap">
                            <div class="col-md-4">
                                <h5>Fitur Mobil</h5>
                                <ul class="booking-item-features booking-item-features-expand clearfix">
                                    <li>
                                    	<i class="fa fa-male"></i><span class="booking-item-feature-title">Hingga 4 Penumpang</span>
                                    </li>
                                    <li>
                                    	<i class="im im-car-doors"></i><span class="booking-item-feature-title">3 Pintu</span>
                                    </li>
                                    <li>
                                    	<i class="fa fa-briefcase"></i><span class="booking-item-feature-title">2 Kapasitas Bagasi</span>
                                    </li>
                                    <li>
                                    	<i class="im im-shift-auto"></i><span class="booking-item-feature-title">Transmisi Otomatis</span>
                                    </li>
                                    <li>
                                    	<i class="im im-diesel"></i><span class="booking-item-feature-title">Bahan Bakar Bensin</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h5>Kelengkapan</h5>
                                <ul class="booking-item-features booking-item-features-expand clearfix">
                                    <li><i class="im im-air"></i><span class="booking-item-feature-title">AC</span></li>
                                    <li><i class="im im-fm"></i><span class="booking-item-feature-title">FM Radio</span></li>
                                    <li><i class="im im-tv"></i><span class="booking-item-feature-title">DVD + TV</span></li>
                                    <li><i class="im im-stereo"></i><span class="booking-item-feature-title">Stereo CD/MP3</span></li>
                                    <li><i class="fa fa-medkit"></i><span class="booking-item-feature-title">Air Bag</span></li>
                                    <li><i class="fa fa-cog"></i><span class="booking-item-feature-title">Ban Cadangan</span></li>
                                    <li><i class="fa fa-wrench"></i><span class="booking-item-feature-title">Dongkrak & Peralatan Lainnya</span></li>
                                    <li><i class="im im-car-wheel"></i><span class="booking-item-feature-title">Power Steering</span></li>
                                    <li><i class="im im-car-window"></i><span class="booking-item-feature-title">Power Windows</span></li>
                                    <li><i class="im im-lock"></i><span class="booking-item-feature-title">Central Lock</span></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h5>Kriteria</h5>
                                <ul class="booking-item-features booking-item-features-expand booking-item-features-dark clearfix">
                                    <li><i class="im im-driver"></i><span class="booking-item-feature-title">Dengan Supir</span></li>
                                    <li><i class="im im-meet"></i><span class="booking-item-feature-title">Lepas Kunci</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                    	<div class="booking-item-dates-change mb30">
                            <form class="input-daterange" data-date-format="MM, d">
                                <div class="form-group form-group-icon-left">
                                    <i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                                    <label>Lokasi</label>
                                    <input class="typeahead form-control" value="Jakarta Timur, DKI Jakarta" placeholder="Masukan Nama Kota" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>Kriteria</label>
                                    <select class="form-control">
                                        <option>Lepas Kunci</option>
                                        <option>Dengan Supir</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Pinjam</label>
                                    <input class="form-control" name="start" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Kembali</label>
                                    <input class="form-control" name="end" type="text" />
                                </div>
                                <input class="btn btn-danger" type="submit" value="Perbarui Pencarian" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include('footer.php'); ?>
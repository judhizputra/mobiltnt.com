		<?php include('header.php'); ?>
        
        <div class="container">
            <h1 class="page-title">Daftar Rental</h1>
        </div>
        
        <div class="container">
            <div class="row">
            
                <?php include('user_menu.php'); ?>
                
                <div class="col-md-9">
                	<div class="nav-drop booking-sort">
                        <h5 class="booking-sort-title"><a href="#">Urutkan: Paling Sesuai<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></a></h5>
                        <ul class="nav-drop-menu">
                            <li><a href="#">Harga (tinggi ke rendah)</a>
                            </li>
                            <li><a href="#">Harga (rendah ke tinggi)</a>
                            </li>
                        </ul>
                    </div>
                	<a href="user_rent_form.php" class="btn btn-danger pull-right">Tambah Mobil</a>
                    <div class="gap-small"></div>
                	<ul class="booking-list">
                        <li>
                            <div class="booking-item">
                                <div class="row">
                                    <div class="col-md-3 mb10">
                                        <div class="booking-item-car-img">
                                            <img src="img/example-car.png" alt="Image Alternative text" title="Image Title" />
                                            <p class="booking-item-car-title">Lamborgini Aventador</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6 col-lg-6">
                                        <div class="row">
                                            <div class="col-md-10 col-sm-12 col-lg-9 mb10">
                                                <ul class="booking-item-features booking-item-features-sign clearfix">
                                                    <li rel="tooltip" data-placement="top" title="Penumpang">
                                                    	<i class="fa fa-male"></i>
                                                        <span class="booking-item-feature-sign">x 3</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Pintu">
                                                    	<i class="im im-car-doors"></i>
                                                        <span class="booking-item-feature-sign">x 2</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kapasitas Bagasi">
                                                    	<i class="fa fa-briefcase"></i>
                                                        <span class="booking-item-feature-sign">x 4</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Transmisi Otomatis">
                                                    	<i class="im im-shift-auto"></i>
                                                        <span class="booking-item-feature-sign">auto</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kendaraan">
                                                    	<i class="im im-diesel"></i>
                                                        <span class="booking-item-feature-sign">bensin</span>
                                                    </li>
                                                </ul>
                                                <ul class="booking-item-features booking-item-features-small clearfix">
                                                    <li rel="tooltip" data-placement="top" title="AC">
                                                    	<i class="im im-air"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="FM Radio">
                                                    	<i class="im im-fm"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="DVD + TV">
                                                    	<i class="im im-tv"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Stereo CD/MP3">
                                                    	<i class="im im-stereo"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Air Bag">
                                                    	<i class="fa fa-medkit"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <ul class="booking-item-features booking-item-features-dark">
                                                    <li rel="tooltip" data-placement="top" title="Lepas Kunci">
                                                    	<i class="im im-meet"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-3"><span class="booking-item-price">Rp 1.350.000</span><span>/hari</span>
                                        <p class="booking-item-flight-class">Sport</p>
                                        <a href="detail.php" class="btn btn-info">Ubah</a>
                                        <a href="detail.php" class="btn btn-warning">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item">
                                <div class="row">
                                    <div class="col-md-3 mb10">
                                        <div class="booking-item-car-img">
                                            <img src="img/example-car2.png" alt="Image Alternative text" title="Image Title" />
                                            <p class="booking-item-car-title">Range Rover</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6 col-lg-6">
                                        <div class="row">
                                            <div class="col-md-10 col-sm-12 col-lg-9 mb10">
                                                <ul class="booking-item-features booking-item-features-sign clearfix">
                                                    <li rel="tooltip" data-placement="top" title="Penumpang">
                                                    	<i class="fa fa-male"></i>
                                                        <span class="booking-item-feature-sign">x 3</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Pintu">
                                                    	<i class="im im-car-doors"></i>
                                                        <span class="booking-item-feature-sign">x 2</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kapasitas Bagasi">
                                                    	<i class="fa fa-briefcase"></i>
                                                        <span class="booking-item-feature-sign">x 4</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Transmisi Otomatis">
                                                    	<i class="im im-shift"></i>
                                                        <span class="booking-item-feature-sign">manual</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kendaraan">
                                                    	<i class="im im-diesel"></i>
                                                        <span class="booking-item-feature-sign">solar</span>
                                                    </li>
                                                </ul>
                                                <ul class="booking-item-features booking-item-features-small clearfix">
                                                    <li rel="tooltip" data-placement="top" title="Ban Cadangan">
                                                    	<i class="fa fa-cog"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Dongkrak & Peralatan Lainnya">
                                                    	<i class="fa fa-wrench"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Power Steering">
                                                    	<i class="im im-car-wheel"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Power Windows">
                                                    	<i class="im im-car-window"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Central Lock">
                                                    	<i class="im im-lock"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <ul class="booking-item-features booking-item-features-dark">
                                                    <li rel="tooltip" data-placement="top" title="Dengan Supir">
                                                    	<i class="im im-driver"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-3"><span class="booking-item-price">Rp 750.000</span><span>/hari</span>
                                        <p class="booking-item-flight-class">SUV</p>
                                        <a href="detail.php" class="btn btn-info">Ubah</a>
                                        <a href="detail.php" class="btn btn-warning">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item">
                                <div class="row">
                                    <div class="col-md-3 mb10">
                                        <div class="booking-item-car-img">
                                            <img src="img/example-car.png" alt="Image Alternative text" title="Image Title" />
                                            <p class="booking-item-car-title">Lamborgini Aventador</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6 col-lg-6">
                                        <div class="row">
                                            <div class="col-md-10 col-sm-12 col-lg-9 mb10">
                                                <ul class="booking-item-features booking-item-features-sign clearfix">
                                                    <li rel="tooltip" data-placement="top" title="Penumpang">
                                                    	<i class="fa fa-male"></i>
                                                        <span class="booking-item-feature-sign">x 3</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Pintu">
                                                    	<i class="im im-car-doors"></i>
                                                        <span class="booking-item-feature-sign">x 2</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kapasitas Bagasi">
                                                    	<i class="fa fa-briefcase"></i>
                                                        <span class="booking-item-feature-sign">x 4</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Transmisi Otomatis">
                                                    	<i class="im im-shift-auto"></i>
                                                        <span class="booking-item-feature-sign">auto</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kendaraan">
                                                    	<i class="im im-diesel"></i>
                                                        <span class="booking-item-feature-sign">bensin</span>
                                                    </li>
                                                </ul>
                                                <ul class="booking-item-features booking-item-features-small clearfix">
                                                    <li rel="tooltip" data-placement="top" title="AC">
                                                    	<i class="im im-air"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="FM Radio">
                                                    	<i class="im im-fm"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="DVD + TV">
                                                    	<i class="im im-tv"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Stereo CD/MP3">
                                                    	<i class="im im-stereo"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Air Bag">
                                                    	<i class="fa fa-medkit"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <ul class="booking-item-features booking-item-features-dark">
                                                    <li rel="tooltip" data-placement="top" title="Lepas Kunci">
                                                    	<i class="im im-meet"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-3"><span class="booking-item-price">Rp 1.350.000</span><span>/hari</span>
                                        <p class="booking-item-flight-class">Sport</p>
                                        <a href="detail.php" class="btn btn-info">Ubah</a>
                                        <a href="detail.php" class="btn btn-warning">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item">
                                <div class="row">
                                    <div class="col-md-3 mb10">
                                        <div class="booking-item-car-img">
                                            <img src="img/example-car2.png" alt="Image Alternative text" title="Image Title" />
                                            <p class="booking-item-car-title">Range Rover</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6 col-lg-6">
                                        <div class="row">
                                            <div class="col-md-10 col-sm-12 col-lg-9 mb10">
                                                <ul class="booking-item-features booking-item-features-sign clearfix">
                                                    <li rel="tooltip" data-placement="top" title="Penumpang">
                                                    	<i class="fa fa-male"></i>
                                                        <span class="booking-item-feature-sign">x 3</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Pintu">
                                                    	<i class="im im-car-doors"></i>
                                                        <span class="booking-item-feature-sign">x 2</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kapasitas Bagasi">
                                                    	<i class="fa fa-briefcase"></i>
                                                        <span class="booking-item-feature-sign">x 4</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Transmisi Otomatis">
                                                    	<i class="im im-shift"></i>
                                                        <span class="booking-item-feature-sign">manual</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kendaraan">
                                                    	<i class="im im-diesel"></i>
                                                        <span class="booking-item-feature-sign">solar</span>
                                                    </li>
                                                </ul>
                                                <ul class="booking-item-features booking-item-features-small clearfix">
                                                    <li rel="tooltip" data-placement="top" title="Ban Cadangan">
                                                    	<i class="fa fa-cog"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Dongkrak & Peralatan Lainnya">
                                                    	<i class="fa fa-wrench"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Power Steering">
                                                    	<i class="im im-car-wheel"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Power Windows">
                                                    	<i class="im im-car-window"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Central Lock">
                                                    	<i class="im im-lock"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <ul class="booking-item-features booking-item-features-dark">
                                                    <li rel="tooltip" data-placement="top" title="Dengan Supir">
                                                    	<i class="im im-driver"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-3"><span class="booking-item-price">Rp 750.000</span><span>/hari</span>
                                        <p class="booking-item-flight-class">SUV</p>
                                        <a href="detail.php" class="btn btn-info">Ubah</a>
                                        <a href="detail.php" class="btn btn-warning">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item">
                                <div class="row">
                                    <div class="col-md-3 mb10">
                                        <div class="booking-item-car-img">
                                            <img src="img/example-car.png" alt="Image Alternative text" title="Image Title" />
                                            <p class="booking-item-car-title">Lamborgini Aventador</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6 col-lg-6">
                                        <div class="row">
                                            <div class="col-md-10 col-sm-12 col-lg-9 mb10">
                                                <ul class="booking-item-features booking-item-features-sign clearfix">
                                                    <li rel="tooltip" data-placement="top" title="Penumpang">
                                                    	<i class="fa fa-male"></i>
                                                        <span class="booking-item-feature-sign">x 3</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Pintu">
                                                    	<i class="im im-car-doors"></i>
                                                        <span class="booking-item-feature-sign">x 2</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kapasitas Bagasi">
                                                    	<i class="fa fa-briefcase"></i>
                                                        <span class="booking-item-feature-sign">x 4</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Transmisi Otomatis">
                                                    	<i class="im im-shift-auto"></i>
                                                        <span class="booking-item-feature-sign">auto</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kendaraan">
                                                    	<i class="im im-diesel"></i>
                                                        <span class="booking-item-feature-sign">bensin</span>
                                                    </li>
                                                </ul>
                                                <ul class="booking-item-features booking-item-features-small clearfix">
                                                    <li rel="tooltip" data-placement="top" title="AC">
                                                    	<i class="im im-air"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="FM Radio">
                                                    	<i class="im im-fm"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="DVD + TV">
                                                    	<i class="im im-tv"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Stereo CD/MP3">
                                                    	<i class="im im-stereo"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Air Bag">
                                                    	<i class="fa fa-medkit"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <ul class="booking-item-features booking-item-features-dark">
                                                    <li rel="tooltip" data-placement="top" title="Lepas Kunci">
                                                    	<i class="im im-meet"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-3"><span class="booking-item-price">Rp 1.350.000</span><span>/hari</span>
                                        <p class="booking-item-flight-class">Sport</p>
                                        <a href="detail.php" class="btn btn-info">Ubah</a>
                                        <a href="detail.php" class="btn btn-warning">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item">
                                <div class="row">
                                    <div class="col-md-3 mb10">
                                        <div class="booking-item-car-img">
                                            <img src="img/example-car2.png" alt="Image Alternative text" title="Image Title" />
                                            <p class="booking-item-car-title">Range Rover</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6 col-lg-6">
                                        <div class="row">
                                            <div class="col-md-10 col-sm-12 col-lg-9 mb10">
                                                <ul class="booking-item-features booking-item-features-sign clearfix">
                                                    <li rel="tooltip" data-placement="top" title="Penumpang">
                                                    	<i class="fa fa-male"></i>
                                                        <span class="booking-item-feature-sign">x 3</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Pintu">
                                                    	<i class="im im-car-doors"></i>
                                                        <span class="booking-item-feature-sign">x 2</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kapasitas Bagasi">
                                                    	<i class="fa fa-briefcase"></i>
                                                        <span class="booking-item-feature-sign">x 4</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Transmisi Otomatis">
                                                    	<i class="im im-shift"></i>
                                                        <span class="booking-item-feature-sign">manual</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kendaraan">
                                                    	<i class="im im-diesel"></i>
                                                        <span class="booking-item-feature-sign">solar</span>
                                                    </li>
                                                </ul>
                                                <ul class="booking-item-features booking-item-features-small clearfix">
                                                    <li rel="tooltip" data-placement="top" title="Ban Cadangan">
                                                    	<i class="fa fa-cog"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Dongkrak & Peralatan Lainnya">
                                                    	<i class="fa fa-wrench"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Power Steering">
                                                    	<i class="im im-car-wheel"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Power Windows">
                                                    	<i class="im im-car-window"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Central Lock">
                                                    	<i class="im im-lock"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <ul class="booking-item-features booking-item-features-dark">
                                                    <li rel="tooltip" data-placement="top" title="Dengan Supir">
                                                    	<i class="im im-driver"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-3"><span class="booking-item-price">Rp 750.000</span><span>/hari</span>
                                        <p class="booking-item-flight-class">SUV</p>
                                        <a href="detail.php" class="btn btn-info">Ubah</a>
                                        <a href="detail.php" class="btn btn-warning">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item">
                                <div class="row">
                                    <div class="col-md-3 mb10">
                                        <div class="booking-item-car-img">
                                            <img src="img/example-car.png" alt="Image Alternative text" title="Image Title" />
                                            <p class="booking-item-car-title">Lamborgini Aventador</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6 col-lg-6">
                                        <div class="row">
                                            <div class="col-md-10 col-sm-12 col-lg-9 mb10">
                                                <ul class="booking-item-features booking-item-features-sign clearfix">
                                                    <li rel="tooltip" data-placement="top" title="Penumpang">
                                                    	<i class="fa fa-male"></i>
                                                        <span class="booking-item-feature-sign">x 3</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Pintu">
                                                    	<i class="im im-car-doors"></i>
                                                        <span class="booking-item-feature-sign">x 2</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kapasitas Bagasi">
                                                    	<i class="fa fa-briefcase"></i>
                                                        <span class="booking-item-feature-sign">x 4</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Transmisi Otomatis">
                                                    	<i class="im im-shift-auto"></i>
                                                        <span class="booking-item-feature-sign">auto</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kendaraan">
                                                    	<i class="im im-diesel"></i>
                                                        <span class="booking-item-feature-sign">bensin</span>
                                                    </li>
                                                </ul>
                                                <ul class="booking-item-features booking-item-features-small clearfix">
                                                    <li rel="tooltip" data-placement="top" title="AC">
                                                    	<i class="im im-air"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="FM Radio">
                                                    	<i class="im im-fm"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="DVD + TV">
                                                    	<i class="im im-tv"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Stereo CD/MP3">
                                                    	<i class="im im-stereo"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Air Bag">
                                                    	<i class="fa fa-medkit"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <ul class="booking-item-features booking-item-features-dark">
                                                    <li rel="tooltip" data-placement="top" title="Lepas Kunci">
                                                    	<i class="im im-meet"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-3"><span class="booking-item-price">Rp 1.350.000</span><span>/hari</span>
                                        <p class="booking-item-flight-class">Sport</p>
                                        <a href="detail.php" class="btn btn-info">Ubah</a>
                                        <a href="detail.php" class="btn btn-warning">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item">
                                <div class="row">
                                    <div class="col-md-3 mb10">
                                        <div class="booking-item-car-img">
                                            <img src="img/example-car2.png" alt="Image Alternative text" title="Image Title" />
                                            <p class="booking-item-car-title">Range Rover</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6 col-lg-6">
                                        <div class="row">
                                            <div class="col-md-10 col-sm-12 col-lg-9 mb10">
                                                <ul class="booking-item-features booking-item-features-sign clearfix">
                                                    <li rel="tooltip" data-placement="top" title="Penumpang">
                                                    	<i class="fa fa-male"></i>
                                                        <span class="booking-item-feature-sign">x 3</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Pintu">
                                                    	<i class="im im-car-doors"></i>
                                                        <span class="booking-item-feature-sign">x 2</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kapasitas Bagasi">
                                                    	<i class="fa fa-briefcase"></i>
                                                        <span class="booking-item-feature-sign">x 4</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Transmisi Otomatis">
                                                    	<i class="im im-shift"></i>
                                                        <span class="booking-item-feature-sign">manual</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kendaraan">
                                                    	<i class="im im-diesel"></i>
                                                        <span class="booking-item-feature-sign">solar</span>
                                                    </li>
                                                </ul>
                                                <ul class="booking-item-features booking-item-features-small clearfix">
                                                    <li rel="tooltip" data-placement="top" title="Ban Cadangan">
                                                    	<i class="fa fa-cog"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Dongkrak & Peralatan Lainnya">
                                                    	<i class="fa fa-wrench"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Power Steering">
                                                    	<i class="im im-car-wheel"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Power Windows">
                                                    	<i class="im im-car-window"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Central Lock">
                                                    	<i class="im im-lock"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <ul class="booking-item-features booking-item-features-dark">
                                                    <li rel="tooltip" data-placement="top" title="Dengan Supir">
                                                    	<i class="im im-driver"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-3"><span class="booking-item-price">Rp 750.000</span><span>/hari</span>
                                        <p class="booking-item-flight-class">SUV</p>
                                        <a href="detail.php" class="btn btn-info">Ubah</a>
                                        <a href="detail.php" class="btn btn-warning">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item">
                                <div class="row">
                                    <div class="col-md-3 mb10">
                                        <div class="booking-item-car-img">
                                            <img src="img/example-car.png" alt="Image Alternative text" title="Image Title" />
                                            <p class="booking-item-car-title">Lamborgini Aventador</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6 col-lg-6">
                                        <div class="row">
                                            <div class="col-md-10 col-sm-12 col-lg-9 mb10">
                                                <ul class="booking-item-features booking-item-features-sign clearfix">
                                                    <li rel="tooltip" data-placement="top" title="Penumpang">
                                                    	<i class="fa fa-male"></i>
                                                        <span class="booking-item-feature-sign">x 3</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Pintu">
                                                    	<i class="im im-car-doors"></i>
                                                        <span class="booking-item-feature-sign">x 2</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kapasitas Bagasi">
                                                    	<i class="fa fa-briefcase"></i>
                                                        <span class="booking-item-feature-sign">x 4</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Transmisi Otomatis">
                                                    	<i class="im im-shift-auto"></i>
                                                        <span class="booking-item-feature-sign">auto</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kendaraan">
                                                    	<i class="im im-diesel"></i>
                                                        <span class="booking-item-feature-sign">bensin</span>
                                                    </li>
                                                </ul>
                                                <ul class="booking-item-features booking-item-features-small clearfix">
                                                    <li rel="tooltip" data-placement="top" title="AC">
                                                    	<i class="im im-air"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="FM Radio">
                                                    	<i class="im im-fm"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="DVD + TV">
                                                    	<i class="im im-tv"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Stereo CD/MP3">
                                                    	<i class="im im-stereo"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Air Bag">
                                                    	<i class="fa fa-medkit"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <ul class="booking-item-features booking-item-features-dark">
                                                    <li rel="tooltip" data-placement="top" title="Lepas Kunci">
                                                    	<i class="im im-meet"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-3"><span class="booking-item-price">Rp 1.350.000</span><span>/hari</span>
                                        <p class="booking-item-flight-class">Sport</p>
                                        <a href="detail.php" class="btn btn-info">Ubah</a>
                                        <a href="detail.php" class="btn btn-warning">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item">
                                <div class="row">
                                    <div class="col-md-3 mb10">
                                        <div class="booking-item-car-img">
                                            <img src="img/example-car2.png" alt="Image Alternative text" title="Image Title" />
                                            <p class="booking-item-car-title">Range Rover</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6 col-lg-6">
                                        <div class="row">
                                            <div class="col-md-10 col-sm-12 col-lg-9 mb10">
                                                <ul class="booking-item-features booking-item-features-sign clearfix">
                                                    <li rel="tooltip" data-placement="top" title="Penumpang">
                                                    	<i class="fa fa-male"></i>
                                                        <span class="booking-item-feature-sign">x 3</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Pintu">
                                                    	<i class="im im-car-doors"></i>
                                                        <span class="booking-item-feature-sign">x 2</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kapasitas Bagasi">
                                                    	<i class="fa fa-briefcase"></i>
                                                        <span class="booking-item-feature-sign">x 4</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Transmisi Otomatis">
                                                    	<i class="im im-shift"></i>
                                                        <span class="booking-item-feature-sign">manual</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Kendaraan">
                                                    	<i class="im im-diesel"></i>
                                                        <span class="booking-item-feature-sign">solar</span>
                                                    </li>
                                                </ul>
                                                <ul class="booking-item-features booking-item-features-small clearfix">
                                                    <li rel="tooltip" data-placement="top" title="Ban Cadangan">
                                                    	<i class="fa fa-cog"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Dongkrak & Peralatan Lainnya">
                                                    	<i class="fa fa-wrench"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Power Steering">
                                                    	<i class="im im-car-wheel"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Power Windows">
                                                    	<i class="im im-car-window"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Central Lock">
                                                    	<i class="im im-lock"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <ul class="booking-item-features booking-item-features-dark">
                                                    <li rel="tooltip" data-placement="top" title="Dengan Supir">
                                                    	<i class="im im-driver"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-3"><span class="booking-item-price">Rp 750.000</span><span>/hari</span>
                                        <p class="booking-item-flight-class">SUV</p>
                                        <a href="detail.php" class="btn btn-info">Ubah</a>
                                        <a href="detail.php" class="btn btn-warning">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li class="next"><a href="#">Next</a></li>
                                <li class="last"><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
			</div>
            <div class="gap"></div>
        </div>
        
        <?php include('footer.php'); ?>
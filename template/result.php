		<?php include('header.php'); ?>

        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Sewa mobil di Jakarta</li>
            </ul>
            <h1 class="booking-title">Ditemukan 200 mobil rental di Jakarta Timur pada 1 Agustus - 5 Agustus</h1>
            <div class="row">
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
                    <aside class="booking-filters text-white">
                        <h3>Filter:</h3>
                        <ul class="list booking-filters-list">
                            <li>
                                <h5 class="booking-filters-title">Tipe Mobil</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />MPV (11)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />SUV (3)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />City Car (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Sedan (12)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Hybrid (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Sport (5)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Commercial (5)</label>
                                </div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Transmisi</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Otomatis (80)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Manual (25)</label>
                                </div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Bahan Bakar</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Bensin (60)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Solar (35)</label>
                                </div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Kelengkapan</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />AC (47)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Tape / Radio (30)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />DVD + TV (30)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Stereo CD/MP3 (30)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Air Bag (35)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Ban Cadangan (70)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Dongkrak & Peralatan Lainnya (53)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Power Steering (42)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Power Windows (68)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Central Lock (68)</label>
                                </div>
                            </li>
                        </ul>
                    </aside>
                </div>
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
                                        <a href="#" class="btn btn-danger">Pesan</a>
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
                                        <a href="#" class="btn btn-danger">Pesan</a>
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
                                        <a href="#" class="btn btn-danger">Pesan</a>
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
                                        <a href="#" class="btn btn-danger">Pesan</a>
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
                                        <a href="#" class="btn btn-danger">Pesan</a>
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
                                        <a href="#" class="btn btn-danger">Pesan</a>
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
                                        <a href="#" class="btn btn-danger">Pesan</a>
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
                                        <a href="#" class="btn btn-danger">Pesan</a>
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
                                        <a href="#" class="btn btn-danger">Pesan</a>
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
                                        <a href="#" class="btn btn-danger">Pesan</a>
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
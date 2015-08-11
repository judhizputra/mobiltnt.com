		<?php include('header.php'); ?>
        
        <div class="container">
            <h1 class="page-title">Form Rental</h1>
        </div>
        
        <div class="container">
            <div class="row">
            
                <?php include('user_menu.php'); ?>
                
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-5">
                            <form action="">
                                <h4>Data Mobil</h4>
                                <div class="form-group form-group-icon-left"><i class="fa fa-car input-icon"></i>
                                    <label>Merk</label>
                                    <select class="form-control" />
                                    	<option>Pilih Merk</option>
                                        <option>Toyota</option>
                                    </select>
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-car input-icon"></i>
                                    <label>Tipe</label>
                                    <select class="form-control" />
                                    	<option>Pilih Tipe</option>
                                        <option>Avanza</option>
                                    </select>
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-money input-icon"></i>
                                    <label>Harga rental per hari</label>
                                    <input class="form-control" value="500.000" type="text" />
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-car input-icon"></i>
                                    <label>Jumlah unit</label>
                                    <input class="form-control" value="5" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea class="form-control" />Mobil tahun 2015, kualitas oke, siap menempuh perjalanan jauh</textarea>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                                <h4>Kriteria</h4>
                                <div class="form-group form-group-icon-left"><i class="im im-shift input-icon"></i>
                                    <label>Transmisi</label>
                                    <select class="form-control" />
                                    	<option>Pilih Transmisi</option>
                                        <option>Manual</option>
                                        <option>Otomatis</option>
                                    </select>
                                </div>
                                <div class="form-group form-group-icon-left"><i class="im im-diesel input-icon"></i>
                                    <label>Bahan Bakar</label>
                                    <select class="form-control" />
                                    	<option>Pilih Bahan Bakar</option>
                                        <option>Bensin</option>
                                        <option>Solat</option>
                                    </select>
                                </div>
                                <hr>
                                <h4>Supir</h4>
                                <div class="form-group">
                                    <div class="radio-inline radio-small">
                                        <label>
                                        	<input class="i-radio" type="radio" name="myRadiolist" checked />Lepas Kunci
                                        </label>
                                    </div>
                                    <div class="radio-inline radio-small">
                                        <label>
                                            <input class="i-radio" type="radio" name="myRadiolist" />Dengan Supir
                                        </label>
                                    </div>
                                    <div class="radio-inline radio-small">
                                        <label>
                                            <input class="i-radio" type="radio" name="myRadiolist" />Opsional
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-money input-icon"></i>
                                    <label>Harga supir per hari</label>
                                    <input class="form-control" value="150.000" type="text" />
                                </div>
                            </form>
                        </div>
                    </div>
					<div class="gap-small"></div>
                    <div class="row">
                    	<div class="col-md-12">
                            <hr />
                            <h4>Fitur Mobil</h4>
                        	<table class="table table-feature">
                                <thead>
                                    <th class="center-col">Fitur</th>
                                    <th>Deskripsi</th>
                                    <th class="center-col">Tersedia</th>
                                </thead>
                                <tbody>
                                    <tr class="active">
                                        <td class="center-col"><i class="im im-air"></i></td>
                                        <td>AC</td>
                                        <td class="center-col">
                                            <input class="i-check" type="checkbox" />
                                        </td>
                                    </tr>
                                    <tr class="active">
                                        <td class="center-col"><i class="im im-fm"></i></td>
                                        <td>FM Radio</td>
                                        <td class="center-col">
                                            <input class="i-check" type="checkbox" />
                                        </td>
                                    </tr>
                                    <tr class="active">
                                        <td class="center-col"><i class="im im-tv"></i></td>
                                        <td>DVD + TV</td>
                                        <td class="center-col">
                                            <input class="i-check" type="checkbox" />
                                        </td>
                                    </tr>
                                    <tr class="active">
                                        <td class="center-col"><i class="im im-stereo"></i></td>
                                        <td>Stereo CD/MP3</td>
                                        <td class="center-col">
                                            <input class="i-check" type="checkbox" />
                                        </td>
                                    </tr>
                                    <tr class="active">
                                        <td class="center-col"><i class="fa fa-medkit"></i></td>
                                        <td>Air Bag</td>
                                        <td class="center-col">
                                            <input class="i-check" type="checkbox" />
                                        </td>
                                    </tr>
                                    <tr class="active">
                                        <td class="center-col"><i class="fa fa-cog"></i></td>
                                        <td>Ban Cadangan</td>
                                        <td class="center-col">
                                            <input class="i-check" type="checkbox" />
                                        </td>
                                    </tr>
                                    <tr class="active">
                                        <td class="center-col"><i class="fa fa-wrench"></i></td>
                                        <td>Dongkrak & Peralatan Lainnya</td>
                                        <td class="center-col">
                                            <input class="i-check" type="checkbox" />
                                        </td>
                                    </tr>
                                    <tr class="active">
                                        <td class="center-col"><i class="im im-car-wheel"></i></td>
                                        <td>Power Steering</td>
                                        <td class="center-col">
                                            <input class="i-check" type="checkbox" />
                                        </td>
                                    </tr>
                                    <tr class="active">
                                        <td class="center-col"><i class="im im-car-window"></i></td>
                                        <td>Power Window</td>
                                        <td class="center-col">
                                            <input class="i-check" type="checkbox" />
                                        </td>
                                    </tr>
                                    <tr class="active">
                                        <td class="center-col"><i class="im im-lock"></i></td>
                                        <td>Central Lock</td>
                                        <td class="center-col">
                                            <input class="i-check" type="checkbox" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <input type="submit" class="btn btn-danger" value="Simpan">
                        </div>
                    </div>
					<div class="gap"></div>
                </div>
            </div>
        </div>
        
        <?php include('footer.php'); ?>
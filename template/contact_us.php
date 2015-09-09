		<?php include('header.php'); ?>

        <div class="container">
            <h1 class="page-title">Hubungi Kami</h1>
        </div>
        
        <div id="map-canvas" style="height:400px;"></div>
        <div class="container">
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-7">
                    <p class="lead">Anda pemilik rental?</p>
                    <p>Apakah anda ingin mobil anda di-iklankan di <a href="http://www.mobiltnt.com/">MobilTNT.com</a>? <br/>
                    Anda sudah menjadi mitra dan mempunyai pertanyaan?</p>
                    <p>Anda dapat mengirimkan email ke:
                    <a href="mailto:support@mobiltnt.com">support[at]mobiltnt[dot]com</a></p>
                    
                    <br/><p class="lead">Kritik & Saran</p>
					<p>Kritik dan saran Anda sangat membantu kami dalam pengembangan situs <a href="http://www.mobiltnt.com/">MobilTNT.com</a> menjadi lebih baik lagi.</p>
                    <form class="mt30">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pesan</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <input class="btn btn-primary" type="submit" value="Kirim Pesan" />
                    </form>
                </div>
                <div class="col-md-4">
                    <aside class="sidebar-right">
                        <ul class="address-list list">
                            <li>
                                <h5>Call Center</h5><a href="#">(021) 294 72 888</a>
                            </li>
                            <li>
                                <h5>Alamat</h5><address>PT. Anugerah Gelindo<br />
                                Jalan Tarian Raya Timur, Blok J No 32<br />
                                Kelapa Gading, Jakarta Utara 14240<br />
                                Indonesia<br /></address>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
            <div class="gap"></div>
        </div>
        
        <?php include('footer.php'); ?>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script>
			if ($('#map-canvas').length) {
				var map, service;
			
				jQuery(function($) {
					$(document).ready(function() {
						var latlng = new google.maps.LatLng(-6.169707,106.910664);
						var myOptions = {
							zoom: 17,
							center: latlng,
							mapTypeId: google.maps.MapTypeId.ROADMAP,
							scrollwheel: false
						};
			
						map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
			
						var marker = new google.maps.Marker({
							position: latlng,
							map: map
						});
						marker.setMap(map);
			
						$('a[href="#google-map-tab"]').on('shown.bs.tab', function(e) {
							google.maps.event.trigger(map, 'resize');
							map.setCenter(latlng);
						});
					});
				});
			}
		</script>
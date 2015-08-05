		<?php include('header.php'); ?>
        
        <div class="container">
            <h1 class="page-title">Dashboard</h1>
        </div>
        
        <div class="container">
            <div class="row">
            
                <?php include('user_menu.php'); ?>
                
                <div class="col-md-9">
                    <h4>Dashboard</h4>
                    <ul class="list list-inline user-profile-statictics mb30">
                        <li><i class="fa fa-car user-profile-statictics-icon"></i>
                            <h5>10</h5>
                            <p>Mobil Rental</p>
                        </li>
                        <li><i class="fa fa-list-ol user-profile-statictics-icon"></i>
                            <h5>5</h5>
                            <p>Pesanan Tertunda</p>
                        </li>
                        <li><i class="fa fa-list-ul user-profile-statictics-icon"></i>
                            <h5>15</h5>
                            <p>Rental Tertunda</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <?php include('footer.php'); ?>
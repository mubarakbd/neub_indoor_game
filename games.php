<?php include('inc/header.php'); ?>


<!-- Top bar Start -->
<?php include('inc/topbar.php'); ?>
<!-- End of Top bar -->

<!-- Header Area Start -->

<?php include('inc/userheader.php'); ?>

<!-- End of header Area -->


<!-- Games Section Star Hera -->
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <h4>Games / Payment</h4>
                <ul>
                    <li><a href="index.php">home</a></li> /
                    
                    <li>
                        <a href="?action=logout">Logout</a>
              </li> 
                    
                    <?php
                    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
                        Session::destroy();
                        header("Location:index.php");
                        exit();
                    }
                    ?>


                </ul>
            </div>
        </div>
    </div>
</section>

<section class="tournament-area pt-100 pb-100">
    <div class="container">
        <div class="row section-title align-items-center">
            <div class="col-md-6 text-md-end text-sm-center">
             
            <h4>NEUB SPORTS EVENTS LIST</h4>

            </div>
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vitae dicta, hic sapiente sit perspiciatis modi officiis inventore architecto minima.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="single-service">
               <i class="fas fa-dice-four"></i>
                    <h4>LUDO</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>
                    <h5 style="color: red;">Price <span style="color:green">100 taka</span></h5>
                  <a href="payment.php" class="box-btn">Pay for Game</a>
                </div>
               
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="single-service">
                <i class="fas fa-futbol"></i>
                    <h4>Indoor Football </h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>
                    <a href="cricket.php" class="box-btn">Team info</a>
                    <h5 style="color: red;">Price <span style="color:green">400 taka</span></h5>
                  <a href="payment.php" class="box-btn">Pay for Game</a>
              
                
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="single-service">
                <i class="fas fa-table-tennis"></i>
                    <h4>Indoor Cricket</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>
                    <a href="cricket.php" class="box-btn">Team info</a>
                    <h5 style="color: red;">Price <span style="color:green">400 taka</span></h5>
                  <a href="payment.php" class="box-btn">Pay for Game</a>
   
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="single-service">
                <i class="fas fa-dice-four"></i>
                    <h4>Chess</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>

                    <h5 style="color: red;">Price <span style="color:green">100 taka</span></h5>
                 <a href="payment.php" class="box-btn">Pay for Game</a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="single-service">
                <i class="fas fa-dice-four"></i>
                    <h4>Carrom</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>
                    <h5 style="color: red;">Price <span style="color:green">100 taka</span></h5>
                  <a href="payment.php" class="box-btn">Pay for Game</a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="single-service">
                <i class="fas fa-dice-four"></i>
                    <h4>Chess</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>
                 <h5 style="color: red;">Price <span style="color:green">100 taka</span></h5>
                 <a href="payment.php" class="box-btn">Pay for Game</a>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- End of Games Section -->
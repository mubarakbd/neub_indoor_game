<?php
include 'inc/header.php';
?>
<?php include_once("./classes/Player.php");
$player = new Player();
?>

<!-- Top Area start -->
<?php include('inc/topbar.php'); ?>
<!-- Top Area End Here -->
<!-- Header Area Start Here -->
<?php include('inc/userheader.php'); ?>
<!-- End of header -->

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <h4>Select Your  Games</h4>
                <ul>
                    <li><a href="games.php">Games</a></li> /
                    
                    <li>
                        <a href="?action=logout">Logout</a>
              </li> 
                </ul>
            </div>
        </div>
    </div>
</section>




<?php  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['player'])) {
    $info = $player->PlayerInformation($_POST);
}
?>




<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <di v class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center font-weight-bold">
                        <h4 style="text-transform:uppercase">Team Information</h4>
                        <?php 
                          if(isset($info)){
                              echo $info;
                          }
                          ?>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-gorup mb-3">
                                <input type="text" name="team_name" placeholder="Enter Your Team Name"  class="form-control">
                            </div>
                          
                            <div class="form-gorup mb-3">
                                <input type="text" name="player_one" placeholder="Enter Your Player " class="form-control">
                            </div>
                            <div class="form-gorup mb-3">
                                <input type="text" name="player_two" placeholder="Enter Your Player "  class="form-control">
                            </div>
                            <div class="form-gorup mb-3">
                                <input type="text" name="player_three" placeholder="Enter Your Player "  class="form-control">
                            </div>
                            <div class="form-gorup mb-3">
                                <input type="text" name="player_four" placeholder="Enter Your Player "  class="form-control">
                            </div>
                            <div class="form-gorup mb-3">
                                <input type="text" name="player_five" placeholder="Enter Your Player "  class="form-control">
                            </div>
                            <div class="form-gorup mb-3">
                                <input type="text" name="player_six" placeholder="Enter Your Player " class="form-control">
                            </div>
                            <div class="form-gorup mb-3">
                                <input type="text" name="player_seven" placeholder="Enter Your Player " ="email" class="form-control">
                            </div>
                            <div class="form-gorup mb-3">
                                <input type="text" name="player_eight" placeholder="Enter Your Player " ="email" class="form-control">
                            </div>
                            <div class="form-gorup mb-3">
                            <select name="select" id="select">
                            <option>Select Your Game</option>
                            <option value="football">Football</option>
                            <option value="cricket">Cricket</option>
                            </select>
                            </div>

                            <div class="fome-group mb-3 text-center">
                                <input type="submit" name="player" class="btn btn-info" value="Save"></td>
                            </div>
                        </form>


                    </div>
                </div>
        </div>
    </div>
</div>
</div>



<?php include 'inc/footer.php'; ?>
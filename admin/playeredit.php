<?php include("../admin/header.php"); ?>
<?php include("../classes/Games.php");?>
<?php include("../classes/Match.php");?>
<?php include("../classes/Player.php");?>

<?php 
 if(!isset($_GET['player_id']) || $_GET['player_id']==NULL){
     header("Location:player.php");
 }else{
     $id = $_GET['player_id'];
 }
 $player = new Player();
  if($_SERVER["REQUEST_METHOD"]=='POST' && isset($_POST['submit'])){
      $updatePlyer = $player->UpdatePlayerInfo($_POST,$id);
  }
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
           

            <!-- Add Games -->
            <div class="col-md-5">
                <div class="card shadow">
                    
                    <div class="card-header text-capitalize text-center" style="font-size:15px; font-weight:bold">
                       
                      Update Teams Information
                    
                    </div>
                  
                    <div class="card-body">

                  <?php if(isset($updatePlyer)){
                      echo $updatePlyer;
                  }?>
                   <?php 
                         
                         $getplyer = $player->getPlayerId($id);
                         if ($getplyer) {
                           while ($result = $getplyer->fetch_assoc()) {
                         ?>

                        <form action="" method="POST">                           
                            
                            <div class="mb-3">
                            <input type="text" class="form-control" name="team_name" value="<?php echo $result['team_name'];?>">
                                </div>
                                <div class="mb-3">
                                
                                <input type="text" class="form-control" name="player_one" value="<?php echo $result['player_one'];?>">
                                </div>
                                <div class="mb-3">
                                
                                <input type="text" class="form-control" name="player_two" value="<?php echo $result['player_two'];?>">
                                </div>
                                <div class="mb-3">
                                
                                <input type="text" class="form-control" name="player_three" value="<?php echo $result['player_three'];?>">
                                </div>
                                <div class="mb-3">
                                
                                <input type="text" class="form-control" name="player_four" value="<?php echo $result['player_four'];?>">
                                </div>
                                <div class="mb-3">
                                
                                <input type="text" class="form-control" name="player_five" value="<?php echo $result['player_five'];?>">
                                </div>
                                <div class="mb-3">
                                
                                <input type="text" class="form-control" name="player_six" value="<?php echo $result['player_six'];?>">
                                </div>
                                <div class="mb-3">
                                
                                <input type="text" class="form-control" name="player_seven" value="<?php echo $result['player_seven'];?>">
                                </div>
                                
                                <input type="text" class="form-control" name="player_eight" value="<?php echo $result['player_eight'];?>">
                                </div>
                            <div class="mb-3 text-center">
                            <input type="submit" name="submit"  class="btn btn-dark" value="Update">
                            </div>
                        </form>
                        <?php }}?>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
<?php include("../admin/header.php"); ?>
<?php include("../classes/Games.php");?>

<?php 

 $game = new Games();
 if($_SERVER["REQUEST_METHOD"]=="POST"){
     $gamesName = $_POST['gamesName'];

     $insertGame = $game->AddGames($gamesName);
 }
?>


<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
           

            <!-- Add Games -->
            <div class="col-md-5">
                <div class="card shadow">
                    
                    <div class="card-header">
                       
                    Add Games
                    
                    </div>
                  
                    <div class="card-body">
                    <?php 
                          if(isset($insertGame)){
                              echo $insertGame;
                          }
                         ?>
                        <form action="gamesadd.php" method="POST">

                            <div class="mb-3">
                                
                                <input type="text" class="form-control" name="gamesName" placeholder="Enter Games name">
                            </div>
                            <input type="submit" class="btn btn-dark" value="Save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <?php include("../admin/footer.php");?>
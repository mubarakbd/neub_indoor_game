
<?php include("../admin/header.php"); ?>
<?php include("../classes/Games.php");?>

<?php 
 if(!isset($_GET['gameid']) || $_GET['gameid']==NULL){
     header("Location:gamelist.php");
 }else{
     $id = $_GET['gameid'];
 }
 $game = new Games();
 if($_SERVER["REQUEST_METHOD"]=="POST"){
     $gamesName = $_POST['gamesName'];

     $updateGame = $game->UpdateGame($gamesName ,$id);
 }
?>


<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
           

            <!-- Add Games -->
            <div class="col-md-5">
                <div class="card shadow">
                    
                    <div class="card-header">
                       
                      Update Game
                    
                    </div>
                  
                    <div class="card-body">
                    <?php 
                          if(isset($updateGame)){
                              echo $updateGame;
                          }
                         ?>
                         <?php 
                         
                          $getGame = $game->getGameById($id);
                          if ($getGame) {
                            while ($result = $getGame->fetch_assoc()) {
                          ?>
                        <form action="" method="POST">

                            <div class="mb-3">
                                
                                <input type="text" class="form-control" name="gamesName" value="<?php echo $result['gamesName']; ?>">
                            </div>
                            <input type="submit" class="btn btn-dark" value="Update">
                        </form>
                        <?php } }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <?php include("../admin/footer.php");?>
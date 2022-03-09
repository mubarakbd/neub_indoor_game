
<?php include("../admin/header.php"); ?>
<?php include("../classes/Games.php");?>
<?php include("../classes/Match.php");?>

<?php 
 if(!isset($_GET['matchid']) || $_GET['matchid']==NULL){
     header("Location:matchlist.php");
 }else{
     $id = $_GET['matchid'];
 }
 $match = new MatchCreat();
 if($_SERVER["REQUEST_METHOD"]=="POST"){
     $event_dt= $_POST['event_dt'];

      $matchUpdate = $match->UpdateMatch($event_dt,$id);
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
                          if(isset($matchUpdate)){
                              echo $matchUpdate;
                          }
                         ?>
                         <?php 
                         
                          $getMatch = $match->getMatchById($id);
                          if ($getMatch) {
                            while ($result = $getMatch->fetch_assoc()) {
                          ?>
                        <form action="" method="POST">                           
                            <div class="mb-3">
                                
                            <input type="datetime-local" class="form-control" name="event_dt"value="<?php echo $result['event_dt']; ?>">
                            </div>
                            <div class="mb-3">
                            <input type="submit" name="submit"  class="btn btn-dark" value="Update">
                            </div>
                        </form>
                        <?php } }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <?php include("../admin/footer.php");?>
<?php include("../admin/header.php"); ?>
<?php include("../classes/Games.php");?>


<?php  
 
  $game = new Games();

  if(isset($_GET['delgame'])){
      $id = $_GET['delgame'];
      $delgame = $game->delGameById($id);
  }


?>

  <div class="py-5">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-12">
                  <div class="card shadow">
                      <div class="card-header text-capitalize text-center" style="font-weight: bold;">All Games List</div>
                      <?php if(isset($delgame)){
                          echo $delgame;
                      }?>
                      <div class="card-body">
                      <table class="table table-striped text-center">
                          <tr>
                              <th>SL No</th>
                              <th>GamesName</th>
                              <th>Action</th>
                          </tr>
                          <?php 
                               $getGame = $game->getAllGame();
                               $i= 0;
                               if ($getGame) {
                                while ($result = $getGame->fetch_assoc()) {
                                    $i++;
                             ?>
                           <tr>
                               <td><?php echo $i?></td>
                               <td><?php echo $result['gamesName'];?></td>
                               <td>
                                   <a href="edit.php?gameid=<?php echo $result['gameid'];?>" class="btn btn-info">Edit</a> ||
                                   <a href="?delgame=<?php echo $result['gameid'];?>" onclick="return confirm('Are You Sure Delete')" class="btn btn-danger">Delete</a>
                               </td>
                           </tr>
                           <?php }
                            } ?>

                      </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>














<?php include("../admin/footer.php");?>
<?php include("../admin/header.php"); ?>
<?php include("../classes/Match.php"); ?>
<?php $match = new MatchCreat(); ?>
<?php 
 

  if(isset($_GET['delmatch'])){
      $id = $_GET['delmatch'];
      $delgame = $match->delMatch($id);
  }


?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card shadow">
                    <div class="card-header text-capitalize text-center" style="font-weight:bold; font-size:30px">All MATCH LIST</div>
                      <?php if(isset($delgame)){
                          echo $delgame;
                      }?>
  
                    <div class="card-body">
                        <table class="table table-bordered text-capitalize text-center">
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Team A</th>
                                <th scope="col">Team B</th>
                                <th scope="col">Games</th>
                                <th scope="col">Date</th>
                                <th scope="col">Venues</th>
                            </tr>
                            <?php $getMatch = $match->getAllMatch();
                            if ($getMatch) {
                                $i = 0;
                                while ($result = $getMatch->fetch_assoc()) {
                                    $i++;
                            ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $result['TeamA']; ?></td>
                                        <td><?php echo $result['TeamB']; ?></td>
                                        <td><?php echo $result['gamesName']; ?></td>
                                        <td><?php echo  $fm->formatDate($result['event_dt']); ?> </td>
                                        <td><?php echo $result['venus']; ?></td>
                                        <td>
                                            <a href="matchedit.php?matchid=<?php echo $result['matchid'];?>" class="btn btn-info">Edit</a> ||
                                            <a href="?delmatch=<?php echo $result['matchid'];?>" onclick="return confirm('Are You Sure Delete')" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                            <?php      }
                            } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>












<?php include("../admin/footer.php"); ?>
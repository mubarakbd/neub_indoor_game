<?php include('../admin/header.php'); ?>
<?php include('../classes/Player.php'); ?>

<?php

$player = new Player();

?>
<?php 
 

 if(isset($_GET['delplayer'])){
     $id = $_GET['delplayer'];
     $delPlayer = $player->delPlayer($id);
 }


?>

<div class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card shadow">
                    <div class="card-header text-capitalize text-center" style="font-weight: bold; font-size:30px">Crciket and Football Player List</div>
                    <?php if(isset($delPlayer)){
                           echo $delPlayer;
                    }?>
                    <div class="card">
                        <table class="table table-hover table-bordered text-capitalize text-center">
                            <th scope="col">SL No</th>
                            <th scope="col">Team_Name</th>
                            <th scope="col">Player One</th>
                            <th scope="col">Player Two</th>
                            <th scope="col">Player Three</th>
                            <th scope="col">Player Four</th>
                            <th scope="col">Player Five</th>
                            <th scope="col">Player Six</th>
                            <th scope="col">Player Seven</th>
                            <th scope="col">Player Eight</th>
                            <th scope="col">Select_Games</th>
                            <td scope="col">Action</td>
                            </tr>
                            <?php
                            $getplayer = $player->getAllPlayer();
                            if ($getplayer) {
                                $i = 0;
                                while ($result = $getplayer->fetch_assoc()) {
                                    $i++;
                            ?>
                                    <tr>
                                        <td><?php echo $i ?> </td>
                                        <td><?php echo $result['team_name']; ?></td>
                                        <td><?php echo $result['player_one']; ?></td>
                                        <td><?php echo $result['player_two']; ?></td>
                                        <td><?php echo $result['player_three']; ?></td>
                                        <td><?php echo $result['player_four']; ?></td>
                                        <td><?php echo $result['player_five']; ?></td>
                                        <td><?php echo $result['player_six']; ?></td>
                                        <td><?php echo $result['player_seven']; ?></td>
                                        <td><?php echo $result['player_eight']; ?></td>
                                        <td><?php echo $result['select_games']; ?></td>
                                        <td>
                                            <a href="playeredit.php?player_id=<?php echo $result['player_id'];?>" class="btn btn-info">Edit</a> ||
                                            <a href="?delplayer=<?php echo $result['player_id'];?>" onclick="return confirm('Are You Sure Delete')" class="btn btn-danger">Delete</a>
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







<?php include('../admin/footer.php'); ?>
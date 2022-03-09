<?php include("../admin/header.php"); ?>
<?php include('../classes/Match.php'); ?>
<?php include("../classes/User.php"); ?>
<?php include("../classes/Games.php"); ?>

<?php

$match = new MatchCreat();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $matchInsert = $match->MatchStart($_POST);
}
?>


<div class="py-5">
    <div class="container">
        <div class="row">
            <!-- Add Games -->
            <div class="col-md-3">
                <div class="card shadow">

                    <div class="card-header">
                        Add Matchs <br>
                        <?php if (isset($matchInsert)) {
                            echo $matchInsert;
                        } ?>
                    </div>

                    <div class="card-body">

                        <form action="" method="POST">

                            <div class="mb-3">

                                <input type="text" class="form-control" name="TeamA" placeholder="Enter Tema A">

                            </div>

                            <div class="mb-3">

                                <input type="text" class="form-control" name="TeamB" placeholder="Enter Tema B">

                            </div>

                            <div class="mb-3">
                            </div>
                            <div class="mb-3">
                                <select id="select" name="gamesName">
                                    <option>Select Gamaes</option>
                                    <?php
                                    $game = new Games();
                                    $getGame = $game->getAllGame();
                                    if ($getGame) {
                                        while ($result = $getGame->fetch_assoc()) {
                                    ?>
                                            <option value="<?php echo $result['gameid']; ?>"><?php echo $result['gamesName']; ?></option>
                                    <?php
                                        }
                                    } ?>
                                </select>
                            </div>
                            <div class="mb-3">

                                <input type="text" class="form-control" name="venus" placeholder="Enter Venus">
                            </div>
                            <div class="mb-3">

                          <input type="datetime-local" class="form-control" name="event_dt" placeholder="Enter Venus">
                       </div>
                            <input type="submit" name="submit" class="btn btn-dark" value="Save">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <?php

                $user = new User();
                if (isset($_GET['dis'])) {
                    $disid = (int)$_GET['dis'];
                    $diUser = $user->disbleUser($disid);
                }
                if (isset($_GET['enb'])) {
                    $enbid = (int)$_GET['enb'];
                    $enbUser = $user->enbleUser($enbid);
                }
                if (isset($_GET['del'])) {
                    $delid = (int)$_GET['del'];
                    $del = $user->delUser($delid);
                }
                ?>
                <div class="card">

                    <div class="card-header text-capitalize text-center" style=" font-weight:bold">All Player  List</div>
                    <?php
                    if (isset($diUser)) {
                        echo $diUser;
                    }
                    if (isset($enbUser)) {
                        echo $enbUser;
                    }
                    if (isset($del)) {
                        echo $del;
                    }
                    ?>
                    <div class="card-body">
                        <table class="table table-striped text-center">

                            <tr>
                                <th scope="col">Sl No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Dept</th>
                                <th scope="col">Games</th>
                        
                                <th scope="col">Phone</th>


                                <th scope="col">Action</th>
                            </tr>
                            <?php
                            $getuser = $user->getAlluser();
                            $i = 0;
                            if ($getuser) {
                                while ($result = $getuser->fetch_assoc()) {
                                    $i++;
                            ?>
                                    <tr>
                                        <td>
                                            <?php
                                            if ($result['status'] == '1') {
                                                echo "<span class ='error'>" . $i . "</span>";
                                            } else {
                                                echo $i;
                                            }

                                            ?>

                                        </td>

                                        <td> <?php echo $result['name']; ?> </td>
                                        <td> <?php echo $result['email']; ?></td>
                                        <td> <?php echo $result['dept']; ?></td>
                                        <td> <?php echo $result['game']; ?></td>
                                  
                                        <td> <?php echo $result['phone']; ?></td>

                                        <td>
                                            <?php
                                            if ($result['status'] == '0') { ?>
                                                <a href="?dis=<?php echo $result['userid']; ?>" onclick="return confirm('Are You Sure To disble')" class="btn btn-info">Disble</a>
                                            <?php } else { ?>
                                                <a href="?enb=<?php echo $result['userid']; ?>" onclick="return confirm('Are You Sure To Remove')" class="btn btn-info">Enable</a> 
                                            <?php } ?>
                                            <a href="?del=<?php echo $result['userid']; ?>" onclick="return confirm('Are You Sure To Enable')" class="btn btn-info">Remove</a>

                                        </td>
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









    <?php include("../admin/footer.php"); ?>
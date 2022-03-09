<?php include('../admin/header.php'); ?>
<?php include('../classes/Games.php');?>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="card shadow-lg">
                    <div class="card-header text-capitalize text-center" style="font-weight: 700;font-size:20px ">Tournament</div>
                    <div class="card-body">

                        <form action="" method="POST">

                            <div class="mb-3">

                                <input type="text" class="form-control" name="title" placeholder="Entter title">

                            </div>

                            <div class="mb-3">

                                <input type="text" class="form-control" name="body" placeholder="Enter Your Details">

                            </div>
                            <div class="mb-3">

                        <input type="datetime-local" class="form-control" name="tournament_time" placeholder="Enter Your Details">

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
                            <input type="submit" name="tournament" class="btn btn-dark" value="Save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


</div>











<?php include('../admin/footer.php'); ?>

<?php include('../lib/Session.php');

Session::checkAdminSession();
 
include_once '../lib/Database.php';
include_once '../helpers/Format.php';
  $db  = new Database(); 
	$fm  = new Format();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashborad</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/style.css">
    
</head>
   
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand text-danger" href="index.php ">NEUB GAMES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav m-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Dashborad</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="gamesadd.php">Games Aadd</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="gamelist.php">Games List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="tournament.php">Tournament</a>
        </li>


        <li class="nav-item">
          <a class="nav-link " href="player.php">Cricket/Football</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="match.php">Create Match</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="matchlist.php">Match List</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link " href="inbox.php">Inbox</a>
        </li>
         
        <!-- Logout -->
        <?php
		if(isset($_GET['action']) && $_GET['action'] == 'logout'){
			Session::destroy();
			header("Location:login.php");
			exit();
		}
	?>
       
        <li class="nav-item">
          <a class="nav-link" href="?action=logout">Logout</a>
        </li> 


      </ul>
    </div>
  </div>
</nav>

 
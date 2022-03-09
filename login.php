<?php include ('inc/header.php');?>
<?php include('inc/userheader.php');?>
<?php 
$login = Session::get("userlogin");
if ($login == true) {
    header("Location:games.php");
}
 ?>
<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $login = $usr->userLogin($_POST);
}
?>
<div class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <di v class="col-md-6">
          <div class="card shadow">
            <div class="card-header text-center font-weight-bold">
              <h4 style="text-transform:uppercase">User Login From</h4>
            
            </div>
            <div class="card-body">
              <form action="login.php" method="POST">
                <div class="form-gorup mb-3">
               
                <div class="form-gorup mb-3">
                  <label for="Email">Email</label>
                  <input type="text" name="email" id="email" class="form-control">
                </div>
              
                <div class="form-gorup mb-3">
                  <label for="Password">Password</label>
                  <input type="Password" name="password" id="password" class="form-control">
                </div>

                <div class="fome-group mb-3 text-center">
                <input type="submit" name = "login" value="LogIn">
                </div>
              </form>
              <p>New User ? <a href="register.php">Signup</a> Free</p>
            
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('./inc/footer.php');?>
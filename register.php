<?php
	include 'inc/header.php';
?>


   <!-- Top Area start -->
   <?php include('inc/topbar.php');?>
    <!-- Top Area End Here -->
   <!-- Header Area Start Here -->
   <?php include('inc/userheader.php');?>
 <!-- End of header -->

 <?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $userReg = $usr->UserRegistration($_POST);
}
?>
    





<div class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <di v class="col-md-6">
          <div class="card shadow">
            <div class="card-header text-center font-weight-bold">
              <h4 style="text-transform:uppercase">Register Form</h4>
              <?php if(isset($userReg)) {
                echo $userReg;
              } ?>
             
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="form-gorup mb-3">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-gorup mb-3">
                  <label for="Email">Email</label>
                  <input type="Email" name="email" id="email" class="form-control">
                </div>
              
                <div class="form-gorup mb-3">
                  <label for="Dept">Dept</label>
                  <input type="text" name="dept" id="dept" class="form-control">
                </div>
                <div class="form-gorup mb-3">
                  <label for="Games">Games</label>
                  <input type="text" name="game" id="game" class="form-control">
                </div>
                <div class="form-gorup mb-3">
                  <label for="Phone">Phone</label>
                  <input type="number" name="phone" id="dept" class="form-control">
                </div>
                <div class="form-gorup mb-3">
                  <label for="Team">Team</label>
                  <input type="text" name="team" id="team" class="form-control">
                </div>
              
              
               
                <div class="form-gorup mb-3">
                  <label for="Password">Password</label>
                  <input type="Password" name="password" id="password" class="form-control">
                </div>

                <div class="fome-group mb-3 text-center">
                <input type="submit" name ="register" value="Signup Now"></td>
                </div>
              </form>
            
               <p>Already Registered ? <a href="login.php">Login</a> Here</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

<?php include 'inc/footer.php'; ?>
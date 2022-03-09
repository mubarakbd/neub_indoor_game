
<?php include ('../classes/Admin.php');?>

<?php 
   
   $al = new Admin();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $adminUser = $_POST['adminUser'];
        $adminPass = md5($_POST['adminPass']);

        $loginChk = $al->AdminLogin($_POST);
    }




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
    
 
<div class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <di v class="col-md-6">
          <div class="card shadow">
            <div class="card-header text-center font-weight-bold">
              <h4 style="text-transform:uppercase">Admin Login From</h4>
              
              <?php if(isset($loginChk)){
                echo $loginChk; 
              }?>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="form-gorup mb-3">
               
                <div class="form-gorup mb-3">
                  <label for="Username">Username</label>
                  <input type="text" name="adminUser" id="adminUser" class="form-control">
                </div>
               
                <div class="form-gorup mb-3">
                  <label for="Password">Password</label>
                  <input type="Password" name="adminPass" id="adminPass" class="form-control">
                </div>

                <div class="fome-group mb-3 text-center">
                <input type="submit"  value="Login Now"></td>
                </div>
              </form>
            
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include("inc/header.php");

// error_reporting(E_ALL ^ E_NOTICE);
?>
<?php  

  if($_SERVER['REQUEST_METHOD']=="POST"){
      $name = $fm->validation($_POST['name']);
      $email = $fm->validation($_POST['email']);
      $subject = $fm->validation($_POST['subject']);
      $body = $fm->validation($_POST['body']);

      $name = mysqli_escape_string($db->link,$name);
      $email = mysqli_escape_string($db->link,$email);
      $subjec = mysqli_escape_string($db->link,$subject);
      $body = mysqli_escape_string($db->link,$body);

      $error = "";
      $errorn = "";
      $errorem = "";
      $errorsub = "";
      $errorbody = "";
       

      if(empty($name)){
          $errorn = "Please Enter Your Name";
      }
      if(empty($email)){
          $errorem = "Please Enter Your Email";
      }
      if(empty($subject)){
          $errorsub = "Please Send Your Note Us!";
      }

      if(empty($body)){
          $errorbody = "Tell Us Your Message ";
      }
      else{
    
            $query = "insert into tbl_contact(name, email,subject,body) values('$name','$email','$subject','$body')";
            $inserted_row = $db->insert($query);
            if($inserted_row){
                $msg = "<span class='success'>Message Send SuccessFully</span>";
            }else{
               $error ="Messag not Send";
            }
      }


  }

 



?>



   <!-- Header Area Start Here -->
   <?php include('inc/userheader.php');?>
<!-- Header Area End Here -->

    <!-- Breadcumb Area Start Here -->
    <section class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <h4>contact</h4>
                    <ul>
                        <li><a href="register.php">Join_Us</a></li> / 
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcumb Area End Here -->

    <!-- Contact Area Start Here -->
    <section class="contact-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-md-12 mx-auto">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-address">
                                <i class="fas fa-map-marker-alt"></i>
                                <h4>address <span>Sylhet,Bangladesh</span></h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-address">
                                <i class="fas fa-phone-alt"></i>
                                <h4>phone <span>11223344</span></h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-address">
                                <i class="fas fa-envelope"></i>
                                <h4>email <span>info@neub.com</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="contact-form">
                                <?php 
                                    if(isset($msg)){
                                      echo $msg;
                                    }
                                 ?>
                                <form action="" method="POST">
                                   
                                    <input type="text" name="name" placeholder="Name">
                                    <?php if(isset($errorn)){
                                         echo "<span class = 'error'>$errorn</span>";
                                    }?>
                                    <input type="email" name="email" placeholder="Email">
                                    <?php if(isset($errorem)){
                                         echo "<span class = 'error'>$errorem</span>";
                                    }?>
                                    <input type="text" name="subject" placeholder="Subject">
                                    <?php if(isset($errorsub)){
                                         echo "<span class = 'error'>$errorsub</span>";
                                    }?>
                                  
                                    <textarea placeholder="Message" name="body" ></textarea>
                                   <?php if(isset($errorbody)){
                                         echo "<span class = 'error'>$errorbody</span>";
                                    }?>
                                    <input type="submit" name="submit" value="Send Message">
                                 
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.231162256929!2d91.85876681500343!3d24.890095484039936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751aacd70cd7665%3A0xc8ae330ad72490dd!2sNorth%20East%20University%20Bangladesh!5e0!3m2!1sen!2sbd!4v1627701664086!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End Here -->

    <!-- Footer Area Start Here -->
    <?php include("inc/footer.php");?>
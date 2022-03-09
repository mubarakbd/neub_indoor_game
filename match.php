<?php include("./inc/header.php");?>

<?php include("./inc/userheader.php")?>
<?php include_once("./classes/Match.php");
  $match = new MatchCreat();
?>

 <section class="match-area pt-100 pb-100">
     <div class="container">
         <div class="row ">
         <div class="row section-title align-items-center">
            <div class="col-md-6 text-md-end text-sm-center">
             
            <h4>NEUB SPORTS MATCH LIST</h4>
            </div>
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vitae dicta, hic sapiente sit perspiciatis modi officiis inventore architecto minima.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card shadow">
                    <div class="card-header text-capitalize text-center"  style="font-weight:bold; font-size:30px" >All MATCH LIST</div>
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
                             </tr>
                              <?php $getMatch = $match->getAllMatch();
                                if($getMatch){
                                    $i=0;
                                    while($result= $getMatch->fetch_assoc()){
                                        $i++;
                               
                              ?>
                             <tr>
                                 <td><?php echo $i?></td>
                                 <td><?php echo $result['TeamA'];?></td>
                                 <td><?php echo $result['TeamB'];?></td>
                                 <td><?php echo $result['gamesName'];?></td>
                                <td><?php echo  $fm->formatDate($result['event_dt']); ?></td> 
                                <td><?php echo $result['venus'];?></td>
                             </tr>
                             <?php      }
                                }?>
                         </table>
                     </div>
                </div>
            </div>
        </div>
     </div>
 </section>

       











<?php include ('./inc/footer.php');?>
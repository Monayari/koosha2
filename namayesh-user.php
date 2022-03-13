<?php
include_once('user.php');

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-rtl.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- <a href="menu.html"></a> -->
    <title> لیست کاربران  </title>
</head>
<body>
    <div class="d-flex justify-content-center">
    <div class="container-fluid z-header z-h-min">
       
          
               
        
        <div class="row">
            <div class="col-lg-12"></div>
        </div>
    </div>
    <div class="container z-sub-header z-s-h-min">
        <div class="row">
            <div class="col-lg-12">
               
                <div class="card z-card p-2 mt-2 shadow border-0">
                    
                        <h6 class="card-title p-2 text-center mt-2" style="color: #13adb5; font-size: 27px;"> کاربران</h6>
                       
                    <div class="card-body border-0">
                        <a class="btn btn-primary rounded " style="background-color: #1784D9; font-size: 13px;" href="Add-user.php"> کاربر جدید </a> 
                        <a class="btn rounded" style="font-size: 13px; background-color: #25c3e6; color: #fff;" href="print.php">download pdf</a>
                      <button class="btn btn-primary rounded " onClick="window.print()" style="background-color: #1784D9; font-size: 13px;"> چاپ  </button>
                                            
                       <div class="">
                           <table class="table table-bordered table-responsive-lg">
                               <thead>
                                <tr>
                               <th> کدملی </th>
                                <th> نام </th>
                                <th> نام خانوادگی</th>
                                <th> ایمیل  </th>
                                <th> تلفن</th>
								<th>دستورات</th>
                            </tr>
                               </thead>
                               <tbody class="fild-customer">
                                <tr class="roww">

			
			
			

                                    
								
								
			<?php
			
			$user = new User();
			$users = $user->ShowAll();
			foreach($users as $row){ ?>
			
			
                                <tr>
                                    <td>  <?php echo $row['codemeli'];?> </td>
                                    <td>  <?php echo $row['name'];?> </td>
                                    <td>  <?php echo $row['family'];?> </td>
                                    <td>  <?php echo $row['email'];?></td>
                                    <td>  <?php echo $row['phone'];?> </td>

                                    <td> 
                                        

                                       <a class="btn rounded" style="font-size: 12px; background-color: #25c3e6; color: #fff;" href="Delete.php?delete=<?php echo $row['codemeli'];?>">
 
                                            <i class="fa fa-trash align-middle"  style="font-size: 14px !important;"></i> حذف </a> 

                                                </div>
                                            </div>
                                        </div>    
                                        <a class="btn btn-success rounded" style="font-size: 12px; color: #fff;" href="update.php?edit=<?php echo $row['codemeli'];?>">
                                             <i class="fa fa-edit align-middle"  style="font-size: 14px !important;"> </i> ویرایش </a>    
                                    </td>
                                </tr> 
                                      
                                                </div>
                                            </div>
                                        </div>    
    
                                    </td>
                                </tr>
			<?php }?>
                               </tbody>
                           </table>
                       </div>
                    </div>
                </div>
            
            </div>
         <!--فووتر-->
         <div class="col-lg-12 ftr"> 
            <div class="container-fluid ">

         <div class="card mt-5 border-0">
             <div class="card-body border-0 d-flex justify-content-center">                        
                 <span class="btn rounded-pill d-flex justify-content-center align-items-center ml-1" style="font-size: 26px; background-color: #c7c7c7; color:#fff; width: 35px; height: 35px;">
                     <i class="fa fa-instagram  align-middle "></i></span> 

                   <span class="btn rounded-pill d-flex justify-content-center align-items-center ml-1" style="font-size: 26px; background-color: #c7c7c7; color:#fff; width: 35px; height: 35px;"> 
                      <i class="fa fa-twitter align-middle"></i></span>

                   <span class="btn rounded-pill d-flex justify-content-center align-items-center ml-1" style="font-size: 26px; background-color: #c7c7c7; color:#fff; width: 35px; height: 35px;">
                      <i class="fa fa-facebook align-middle "></i></span> 

                    <span class="btn rounded-pill d-flex justify-content-center align-items-center ml-1" style="font-size: 26px; background-color: #c7c7c7; color:#fff; width: 35px; height: 35px;">
                          <i class="fa fa-send align-middle "></i></span>
             </div>
             <div class="card-footer shadow" style="font-size: 14px;">&copy;
                 تمامی حقوق سایت محفوظ است.
             </div>
         </div>
      </div> 
</div>

         <!--فووتر-->
        
        </div>
    </div>
    </div>
</body>
</html>
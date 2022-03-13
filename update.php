<?php

include_once('user.php');
include_once('Filter.php');
$filter= new Filter();
$user= new User();
$error="";
if(isset($_GET['edit']))
{
    $id=$_GET['edit'];
    $row=$user->getbyId($id);




?>

<!DOCTYPE html>
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

    <title>ویرایش اطلاعات کاربر </title>
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
                    <div class="card-header text-center border-0" style="color: #13adb5;"> 
                    <h5 class="card-title"><i class="fa fa-edit align-middle"></i> ویرایش اطلاعات کاربر </h5>
                    </div>
                    <!-- card  -->
                    <div class="row">
                        <div class="col-lg-12">
                           
                            <div class="card border-0 my-3 ml-2">
                                <div class="card-body bg-light d-flex justify-content-center ">
                                    <form class="col-sm-6" method="POST" action="update.php">
                                        <div class="form-group">
                                            <label class=""> نام : </label>
                                        <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
                                        <input type="hidden" name="code" class="form-control" value="<?php echo $row['codemeli']; ?>">

                                        </div>
                                        <div class="form-group">
                                          <label class=""> نام خانوادگی: </label>
                                          <input type="text" name="family"  class="form-control" value="<?php echo $row['family']; ?>">
                                       
                                        </div>
                                        <div class="form-group">
                                             <label class="">ایمیل : </label>
                                             <input type="email" name="email"  class="form-control "value=" <?php echo $row['email']; ?>">
                                      
                                        </div>
                                        <div class="form-group">
                                             <label class=""> شماره تماس: </label>
                                            <input type="text" name="phone" class="form-control" value="<?php echo $row['phone'] ; ?>">  
                                        </div>
                                      
                               
<div class="justify-content-end d-flex ml-2 bg-light">
                                    <input type="submit" name="submit" value="ویرایش " class=" col-sm-3 btn btn-success rounded float-left">
                                </form> 
                                </div>

<?php 
}

    else{

        if(isset($_POST['submit']))
        {

           $name=$filter->filter_input($_POST['name']);
           $family=$filter->filter_input($_POST['family']);
           $email=$filter->filter_input($_POST['email']);
           $phone=$filter->filter_input($_POST['phone']);
           $code=$_POST['code'];

    if( $filter-> filter_empty($name)|| $filter-> filter_empty($family))
    {
      $error="لطفا فیلد خالی را پر کنید.";
    }
    else if(!$filter->filter_email($email))
    {
        $error="ایمیل معتبر نیست.";
    }
	else if((!$filter->filteruser($name))||(!$filter->filteruser($family)))
	{
		$error="فرمت ورودی اشتباه است.";
	}
    else if(!$filter->filternumber($phone)){
        $error="لطفا عدد وارد کنید.";
    }
    else
    
            $result=$user->UpdateData($code,$name,$family,$email,$phone);
   
            if(!$result){
    
                $error="خطا در ویرایش اطلاعات";
                header('location:update.php');
            }
            else{
                $error="ویرایش اطلاعات با موفقیت انجام شد";
                header('location:namayesh-user.php');
            }
        }
    }



?>
	
                                </div>
                                </div>
                        </div>
                        <?php
echo $error;

?>
                    </div>
                    <!-- card  -->
                       
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
                         <div class="card-footer shadow" style="font-size: 14px;">
                             تمامی حقوق سایت محفوظ است.&copy;
                         </div>
                     </div>
                  </div> 
     </div>
         <!--فووتر-->
    
     </div>
    
     
            </div>
        </div>
        
    </div>
    </div>
    
    <script src="js/myscript.js"></script>

</body>
</html>
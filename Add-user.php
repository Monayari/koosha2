<?php
include_once('user.php');
include_once('Filter.php');


$user= new User();
$filter= new Filter();
$error="";

if(isset($_POST['submit']))
{

    $name=$filter->filter_input($_POST['name']);
    $family=$filter->filter_input($_POST['family']);
    $email=$filter->filter_input($_POST['email']);
    $phone=$filter->filter_input($_POST['phone']);

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
    {
        $result=$user->InsertData($name,$family,$email,$phone);
        if(!$result)
        {
            $error="خطا در درج اطلاعات.";
            header('location:Add-user.php');
        }
        else{
            $error="درج با موفقیت انجام شد.";
            header('location:namayesh-user.php');
        }
    }
}


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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title> افزودن کاربر </title>
</head>
<body>

    <div class="d-flex justify-content-center">
    <div class="container-fluid z-header">
                   
        
        <div class="row">
            <div class="col-lg-12"></div>
        </div>
    </div>
    <div class="container z-sub-header">
        <div class="row">
            <div class="col-lg-12">
               
                <div class="card z-card p-2 mt-2 shadow">
                    
                        <h6 class="card-title p-2 text-center mt-2" style="color: #13adb5; font-size: 27px;"> افزودن کاربر </h6>
                       
                   
                    <div class="card-body">
                        <!-- <button class="btn btn-primary rounded " style="background-color: #1784D9; font-size: 13px;"> کاربر جدید </button> -->
                       <hr>
                        <form class="mt-5 mb-3" method="POST" action="Add-user.php">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                 <div class="form-group custom-control">
                                <label> نام :</label>
                                <input type="text" class="form-control" name="name">
                            </div>    
                                </div>
                                <div class="col-12 col-lg-6">
                                   <div class="form-group custom-control">
                                <label> نام خانوادگی :</label>
                                <input type="text" class="form-control" name="family">
                            </div> 
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-12 col-lg-6">
                                 <div class="form-group custom-control">
                                <label>ایمیل :</label>
                                <input type="email" class="form-control" name="email">
                            </div>    
                                </div>
                                 <div class="col-12 col-lg-6">
                                <div class="form-group custom-control">
                             <label> تلفن: </label>
                             <input type="text" name="phone" class="form-control pass">
                         </div> 
                             </div>
                          

                            
                            </div>
                            <div class="d-flex justify-content-center">
                                <input class="btn btn-success rounded ml-2" name="submit"value="ثبت اطلاعات" style="font-size: 13px;" type="submit" onclick="check()">
                                    

                                <a class="btn btn-danger rounded" style="font-size: 13px;" href="index.php"> انصراف </a></div>
                            </div>
        
                        </form>
<?php
echo $error;

?>
                </div>
            
            </div>
        </div>
    </div>
   
    </div>
    <script src="js/myscript.js"></script>
</body>
</html>
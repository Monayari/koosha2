<?php

include_once('user.php');

$user=new User();

if(isset($_GET['delete']))
{
    $id=$_GET['delete'];
    $result=$user->deleteData($id);
		

    if(!($result)){
      
            echo "خطا در حذف رکورد";
    }
    else{
      echo "حذف با موفقیت انجام شد.";
    header('location:namayesh-user.php');
    }
    
}





?>
<?php

require_once('connect.php');

class User extends Dbconnection
{

    public function __construct()
    {
        parent::__construct();
      
    }

    public function ShowAll()
    {
        $data=array();
        $sql="SELECT * FROM user";
        $q= $this->connection->query($sql);
        while($r=$q->fetch(PDO::FETCH_ASSOC)){

            $data[]=$r;
        }
        return $data;
    }
     public function Show()
     {
        $data=array();
       $sql="SELECT *  FROM user WHERE `create_at`>=(NOW()-INTERVAL 24 HOUR)";

        $q= $this->connection->query($sql);
//if($q <0){

       while($r=$q->fetch(PDO::FETCH_ASSOC)){

        $data[]=$r;
    }
  
     return $data;
        }
      //  else {
     
     
       // $sql="SELECT *  FROM user" ;
     
      //  $q= $this->connection->query($sql);
     //   while($r=$q->fetch(PDO::FETCH_ASSOC)){

       //     $data[]=$r;
//}
       // return $data;
 //}
     
    
     
	      
    
    public function getbyId($id)
    {
        $sql="SELECT * FROM user WHERE codemeli=".$id;
        $q=$this->connection->prepare($sql);
        $q->execute(array(':codemeli'=>$id));
       $row=$q->fetch(PDO::FETCH_ASSOC);
		
		return $row;
    }

    public function InsertData($name,$family,$email,$phone)
    {
        $sql="INSERT INTO `user`( `name`, `family`, `email`, `phone`) VALUES
        (:name,:family,:email,:phone)";

        $q= $this->connection->prepare($sql);

        $q->execute(array(':name'=>$name,':family'=>$family,':email'=>$email,':phone'=>$phone));

        $con= $q->rowcount();

        if($con==1){

            return true;
        }
        else{

        return false;
        }

    }

    public function UpdateData($code,$name,$family,$email,$phone)
    {
        $sql="UPDATE `user` SET `name`=:name,`family`=:family,`email`=:email,`phone`=:phone 
        WHERE `codemeli`=".$code;

        $q= $this->connection->prepare($sql);

        $q->execute(array(':name'=>$name,':family'=>$family,':email'=>$email,':phone'=>$phone));

        $con= $q->rowcount();

        if($con==1){

            return true;
        }
        else{

        return false;
        }

    }
  
 
        
 
    public function deleteData($id){
   

		$sql="DELETE FROM `user` WHERE  `codemeli`=".$id;
		$q = $this->connection->prepare($sql);
        if($q->execute(array(':codemeli'=>$id)))
        {
            return true;

        }
        else{
            return false;
        }

		
	 }

}




   










?>
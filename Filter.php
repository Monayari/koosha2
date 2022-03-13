<?php

include_once('connect.php');
include_once('user.php');

class Filter
{
	    
	public function filter_empty($data)
	{
	
		if(empty($data))
		{
			return true;
		}
		return false;
	}
	
	public function filter_input($data)
	{
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	public function filter_email($email){
$email=filter_var($email,FILTER_SANITIZE_EMAIL);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return true;
	} else {
		return false;
	}
}
    public function filteruser($name)
	{
	
		if(preg_match("/^[a-zA-Z]*$/",$name)||(preg_match('/^([\p{Arabic}]|\s)*$/u',$name))){
			
			return true;
		}
		else{
			return false;
		}
	}
public function filternumber($numbr)
{
	if(preg_match('/^[0-9]{11}$/',$numbr))
	{
		return true;
	}
	else{
		return false;
	}
}
}







?>
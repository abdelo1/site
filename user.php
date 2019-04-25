<?php

if (isset($_POST['userName'])&&isset($_POST['userEmail'])) {
	$userName=$_POST['userName'];
    $userEmail=$_POST['userEmail'];
    setcookie('name',$userName,time()+365*24*3600,null,null,false,true);
    setcookie('email',$userEmail,time()+365*24*3600,null,null,false,true);
    if(isset($_COOKIE['name'])&& isset($_COOKIE['email']))
    {
    	echo 'nom de cookie :'.$_COOKIE['name'].'email de cookie:'.$_COOKIE['email'];

    }

	
}
else{
	echo "not set";
}



?>
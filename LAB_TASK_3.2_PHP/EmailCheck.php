<?php

if(isset($_REQUEST['submit'])){
    $email = $_REQUEST['email'];
    if(!empty($email)){
        if(strpos($email, ".")==true){
            echo "Valid Email";   
        }
        else{
            header('location: Email.html?msg=invalid_email');
        }    
    }
    else{
        header('location: Email.html?msg=null_email');
    }  
}
else{
    header('location: Email.html?msg=error');  
}

?>
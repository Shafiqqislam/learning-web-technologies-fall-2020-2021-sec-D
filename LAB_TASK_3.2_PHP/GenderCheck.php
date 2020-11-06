<?php

if(isset($_REQUEST['submit'])){ 
    if(isset($_REQUEST['gender'])){ 
        echo "Gender: ".$_REQUEST['gender']; 
    }
    else{  
        header('location: Gender.html?msg=null_gender'); 
    } 
}
else{
    header('location: Gender.html?msg=null_gender');
}

?>
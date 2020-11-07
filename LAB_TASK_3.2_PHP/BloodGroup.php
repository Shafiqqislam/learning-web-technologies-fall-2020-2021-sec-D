<?php

if(isset($_REQUEST['submit'])){
    
    if(!empty($_REQUEST['bloodGroup'])){
        
        echo "BloodGroup: ".$_REQUEST['bloodGroup'];
        
    }
    
    else{
        
        header('location: BloodGroup.html?msg=null');
        
    }
    
}

else{
    
    header('location: BloodGroup.html?msg=error');
    
}

?>
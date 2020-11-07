<?php
if(isset($_REQUEST['submit'])){
    if($_REQUEST['id']>0 and isset($_REQUEST['img']) and !empty($_REQUEST['id'])){   
        echo "Validation Successful";
        
    }
    else{ 
        header('location: Profile.html?msg=invalid_info');
    }
}
else{
    
    header('location: Profile.html?msg=error');
}

?>
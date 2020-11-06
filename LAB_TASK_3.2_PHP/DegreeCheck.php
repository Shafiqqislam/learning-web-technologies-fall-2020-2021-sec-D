<?php

if(isset($_REQUEST['submit'])){
    
    if(isset($_REQUEST['dept'])){
        
        $dept = $_REQUEST['dept'];
        
        for($i = 0; $i < count($dept); $i++){
            
            echo "Degree: ".$dept[$i]."<br>";  
        } 
    }
    else{ 
        header('location: Degree.html?msg=null_degree'); 
    }
}
else{ 
    header('location: Degree.html?msg=error');
}

?>
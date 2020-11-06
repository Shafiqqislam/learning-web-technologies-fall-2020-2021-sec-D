<?php

if(isset($_REQUEST['submit'])){
    
    if(!empty($_REQUEST['day']) and !empty($_REQUEST['month']) and !empty($_REQUEST['year'])){
        
        $day = intval($_REQUEST['day']);
        $month = intval($_REQUEST['month']);
        $year = intval($_REQUEST['year']);
        
        if($day > 0 and $day < 31 and $month > 1 and $month < 12 and $year > 1900 and $year < 2021){ 
            echo "Date: ".$day."/".$month."/".$year; 
        }
        else{  
            header('location: DateOfBirth.html?msg=invalid_date');  
        }
    }
    else{ 
        header('location:  DateOfBirth.html?msg=null_value'); 
    }
}
else{   
    header('location:  DateOfBirth.html?msg=error');
}

?>
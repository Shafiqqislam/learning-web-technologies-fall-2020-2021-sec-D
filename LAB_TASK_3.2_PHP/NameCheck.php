<?php

if(isset($_REQUEST['submit'])){
    
 $name = $_REQUEST['name'];    
  if(!empty($name)){
    if($name[0]==" "){        
       header('location: Name.html?msg=invalid_name');  
        }
        else{     
            $test = explode(" ", $name);
        if(count($test) >= 2){
            
            $pattern = array('<', ',', '>', '/', '?', '"', "'", ';', ':', ']', '[', '|', '}', '{', '=', '+',
                            '_', ')', '(', '*', '&', '^', '%', '$', '#', '@', '!', '`', '~', '0', '1', '2', '3', 
                            '4', '5', '6', '7', '8', '9',);
            
            for($i = 0; $i < count($pattern); $i++){
                
                if(strpos($name, $pattern[$i])==true){
                    header('location: Name.html?msg=invalid_name');
                    break;
                }    
            }
            echo "Welcome, ".$name; 
        }
            else{
                header('location: Name.html?msg=invalid_name');   
            }  
        }  
    }
    else{  
        header('location: Name.html?msg=null_name');  
    }   
}
else{  
    header('location: Name.html?msg=error'); 
}

?>
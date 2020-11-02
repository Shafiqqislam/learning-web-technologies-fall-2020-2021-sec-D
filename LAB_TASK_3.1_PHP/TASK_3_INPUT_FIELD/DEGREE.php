<?php
   
   $data = "";

if(isset($_REQUEST['submit'])){
    $name =$_REQUEST['name'];
    if($name==""){
        echo "field required...";
    }else{
            $data = $name;
        
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form style="width:300px;" method="POST" action="DEGREE.php">
                <fieldset>
            <legend>DEGREE</legend>

                <input type="checkbox" name="dept" value="<?php echo $data ?>">SSC
			    <input type="checkbox" name="dept" value="<?php echo $data ?>">HSC
                <input type="checkbox" name="dept" value="<?php echo $data ?>">BSC
                <input type="checkbox" name="dept" value="<?php echo $data ?>">MSc

            <hr style="width:300px;" align="left";>
            <input type="submit" name="submit" value="submit">
           
        </fieldset>

    </form>
</body>
</html>
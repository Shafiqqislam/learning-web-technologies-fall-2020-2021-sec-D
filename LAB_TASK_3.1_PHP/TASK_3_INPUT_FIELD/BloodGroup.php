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
    <form style="width:300px;" method="POST" action="BloodGroup.php">
                <fieldset>
            <legend>BLOOD GROUP</legend>

            <option value="<?php echo $data ?>">A+</option>
            <option value="<?php echo $data ?>">AB+</option>
            <option value="<?php echo $data ?>">O+</option>

            <hr style="width:300px;" align="left";>
            <input type="submit" name="submit" value="submit">
           
        </fieldset>

    </form>
</body>
</html>
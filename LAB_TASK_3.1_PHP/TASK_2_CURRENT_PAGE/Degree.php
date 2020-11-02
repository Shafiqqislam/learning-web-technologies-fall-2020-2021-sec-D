<?php

if(isset($_REQUEST['submit'])){
    $name =$_REQUEST['name'];
    if($name==""){
        echo "field required...";
    }else{
            echo=$name;
        
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

<form style="width:300px;" method="POST" action="#">
        <fieldset>
            <legend>DEGREE</legend>
                <input type="checkbox" name="dept">SSC
			    <input type="checkbox" name="dept">HSC
                <input type="checkbox" name="dept">BSC
                <input type="checkbox" name="dept">MSc
            <hr style="width:300px;" align="left";>
            <input type="submit" name="submit" value="submit">
           
        </fieldset>

    </form>
</body>
</html>
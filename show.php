<!DOCTYPE html>
<html>
<body>
<table align="center" style="margin-top: 340px;">
<tr>
<td>
<?php 
    $prefix = $_GET["prefix"];
    $name = $_GET["name"];
    $age = $_GET["age"];
    $sex = $_GET["sex"];
    $status = $_GET["status"];
    $sex2 = $_GET["sex2"];
 
    
    echo "Name:".$prefix.$name."<br>";
    echo "Age:".$age."<br>";
    echo "sex:".$sex."<br>";
    echo "other:" .$sex2."<br>";
    echo "status:".$status."<br>";
    

?>
</td>
</tr>
</table>
</body>
</html>

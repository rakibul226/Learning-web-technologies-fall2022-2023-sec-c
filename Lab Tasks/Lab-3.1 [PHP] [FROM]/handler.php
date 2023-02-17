
<html>
<?php
echo $_REQUEST['name'];
echo"<br>";
echo $_REQUEST['email'];
echo"<br>";



if(isset($_REQUEST['gender']))
{
    echo $_REQUEST['gender'];
}
echo"<br>";
if(isset($_REQUEST['save_multiple_checkbox']))
{
    $Degrees = $_REQUEST['Degrees'];
    foreach($degrees as $degree )
    {
        echo $degree;
    }
}



?>



</html>

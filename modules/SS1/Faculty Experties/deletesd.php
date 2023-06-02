<?php
include "connect.php";

$id=$_GET['id'];
$query="DELETE FROM competitive_exam WHERE id = '$id'";
$del = mysqli_query($conn,$query);

if($del==true)
{
    mysqli_close($conn);
   
    echo '<script>
            alert("deleted");
            window.location.href="finaldreport.php";
        </script>';
}
else{
    echo"error";
}
?>
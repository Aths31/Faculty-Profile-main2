<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
session_start();
define('KB', 1024);
define('MB', 1048576);



$con = mysqli_connect('localhost', 'root', '','test');

// get the post records
// $name1=$_SESSION['firstname'] ." ". $_SESSION['middlename'] ." ". $_SESSION['thirdname'];

// $id=$_GET['id'];
// $txtName = $_POST['txtName'];
// $nam =$_POST['nam'];
$nam=$_SESSION['firstname'] ." ". $_SESSION['middlename'] ." ". $_SESSION['thirdname'];
$sdrno=$_SESSION['Sdrn'];
$aia =$_POST['aia'];
$aia_date = $_POST['aia_date'];
$aia_score = $_POST['aia_score'];
$neet_appeared = $_POST['neet_appeared'];
$neet_date = $_POST['neet_date'];
$neet_score=$_POST['neet_score'];
$ename = $_POST['ename'];
$eappeared = $_POST['eappeared'];
$edate = $_POST['edate'];
$escore = $_POST['escore'];



$file=$_FILES['file'];

$fileName=$_FILES['file']['name'];
$fileTmpName=$_FILES['file']['tmp_name'];
$fileSize=$_FILES['file']['size'];
$fileError=$_FILES['file']['error'];
$fileType=$_FILES['file']['type'];

$fileExt=explode(".", $fileName);
$fileActualExt=strtolower(end($fileExt));
$allowed=array('jpg','jpeg','png','pdf');
if(in_array($fileActualExt, $allowed))
{
    if($fileError==0){
        if($fileSize<20*MB){

            $fileNameNew=rand(1,1000)."-".$fileName;
            $fileDestination="upload_files/exams/".$sdrno."_".$nam;
            move_uploaded_file($fileTmpName, $fileDestination);
            
        }
        else{
            echo "<script language='javascript'>alert('The Size of the file you are trying to upload exceeded the the size limit.\nTry Again.')</script>";
            header("Location:detail.php");
        }

    }
    else{
        echo "<script language='javascript'>alert('There was an error uploading your file.\nTry Again')</script>";
    header("Location:detail.php");
    }
}
else
{
    echo "<script language='javascript'>alert('You cannot upload files of this type!')</script>";
    header("Location:detail.php");
}





        




// database insert SQL code
$sql = "INSERT INTO `medicals` ( `Faculty_Name`,  `AIAPGET_Appered`, `AIAPGET_Date` , `AIAPGET_Score` , `NEET_SS_Appered`, `NEET_SS_Date`,`NEET_SS_Score`,   `Exam_Name`,`Exam_Appered`,`Date_Of_Exam`,`Exam_Score` , `PDF`,`sdrn` ) VALUES ( '$nam','$aia', '$aia_date', '$aia_score', '$neet_appeared' ,'$neet_date','$neet_score', '$ename','$eappeared','$edate','$escore',     '$fileDestination','$sdrno' )";

// insert in database 
$rs = mysqli_query($con, $sql);


// $sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// // insert in database 
// $rs = mysqli_query($con, $sql);



if($rs)
{
	echo "Contact Records Inserted";
    header('location:medical.php');

}

?>
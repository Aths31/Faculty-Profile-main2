<?php
@session_start();
include('connect.php');
define('KB', 1024);
define('MB', 1048576);

if(isset($_POST['submit1'])){
$name=$_SESSION['firstname'] ." ". $_SESSION['middlename'] ." ". $_SESSION['thirdname'];
$sdrno=$_SESSION['Sdrn'];
$sel1=$_POST['sel1'];
$tpc=$_POST['tpc'];
$event=$_POST['event'];
$lvl=$_POST['lvl'];
$venue=$_POST['venue'];
$date=$_POST['date'];
$other=$_POST['other'];
$email=$_POST['email'];
$Sponsored=$_POST['Sponsored'];
$Fund=$_POST['Fund'];
$date0=$_POST['date0'];



// Uploading the file
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
            $fileDestination="upload_files/resource_person/".$sdrno."_".$name."_".$date;
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
}

if(isset($_POST['submit2'])){
$name1=$_SESSION['firstname'] ." ". $_SESSION['middlename'] ." ". $_SESSION['thirdname'];
$sdrno=$_SESSION['Sdrn'];
$pet=$_POST['pet'];
$pet_date=$_POST['pet_date'];
$pet_score=$_POST['pet_score'];
$gate_appeared=$_POST['gate_appeared'];
$gate_date=$_POST['gate_date'];
$gate_score=$_POST['gate_score'];
$ename=$_POST['ename'];
$eappeared=$_POST['eappeared'];
$edate=$_POST['edate'];
$escore=$_POST['escore'];


// Uploading the file
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
            $fileDestination="upload_files/exams/".$sdrno."_".$name1;
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

}






if(isset($_POST['submit2m'])){
    $name1=$_SESSION['firstname'] ." ". $_SESSION['middlename'] ." ". $_SESSION['thirdname'];
    $sdrno=$_SESSION['Sdrn'];
    $pet=$_POST['petm'];
    $pet_date=$_POST['pet_datem'];
    $pet_score=$_POST['pet_scorem'];
    $gate_appeared=$_POST['gate_appearedm'];
    $gate_date=$_POST['gate_datem'];
    $gate_score=$_POST['gate_scorem'];
    
    // Uploading the file
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
                $fileDestination="upload_files/exams/".$fileNameNew;
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
    
    }











if(isset($_POST['submit3'])){
$name2=$_SESSION['firstname'] ." ". $_SESSION['middlename'] ." ". $_SESSION['thirdname'];
$sdrno=$_SESSION['Sdrn'];
$program_name=$_POST['program_name'];
$spec=$_POST['spec'];
$addYear=$_POST['addYear'];
$University=$_POST['University'];
$Registration_no=$_POST['Registration_no'];
$college_name=$_POST['college_name'];
$status=$_POST['status'];
$topic_name=$_POST['topic_name'];
$guide_name=$_POST['guide_name'];


// Uploading the file
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
            $fileDestination="upload_files/qualification/".$fileNameNew;
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

}

if(isset($_POST['submit4'])){
$name3=$_SESSION['firstname'] ." ". $_SESSION['middlename'] ." ". $_SESSION['thirdname'];
$sdrno=$_SESSION['Sdrn'];
$award=$_POST['Award'];
$title=$_POST['Innovation'];
$awardee=$_POST['Awardee'];
$position=$_POST['position'];
$eventname=$_POST['Eventname'];
$awardagency=$_POST['Awardagency'];
$category=$_POST['categoryname'];
$universityname=$_POST['Universityname'];
$collegename=$_POST['collegename'];
$lvl1=$_POST['lvl1'];
$date=$_POST['date'];

// Uploading the file
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
            $fileDestination="upload_files/awards/".$sdrno."_".$name3."_".$date;
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

}


if(isset($_POST['submit5'])){
$name4=$_SESSION['firstname'] ." ". $_SESSION['middlename'] ." ". $_SESSION['thirdname'];
$sdrno=$_SESSION['Sdrn'];
$join_date=$_POST['joindate'];
$sdrn=$_POST['sdrn'];

$rait_year=$_POST['RAITyear'];
$rait_months=$_POST['RAITmonths'];
$other_year=$_POST['Otheryear'];
$other_months=$_POST['Othermonths'];
$industry_year=$_POST["Industryyear"];
$industry_months=$_POST['Industrymonths'];
$total_year=$_POST['Totalyear'];
$total_months=$_POST['Totalmonths'];

$designation=$_POST['Designation'];
$promoted_designation_1=$_POST['Promoted_designation_1'];
$promotion_first_date=$_POST['Promotion_first_date'];
$promoted_designation_2=$_POST['Promoted_designation_2'];
$promotion_second_date=$_POST['Promotion_second_date'];


// Uploading the file
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
            $fileDestination="upload_files/promotion/".$fileNameNew;
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

}

if(isset($_POST['submit6'])){
    $name5=$_SESSION['firstname'] ." ". $_SESSION['middlename'] ." ". $_SESSION['thirdname'];
    $sdrno=$_SESSION['Sdrn'];
    $reason=$_POST['reason'];
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $longlive=$_POST['longlive'];

// Uploading the file
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
            $fileDestination="upload_files/long_live/".$fileNameNew;
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

}






if(!empty($name)){
    $q1="SELECT * FROM `faculty_as_resource` WHERE Faculty_name='$name' AND Resource_person='$sel1' AND Topic_name='$tpc' AND Event_name='$event' AND  Level='$lvl' AND Email='$email' AND Sponsored='$Sponsored' AND 	Funded='$Fund' AND Academic='$date0' AND   Venue='$venue' AND  Date='$date'";
    $r1=mysqli_query($conn,$q1);
    
    if(mysqli_num_rows($r1)>0){
        $_SESSION['o1']=0;
        header('location:option1.php');
        
    }else{
    
        $query="INSERT INTO `faculty_as_resource`(`Faculty_name`,`Resource_person`,`Topic_name`,`Event_name`,`Level`,
        `Email`,`Sponsored`,`Funded`,`Academic`,`Venue`,`Date`,`Other`,`pdf`,`sdrn`) VALUES('$name','$sel1','$tpc','$event','$lvl','$email', '$Sponsored','$Fund','$date0','$venue','$date','$other','$fileDestination','$sdrno');";
        $_SESSION['s1']=0;
    mysqli_query($conn,$query);
    header('location:detail.php');
    }
    
    



}
if(!empty($name1)){
    $q1="SELECT * FROM `competitive_exam` WHERE Faculty_name='$name1' AND `PET_appeared`='$pet' AND `PET_date`='$pet_date' AND `PET_score`='$pet_score' AND `GATE_appeared`='$gate_appeared' AND `GATE_date`='$gate_date' AND `GATE_score`='$gate_score'
    AND `Exam_Name` = '$ename' AND `Exam_Appered`='$eappeared' AND `Date_Of_Exam`='$edate' AND `Exam_Score`='$escore'"
     ;    
$r1=mysqli_query($conn,$q1);
if(mysqli_num_rows($r1)>0){
    $_SESSION['o1']=1;
    header('location:option2.php');


}else{
$query1="INSERT INTO `competitive_exam`(`Faculty_name`,`PET_appeared`,`PET_date`,`PET_score`,`GATE_appeared`,`GATE_date`,`GATE_score`,`Exam_Name`,`Exam_Appered`,`Date_Of_Exam`,`Exam_Score`,`pdf`,`sdrn`) VALUES('$name1','$pet','$pet_date','$pet_score','$gate_appeared','$gate_date','$gate_score', '$ename','$eappeared','$edate','$escore' ,'$fileDestination','$sdrno');";
$_SESSION['s1']=0;    
mysqli_query($conn,$query1);
    header('location:option2.php');
}
  
    
} 
if(!empty($name2)){
    $q1="SELECT * FROM `qualification` WHERE Faculty_name='$name2' AND `Admitted_for_program`='$program_name' AND `Specialization`='$spec' AND `Year_of_admission`='$addYear' AND `University`='$University' AND `Registration_number`='$Registration_no' AND `College_name`='$college_name' AND `Status`='$status' AND `Research_topic`='$topic_name' AND `Guide_name`='$guide_name'";
    $r1=mysqli_query($conn,$q1);
if(mysqli_num_rows($r1)>0){
    $_SESSION['o1']=1;
    header('location:option3.php');
}else{
    
    $query2="INSERT INTO `qualification`(`Faculty_name`,`Admitted_for_program`,`Specialization`,`Year_of_admission`,`University`,`Registration_number`,`College_name`,`Status`,`Research_topic`,`Guide_name`,`pdf`,`sdrn`) VALUES('$name2','$program_name','$spec','$addYear','$University','$Registration_no','$college_name','$status','$topic_name','$guide_name','$fileDestination','$sdrno');";
    $_SESSION['s1']=0;
    mysqli_query($conn,$query2);
    header('location:detail.php');
}

}


if(!empty($name3)){
    $q1="SELECT * FROM `awards` WHERE Faculty_name='$name3' AND Award_name='$award'AND Title_of_innovation='$title' AND Name_of_awardee='$awardee' AND Position='$position' AND Event_name='$eventname' AND Awarding_agency='$awardagency' AND Category='$category' AND University='$universityname' AND College_name='$collegename' AND Level='$lvl1' AND Date='$date' ";
    $r1=mysqli_query($conn,$q1);
    if(mysqli_num_rows($r1)>0){
    $_SESSION['o1']=1;
    header('location:option4.php');    
    }else{
    $query3="INSERT INTO `awards`(`Faculty_name`,`Award_name`,`Title_of_innovation`,`Name_of_awardee`,`Position`,`Event_name`,`Awarding_agency`,`Category`,`Date`,`University`,`College_name`,`Level`,`pdf`,`sdrn`) VALUES('$name3','$award','$title','$awardee','$position','$eventname','$awardagency','$category','$date','$universityname','$collegename','$lvl1','$fileDestination','$sdrno');";
    $_SESSION['s1']=0;
    mysqli_query($conn,$query3);
    header('location:detail.php');
    }


}

if(!empty($name4)){
    
	if($rait_year<10)
	{
		$rait_year="0".strval($rait_year);
	}
	if($rait_months<10)
	{
		$rait_months="0".strval($rait_months);
	}

	if($other_year<10)
	{
		$other_year="0".strval($other_year);
	}
	if($other_months<10)
	{
		$other_months="0".strval($other_months);
	}
	if($industry_year<10)
	{
		$industry_year="0".strval($industry_year);
	}
	if($industry_months<10)
	{
		$industry_months="0".strval($industry_months);
	}
	if($total_year<10)
	{
		$total_year="0".strval($total_year);
	}
	if($total_months<10)
	{
		$total_months="0".strval($total_months);
	}

	$rait_experience=$rait_year."y-".$rait_months."m";
	$other_teaching_experience=$other_year."y-".$other_months."m";
	$industry_experience=$industry_year."y-".$industry_months."m";
	$total_experience=$total_year."y-".$total_months."m";


    $q1="SELECT * FROM `faculty_promotion` WHERE Faculty_name='$name4' AND Date_of_joining='$join_date' AND SDNR_number='$sdrn' AND RAIT_experience='$rait_experience' AND Other_experience='$other_teaching_experience' AND Industry_experience='$industry_experience' AND Total_experience='$total_experience' AND Starting_designation='$designation' AND Promotion_1='$promoted_designation_1' AND Date_promotion_1='$promotion_first_date' AND Promotion_2='$promoted_designation_2' AND Date_promotion_2='$promotion_second_date'";
    $r1=mysqli_query($conn,$q1);
    if(mysqli_num_rows($r1)>0){
    $_SESSION['o1']=1;
    header('location:option5.php'); 
    }else{    
    $query4="INSERT INTO `faculty_promotion`(`Faculty_name`,`Date_of_joining`,`SDNR_number`,`RAIT_experience`,`Other_experience`,`Industry_experience`,`Total_experience`,`Starting_designation`,`Promotion_1`,`Date_promotion_1`,`Promotion_2`,`Date_promotion_2`,`pdf`,`sdrn`) VALUES('$name4','$join_date','$sdrn','$rait_experience','$other_teaching_experience','$industry_experience','$total_experience','$designation','$promoted_designation_1','$promotion_first_date','$promoted_designation_2','$promotion_second_date','$fileDestination','$sdrno');";
    $_SESSION['s1']=0;
    mysqli_query($conn,$query4);
    header('location:detail.php');
    }
    

}
if(!empty($name5)){
    $q1="SELECT * FROM `faculty_long_live` WHERE Faculty_name='$name5' AND Reason_long_live='$reason' AND From_date='$from_date' AND To_date='$to_date' AND Date_of_joining_after_long_live='$longlive'";
    $r1=mysqli_query($conn,$q1);
    if(mysqli_num_rows($r1)>0){

        $_SESSION['o1']=1;
        header('location:option6.php');
    }else{
    
    $query5="INSERT INTO `faculty_long_live`(`Faculty_name`,`Reason_long_live`,`From_date`,`To_date`,`Date_of_joining_after_long_live`,`pdf`,`sdrn`) VALUES('$name5','$reason','$from_date','$to_date','$longlive','$fileDestination','$sdrno');";
    
    $_SESSION['s1']=0;
    mysqli_query($conn,$query5);
    header('location:detail.php');
    }
}

?>
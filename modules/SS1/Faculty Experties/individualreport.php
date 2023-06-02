<?php @session_start();

	include('connect.php');
	if (!empty($_POST["id"])) {
		if($_SERVER['REQUEST_METHOD']=='POST')
				$_SESSION['Sdrn']=mysqli_real_escape_string($conn,$_POST['id']);
				$Sdrn = $_SESSION['Sdrn'];
	}
	else{		
		if ($_SESSION['logged_in'] = false) {
			$_SESSION['message'] = 'You must Login to continue use this section.';
		}
		else {
			$Sdrn = $_SESSION['Sdrn'];	
		} 
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   
  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
   <script src="https://kit.fontawesome.com/16e94d9d43.js" crossorigin="anonymous"></script>

  


	<title>Individual Report</title>
	<style>
		body{
			background-color: #FDF5E6;
		}
		h1{
    
    font-family: 'Times New Roman', Times, serif;
    font-size: 50px;
    text-align: center;
    
    margin-left: 20px;
}

th { 
  background:#708090; 
  color: white; 
  font-weight: bold;
  text-align: center; 
}
td, th { 
  padding: 15px;  
  border-radius: 20px;
  text-align: center; 

}

  tr:nth-of-type(odd) { 
  background: #B0C4DE; 
}
hr{
	border: 0.2px solid #008080;
	
}
h2{
	font-family: 'roboto';
    font-size: 40px;
    text-align: center;
    color:#800000;
    
    margin-left: 20px;
}
	
</style>
</head>
<body>

<h1>Individual Report</h1>
<hr>

<h2>Faculty Info</h2>
<div class="table-responsive">
<table width=100% style=" border-collapse: collapse;
    border-spacing: 0;
    margin:auto;
	text-align: center;
	padding:10px;
	margin-bottom:15px;
    border: 1px solid #8B0000;" class="table">

  
<thead>
  
 
 <tr style="background-color:grey" align="center" class="bold">            
             <th >Faculty_name</th><th >SDRN</th><th>Email ID</th><th >Date of joining</th><th >Qualification</th>
			 <th >Designation</th>
            
        </tr>
                   
	</thead>

<tbody>
<?php

	include('connect.php');
   
    $s="select * from faculty_info where Sdrn='$Sdrn'  ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[1]  $data[2]  $data[3]</td><td  style=' padding-left:10px;text-align: center;'>$data[0]</td><td  style=' padding-left:10px;text-align: center;'>$data[8]</td><td  style=' padding-left:20px;text-align: center;'>$data[9]</td><td  style=' padding-left:20px;text-align: center;'>$data[10]</td>
				<td  style=' padding-left:10px;text-align: center;'>$data[11]</td>
				
		";?>
</tr>		





			<?php } ?>
	</tbody>
</table>
<hr>

<h2>Awards</h2>
</div>


<div class="table-responsive">
<table width=100% style=" border-collapse: collapse;
    border-spacing: 0;
    margin:auto;
	text-align: center;
	padding:10px;
	margin-bottom:15px;
    border: 1px solid #ddd;" class="table">

<thead>
  

 <tr style="background-color:grey" >            
             <th>Award name</th><th>Title o Innovation</th><th>Name of Awardee</th><th >Position</th><th >Event_name</th>
			 <th>Awarding Agency</th><th>Category</th><th>Date</th><th >university</th>
            <th >College name</th> <th >level</th><th >Edit</th> <th >Delete</th><th>Preview</th>
            
        </tr>
                   

</thead>
<tbody>
<?php

   
   
	include('connect.php');
   
    $s="select * from awards where Sdrn='$Sdrn' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
     
    
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px'>$data[2]</td><td  style=' padding-left:20px'>$data[3]</td><td  style=' padding-left:20px'>$data[4]</td><td  style=' padding-left:50px'>$data[5]</td><td  style=' padding-left:50px'>$data[6]</td><td  style=' padding-left:60px'>$data[7]</td>
				<td  style=' padding-left:60px'>$data[8]</td><td  style=' padding-left:20px'>$data[9]</td><td  style=' padding-left:20px'>$data[10]</td>
				<td  style=' padding-left:20px'>$data[11]</td><td  style=' padding-left:20px'>$data[12]</td>
                    
                
                     ";?>
                     <td style=' padding-left:10px'>
<a href="edit1.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white"><i class="far fa-edit"></i> Edit</button></a>
</td>

<td style=' padding-left:10px'>
<a href="delete1.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white"><i class="far fa-trash-alt"></i> Delete</button></a>
</td>
<td style=' padding-left:10px'>
<a href="preview1.php?id=<?php echo $data[0]; ?>"><button class="btn-primary btn"  class="text-white"><i class="far fa-file-pdf"></i> Preview</button></a>
</td>

</tr>
         
	<?php } ?>
	</tbody>
</table>
</div>
<hr>
<h2>Competitive Exams</h2>


<div class="table-responsive">
<table width=100% style=" border-collapse: collapse;
    border-spacing: 0;
    margin:auto;
	text-align: center;
	padding:10px;
	margin-bottom:15px;
    border: 1px solid #ddd;" class="table">

  
<thead>
  
 
 <tr style="background-color:grey" align="center" class="bold">            
             <th >PET Appered</th><th >PET Date</th><th >PET Score</th><th >GATE Appred</th>
            <th >GATE Date</th> <th >GATE Score</th><th >Edit</th> <th>Delete</th> <th >Preview</th> 
            
        </tr>
                   
	</thead>

<tbody>
<?php

	include('connect.php');
   
    $s="select * from competitive_exam where Sdrn='$Sdrn'  ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:50px;text-align: center;'>$data[6]</td><td  style=' padding-left:60px;text-align: center;'>$data[7]</td>";?>
				<td style=' padding-left:10px'>

<a href="edit2.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white"><i class="far fa-edit"></i> Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete2.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white"><i class="far fa-trash-alt"></i> Delete</button></a>
</td>
<td style=' padding-left:10px'>
<a href="preview2.php?id=<?php echo $data[0]; ?>"><button class="btn-primary btn"  class="text-white"><i class="far fa-file-pdf"></i> Preview</button></a>
</td>


</tr>
			<?php } ?>
	</tbody>
</table>
</div>
<hr>




<h2>Medical Exams</h2>


<div class="table-responsive">
<table width=100% style=" border-collapse: collapse;
    border-spacing: 0;
    margin:auto;
	text-align: center;
	padding:10px;
	margin-bottom:15px;
    border: 1px solid #ddd;" class="table">

  
<thead>
  
 
 <tr style="background-color:grey" align="center" class="bold">            
             <th >AIAGET Appered</th><th >AIAGET Date</th><th >AIAGET Score</th><th >NEET-SS Appred</th>
            <th >NEET-SS Date</th> <th >NEET-SS Score</th><th >Edit</th> <th>Delete</th> <th >Preview</th> 
            
        </tr>
                   
	</thead>

<tbody>
<?php

	include('connect.php');
   
    $s="select * from medicals where Sdrn='$Sdrn'  ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:50px;text-align: center;'>$data[6]</td><td  style=' padding-left:60px;text-align: center;'>$data[7]</td>";?>
				<td style=' padding-left:10px'>

<a href="edit2.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white"><i class="far fa-edit"></i> Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete2.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white"><i class="far fa-trash-alt"></i> Delete</button></a>
</td>
<td style=' padding-left:10px'>
<a href="preview2.php?id=<?php echo $data[0]; ?>"><button class="btn-primary btn"  class="text-white"><i class="far fa-file-pdf"></i> Preview</button></a>
</td>


</tr>
			<?php } ?>
	</tbody>
</table>
</div>
<hr>
<h2>Faculty as Resource Person</h2>

<div class="table-responsive">
<table width=100% style=" border-collapse: collapse;
    border-spacing: 0;
    margin:auto;
	text-align: center;
	padding:10px;
	margin-bottom:15px;
    border: 1px solid #ddd;" class="table">

  

<thead> 
   
 
 <tr style="background-color:grey" align="center" class="bold">               
             <th >Resource person</th><th >Topic Name</th><th>Event Name</th><th >Level</th>
            <th >Venue </th> <th >Date</th>
            <th >Edit</th><th >Delete</th>  <th>Preview</th>
            
        </tr>
                   

	</thead>
<tbody>
<?php

	include('connect.php');
   
    $s="select * from faculty_as_resource where Sdrn='$Sdrn' ";
	$result=mysqli_query($conn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px;text-align: center;'>$data[2]</td><td  style=' padding-left:20px;text-align: center;'>$data[3]</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:50px;text-align: center;'>$data[5]</td><td  style=' padding-left:50px;text-align: center;'>$data[6]</td><td  style=' padding-left:60px;text-align: center;'>$data[7]</td>";?>
                <td style=' padding-left:10px'>
				<a href="edit4.php?id=<?php echo $data[0]; ?>"><button class="btn-success btn"  class="text-white"><i class="far fa-edit"></i> Edit</button></a>
</td>

<td style=' padding-left:10px;text-align: center;'>
<a href="delete4.php?id=<?php echo $data[0]; ?>"><button class="btn-danger btn"  class="text-white"><i class="far fa-trash-alt"></i> Delete</button></a>
</td>
<td style=' padding-left:10px'>
<a href="preview4.php?id=<?php echo $data[0]; ?>"><button class="btn-primary btn"  class="text-white"><i class="far fa-file-pdf"></i> Preview</button></a>
</td>


</tr>
			<?php } ?>
	</tbody>	
</table>
</div>


<div style="margin: 1rem;text-align: center;">
	<a href="files/excel.php"><button class="btn-danger btn">Excel Export</button></a>
</div>

</body>
</html>
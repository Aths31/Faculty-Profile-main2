<?php @session_start();
include('connect.php');
?>


<!doctype html>
<html lang="en">
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="hod1.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> </head>
  
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <style type="text/css">     
    select {
        position:absolute;
        right:80%;
        left: auto;
        width:200px;
        height:32px;
        top : 45px;
        bottom: auto;
    }
    .navbar_title{
    font-family: 'Times New Roman', Times, serif;
    font-size: 50px;
    color: whitesmoke;
}
.navbar{
    height: 110px;
}

.cl{
  color: white;
}
#logo{
    height: 70px;
    width: 130px;
    margin-left: auto;
}
    input{
      
      position:absolute;
      top:45px;
      height:32px;
      right:700px;
    }
    button{
      font-family: 'Arial'; 
      font-size: 50px;
      position:absolute;
      top:45px;
      right :15px;
      height:32px;
      
    }
    .op1,.op3,.op4{
      position:absolute;
        right:60%;
        left: auto;
        width:150px;
        height:32px;
        top : 45px;
    }
    .op2{
        position:absolute;
        right:40%;
        left: auto;
        width:150px;
        height:32px;
        top : 45px;
    }
    .op5{
      position:absolute;
      right:40%;
        left: auto;
        width:150px;
        height:32px;
        top : 45px;

    }
    .op6{
      position:absolute;
      right:100px;
        width:150px;
        height:32px;
        top : 45px;


    }
    .scroll{
    overflow-x: auto;
  }

    
@media (max-width:629px) {
    img#logo {
        display: none;
      }
    
      input{
      
      position:absolute;
      top:50%;
      bottom: auto;
      height:32px;
      right:700px;
    }
    button{
      font-family: 'Arial'; 
      font-size: 50px;
      position:absolute;
      top:45px;
      right :auto;
      left:50%;
      height:32px;
      
    }
    .op1,.op3,.op4{
      position:absolute;
      right:auto;
      left: 10%;
        width:150px;
        height:32px;
        top : 120px;
        bottom: auto;
    }
    .op2{
        position:absolute;
        right:auto;
        left: 10%;
        width:150px;
        height:32px;
        top :160px;
        bottom: auto;
    }
    .op5{
      position:absolute;
      right:auto;
        left: 10%;
        width:150px;
        height:32px;
        top : 120px;
        bottom: auto;

    }
    .op6{
      position:absolute;
      right:auto;
        left:10%;
        width:150px;
        height:32px;
        top : 45px;
        bottom: auto;
  
    }
    .aa{
    text-decoration: none !important;
    color: red !important;
   }
    #exam1{
      position:absolute;
      right:auto;
        left: 10%;
        width:150px;
        height:32px;
        top : 80px;
        bottom: auto;
    }
 
  }
</style>
<script language="javascript">
function populate(){
  if(document.getElementById('exam1').value=="FACULTY AS RESOURCE"){
    document.getElementById('op1').style.visibility="visible";
    document.getElementById('op2').style.visibility="visible";
    document.getElementById('op3').style.visibility="hidden";
    document.getElementById('op4').style.visibility="hidden";
    document.getElementById('op1').required=true;
    document.getElementById('op2').required=true;
    document.getElementById('op3').required=false;
    document.getElementById('op4').required=false;
    document.getElementById('example1').required=false;
  }
  else if(document.getElementById('exam1').value=="AWARDS"){
    document.getElementById('op1').required=false;
    document.getElementById('op3').required=true;
    document.getElementById('op2').required=true;
    document.getElementById('op4').required=false;
    document.getElementById('example1').required=false;
    document.getElementById('op1').style.visibility="hidden";
    document.getElementById('op2').style.visibility="visible";
    document.getElementById('op3').style.visibility="visible";
    document.getElementById('op4').style.visibility="hidden";
  }
  else if(document.getElementById('exam1').value=="COMPETITIVE EXAMS"){
    document.getElementById('op1').required=false;
    document.getElementById('op3').required=false;
    document.getElementById('op2').required=false;
    document.getElementById('op4').required=true;
    document.getElementById('example1').required=false;
    document.getElementById('op1').style.visibility="hidden";
    document.getElementById('op2').style.visibility="hidden";
    document.getElementById('op3').style.visibility="hidden";
    document.getElementById('op4').style.visibility="visible";
    document.getElementById('example1').style.visibility="hidden";
    
  }

  else{
    document.getElementById('op1').required=false;
    document.getElementById('op2').required=false;
    document.getElementById('op3').required=false;
    document.getElementById('op4').required=false;
    document.getElementById('example1').required=false;
    document.getElementById('op1').style.visibility="hidden";
    document.getElementById('op2').style.visibility="hidden";
    document.getElementById('op3').style.visibility="hidden";
    document.getElementById('op4').style.visibility="hidden";
    document.getElementById('example1').style.visibility="hidden";
    
  }

}
</script>
<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
      $('.removable').remove(); 
		}
		else
		{
			load_data();			
		}

	});
});
</script>

</head>
<body>

<nav class="navbar navbar-expand-sm bg-info ">
    <div class="navbar_title">Department Report</div>
</nav>
 <div class="container">
 <div class="col-lg-12">
 <br><br>
 
<br>

<form action='finaldreport.php' method="POST">
                   
<input class="op5 bg-dark text-white" class="form-control" type="text" name='year' placeholder="Enter Year" id="example1" autocomplete="off" style="visibility:hidden">
<script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#example1').datepicker({
                    minViewMode: 'years',
                    autoclose: true,
                     format: 'yyyy'
                });  
            
            });
        </script>
  
					<input type="text" name="search_text" id="search_text" placeholder="Faculty name" class="bg-dark text-white op6" />
			
      <div id="result"></div>
  <select class="bg-dark text-white" name="exam1" id="exam1" required onchange="populate()">
  <option value="" selected disabled hidden>SELECT AN OPTION</option>
  <option value="FACULTY AS RESOURCE">FACULTY AS RESOURCE</option>
  
  <option value="AWARDS">AWARDS</option>
  <option value="COMPETITIVE EXAMS">COMPETITIVE EXAMS</option>
  
  
</select>

<div style="visibility:hidden">
<select class="op1 bg-dark text-white" name="op1" id="op1">
<option value="" selected disabled hidden>SELECT</option>
<option value="ALL">ALL</option>
<option value="Expert speaker">Expert speaker</option>
<option value="Judge">Judge</option>
<option value="Chairperson">Chairperson</option>
<option value="Reviewer (for paper orPh.D. related)">Reviewer</option>
<option value="Lectures in Industry">Lectures in industry</option>
</select>
</div>

<div style="visibility:hidden">
<select class="op2 bg-dark text-white" name="op2" id="op2">
<option value="" selected disabled hidden>SELECT LEVEL</option>
<option value="ALL">ALL</option>
<option value="Local level">Local level</option>
<option value="State level">State level</option>
<option value="National level">National level</option>
<option value="International level">International level</option>
</select>
</div>

<div style="visibility:hidden">
<select class="op3 bg-dark text-white" name="op3" id="op3">
<option value="" selected disabled hidden>SELECT</option>
<option value="ALL">ALL</option>
<option value="1st">1st</option>
<option value="2nd">2nd</option>
<option value="3rd">3rd</option>
<option value="participating">Participating</option>
</select>
</div>

<div style="visibility:hidden">
<select class="op4 bg-dark text-white" name="op4" id="op4">
<option value="" selected disabled hidden>SELECT</option>
<option value="MEDI">Medical</option>
<option value="ENG">Engineering</option>
</select>
</div>

<div class="btn">
    <button type="submit" name="submit" class="btn btn-dark">Search</button>
</div>
      
  </form> 
<hr class="removable">

</div>

<?php

if(isset($_POST['exam1']) && !isset($_POST['query'])){
$_SESSION['exam']=$_POST['exam1'];

if($_SESSION['exam']=='FACULTY AS RESOURCE' ){
?>
  <h2 class="removable text-white">FACULTY AS RESOURCE</h2>
  <div class="scroll">
  <table  id="tabledata" class=" table table-striped table-hover table-bordered removable">
  <tr class="bg-dark text-white text-center">
    <th> Username </th>
    <th>SDRN</th>
    <th>Resource Person </th>
    <th> Topic Name</th>
    <th> Event Name</th>
    <th> Level</th>
    <th> Venue</th>
    <th> Date</th>
     <th>Delete</th>
  </tr >

<?php
  $q=$_POST['op1'];  
  $w=$_POST['op2'];

  if($q!="ALL" && $w=="ALL")
    $query="SELECT * FROM `faculty_as_resource` WHERE Resource_person='$q'";
  
  if($q!="ALL" && $w!="ALL")
    $query="SELECT * FROM `faculty_as_resource` WHERE Resource_person='$q' AND Level='$w'";
  
  if($q=="ALL" && $w!="ALL")
    $query="SELECT * FROM `faculty_as_resource` WHERE Level='$w'";
  
  if($q=="ALL" && $w=="ALL")
    $query="SELECT * FROM `faculty_as_resource`";

  $result=mysqli_query($conn,$query);
  while($row=mysqli_fetch_assoc($result)){?>
    <tr class="text-center">
      <td> <?php echo $row['Faculty_name'];?></td>
      <td> <?php echo $row['Sdrn'];?></td>
      <td> <?php echo $row['Resource_person'];?></td>
      <td> <?php echo $row['Topic_name']; ?> </td>
      <td> <?php echo $row['Event_name']; ?> </td>
      <td> <?php echo $row['Level']; ?> </td>
      <td> <?php echo $row['Venue']; ?> </td>
      <td> <?php echo $row['Date']; ?> </td>
      <td><a href="deletess.php?id=<?php echo $row['id'];?>" class="text-danger">Delete</a></td>
 
    </tr>
    
    
<?php }?>

  <!-- position(2,4,"None","None"); -->
  
<?php 

$q="None";$w="None";
echo('<div style="margin: 1rem;text-align: center;"><a href="files/excel_d.php?table_id=1&x='.$q.'&y='.$w.'"><button class="btn-danger btn removable" style="position: inherit;">Excel Export</button></a></div>');
}

if($_SESSION['exam']=='AWARDS'){?>
  <h2 class="removable text-white">AWARDS</h2>
  <table  id="tabledata" class=" table table-striped table-hover table-bordered removable">
    <tr class="bg-dark text-white text-center">
      <th> Username </th>
      <th>SDRN</th>
      <th>Award </th>
      <th>Title of innovation</th>
      <th>Name of Awardee</th>
      <th> Position</th>
      <th> Event Name</th>
      <th>Awarding Agency</th>
      <th>Category</th>
      <th> University</th>
      <th> College_name</th>
      <th> Level</th>
      <th>Date</th>
      <th>Delete</th>
    </tr >
   <?php
    $e=$_POST['op3'];
    $w=$_POST['op2'];

    if($e=="ALL" && $w=="ALL")
      $query="SELECT * FROM `awards`";
    
    if($e!="ALL" && $w=="ALL")
      $query="SELECT * FROM `awards` WHERE Position='$e'";

    if($e=="ALL" && $w!="ALL")
      $query="SELECT * FROM `awards` WHERE Level='$w'";  
    
    if($e!="ALL" && $w!="ALL")
      $query="SELECT * FROM `awards` WHERE Position='$e' AND Level='$w'";
    
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result)){?>
      <tr class="text-center">
      <td> <?php echo $row['Faculty_name'];?></td>
      <td> <?php echo $row['Sdrn'];?></td>
      <td> <?php echo $row['Award_name'];?></td>
      <td> <?php echo $row['Title_of_innovation']; ?> </td>
      <td> <?php echo $row['Name_of_awardee']; ?> </td>
      <td> <?php echo $row['Position']; ?> </td>
      <td> <?php echo $row['Event_name']; ?> </td>
      <td> <?php echo $row['Awarding_agency']; ?> </td>
      <td> <?php echo $row['Category']; ?> </td>
      <td> <?php echo $row['University']; ?> </td>
      <td> <?php echo $row['College_name']; ?> </td>
      <td> <?php echo $row['Level']; ?> </td>
      <td> <?php echo $row['Date']; ?> </td>
      <td><a href="deletesc.php?id=<?php echo $row['id'];?>" class="text-danger">Delete</a></td>
      
      
  </tr>
<?php  }?>
  </table>
  <!-- position(6,5,$e,$w); -->
  
<?php 
echo('<div style="margin: 1rem;text-align: center;"><a href="files/excel_d.php?table_id=5&x='.$e.'&y='.$w.'"><button class="btn-danger btn removable" style="position: inherit;">Excel Export</button></a></div>');
}

if($_SESSION['exam']=='COMPETITIVE EXAMS'){
  // $p=$_POST['year'];
  // $z=$p+1;

if($_POST['op4']=='MEDI'){?>
  <h2 class="removable cl">MEDICAL EXAM</h2>
    <table  id="tabledata" class=" table table-striped table-hover table-bordered removable">
      <tr class="bg-dark text-white text-center">
        <th style="padding-left: 112px;">Name</th>
        <th>SDRN</th>
        <th> AIAPGET appered </th>
        <th class="px-5">AIAPGET Date</th>
        <th>AIAPGET Score</th>
        <th> NEET-SS Appered</th>
        <th class="px-5">NEET-SS Date</th>
        <th>NEET-SS Score</th>
        <th>Exam Name</th>
        <th>Exam Appered</th>
        <th class="px-5">Exam Date</th>
        <th>Exam Score</th>

       
        <th>Delete</th>
      </tr >
   <?php
    $query="SELECT * FROM `medicals` ";
    $result=mysqli_query($conn,$query);
  
  while($row=mysqli_fetch_assoc($result)){
      ?>
      <tr class="text-center">
      <!-- <td class = "text-black" > <?php echo $row['name'];?></td> -->
      
      <!-- <td class=""><input style="position: inherit; border:black;" type="name" value="<?php echo $_SESSION['firstname'] ." ". $_SESSION['middlename'] ." ". $_SESSION['thirdname'];?>"  name="nam" id="name" disabled></div>
  </td> -->
      
  <td class = "text-black" > <?php echo $row['Faculty_Name'];?></td>
  <td class = "text-black" > <?php echo $row['sdrn'];?></td>
     
      <td class = "text-black" > <?php echo $row['AIAPGET_Appered'];?></td>
      <td class = "text-black"> <?php echo $row['AIAPGET_Date'];?></td>
      <td class = "text-black"> <?php echo $row['AIAPGET_Score'];?></td>
      <td class = "text-black"> <?php echo $row['NEET_SS_Appered']; ?> </td>
      <td class = "text-black"> <?php echo $row['NEET_SS_Date']; ?> </td>
      <td class = "text-black"> <?php echo $row['NEET_SS_Score']; ?> </td>
      <td class = "text-black"> <?php echo $row['Exam_Name']; ?> </td>
      <td class = "text-black"> <?php echo $row['Exam_Appered']; ?> </td>
      <td class = "text-black"> <?php echo $row['Date_Of_Exam']; ?> </td>
      <td class = "text-black"> <?php echo $row['Exam_Score']; ?> </td>


      <td><a href="delta.php?id=<?php echo $row['id'];?>" class="bg-danger">Delete</a></td>
      
      
      
  </tr>
<?php }?>
  </table>
 <!-- position(1,6.1,$p,$z); -->
<?php 
// echo('<div style="margin: 1rem;text-align: center;"><a href="files/excel_d.php?table_id=6.1&x='.$p.'&y='.$z.'"><button class="btn-danger btn removable" style="position: inherit;">Excel Export</button></a></div>');
}

if($_POST['op4']=='ENG'){?>
  <h2 class="removable cl">ENGINEERING EXAMS</h2>
  <table  id="tabledata" class=" table table-striped table-hover table-bordered removable">
    <tr class="bg-dark text-white text-center">
      <th> Username </th>
      <th>SDRN</th>
      <th>PET Score </th>
      <th> PET-Date Appeared</th> 
      <th>GATE Score </th>
      <th>GATE-Date Appeared</th> 
      <th>Exam Name</th>
        <th>Exam Appered</th>
        <th class="px-5">Exam Date</th>
        <th>Exam Score</th>
      <th>Delete</th>
  </tr >

<?php

$query="SELECT * FROM `competitive_exam`";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result)){
    ?>
    <tr class="text-center">
    <td> <?php echo $row['Faculty_name'];?></td>
    <td> <?php echo $row['Sdrn'];?></td>
    <td> <?php echo $row['PET_score'];?></td>
    <td> <?php echo $row['PET_date']; ?> </td>

    <td> <?php echo $row['GATE_score'];?></td>
    <td> <?php echo $row['GATE_date']; ?> </td>
    <td class = "text-black"> <?php echo $row['Exam_Name']; ?> </td>
      <td class = "text-black"> <?php echo $row['Exam_Appered']; ?> </td>
      <td class = "text-black"> <?php echo $row['Date_Of_Exam']; ?> </td>
      <td class = "text-black"> <?php echo $row['Exam_Score']; ?> </td>


    <td><a href="deletesd.php?id=<?php echo $row['id'];?>" class="text-danger">Delete</a></td>
    
    
</tr>
<?php }?>
  </table>
  <!-- position(1,6.2,$p,$z); -->
</div>
<?php 
echo('<div style="margin: 1rem;text-align: center;"><a href="files/excel_d.php?table_id=6.2&x='.'&y='.'"><button class="btn-danger btn removable" style="position: inherit;">Excel Export</button></a></div>');

}
}
}
?>
</div>

<script>
  
  document.getElementById("delete").addEventListener("click",paraClicked);
  function paraClicked(id){
   return confirm("Do you want to Delete! ");
    


  }

    if (window.history.replaceState)  
        window.history.replaceState(null,null,window.location.href);
</script>


</body>
</html>

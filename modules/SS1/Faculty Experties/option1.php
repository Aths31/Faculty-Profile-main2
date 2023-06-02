

<!DOCTYPE html>
<html lang="en">
<?php
@session_start();
if(isset($_SESSION['o1'])){
echo '<script language="javascript"> alert("DETAILS ALREADY EXISTS"); </script>';
$_SESSION['o1']=NULL;
}
?>
<?php

include('connect.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   
    <link rel="stylesheet" type="text/css" href="optionstyle.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
    <title>OPTION1</title>
</head>
<body>


<nav class="navbar navbar-expand-sm bg-info ">
    <div class="navbar_title" style=" font-family: 'Times New Roman', Times, serif; font-size: 50px; color: whitesmoke;">Faculty as Resource Person</div>
</nav>


<form action="option11.php" method="POST" enctype="multipart/form-data">
    <div class="form-group my-3">
    <label for="Name">Name:</label>
    <div class="col-md-5"><input type="name"  value="<?php echo $_SESSION['firstname'] ." ". $_SESSION['middlename'] ." ". $_SESSION['thirdname'];?>" name="name"  class="form-control border border-secondary" id="name" disabled> </div>
    </div>
    <div class="form-group">
    <label for="Email">Email</label>
    <div class="col-md-4"  style="max-width: 42%;">
    <input type="email" class="form-control border border-secondary" placeholder="Email" name="email" id="email">
    </div>
  </div>
  <div class="form-group">
  <label for="sel1">Select List:</label>
  <div class="col-md-4" style="max-width: 42%;">
  <select class="form-control border border-secondary" name="sel1" id="sel1">
    <option>Expert speaker</option>
    <option>Judge</option>
    <option>Chairperson</option>
    <option>Reviewer (for paper orPh.D. related)</option>
    <option>Lectures in Industry</option>
  </select>
  </div>
  <div class="form-group" style="margin-left: 0px;">
  <label for="conduction">Type of conduction</label>
  <div class="col-md-4" style="max-width: 42%;">
  <select class="form-control border border-secondary" name="conduction" id="conduction">
    <option>Expert Talk</option>
    <option>Training Program</option>
    <option>Reviewer</option>
    <option>FDP</option>
    <option>Conference Session Chair</option>
  </select>
  </div>
</div>
  <div class="form-group" style="margin-left: 0px;">
    <label for="topic">Topic:</label>
    <div class="col-md-4" style="max-width: 42%;">
    <input type="topic" class="form-control border border-secondary" name="tpc" placeholder="Topic name" id="tpc">
</div>
    </div>
  <div class="form-group" style="margin-left: 0px;">
    <label for="Event name">Event/Course Name:</label>
    <div class="col-md-4" style="max-width: 42%;">
    <input type="text" class="form-control border border-secondary" placeholder="Event Name/Course Name" name="event" id="event">
    </div>
  </div>
  <div class="form-group" style="margin-left: 0px;">
  <label for="sel1">Select level:</label>
  <div class="col-md-4" style="max-width: 42%;">
  <select class="form-control border border-secondary" name="lvl" id="lvl">
    <option>Local level</option>
    <option>State level</option>
    <option>National level</option>
    <option>International level</option>
    
  </select>
  </div>

  <div class="form-group" style="margin-left: 0px;">
    <label for="Event name">Sponsored By</label>
    <div class="col-md-5" style="max-width: 42%;" ><input type="text" class="form-control border border-secondary" placeholder="Sponsored By" name="Sponsored" id="Sponsored"></div>
    </div>


  <div class="form-group" style="margin-left: 0px;">
  <label for="Fund">Is Funded</label>
  <div class="col-md-4" style="max-width: 42%;">
  <select class="form-control border border-secondary" name="Fund" id="Fund">
    <option>Yes</option>
    <option>No</option>
    
  </select>
  </div>
</div>
  
    </div>
    <div class="form-group" style="margin-left: 0px;">
    <label for="Event name">Venue</label>
    <div class="col-md-5" style="max-width: 42%;" ><input type="text" class="form-control border border-secondary" placeholder="venue name" name="venue" id="venue"></div>
    </div>
    <div class="form-group"  style="margin-left: 0px;">
      <label for="example-date-input" style="color:white">Academic Year</label>
      <div class="col-md-5" style="max-width: 42%;">
        <input class="form-control border border-secondary" type="text" name="date0" id="example-date-input">
      </div>
    </div>

    <div class="col-md-5 form-group" style="margin-left: 0px; max-width: 45%;">
      <label for="example-date-input" style="color:white"> Date</label>
      <div class="col-md-6" style="max-width: 98%;">
        <input class="form-control border border-secondary" type="date" name="date" id="example-date-input">
      </div>
    </div>

    <div class="form-group" style="margin-left: 0px;">
    <label for="Event name">Others</label>
    <div class="col-md-5" style="max-width: 42%;"><input type="text" class="form-control border border-secondary" placeholder="other" name="other" id="venue"></div>
    </div>

    <div class="form-group" style="margin-left: 0px;">
    <label style="margin-left:10px; color:white" for="pdf Upload" >pdf Upload:</label>
    
    <div class="col-md-5" style="max-width: 42%; position:relative; left:50px">
      <input  type="file" class="custom-file-input" id="customFile" name="file">
      <label style="margin-left:33px" class="custom-file-label border border-secondary" for="customFile">Sdrn_Facultyname_activityname_Date</label>
    </div>
    </div>

  <div class="btn form-group" style="margin-left: 0px;">
  <button type="submit" name="submit1" class="btn btn-primary ">Submit</button>
    </div>

</form>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>


</body>
</html>

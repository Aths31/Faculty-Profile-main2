<?php 
@session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
@session_start();
if (isset($_SESSION['o1'])) {
  echo '<script language="javascript"> alert("DETAILS ALREADY EXISTS"); </script>';
  $_SESSION['o1'] = NULL;
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="optionstyle.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <title>medical</title>


  <script>
    function pd(x) {
      if (x == 0)
        document.getElementById("sb").style.display = "block";


      else(x == 1)
      document.getElementById("sb").style.display = 'none';





      return;
    }
  </script>
</head>

<body>



  <nav class="navbar navbar-expand-sm navbar-info bg-primary">
    <div class="navbar_title" style=" font-family: 'Times New Roman', Times, serif; font-size: 50px; color: whitesmoke;">Medical Exams</div>
  </nav>



  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Competitive Exam
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
      <li><a class="dropdown-item" href="medical.php">Medical Exam Details</a></li>
      <li><a class="dropdown-item" href="option2.php">Engineering Exam Detail</a></li>

    </ul>
  </div>

  <div style="border-bottom: 3px solid white;
    margin: 13px;"></div>


  <form action="sudo.php" method='POST' enctype="multipart/form-data">
    <div class="form-group">
      <label for="Name">Name:</label>
      <div class="col-md-5"><input type="text" value="<?php echo $_SESSION['firstname'] ." ". $_SESSION['middlename'] ." ". $_SESSION['thirdname'];?>" class="form-control border border-secondary" name= "nam" id="name" disabled></div>
    </div>

    <select class="bg-dark text-white form-group my-3" onclick="display();" id="selectA" name="exam1" id="exam1" required  style="margin-left: 40rem; padding:10px;">
      <option value="" selected disabled hidden>SELECT AN OPTION</option>
      <option value="aa" >AIAPGET</option>
      <option value="bb" >NEET-SS</option>
      <option value="cc" >Both</option>
      <option value="dd" >Other</option>


     

    </select>


    <div id="a" style="display: none;">

      <div class="form-group">
        <label for="PET">AIAPGET Appeared</label>
        <div class="col-md-5"><input type="number" class="form-control border border-secondary" name="aia" id="PET"></div>
      </div>
      <div class="col-5 form-group">
        <label for="Date of PET Exam" style="color:white">Date of AIAPGET Exam</label>
        <div class="col-md-6">
          <input class="form-control border border-secondary" type="date" name="aia_date" id="PET-date-input">
        </div>
      </div>
      <div class="form-group">
        <label for="PET Score">AIAPGET score:</label>
        <div class="col-md-5"><input type="number" class="form-control border border-secondary" placeholder="Enter score" name="aia_score" id="PET_score"></div>
      </div>
    </div>


    <div id="b" style="display: none;">



      <div class="form-group">
        <label for="Gate Appeared">NEET-SS Appeared:</label>
        <div class="col-md-5"><input type="number" class="form-control border border-secondary" name="neet_appeared" id="Gate Appeared"></div>
      </div>
      <div class="col-md-5 form-group">
        <label for="GATE-date-input" style="color:white">Date of NEET-SS</label>
        <div class="col-md-6">
          <input class="form-control border border-secondary" type="date" name="neet_date" id="GATE-date-input">
        </div>
      </div>
      <div class="form-group">
        <label for="GET_score">NEET-SS score</label>
        <div class="col-md-5"><input type="number" class="form-control border border-secondary" name="neet_score" id="GATE_score"></div>
      </div>
    </div>


    



    <div id="c" style="display: none;">

    <div class="form-group">
    <label for="Event name">Exam Name</label>
    <div class="col-md-5"><input type="text" class="form-control border border-secondary" placeholder="other" name="ename" id="venue"></div>
    </div>

<div class="form-group">
  <label for="Gate Appeared">Exam  Appeared:</label>
  <div class="col-md-5"><input type="number" class="form-control border border-secondary" name="eappeared" id="Gate Appeared"></div>
</div>
<div class="col-md-5 form-group">
  <label for="GATE-date-input" style="color:white">Date of Exam</label>
  <div class="col-md-6">
    <input class="form-control border border-secondary" type="date" name="edate" id="GATE-date-input">
  </div>
</div>
<div class="form-group">
  <label for="GET_score">Exam score</label>
  <div class="col-md-5"><input type="number" class="form-control border border-secondary" name="escore" id="GATE_score"></div>
</div>
</div>




    <div class="custom-file mb-3 form-group">
      <label style="margin-left:10px" for="pdf Upload" style="color:white">pdf Upload:</label>

      <div class="col-md-5">
        <input type="file" class="custom-file-input" id="customFile" name="file">
        <label style="margin-left:30px" class="custom-file-label border border-secondary" for="customFile">Choose file</label>
      </div>
    </div>

    <div class="btn form-group">
      <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
    </div>


  </form>





  <!-- position(2,4,"None","None"); -->

<script>
  function display(){
    var x = document.getElementById('selectA').value;

    if(x=="aa"){
      document.getElementById('a').style.display='block';
      document.getElementById('b').style.display='none';
      document.getElementById('c').style.display='none';


    }

    else if(x=="bb"){
      document.getElementById('a').style.display='none';
      document.getElementById('b').style.display='block';
      document.getElementById('c').style.display='none';

     

    }
    else if(x=="cc"){
      document.getElementById('a').style.display='block';
      document.getElementById('b').style.display='block';
      document.getElementById('c').style.display='none';

    }
    else if(x=="dd"){
      document.getElementById('a').style.display='none';
      document.getElementById('b').style.display='none';
      document.getElementById('c').style.display='block';

    }
  }




</script>





  <script>
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label border border-secondary").addClass("selected").html(fileName);
    });
  </script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
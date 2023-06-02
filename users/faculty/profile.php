<?php
  @session_start();
  if(!$_SESSION["Sdrn"]){
    header("location:../../index.php");
  }

  $conn = mysqli_connect("localhost", "root", "root", "test");
  if (isset($_SESSION['sdrn'])){
      $sdrn = $_SESSION['sdrn'];
      $faculty_name = $_SESSION['full_name'];
  }
  $sql =  "SELECT * FROM faculty where sdrn = '$sdrn' " ; 
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $date1 = new DateTime($row['Doj']);
  $date2 = new DateTime(date("Y-m-d"));
  $interval = $date1->diff($date2);
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link href="../../css/styles.css" type="text/css" rel="stylesheet">
      <script type="text/javascript" src="navbar.js"></script>
      <?php include('../../include/scripts.php');?>
      <title>Chapter</title>
      <style>
      @print {
          @page :footer {
              display: none
          }
        
          @page :header {
              display: none
          }
        }
      </style>
  </head>
  <body>
    <!-- dashboard -->
    <div class="dashboard">
      <!-- side navigation bar -->
      <script>navbar();</script>
      <!--dashboard content-->
      <div class="dashboard_container">
      <script>header();</script>
      <div class="container-fluid" style="padding-top:10px">
      <div style="margin-left:60vw">
      <button onclick="generateCv()" class="btn btn-secondary">Print CV</button>
      <a href="updates.php" class="btn btn-danger" >Update Profile</a>
      </div>

  
  <div id="cv" style="margin:20px;padding:20px;width:80vw">
  <div class="row">
    <div class="col-sm-5" style="text-align: center; padding-top:2%" >
      <p ><h2 ><?=$faculty_name;?></h2></p>
      <p><h4><?=$row['Desig'];?></h4></p>
    </div>
    <div class="col-sm-6">
      <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['profile_photo']); ?>" alt="image" height="200px" width="200px" class="rounded-circle" align="right">
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col" >
      <p class="heading"><b>PERSONAL DETAILS</b></p>
      <div class="info">
      <table>
        <tr><th>Gender : </th><td><?=$row['gender'];?></td></tr>
        <tr><th>Mobile No. : &nbsp;</th><td><?=$row['Contact_no'];?></td></tr>
        <tr><th>Email : &nbsp;</th><td><?=$row['Email'];?></td></tr>
        <tr><th>Address :</th><td><?=$row['r_address'];?></td></tr>
      </table>
      </div>
    </div>

    <div class="col" >
      <p class="heading"><b>PROFESSIONAL DETAILS</b></p>
      <div class="info">
      <table>
        <tr><th>Department : </th><td><?=$row['Department'];?></td></tr>
        <tr><th>DOJ : </th><td><?=$row['Doj'];?></td></tr>
        <tr><th>Area of Specialisation : &nbsp;&nbsp;</th><td><?=$row['Specialization'];?></td></tr>
        <tr><th>Experience : </th><td><?=$interval->y;?></td></tr>
      </table>
      </div>
    </div>
  </div>
      </br>
  
  <!-- <div class="row">
    <div class="col">
      <div class="row" >
      <div class="col">
        <p class="heading"><b>EDUCATION</b></p>
        <div class="info">
        <table>
        <tr><th>Degree :</th><td>Phd</td></tr>
        <tr><th>Qualification :&nbsp;&nbsp;</th><td>Pursuing</td></tr>
        <tr><th>University :</th><td>Rajasthan</td></tr>
      </table>
      </div>
      </div>
        <div class="col">
        <p class="heading"><b>MY RECENT WORKS</b></p>
        <div class="info">
        <table>
        <tr><th>Patents :</th><td>1</td></tr>
        <tr><th>Book Chapter :</th><td>1</td></tr>
        <tr><th>Workshop</th><td>Organised: 10  Attended:12</td></tr>
        <tr><th>Talks Delivered :&nbsp;&nbsp;</th><td>9</td></tr>
      </table>
      </div>
        </div></div>
    </div>
    
  </div>   -->
      
      
    </br>
  <div class="row">
    <div class="profile_content">
      <?php include("publication_query.php");
      echo $output1;//book chapter
      echo $output2;//publication
      echo $output3;//journal
      echo $output4;//copyright
      echo $output5;//patent
      echo $output6;//conference
      echo $output15;//Workshops
      echo $output7;//workshop
      echo $output8;//syllabus
      echo $output9;//orientation
      // echo $output10;//workshop conducted
      echo $output11;//awards
      // echo $output12;//Competetive exams
      // echo $output13;//Medical exams
      echo $output14;//Faculty Resource
      ?>
    <div>
  </div>
  </div>

</div>

      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </body>
  <script>
  $('.sub_menu ul').hide();
  $(".sub_menu h3").click(function () {
    $(this).parent(".sub_menu").children("ul").slideToggle("50");
    $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
  });
  
  </script>
  <script>
    function generateCv(){
    var cv_content=document.getElementById("cv").innerHTML;
    var styles="<style>.heading{color: #790016;border-bottom: 5px solid #ff1943;margin-left: 20px;}.con{margin-left:30px}";
    styles=styles+"table{text-align:left;padding-left:30px}</style>";
    
    var win =window.open(",","height=700","width=900");
    win.document.write(styles);
    win.document.write(cv_content);
    win.document.close();
    win.print();
    // win.save("Resume.pdf");
    win.close();
  }
  </script>
  </html>

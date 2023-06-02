<?php
  @session_start();
  $conn = mysqli_connect("localhost", "root", "root", "test");
  if (isset($_SESSION['sdrn'])){
      $sdrn = $_SESSION['sdrn'];
      $faculty_name = $_SESSION['full_name'];
  }
  $sql =  "SELECT * FROM faculty where sdrn = '$sdrn' " ; 
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="../../css/styles.css" type="text/css" rel="stylesheet">
  <script type="text/javascript" src="navbar.js"></script>
  <?php include('../../include/scripts.php');?>
  <title>Update Profile</title>
</head>
<style>

  .container {
    position: relative;
    width:75%
  }

  .image {
    opacity: 1;
    display: block;
    height: 200px;
    width: 200px;
    transition: .5s ease;
    backface-visibility: hidden;
  }

  .middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 5%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
  }

  .container:hover .image {
    opacity: 0.3;
  }

  .container:hover .middle {
    opacity: 1;
  }

  .text {
    background-color: #bd0929;
    color: white;
    font-size: 16px;
    padding: 5px 10px;
  }
  .row img {
    border-radius: 50%;
    object-fit: cover;
    cursor: pointer;
    border: 1px solid black;
    border-radius:50%
  }
</style>

<body>
  <!-- dashboard -->
  <div class="dashboard">
    <!-- side navigation bar -->
    <script>navbar();</script>
    <!--dashboard content-->
    <div class="dashboard_container">
      <script>header();</script>

      <form action="../../backend/update.php" id="update" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
          <div class="row">
            <div class="col-8">
              <div class="form-group" style="padding-top: 20px;">
                <p class="heading">
                <b>LOGIN DETAILS</b>
                </p>
                <input type="text" class="form-field form-control" name="full_name" placeholder="Enter name" value="<?=$faculty_name;?>" readonly><br>
                <input type="number" class="form-field form-control" name="phone_no" placeholder="Enter phone no." value="<?=$row['Contact_no'];?>"><br>
                <input type="email" class="form-field form-control" name="email_id" placeholder="Enter email" value="<?=$row['Email'];?>"><br>
                <input type="password" class="form-field form-control" name="password" id="password" placeholder="Enter new password"><br>
                <!-- <input type="password" class="form-field form-control" name="c_password" id="c_password" placeholder="Confirm new password"><br> -->
              </div>
            </div>

            <div class="col-4" style="padding-top: 15px;">
              <div class="row container" style="margin-left:20%; margin-top:20%">
                <label for="profile_photo" >
                <?php  echo '<img id="avatar" alt="Image" src="data:'.$row['image_type'].';charset=utf8;base64,'; ?>
                <?php echo base64_encode($row['profile_photo']); ?>
                <?php echo '"height="200px" width="200px" class="rounded-circle image" style="border: 2px solid black;"/>'; ?>
                </label>
                <div class="middle">
                <div class="text">Update Profile Picture</div>
              </div>
                <input type="file" style="display:none" name="profile_photo" id="profile_photo" onchange="loadFile(event)" accept="image/png, image/gif, image/jpeg" />
            </div>
          </div>


          <hr style="border-top: 2px solid rgba(128, 0, 0, 0.76);">


          <div class="row">
            <div class="col-sm-5"></div>
            <div class="col-sm-3">
              <input type="submit" class="btn btn-dark btn-lg" value="Update profile">
            </div>
          </div>

          <!-- <div class="row">
              <div class="col">
                <p class="heading">
                  <b>PERSONAL DETAILS</b>
                </p>
                Gender :
                <input type="text" class="form-field form-control-sm" placeholder="Enter gender"
                  style="margin-left:38px;" ><br>
                Date of birth :
                <input type="date" class="form-field form-control-sm" placeholder="Enter DOB"><br>
                Permanent address
                <textarea class="form-control-range" rows="2" placeholder="Enter Permanent address" value="<?=$row['p_address'];?>">value="<?=$row['p_address'];?>"</textarea>
                <br>
                <hr style="border-top: 2px solid rgba(128, 0, 0, 0.76);">
                <p class="heading">
                  <b>EDUCATIONAL DETAILS</b><br>UG
                </p>
                <p class="info">
                  Program :
                  <input type="text" class="form-field form-control-sm" placeholder="Enter UG program"
                    style="margin-left: 11px;" ><br>
                  Score :
                  <input type="text" class="form-field form-control-sm" placeholder="Enter UG Score"
                    style="margin-left: 31px;" ><br>
                  University :
                  <input type="text" class="form-field form-control-sm" placeholder="Enter UG university name" ><br>
                  College :
                  <input type="text" class="form-field form-control-sm" placeholder="Enter UG college name"
                    style="margin-left: 16px;" ><br>
                </p>
                <p class="heading">
                  <br>PhD
                </p>
                <p class="info">
                  Program :
                  <input type="text" class="form-field form-control-sm" placeholder="Enter PhD program"
                    style="margin-left: 11px;"><br>
                  Score :
                  <input type="text" class="form-field form-control-sm" placeholder="Enter PhD Score"
                    style="margin-left: 31px;"><br>
                  University :
                  <input type="text" class="form-field form-control-sm" placeholder="Enter PhD university name"><br>
                  College :
                  <input type="text" class="form-field form-control-sm" placeholder="Enter PhD college name"
                    style="margin-left: 16px;"><br>
                </p>
                <hr style="border-top: 2px solid rgba(128, 0, 0, 0.76);">
                <p class="heading">
                  <br><b>WORKING EXPERIENCE</b>
                </p>
                <p class="info">
                  Date of joining :
                  <input type="date" class="form-field form-control-sm" placeholder="Date of joining"
                    style="margin-left: 36px;"><br>
                  RAIT experience :
                  <input type="text" class="form-field form-control-sm" placeholder="Experience(years)"
                    style="margin-left: 27px;"><br>
                  Other experiences :
                  <input type="text" class="form-field form-control-sm" placeholder="Experience(years)"
                    style="margin-left: 12px;"><br>
                  Industry Experience :
                  <input type="text" class="form-field form-control-sm" placeholder="Industry Experience(years)"
                    style="margin-left: 2px;"><br>
                </p>

              </div>

              <div class="col">
                <br><br>
                Designation :
                <input type="text" class="form-field form-control-sm" placeholder="Enter Designation"><br><br>
                Residential address
                <textarea class="form-control-range" rows="2" placeholder="Enter Residential address"></textarea>
                <br>
                <hr style="border-top: 2px solid rgba(128, 0, 0, 0.76);">
                <p class="heading">
                  <br>PG
                </p>
                <p class="info">
                  Program :
                  <input type="text" class="form-field form-control-sm" placeholder="Enter PG program"
                    style="margin-left: 11px;"><br>
                  Score :
                  <input type="text" class="form-field form-control-sm" placeholder="Enter PG Score"
                    style="margin-left: 31px;"><br>
                  University :
                  <input type="text" class="form-field form-control-sm" placeholder="Enter PG university name"><br>
                  College :
                  <input type="text" class="form-field form-control-sm" placeholder="Enter PG college name"
                    style="margin-left: 16px;"><br>
                </p>

                <p class="heading">
                  <br>Other
                </p>
                <p class="info">
                  Program :
                  <input type="text" class="form-field form-control-sm" placeholder="Enter program"
                    style="margin-left: 11px;"><br>
                  Score :
                  <input type="text" class="form-field form-control-sm" placeholder="Enter Score"
                    style="margin-left: 31px;"><br>
                  University :
                  <input type="text" class="form-field form-control-sm" placeholder="Enter university name"><br>
                  College :
                  <input type="text" class="form-field form-control-sm" placeholder="Enter college name"
                    style="margin-left: 16px;"><br>
                </p>
                <hr style="border-top: 2px solid rgba(128, 0, 0, 0.76);">
              </div>
            </div><br> -->
            
        </div>
      </form>


    </div>
  </div>

</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
  $('.sub_menu ul').hide();
  $(".sub_menu h3").click(function () {
    $(this).parent(".sub_menu").children("ul").slideToggle("50");
    $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
  });

  var loadFile = function (event) {
    var output = document.getElementById('avatar');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function () {
      URL.revokeObjectURL(output.src)
    }
  };
  function generateCv(){
    var cv_content=document.getElementById("cv").innerHTML;
    var styles="<style>.heading{color: rgb(7, 48, 172);border-bottom: 5px solid rgb(50, 181, 224);margin-left: 20px;}.con{margin-left:30px}";
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
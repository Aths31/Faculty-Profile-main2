<!DOCTYPE html>
<html lang="en">

  <head>
    <?php 
      @session_start();
      if (isset($_SESSION['sdrn'])){
        $sdrn = $_SESSION['sdrn'];
      }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Faculty publication Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/internal_css.css">
    <link rel="stylesheet" href="../../css/util.css">


    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  </head>

  <body>
  <div style="float:right " >
          <form class="form-inline my-2 my-lg-0">
                  <a href="../../Report_login.php" class="btn btn-info " id="goback">
                  <span></span> Logout</a>
              </form>
          </div>
    <div style="height:100px; padding:30px">
      <h2 class="text-center" style=" margin-bottom: 3%; color:black; padding-left:3%;"><b>Report Generation</b></h2>

    </div>
    <br>

    <!-- Categories -->
    <div class="container ">
      <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
          <div>
            <div class="card-body">
              <center>
                <button type="button" id="button_main">
                  <a href="All_report.php" target="_blank"><b>All Report</b></a>
                </button><br>
                <button id="button_main">
                  <a href="Monthly_report.php" target="_blank"><b>Monthly Report</b></a>
                </button><br>
                <button id="button_main">
                  <a href="Yearly_report.php" target="_blank"><b>Yearly Report</b></a></button><br>

                <button id="button_main">
                  <a href="individual_report.php" target="_blank"><b>Individual Report</b></a></button><br>

                <button id="button_main">
                  <a href="Report_page.php" target="_blank"><b>Datewise Report</b></a></button><br>

                <button id="button_main">
                  <a href="../Expenditure/expenditure.php" target="_blank"><b>Expenditure</b></a></button><br>


              </center>
            </div>

          </div>
        </div>
      </div>
    </div>
  </body>

</html>
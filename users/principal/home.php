<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../../css/styles.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="navbar.js"></script>
    <?php include('../../include/scripts.php');?>
    <title>Dashboard</title>
</head>
<body>
  <!-- dashboard -->
  <div class="dashboard">
    <!-- side navigation bar -->
    <script>navbar();</script>
    <!--dashboard content-->
    <div class="dashboard_container">
      <div class="dashboard_header">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span><!--hamburger icon-->
        <h2>Principal Dashboard</h2>
        <a class="btn btn-light" href="../../logout.php" style="margin-left:60%">Logout</a>
      </div>
      <div class="dashboard_content" style="width:90%; background-color:#fff; margin-left:1rem; margin-top:0">

      <p style="text-decoration: underline;"><b>Distribution of data present</b></p>
      <div class="row" style="padding:1px">
          <div class="col-sm-5" id="chart_canvas">
              <canvas id="chart_faculty_details"></canvas>
          </div>
          <div class="col-sm-1"></div>
          <div class="col-sm-6" id="chart_canvas">
              <canvas id="chart_faculty_details_2"></canvas> 
          </div>
      <?php include 'principal_chart.php';?>

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
</html>

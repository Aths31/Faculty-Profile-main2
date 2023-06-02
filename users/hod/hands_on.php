<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../../css/styles.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="navbar.js"></script>
    <?php include('../../include/scripts.php');?>
    <title>Workshop</title>
</head>
<body>
  <!-- dashboard -->
  <div class="dashboard">
    <!-- side navigation bar -->
    <script>navbar();</script>
    <!--dashboard content-->
    <div class="dashboard_container">
    <script>header();</script>
      <div class="dashboard_content" style="width:100%; background-color:#fff;  margin:0">
      <div class="chapter">
        <h1 class="text-center">Hands-on session</h1>
            <form action="" method="post">
            <div class="hod_form">
                <label>From
                <input type="date" name="date_from" class="form-control">
                </label>
                <label>To
                <input type="date" name="date_to" class="form-control">
                </label>
                </br>
                <button type="submit" name="gen_report" class="btn btn-danger">Generate report</button>
            </div>
            </form>
        </br></br>
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
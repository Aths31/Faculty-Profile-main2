<?php
@session_start();
$conn = mysqli_connect("localhost", "root", "root", "test");
if (isset($_SESSION['sdrn'])){
    $sdrn = $_SESSION['sdrn'];
    $faculty_name = $_SESSION['full_name'];
}
// $sdrn=150;
$i=0;
$output="<h5>";
$sql =  "SELECT * FROM book_chapter" ; 
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
  $i=$i+1;
  $authors=implode(", ",array_filter([$row["author1"],$row["author2"],$row["author3"],$row["author4"]]));
 $output .= "[".$i."]  ".$authors.', "'.$row["chapter_name"].'" in '.$row["book_name"].", ".$row["publisher_name"].", ".$row["publication_year"].". </br></br>";  
}
$output.="</h5>";
 if(isset($_POST["gen_report"])){
  $i=0;
   $output="<h4 class='text-center' style='font-weight:bold'>Reports showing  ";
   $filter_query="";
  $select="SELECT * FROM book_chapter ";
   if(isset($_POST["date_from"]) &&$_POST["date_to"] && $_POST["date_from"]!="" && $_POST["date_to"]!=""){
     $from=date('Y-m-d',strtotime($_POST['date_from']));
       $to=date('Y-m-d',strtotime($_POST['date_to']));
       $filter_query.="WHERE publication_year between '$from' and '$to'";
        $output.="from ".$from." to ".$to;
   }
    $output.="</h4><h5>";
     $sql =   $select.$filter_query; 
     $result = mysqli_query($conn, $sql); 
     while($row = mysqli_fetch_array($result)){
       $i=$i+1;
       $authors=implode(", ",array_filter([$row["author1"],$row["author2"],$row["author3"],$row["author4"]]));
       $output .= "[".$i."]  ".$authors.', "'.$row["chapter_name"].'" in '.$row["book_name"].", ".$row["publisher_name"].", ".$row["publication_year"].". </br></br>";    
    }
    $output.='</h5>';
 }

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
        <h1 class="text-center">Chapter</h1>
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
        <div style='width:93%;' >
            <?php echo $output;?>
        <div>
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
<?php
@session_start();
$link = mysqli_connect("localhost", "root", "root", "test");
if (isset($_SESSION['sdrn'])){
    $sdrn = $_SESSION['sdrn'];
    $faculty_name = $_SESSION['full_name'];
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
    <title>Faculty as Resource Person</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #737373;
            font-size: 15px;
            text-align: center;
        }

        th {
            padding: 10px;
            background-color: #C10223;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        button {
            align-items: center;
            background-color: lightyellow;
        }

        h2 {
            text-align: center;
            font-family: inherit;
            color: #3e3e3e;
        }

        .btn {
            text-align: center;
            vertical-align: middle;
            padding: .67em .67em;
            cursor: pointer;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .btn-primary {
            color: white;
            background-color: #606060;
            border: none;
            border-radius: .3em;
            font-weight: bold;
            padding: 1rem 1.5rem 1rem 1.5rem;
            font-size: 1rem;
        }

        .search-btn {
            text-align: center;
            vertical-align: middle;
            padding: .37em .37em;
            cursor: pointer;
            background-color: #4CBB17;
            color: white;
        }

        .name-field {
            text-align: center;
            vertical-align: middle;
            padding: .37em .37em;

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
      <div class="dashboard_content" style="width:100%; background-color:#fff;  margin:0">
      <div class="chapter">
        <h1 class="text-center">Faculty as Resource Person</h1>
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

        <div style='width:90%;' >
            <table>
                <tr>
                <th>Sr No</th>
                <th >Resource person</th>
                <th >Topic Name</th>
                <th>Event Name</th>
                <th >Level</th>
                <th >Venue </th>
                 <th >Date</th>
                </tr>


                <?php
                // include('session.php');
                @session_start();
                $sdrn = $_SESSION['sdrn'];
                include('../../modules/SS1/Faculty Experties/connect.php');
                
   


                
                // $sdrn = $user_check;

                //      if(isset($_POST['search']))
                //    {
                //      $NameOfFaculty = $_POST['NameOfFaculty'];
                $filter_query="";
                if(isset($_POST["gen_report"])){
                    if(isset($_POST["date_from"]) &&$_POST["date_to"] && $_POST["date_from"]!="" && $_POST["date_to"]!=""){
                        $from=date('Y-m-d',strtotime($_POST['date_from']));
                        $to=date('Y-m-d',strtotime($_POST['date_to']));
                        $filter_query.="where `Date` between '$from' and '$to'";
                    }
                }
                $s="select * from faculty_as_resource  $filter_query  ";
                $result=mysqli_query($conn,$s);
                $r=mysqli_num_rows($result);
                $srno=1;
                while($data=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>" . $srno . "</td>";
                    echo"<td  style=' padding-left:10px;text-align: center;'>".$data[1]."</td><td  style=' padding-left:20px;text-align: center;'>$data[4]</td><td  style=' padding-left:20px;text-align: center;'>$data[5]</td><td  style=' padding-left:50px;text-align: center;'>$data[9]</td><td  style=' padding-left:50px;text-align: center;'>".$data['Venue']."</td><td  style=' padding-left:60px;text-align: center;'>".$data['Date']."</td>";
                    //echo "<td><a href='" . $doc . "'><img src='images/doc.png' style='width:20px'></td></a>";
                    echo "</tr>";
                    $srno++;
                }
                //}

                ?>
            </table>
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
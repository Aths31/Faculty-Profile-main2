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
    <title>Workshop</title>
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
        <h1 class="text-center">Data of Workshops Attended</h1>
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
                    <th>Criteria</th>
                    <th>Name</th>
                    <th>Sponsored By</th>
                    <th>Venue</th>
                    <th>Date From</th>
                    <th>Date To</th>
                    <th>Days</th>
                    <th>Organiser</th>
                    <th>Level</th>
                    <th>Source of Funding</th>
                    <th>Registration Amount</th>
                    <th>Amount Funded</th>
                    <th>TA</th>
                    <!-- <th>Doc</th> -->

                </tr>

                <?php
                // include('session.php');
                @session_start();
                $link = mysqli_connect("localhost", "root", "root", "test");

                // Check connection
                if ($link === false) {
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                $sdrn = $_SESSION['sdrn'];
                // $sdrn = $user_check;

                //      if(isset($_POST['search']))
                //    {
                //      $NameOfFaculty = $_POST['NameOfFaculty'];
                $filter_query="";
                if(isset($_POST["gen_report"])){
                    if(isset($_POST["date_from"]) &&$_POST["date_to"] && $_POST["date_from"]!="" && $_POST["date_to"]!=""){
                        $from=date('Y-m-d',strtotime($_POST['date_from']));
                        $to=date('Y-m-d',strtotime($_POST['date_to']));
                        $filter_query.="AND edate between '$from' and '$to'";
                    }
                }
                $query = " SELECT * FROM workshop WHERE SDRN = '$sdrn' ".$filter_query." ";
                $query_run = mysqli_query($link, $query);
                $srno=1;
                while ($row = mysqli_fetch_array($query_run)) {
                    $doc = $row['uploads'];
                    echo "<tr>";
                    echo "<td>" . $srno . "</td>";
                    echo "<td>" . $row['criteria'] . "</td>";
                    echo "<td>" . $row['Name_workshop'] . "</td>";
                    echo "<td>" . $row['sponsor'] . "</td>";
                    echo "<td>" . $row['venue'] . "</td>";
                    echo "<td>" . $row['sdate'] . "</td>";
                    echo "<td>" . $row['edate'] . "</td>";
                    echo "<td>" . $row['ndays'] . "</td>";
                    echo "<td>" . $row['organiser'] . "</td>";
                    echo "<td>" . $row['org_type'] . "</td>";
                    echo "<td>" . $row['sfunding'] . "</td>";
                    echo "<td>" . $row['ramount'] . "</td>";
                    echo "<td>" . $row['amount_funded'] . "</td>";
                    echo "<td>" . $row['TA'] . "</td>";
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
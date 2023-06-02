<!DOCTYPE html>
<html>

<head>

    <title>Sorted Orientation</title>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
        color: #737373;
        font-size: 25px;
        text-align: center;
    }
    th {
        padding: 10px;
        background-color: #C10223;
        color: white;
    }
    tr:nth-child(even) {background-color: #f2f2f2}    
    h2{
        text-align: center;
        font-family: inherit;
        color: slategray;
    }
    
    .search-btn{
        text-align: center;
        vertical-align: middle;
        padding: .57em .57em;
        cursor: pointer;
        background-color: #4CBB17;
        color: white;
    }
    
    .search-btn1{
        text-align: center;
        vertical-align: middle;
        padding: .57em .57em;
        cursor: pointer;
        background-color: skyblue;
        color: black;
        text-decoration: none;
        font-family: serif;
    }
    
    .name-field{
        text-align: center;
        vertical-align: middle;
        padding: .37em .37em;
        
    }  
</style>
</head>
<body>
    <script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="../../js/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
        <script src="../../js/plugins/popper/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    </script>
<a href="welcome.php"><img src="images/logo.png" style="height:10vh;width:auto"></a>
<h2>Data of Course Orientation table</h2>
<br>

    <div class="container">
        <center>

            <form method="post">
                <input type="date" name="txtStartDate" class="form-control" style="display:inline; width:200px">
                <input type="date" name="txtEndDate" class="form-control" style="display:inline; width:200px" >
                <input class="name-field" type="text"  name="NameOfFaculty" placeholder="Enter Name of the Faculty">


                <input class="search-btn" type="submit" name="search" value="View Record">

                <a href="university_orientation.php" class="search-btn1">
                    All Records
                </a>

            </form>

        </center>

        <br>

        <table border="3px">

            <tr>
                <th>sdrn</th>
                <th>NameOfFaculty</th>
                <th>Subject</th>
                <th>Semester</th>
                <th>Venue</th>
                <th>Date</th>
                <th>Document</th>
            </tr>

            <br>


            <?php


            $conn = @mysqli_connect("localhost", "root", "", "test");

            if (!$conn) {
                die("Connection Failed:" . mysqli_connect_error());
            }

            if (isset($_POST['search'])) {

                $name_of_faculty = $_POST['NameOfFaculty'];
                $txtStartDate = $_POST['txtStartDate'];
                $txtEndDate = $_POST['txtEndDate'];


                $query = "SELECT * FROM orientation WHERE Date BETWEEN '$txtStartDate' AND '$txtEndDate' OR (Name = '$name_of_faculty')";


                $count = @mysqli_query($conn, $query);

    while($row = @mysqli_fetch_array($count)){
        
        echo "<tr>"; 
        $doc = '../faculty/'. $row['uploads'];
            //echo "<td>" . $row['1'] . "</td>"; 
	        echo "<td>" . $row['SDRN'] . "</td>";
            echo "<td>" . $row['Name'] . "</td>"; 
            echo "<td>" . $row['Subject'] . "</td>";
            echo "<td>" . $row['Semester'] . "</td>";
            echo "<td>" . $row['Venue'] . "</td>";
            echo "<td>" . $row['Date'] . "</td>";
            echo "<td><a href='".$doc."'><img src='images/doc.png' style='width:20px'></td></a>";
    }
}
?>
        </table>
    </div>

</body>

</html>

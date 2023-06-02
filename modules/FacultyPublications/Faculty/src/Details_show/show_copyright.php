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
        <link rel="stylesheet" href="../../css/internal_css.css">
        <link rel="stylesheet" href="../../css/util.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <title>Faculty Publication Management</title>

    </head>
    <body>
    <input id= "goback" type="button" value="Go Back!" onclick="history.back(-1)" />
        <?php
            $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
            echo "<a href='$url'></a>"; 
        ?>
        <div id="copyright"> 
            <h3 class="text-center">Copyright Records</h3>
           
            <button name="pdf_copyright" id="pdf_copyright" >Create Excel File</button>
            <div id="copyright_tab">
                <?php
                    if (isset($_SESSION['sdrn'])){ 
                        echo'<div class="table-responsive">  
                        <table class="table table-bordered" >  
                        <tr>  
                        <th>SDRN</th>  
                        <th>Faculty Name</th>
                        <th>Author Name</th>  
                        <th>Author Name 2</th>  
                        <th>Author Name 3</th>  
                        <th>Author Name 4</th>    
                        <th>Designation</th>
                        <th>Copyright</th>
                        <th>Title</th>
                        <th>Application No.</th>   
                        <th>Status</th> 
                        <th>Registration Amount</th> 
                        <th>Amount Funded</th>  
                        <th>Registeration Date</th>  
                        <th>Publisher</th>
                        <th>Ntnl/Intnl</th>
                        <th>Name of Institute</th>
                        <th>Category</th> 
                        <th>Option 1</th> 
                        <th>Option 2</th> 
                        <th>Update</th>  
                        </tr>  ';

                        function fetch_copyright(){ 
                        $id = $_SESSION['sdrn'];
                        $First_name= $_SESSION['First_name'];
                        $Middle_name= $_SESSION['Middle_name'];
                        $Last_name= $_SESSION['Last_name'];
                        $faculty_name = $First_name." ".$Middle_name." ".$Last_name;
                        $output1 = '';  
                        $connect = mysqli_connect("localhost", "root", "root", "test");  
                        $sql1 = "SELECT * FROM copyright where sdrn = '$id' OR author1 = '$faculty_name' OR author2 = '$faculty_name' 
                        OR author3 = '$faculty_name' OR author4 = '$faculty_name' ";  
                        $result1 = mysqli_query($connect, $sql1);  
                        while($row = mysqli_fetch_array($result1)){       
                            $output1 .= '<tr> 
                            <td>'.$row["sdrn"].'</td>  
                            <td>'.$row["faculty_name"].'</td>  
                            <td>'.$row["author1"].'</td>  
                            <td>'.$row["author2"].'</td>  
                            <td>'.$row["author3"].'</td>  
                            <td>'.$row["author4"].'</td>
                            <td>'.$row["designation"].'</td>   
                            <td>'.$row["copyright"].'</td>  
                            <td>'.$row["title"].'</td>  
                            <td>'.$row["application_no"].'</td>  
                            <td>'.$row["status"].'</td>
                            <td>'.$row["reg_amount"].'</td>  
                            <td>'.$row["amount_funded"].'</td>  
                            <td>'.$row["reg_date"].'</td> 
                            <td>'.$row["publisher"].'</td>
                            <td>'.$row["ntnl"].'</td>
                            <td>'.$row["institute"].'</td> 
                            <td>'.$row["opt1"].'</td>  
                            <td>'.$row["opt2"].'</td>  
                            <td>'.$row["opt3"].'</td> 
                            <td><a href="../Details_update/copyrightupdate.php?id='.$row["id"].'">Update</a></td>   
                            </tr> ';  
                        }  
                        return $output1;  
                        }
                        echo fetch_copyright();  
                        echo '</table>  </div><br />';
                    }
                ?>
            </div>
        </div>
    </body>
    <script type="text/javascript">
  $("#pdf_copyright").click(function (e) {
    window.open('data:application/vnd.ms-excel,' +
      encodeURIComponent($('#copyright_tab').html()));
    e.preventDefault();
  });
</script>

</html>



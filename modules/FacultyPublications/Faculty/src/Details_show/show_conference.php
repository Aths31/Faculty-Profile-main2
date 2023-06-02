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
    <link rel="stylesheet" href="../../css/internal_css.css">
    <link rel="stylesheet" href="../../css/util.css">
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
    <div id="conference">   
      <h3 class="text-center">Conference Records</h3>
      
      <button name="pdf_conference" id="pdf_conference" >Create Excel File</button>
      <div id="conference_tab">
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
              <th>Paper Title</th>
              <th>Conference Name</th>
              <th>Conference Place</th>
              <th>Conference Date</th>
              <th>NTNL/INTNL</th>
              <th>ISBN/ISSN No.</th>   
              <th>DOI</th>  
              <th>Publication Year</th>
              <th>Name of Organization</th>
              <th>Name of Institute</th> 
              <th>Indexed in IEEE</th> 
              <th>No. of Times Cited</th> 
              <th>Registration Amount</th> 
              <th>Amount Sanctioned</th>  
              <th>Presented Personally</th>
              <th>Awards</th> 
              <th>Category</th>
              <th>Option 1</th>
              <th>Option 2</th>
              <th>Update</th>
            </tr>  ';

            function fetch_conference(){ 
              $id = $_SESSION['sdrn'];
              $First_name= $_SESSION['First_name'];
              $Middle_name= $_SESSION['Middle_name'];
              $Last_name= $_SESSION['Last_name'];
              $faculty_name = $First_name." ".$Middle_name." ".$Last_name;
              $output1 = '';  
              $connect = mysqli_connect("localhost", "root", "root", "test");  
              $sql1 = "SELECT * FROM conference where sdrn = '$id'OR author1 = '$faculty_name' OR author2 = '$faculty_name' 
              OR author3 = '$faculty_name' OR author4 = '$faculty_name' ";  
              $result1 = mysqli_query($connect, $sql1);  
              while($row = mysqli_fetch_array($result1)){       
                $output1 .='<tr> 
                  <td>'.$row["sdrn"].'</td>  
                  <td>'.$row["faculty_name"].'</td>  
                  <td>'.$row["author1"].'</td>  
                  <td>'.$row["author2"].'</td>  
                  <td>'.$row["author3"].'</td>  
                  <td>'.$row["author4"].'</td>  
                  <td>'.$row["paper_title"].'</td>  
                  <td>'.$row["con_name"].'</td> 
                  <td>'.$row["con_place"].'</td> 
                  <td>'.$row["con_date"].'</td>  
                  <td>'.$row["ntnl_no"].'</td> 
                  <td>'.$row["isbn_no"].'</td>   
                  <td>'.$row["doi"].'</td>
                  <td>'.$row["year"].'</td>
                  <td>'.$row["org"].'</td>
                  <td>'.$row["institute"].'</td>  
                  <td>'.$row["indexed_in"].'</td>  
                  <td>'.$row["no_of_times"].'</td>  
                  <td>'.$row["reg_amount"].'</td>  
                  <td>'.$row["amount_sanctioned"].'</td> 
                  <td>'.$row["presented_personally"].'</td> 
                  <td>'.$row["awards"].'</td> 
                  <td>'.$row["opt1"].'</td> 
                  <td>'.$row["opt2"].'</td> 
                  <td>'.$row["opt3"].'</td> 
                  <td><a href="../Details_update/conferenceupdate.php?id='.$row["id"].'">Update</a></td>    
                </tr> ';  
              }  
              return $output1;  
            }
            echo fetch_conference();  
            echo '</table>  </div>';
          }
        ?>
      </div>
    </div>
        
  </body>
  <script type="text/javascript">
  $("#pdf_conference").click(function (e) {
    window.open('data:application/vnd.ms-excel,' +
      encodeURIComponent($('#conference_tab').html()));
    e.preventDefault();
  });
</script>
</html>



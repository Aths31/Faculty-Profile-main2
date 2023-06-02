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
    <div id="publication"> 
      <h3 class="text-center">Book Publication Records</h3>
      <button name="pdf_publication" id="pdf_publication" >Create Excel File</button>
      <div id="publication_tab">
        <?php
          if (isset($_SESSION['sdrn'])){ 
            echo '<div class="table-responsive">  
            <table class="table table-bordered" >  
            <tr>  
            <th>SDRN</th>  
            <th>Faculty Name</th>
            <th>Author Name</th>  
            <th>Author Name 2</th>  
            <th>Author Name 3</th>  
            <th>Author Name 4</th>    
            <th>Book Name</th>
            <th>Publisher Name</th>   
            <th>ISBN/ ISSN No.</th>  
            <th>Publication Year</th>
            <th>Designation of Faculty</th>
            <th>Name of Institute</th>
            <th>Category</th> 
            <th>Option 1</th> 
            <th>Option 2</th>   
            <th>Update</th>   
            </tr>  ';

            function fetch_publication(){ 
            $id = $_SESSION['sdrn'];
            $First_name= $_SESSION['First_name'];
            $Middle_name= $_SESSION['Middle_name'];
            $Last_name= $_SESSION['Last_name'];
            $faculty_name = $First_name." ".$Middle_name." ".$Last_name;
            $output1 = '';  
            $connect = mysqli_connect("localhost", "root", "root", "test");  
            $sql1 = "SELECT * FROM book_publication where sdrn = '$id' OR author1 = '$faculty_name' OR author2 = '$faculty_name' 
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
                            <td>'.$row["book_name"].'</td>  
                            <td>'.$row["publisher_name"].'</td>
                            <td>'.$row["isbn_no"].'</td>  
                            <td>'.$row["year"].'</td> 
                            <td>'.$row["desgn"].'</td>
                            <td>'.$row["institute"].'</td> 
                            <td>'.$row["opt1"].'</td>  
                            <td>'.$row["opt2"].'</td>  
                            <td>'.$row["opt3"].'</td> 
                            <td><a href="../Details_update/update_publication.php?id='.$row["id"].'">Update</a></td>   
                          </tr> ';  
              }  
              return $output1;  
            }
            echo fetch_publication();  
            echo '</table>  </div>';
          }
        ?>
      </div>    
    </div>
    
  </body>
  <script type="text/javascript">
  $("#pdf_publication").click(function (e) {
    window.open('data:application/vnd.ms-excel,' +
      encodeURIComponent($('#publication_tab').html()));
    e.preventDefault();
  });
</script>
</html>



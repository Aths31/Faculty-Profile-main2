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
        <div id="journal"> 
            <h3 class="text-center">Journals Records</h3>
            <button name="pdf_journal" id="pdf_journal" >Create Excel File</button>
            <div id="journal_tab">
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
                        <th>Journal Name</th>
                        <th>Volume No.</th>
                        <th>Page No.</th>
                        <th> ISBN/ISSN No.</th>   
                        <th>DOI</th> 
                        <th>Publication Year</th>
                        <th>Designation of Faculty</th>
                        <th>Status</th>
                        <th>Date of Publication</th>
                        <th>Index of paper</th>
                        <th>Funding Organization</th>
                        <th>Name of Institute</th> 
                        <th>Impact Factor</th>
                        <th>NTNL/INTNL</th> 
                        <th>Indexed in IEEE</th> 
                        <th>No. of Times Cited</th> 
                        <th>Registration Amount</th> 
                        <th>Amount Sanctioned</th>  
                        <th>Awards</th>  
                        <th>Category</th>
                        <th>Option 1</th>
                        <th>Option 2</th> 
                        <th>Update</th> 
                    
                    </tr>  ';
                    function fetch_journal(){ 
                        $id = $_SESSION['sdrn'];
                        $First_name= $_SESSION['First_name'];
                        $Middle_name= $_SESSION['Middle_name'];
                        $Last_name= $_SESSION['Last_name'];
                        $faculty_name = $First_name." ".$Middle_name." ".$Last_name;
                        $output1 = '';  
                        $connect = mysqli_connect("localhost", "root", "root", "test");  
                        $sql1 = "SELECT * FROM journal where sdrn = '$id' OR author1 = '$faculty_name' OR author2 = '$faculty_name' 
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
                            <td>'.$row["title"].'</td>  
                            <td>'.$row["journal_name"].'</td>  
                            <td>'.$row["volume_no"].'</td>
                            <td>'.$row["page_no"].'</td> 
                            <td>'.$row["isbn_no"].'</td>   
                            <td>'.$row["doi"].'</td>
                            <td>'.$row["year"].'</td>
                            <td>'.$row["desg"].'</td>
                            <td>'.$row["status"].'</td>
                            <td>'.$row["publication_date"].'</td>
                            <td>'.$row["paper_index"].'</td>
                            <td>'.$row["funding_org"].'</td>
                            <td>'.$row["institute"].'</td>
                            <td>'.$row["impact_factor"].'</td>  
                            <td>'.$row["ntnl_no"].'</td>  
                            <td>'.$row["indexed_in"].'</td>  
                            <td>'.$row["no_of_times"].'</td>  
                            <td>'.$row["reg_amount"].'</td>  
                            <td>'.$row["amount_sanctioned"].'</td> 
                            <td>'.$row["awards"].'</td> 
                            <td>'.$row["opt1"].'</td> 
                            <td>'.$row["opt2"].'</td> 
                            <td>'.$row["opt3"].'</td> 
                            <td><a href="../Details_update/journalupdate.php?id='.$row["id"].'">Update</a></td>    
                        </tr> ';  
                        }  
                        return $output1;  
                        }
                        echo fetch_journal();  
                        echo '</table>  </div>';
                    }
                ?>
            </div>
        </div>
        
    </body>
    <script type="text/javascript">
     $("#pdf_journal").click(function (e) {
    window.open('data:application/vnd.ms-excel,' +
      encodeURIComponent($('#journal_tab').html()));
    e.preventDefault();
    });
</script>
</html>



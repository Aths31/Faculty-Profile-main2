<!DOCTYPE html>
<html lang="en">
<?php 
  @session_start();
  if (isset($_SESSION['sdrn'])){
    $sdrn = $_SESSION['sdrn'];
    
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/internal_css.css">
  <link rel="stylesheet" href="../../css/util.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Report Generation</title>
</head>

<body>

  <?php
  $currently_selected = date('Y'); 
  $earliest_year = 1950; 
  $latest_year = date('Y'); 
 ?>
  <div style="float:right " >
		    <form class="form-inline my-2 my-lg-0">
                <a href="../../Report_login.php" class="btn btn-info " id="goback">
                <span></span> Logout</a>
            </form>
        </div>
  <div style="margin: 5%">
    <h3><b>
        <center>Yearly Report</center>
      </b></h3><br>
    <form method="POST" class="form-inline">
      <label style="margin-right:10px">Select Year: </label>
      <select style="margin-right:20px" id="year1" name="year1">
        <?php
          foreach ( range( $latest_year, $earliest_year ) as $i ) {
           print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
          }
        ?>
      </select>
      <button type="submit" value="Submit" class="btn btn-success" style="margin-right:15px;" name="yearly_data">Submit</button>
      <button type="submit" id="pdf_individual" class="btn btn-success" onClick="createPdf()" name="pdf_individual" value="Convert to PDF">Convert To PDF</button>
      <button name="create_excel" id="btnExport" class="btn btn-success">Create Excel File</button>
    </form>

    <br>


    <div id="Yearly_Rreport_tab">
      <?php
    if(isset($_POST['yearly_data'])){
   
    //////////////////////////////////////////////////////Book Chapter////////////////////////////////////////////////////
    
      echo '<div class="table-responsive">  
        <table class="table table-bordered" >  
        <tr>  
            <th>SDRN</th>  
            <th>Faculty Name</th>
            <th>Author Name</th>  
            <th>Author Name 2</th>  
            <th>Author Name 3</th>  
            <th>Author Name 4</th>    
            <th>Chapter Name</th>
            <th>Book Name</th>
            <th>Through Conference/ Journal</th> 
            <th> Publisher Name</th>   
            <th>ISBN/ ISSN No.</th>  
            <th>Publication Year</th>
            <th>Registration Date</th>
            <th>Sanctioned Amount</th>
            <th>Name of Organization</th>
            <th>Awards</th>
            <th>Designation Of Faculty</th>
            <th>Name of Institute</th> 
            <th>Category</th>  
        </tr>  ';
      function yearly_chapterData(){ 
        $year1 = $_POST['year1'];
        echo "<b><center><p> Records of year $year1 are :</p> </center> </b>";
        echo "<p> Book Chapter Records :</p>";
        $output = "";
        $conn = mysqli_connect("localhost", "root", "", "test");
        $sql =   "SELECT * from book_chapter where YEAR(publication_year) = '$year1'"; 
        $result = mysqli_query($conn, $sql);  
        while($row = mysqli_fetch_array($result)){
          $output .= '<tr> 
            <td>'.$row["sdrn"].'</td>  
            <td>'.$row["faculty_name"].'</td>  
            <td>'.$row["author1"].'</td>  
            <td>'.$row["author2"].'</td>  
            <td>'.$row["author3"].'</td>  
            <td>'.$row["author4"].'</td>  
            <td>'.$row["chapter_name"].'</td>  
            <td>'.$row["book_name"].'</td>  
            <td>'.$row["through"].'</td>
            <td>'.$row["publisher_name"].'</td>
            <td>'.$row["isbn_no"].'</td>  
            <td>'.$row["publication_year"].'</td> 
            <td>'.$row["reg_date"].'</td>
            <td>'.$row["sanction_amt"].'</td>
            <td>'.$row["org_name"].'</td>
            <td>'.$row["awards"].'</td>
            <td>'.$row["desgn"].'</td>
            <td>'.$row["institute"].'</td>
            <td>'.$row["opt1"].'</td>  
          </tr> ';  
        }
        return $output;  
      } 
      echo yearly_chapterData();
      echo'</table></div><br>';
     
    //////////////////////////////////////////////////////Book Publications////////////////////////////////////////////////////
      echo'<div class="table-responsive">  
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
          <th>ISBN/ISSN No.</th>  
          <th>Publication Year</th>
          <th>Designation of Faculty</th>
          <th>Name of Institute</th>
          <th>Category</th>   
        </tr>  ';

        function yearly_PublicationData(){ 
          $year1 = $_POST['year1'];
         
          $output = "";
          echo "<p> Book Publications Records :</p>";
          $conn = mysqli_connect("localhost", "root", "", "test");
          $sql =   "SELECT * from book_publication where YEAR(year) = '$year1'";
          $result = mysqli_query($conn, $sql);  
          while($row = mysqli_fetch_array($result)){
            $output .= '<tr> 
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
            </tr> ';  
          }
          return $output;  
        } 
        echo yearly_PublicationData();
        echo'</table></div><br>';


////////////////////////////////////////////////////// Patent ////////////////////////////////////////////////////////////////
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
          <th>Patent</th>
          <th>Title</th>
          <th>Application No.</th>   
          <th>Status</th> 
          <th>Registration Amount</th> 
          <th>Amount Funded</th>  
          <th>Registeration Date</th>
          <th>Category</th>   
        </tr>  ';

        function yearly_PatentData(){ 
          $year1 = $_POST['year1'];
        
          $output = "";
          $conn = mysqli_connect("localhost", "root", "", "test");
          $sql =   "SELECT * from patent where YEAR(reg_date) = '$year1'";
          echo"<p>Patent Records :</p>";
        
          $result = mysqli_query($conn, $sql);  
          while($row = mysqli_fetch_array($result)){
            $output .= '<tr> 
              <td>'.$row["sdrn"].'</td>  
              <td>'.$row["faculty_name"].'</td>  
              <td>'.$row["author1"].'</td>  
              <td>'.$row["author2"].'</td>  
              <td>'.$row["author3"].'</td>  
              <td>'.$row["author4"].'</td>
              <td>'.$row["designation"].'</td>   
              <td>'.$row["patent"].'</td>  
              <td>'.$row["title"].'</td>  
              <td>'.$row["application_no"].'</td>  
              <td>'.$row["status"].'</td>
              <td>'.$row["reg_amount"].'</td>  
              <td>'.$row["amount_funded"].'</td>  
              <td>'.$row["reg_date"].'</td>
              <td>'.$row["opt1"].'</td>    
            </tr> ';  
          }
          return $output;  
        } 
        echo yearly_PatentData();
        echo'</table></div><br>';


////////////////////////////////////////////////////// Copyright ////////////////////////////////////////////////////////////////
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
      <th> Application No.</th>   
      <th>Status</th> 
      <th>Registration Amount</th> 
      <th>Amount Funded</th>  
      <th>Registration Date</th>
      <th>Publisher</th>
      <th>Ntnl/Intnl</th>
      <th>Name of Institute</th>
      <th>Category</th>   
    </tr>  ';

    function yearly_CopyrightData(){ 
      $year1 = $_POST['year1'];
     
      echo '<p> Copyright Records :</p>';
      $output = "";
      $conn = mysqli_connect("localhost", "root", "", "test");
      $sql =   "SELECT * from copyright where YEAR(reg_date) = '$year1'";
        $result = mysqli_query($conn, $sql);  
        while($row = mysqli_fetch_array($result)){
          $output .= '<tr> 
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
          </tr> ';  
        }
        return $output;  
      } 
      echo yearly_CopyrightData();
      echo'</table></div><br>';


////////////////////////////////////////////////////// Journal ////////////////////////////////////////////////////////////////
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
    </tr>  ';

    function yearly_JournalData(){ 
      $year1 = $_POST['year1'];
    
      echo '<p> Journal Records :</p>';
      $output = "";
      $conn = mysqli_connect("localhost", "root", "", "test");
      $sql =   "SELECT * from journal where YEAR(year) = '$year1'";
        $result = mysqli_query($conn, $sql);  
        while($row = mysqli_fetch_array($result)){
          $output .= '<tr> 
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
          </tr> ';  
        }
        return $output;  
       } 
      echo yearly_JournalData();
      echo'</table></div><br>';

////////////////////////////////////////////////////// Conferences ////////////////////////////////////////////////////////////////
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
    </tr>  ';

    function yearly_ConferenceData(){ 
      $year1 = $_POST['year1'];
      
      echo '<p> Conference Records :</p>';
      $output = "";
      $conn = mysqli_connect("localhost", "root", "", "test");
      $sql =   "SELECT * from conference where YEAR(year) = '$year1'";
        $result = mysqli_query($conn, $sql);  
        while($row = mysqli_fetch_array($result)){
          $output .= '<tr> 
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
          </tr> ';  
        }
        return $output;  
      } 
      echo yearly_ConferenceData();
      echo'</table></div><br>';
    }
?>
    </div>
  </div>
</body>

<script>
  function createPdf() {
    var sTab = document.getElementById('Yearly_Rreport_tab').innerHTML;
    //var Tab2=document.getElementById('tab2').innerHTML;
    var style = "<style>";
    style = style + "table{ width : 100%; font: 17px Calibri;}"
    style = style + "table,th,td{border: solid 1px black; border-collapse : collapse;";
    style = style + "padding : 2px 3px; text-align: center;}";
    style = style + "</style>";
    var win = window.open(",", "height=700,width=700");
    win.document.write('<html><head>');
    win.document.write('<title>Report Genaration</title>');
    win.document.write(style);
    win.document.write('</head>');
    win.document.write('<body>');
    win.document.write(sTab);
    //win.document.write(Tab2);
    win.document.write('</body>');
    win.document.close();
    win.print();
  }
</script>

<script type="text/javascript">
  $("#btnExport").click(function (e) {
    window.open('data:application/vnd.ms-excel,' +
      encodeURIComponent($('#Yearly_Rreport_tab').html()));
    e.preventDefault();
  });
</script>

</html>
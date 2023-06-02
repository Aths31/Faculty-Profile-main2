<?php
@session_start();
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "root", "test");
if (isset($_SESSION['sdrn'])){
    $sdrn = $_SESSION['sdrn'];
    $faculty_name = $_SESSION['full_name'];
}
// $sdrn=150;
$i1=0;
$sql1 =  "SELECT * FROM book_chapter where (sdrn = '$sdrn' OR faculty_name LIKE '%$faculty_name%' OR author1 LIKE '%$faculty_name%' OR author2 LIKE '%$faculty_name%' OR author3 LIKE '%$faculty_name%' OR author4 LIKE '%$faculty_name%')" ; 
$result1 = mysqli_query($conn, $sql1);
if(mysqli_num_rows($result1)!=0){
  $output1="<p class='heading'><b>BOOK CHAPTER</b></p><p class='con'>";
while($row = mysqli_fetch_array($result1)){
  $i1=$i1+1;
  $authors=implode(", ",array_filter([$row["faculty_name"],$row["author1"],$row["author2"],$row["author3"],$row["author4"]]));
 $output1 .= "[".$i1."]  ".$authors.', "'.$row["chapter_name"].'" in '.$row["book_name"].", ".$row["publisher_name"].", ".$row["publication_year"].". </br></br>";  
}

$output1.="</p>";
}
else{
  $output1="";
}
?>
<?php
$i2=0;
$sql2 =  "SELECT * FROM book_publication " ; 
$result2 = mysqli_query($conn, $sql2); 
if(mysqli_num_rows($result2)!=0){
  $output2="<p class='heading'><b>BOOK PUBLICATION</b></p><p class='con'>";
while($row = mysqli_fetch_array($result2)){
  $i2=$i2+1;
  $authors=implode(", ",array_filter([$row["faculty_name"],$row["author1"],$row["author2"],$row["author3"],$row["author4"]]));
  $output2 .= "[".$i2."]  ".$authors.', "'.$row["book_name"].'", '.$row["publisher_name"].", ".$row["isbn_no"].", ".$row["year"].", ".$row["opt1"]. ". </br></br>";    
}
$output2.="</p>";
}
else{
  $output2="";
}
?>
<?php
$i3=0;
$sql3 =  "SELECT * from journal" ; 
$result3 = mysqli_query($conn, $sql3); 
if(mysqli_num_rows($result3)!=0){
  $output3="<p class='heading'><b>JOURNAL</b></p><p class='con'>";
while($row = mysqli_fetch_array($result3)){
  $i3=$i3+1;
  $authors=implode(", ",array_filter([$row["faculty_name"],$row["author1"],$row["author2"],$row["author3"],$row["author4"]]));
  $output3 .= "[".$i3."]  ".$authors.', "'.$row["title"].'", '.$row["journal_name"].', '.$row["volume_no"].", ".$row["publication_date"].", ".$row["opt1"] .". </br></br>";  
}
$output3.="</p>";
}
else{
  $output3="";
}
?>
<?php
$i4=0;
$sql4 =  "SELECT * FROM copyright " ; 
$result4 = mysqli_query($conn, $sql4); 
if(mysqli_num_rows($result4)!=0){
  $output4="<br><p class='heading'><b>COPYRIGHT</b></p><p class='con'>";
while($row = mysqli_fetch_array($result4)){
  $i4=$i4+1;
  $authors=implode(", ",array_filter([$row["faculty_name"],$row["author1"],$row["author2"],$row["author3"],$row["author4"]]));
  $output4 .= "[".$i4."]  ".$authors.', '.$row["copyright"].', "'.$row["title"].'", '.$row["opt1"]. ". </br></br>";     
}
$output4.="</p>";
}
else{
  $output4="";
}
?>
<?php
$i5=0;
$sql5 =  "SELECT * from patent " ; 
$result5 = mysqli_query($conn, $sql5); 
if(mysqli_num_rows($result5)!=0){
  $output5="<br><p class='heading'><b>PATENT</b></p><p class='con'>";
  while($row = mysqli_fetch_array($result5)){
    $i=$i+1;
    $authors=implode(", ",array_filter([$row["faculty_name"],$row["author1"],$row["author2"],$row["author3"],$row["author4"]]));
    $output5 .= "[".$i5."]  ".$authors.', '.$row["patent"].', "'.$row["title"].'", '.$row["opt1"]. ". </br></br>";     
  }
  $output5.="</p>";
}
else{
  $output5="";
}
?>
<?php
$i6=0;
$sql6 =  "SELECT * FROM conference " ; 
$result6 = mysqli_query($conn, $sql6); 
if(mysqli_num_rows($result6)!=0){
  $output6="<br><p class='heading'><b>CONFERENCE</b></p><p class='con'>";
while($row = mysqli_fetch_array($result6)){
  $i6=$i6+1;
  $authors=implode(", ",array_filter([$row["faculty_name"],$row["author1"],$row["author2"],$row["author3"],$row["author4"]]));
  $output6 .= "[".$i6."]  ".$authors.', "'.$row["paper_title"].'", '.$row["con_name"].', '.$row["con_place"].", ".$row["con_date"].", ".$row["indexed_in"].", ".$row["opt1"] .". </br></br>";  
}
$output6.="</p>";
}
else{
  $output6="";
}


$link = mysqli_connect("localhost", "root", "", "test");
if (isset($_SESSION['sdrn'])){
    $sdrn = $_SESSION['sdrn'];
    $faculty_name = $_SESSION['full_name'];
}
$i7=0;
$sql7 =  "SELECT * FROM workshop " ; 
$result7 = mysqli_query($link, $sql7);
if(mysqli_num_rows($result7)!=0){
  $output7="<br><p class='heading'><b>WORKSHOPS ATTENDED</b></p><p class='con'>";
while($row = mysqli_fetch_array($result7)){
  $i7=$i7+1;
 $output7 .="[" .$i7."] ".$row["criteria"]." on ( '".$row["Name_workshop"]."' ) , organized by ".$row["organiser"]." at ".$row['venue'].", From ".$row["sdate"].".</br></br>";  
}

$output7.="</p>";
}
else{
  $output7="";
}

$i8=0;
$sql8 =  "SELECT * FROM syllabus " ; 
$result8 = mysqli_query($link, $sql8);
if(mysqli_num_rows($result8)!=0){
  $output8="<br><p class='heading'><b>SYLLABUS SETTINGS</b></p><p class='con'>";
while($row = mysqli_fetch_array($result8)){
  $i8=$i8+1;
 $output8 .= "[".$i8."] ".$row["University"].", ".$row["Subject"].", SEM ".$row["Semester"].", ".$row["Venue"].", ".$row["Date"].".<br><br>";  
}

$output8.="</p>";
}
else{
  $output8="";
}

$i9=0;
$sql9 =  "SELECT * FROM orientation" ; 
$result9 = mysqli_query($link, $sql8);
if(mysqli_num_rows($result9)!=0){
  $output9="<br><p class='heading'><b>ORIENTATION</b></p><p class='con'>";
while($row = mysqli_fetch_array($result9)){
  $i9=$i9+1;
 $output9 .= "[".$i9."] ".$row["University"].", ".$row["Subject"].", SEM ".$row["Semester"].", ".$row["Venue"].", ".$row["Date"].".<br><br>";  
}

$output9.="</p>";
}
else{
  $output9="";
}



$link_tool = mysqli_connect("localhost", "root", "", "faculty");
if (isset($_SESSION['sdrn'])){
    $sdrn = $_SESSION['sdrn'];
    $faculty_name = $_SESSION['full_name'];
}
$i11=0;
$sql11 =  "select * from awards " ; 
$result11 = mysqli_query($link_tool, $sql11);
if(mysqli_num_rows($result11)!=0){
  $output11="<br><p class='heading'><b>AWARDS</b></p><p class='con'>";
while($row = mysqli_fetch_array($result11)){
  $i11=$i11+1;
 $output11 .="[" .$i11."] ".$row['1']." ( ".$row["2"]." ) ,".$row['3'].", ".$row["4"].", ".$row['5']." , ".$row['6'].",".$row['7'].",".$row['8'].",".$row['9'].",".$row['10'].",".$row['11'].",".$row['12'].".</br><br>";  
}

$output11.="</p>";
}
else{
  $output11="";
}

$link_tool = mysqli_connect("localhost", "root", "", "faculty");
if (isset($_SESSION['sdrn'])){
    $sdrn = $_SESSION['sdrn'];
    $faculty_name = $_SESSION['full_name'];
}
$i12=0;
$sql12 =  "select * from competitive_exam" ; 
$result12 = mysqli_query($link_tool, $sql12);
if(mysqli_num_rows($result12)!=0){
  $output12="<br><p class='heading'><b>Competitive Exams</b></p><p class='con'>";
while($row = mysqli_fetch_array($result12)){
  $i12=$i12+1;
 $output12 .="[" .$i12."] ".$row['1']." ( ".$row["2"]." ) ,".$row['3'].", ".$row["4"].", ".$row['5']." , ".$row['6'].",".$row['7'].".<br><br>";  
}

$output12.="</p>";
}
else{
  $output12="";
}

$link_tool = mysqli_connect("localhost", "root", "", "faculty");
if (isset($_SESSION['sdrn'])){
    $sdrn = $_SESSION['sdrn'];
    $faculty_name = $_SESSION['full_name'];
}
$i13=0;
$sql13 =  "select * from medicals " ; 
$result13 = mysqli_query($link_tool, $sql13);
if(mysqli_num_rows($result13)!=0){
  $output13="<br><p class='heading'><b>Medical Exams</b></p><p class='con'>";
while($row = mysqli_fetch_array($result13)){
  $i13=$i13+1;
 $output13 .="[" .$i13."] ".$row['1']." ( ".$row["2"]." ) ,".$row['3'].", ".$row["4"].", ".$row['5']." , ".$row['6'].",".$row['7'].".<br><br>";  
}

$output13.="</p>";
}
else{
  $output13="";
}

$link_tool = mysqli_connect("localhost", "root", "", "faculty");
if (isset($_SESSION['sdrn'])){
    $sdrn = $_SESSION['sdrn'];
    $faculty_name = $_SESSION['full_name'];
}
$i14=0;
$sql14 =  "select * from faculty_as_resource " ; 
$result14 = mysqli_query($link_tool, $sql14);
if(mysqli_num_rows($result14)!=0){
  $output14="<br><p class='heading'><b>Faculty as Resource</b></p><p class='con'>";
while($row = mysqli_fetch_array($result14)){
  $i14=$i14+1;
 $output14 .="[" .$i14."] "." ( ".$row[4]." ) ,".$row[5].", ".$row[9].", ".$row[10]." , ".$row['Date'].".<br><br>";  
}

$output14.="</p>";
}
else{
  $output14="";
}



$link_tool = mysqli_connect("localhost", "root", "", "workshoptool");
if (isset($_SESSION['sdrn'])){
    $sdrn = $_SESSION['sdrn'];
    $faculty_name = $_SESSION['full_name'];
}
$i15=0;
$sql15 =  "select * from organized " ; 
$result15 = mysqli_query($link_tool, $sql15);
if(mysqli_num_rows($result15)!=0){
  $output15="<br><p class='heading'><b>WORKSHOPS ORGANIZED</b></p><p class='con'>";
while($row = mysqli_fetch_array($result15)){
  $i15=$i15+1;
 $output15 .="[" .$i15."] ".$row['criteria']." ( ".$row['Name_workshop']." ) ,".$row['sponsor'].", ".$row['venue'].", ".$row['sdate']." , ".$row['edate'].", ".$row['ndays'].", ".$row['organiser'].", ".$row['org_type'].", ".$row['sfunding'].", ".$row['ramount'].", ".$row['amount_funded'].".<br><br>";  
}

$output15.="</p>";
}
else{
  $output15="";
}




?>
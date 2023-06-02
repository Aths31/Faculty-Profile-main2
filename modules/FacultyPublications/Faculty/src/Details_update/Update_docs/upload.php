<!DOCTYPE html>
<html>
	<head>

  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../../../css/internal_css.css">
    	<link rel="stylesheet" href="../../../css/util.css">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
		<title>Upload documents </title>
	</head>
	<body>
		<input type="button" value="Go Back!" onclick="history.back(-1)" />
		<?php
			$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
			echo "<a href='$url'></a>"; 
		?>

		<br><br>
		<div class="container " id="chapterCard" style="background :white">
			<h2 class="text-center" style="margin-top:3%; margin-bottom:5%">Upload Required Documents for Book Chapter</h2>
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">                   
                	<form action="<?php print $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                		<div class="form-group">
                        	<div class="table-responsive">  
                            	<table class="table"> 
                               
									<tr>  
										<th width="40%">Document Name</th>  
										<th width="30%">Choose Document</th>  
										
									</tr>
                            		<tbody>

										<tr>
											<td>Upload Plagirism Report</td>
											<td><input type="hidden" accept=".pdf" name="fileToUpload" id="fileToUpload" required>
											<input type="file"  name="pdfFile" required /></td>
										</tr>
										<tr>
											<td>Upload Paper</td>
											<td><input type="hidden"  accept=".pdf" name="fileToUpload" id="fileToUpload" required>
											<input type="file"  name="pdfFile1" required/></td>
										</tr>
										<tr>
											<td>Upload Proof of Registration Fees</td>								
											<td><input type="hidden"  accept=".pdf" name="fileToUpload" id="fileToUpload" required>
											<input type="file"  name="pdfFile2" required /></td>										
										</tr>
										<tr>
											<td>Upload Approval Letter</td>
											<td><input type="hidden"  accept=".pdf" name="fileToUpload" id="fileToUpload" required>
											<input type="file"  name="pdfFile3"  required/></td>										
										</tr>
										<tr>
											<td style="border:none"> 											
											</td>
											<td><input type="submit" id="pdf_submit" value="Upload Pdf" name="submit" required></td>										
										</tr>
									</tbody>
                 				</table>
            				</div>   
          				</div>
		  			</form>
					
    			</div>
			</div>
		</div>
		<br>
	</body>
</html>

<?php
	if ( isset( $_FILES['pdfFile'] ) ) {
		if ($_FILES['pdfFile']['type'] == "application/pdf") {
			$source_file = $_FILES['pdfFile']['tmp_name'];
			$dest_file = "../../../../Verification/documents/Book_chapter/plag/".$_FILES['pdfFile']['name'];

			if (file_exists($dest_file)) {
				print "The file name already exists!!";
			}
			else {
				move_uploaded_file( $source_file, $dest_file )
				or die ("Error!!");
				if($_FILES['pdfFile']['error'] == 0) {
					print "Pdf file uploaded successfully!";
					print "<br><b><u>Details : </u></b><br/>";
					print "File Name : ".$_FILES['pdfFile']['name']."<br.>"."<br/>";
					print "File Size : ".$_FILES['pdfFile']['size']." bytes"."<br/>";
					
				}
			}
		}
		else {
			if ( $_FILES['pdfFile']['type'] != "application/pdf") {
				print "Error occured while uploading file : ".$_FILES['pdfFile']['name']."<br/>";
				print "Invalid  file extension, should be pdf !!"."<br/>";
				print "Error Code : ".$_FILES['pdfFile']['error']."<br/>";
			}
		}
	}
?>
<?php
	if ( isset( $_FILES['pdfFile1'] ) ) {
		if ($_FILES['pdfFile1']['type'] == "application/pdf") {
			$source_file = $_FILES['pdfFile1']['tmp_name'];
			$dest_file = "../../../../Verification/documents/Book_chapter/paper/".$_FILES['pdfFile1']['name'];

			if (file_exists($dest_file)) {
				print "The file name already exists!!";
			}
			else {
				move_uploaded_file( $source_file, $dest_file )
				or die ("Error!!");
				if($_FILES['pdfFile1']['error'] == 0) {
					print "Pdf file uploaded successfully!<br>";
					print "<b><u>Details : </u></b><br/>";
					print "File Name : ".$_FILES['pdfFile1']['name']."<br.>"."<br/>";
					print "File Size : ".$_FILES['pdfFile1']['size']." bytes"."<br/>";
					
				}
			}
		}
		else {
			if ( $_FILES['pdfFile1']['type'] != "application/pdf") {
				print "Error occured while uploading file : ".$_FILES['pdfFile1']['name']."<br/>";
				print "Invalid  file extension, should be pdf !!"."<br/>";
				print "Error Code : ".$_FILES['pdfFile1']['error']."<br/>";
			}
		}
	}
?>



<?php
	if ( isset( $_FILES['pdfFile2'] ) ) {
		if ($_FILES['pdfFile2']['type'] == "application/pdf") {
			$source_file = $_FILES['pdfFile2']['tmp_name'];
			$dest_file = "../../../../Verification/documents/Book_chapter/fees/".$_FILES['pdfFile2']['name'];

			if (file_exists($dest_file)) {
				print "The file name already exists!!";
			}
			else {
				move_uploaded_file( $source_file, $dest_file )
				or die ("Error!!");
				if($_FILES['pdfFile2']['error'] == 0) {
					print "Pdf file uploaded successfully!<br>";
					print "<b><u>Details : </u></b><br/>";
					print "File Name : ".$_FILES['pdfFile2']['name']."<br.>"."<br/>";
					print "File Size : ".$_FILES['pdfFile2']['size']." bytes"."<br/>";
					
				}
			}
		}
		else {
			if ( $_FILES['pdfFile2']['type'] != "application/pdf") {
				print "Error occured while uploading file : ".$_FILES['pdfFile2']['name']."<br/>";
				print "Invalid  file extension, should be pdf !!"."<br/>";
				print "Error Code : ".$_FILES['pdfFile2']['error']."<br/>";
			}
		}
	}
?>
<?php
	if ( isset( $_FILES['pdfFile3'] ) ) {
		if ($_FILES['pdfFile3']['type'] == "application/pdf") {
			$source_file = $_FILES['pdfFile3']['tmp_name'];
			$dest_file = "../../../../Verification/documents/Book_chapter/approval/".$_FILES['pdfFile3']['name'];

			if (file_exists($dest_file)) {
				print "The file name already exists!!";
			}
			else {
				move_uploaded_file( $source_file, $dest_file )
				or die ("Error!!");
				if($_FILES['pdfFile3']['error'] == 0) {
					print "Pdf file uploaded successfully!<br>";
					print "<b><u>Details : </u></b><br/>";
					print "File Name : ".$_FILES['pdfFile3']['name']."<br.>"."<br/>";
					print "File Size : ".$_FILES['pdfFile3']['size']." bytes"."<br/>";
				}
			}
		}
		else {
			if ( $_FILES['pdfFile3']['type'] != "application/pdf") {
				print "Error occured while uploading file : ".$_FILES['pdfFile3']['name']."<br/>";
				print "Invalid  file extension, should be pdf !!"."<br/>";
				print "Error Code : ".$_FILES['pdfFile3']['error']."<br/>";
			}
		}
	}
?>


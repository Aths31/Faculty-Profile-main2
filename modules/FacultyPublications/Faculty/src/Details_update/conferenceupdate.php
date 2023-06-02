<?php
    $conn = new mysqli('localhost', 'root', '');  
    mysqli_select_db($conn, 'test'); 

    if(count($_POST)>0) {
        mysqli_query($conn,"UPDATE conference set id='" . $_POST['id'] . "', author1='" . $_POST['author1'] . "', 
            author2='" . $_POST['author2'] . "', author3='" . $_POST['author3'] . "' ,
            author4='" . $_POST['author4'] . "' , paper_title='" . $_POST['paper_title']. "' ,
            con_name='" . $_POST['con_name'] . "' , con_place='" . $_POST['con_place'] . "' ,
            con_date='" . $_POST['con_date'] . "' , ntnl_no='" . $_POST['ntnl_no'] . "' , 
            isbn_no='" . $_POST['isbn_no'] . "' , doi='" . $_POST['doi'] . "' 
            ,year='" . $_POST['year'] . "' ,
            org='" . $_POST['org'] . "' ,
            institute='" . $_POST['institute'] . "' ,
            indexed_in='" . $_POST['indexed_in'] . "' ,no_of_times='" . $_POST['no_of_times'] . "' 
            ,reg_amount='" . $_POST['reg_amount'] .  "' ,amount_sanctioned='" . $_POST['amount_sanctioned'] . "' ,
            presented_personally='" . $_POST['presented_personally']. "' ,awards='" . $_POST['awards'] ."' ,
            opt1='" . $_POST['opt1'] . "' ,opt2='" . $_POST['opt2'] . "' ,opt3='" . $_POST['opt3'] . "' 
        WHERE id='" . $_POST['id'] . "'");

        echo '<script>alert("Record modified successfully!");
        window.location = "../Details_show/show_conference.php";
        </script>';  
    }
    $result = mysqli_query($conn,"SELECT * FROM conference WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
?>

<html>
    <head>
        <title>Update Employee Data</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/internal_css.css">
        <link rel="stylesheet" href="../../css/util.css">
        <link rel="stylesheet" href="../../css/details_collection.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    </head>
    <body>
    <input id= "goback" type="button" value="Go Back!" onclick="history.back(-1)" />
        <?php
            $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
            echo "<a href='$url'></a>"; 
        ?>
    
        <br>
        <h3 style="margin:2%; text-align :center;" id="headingh3"> Update Conferences Records</h3>
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="card" id="chapterCard">
                            <div class="card-body" >
                                <div>
                                    <?php if(isset($message)) { echo $message; } ?>
                                </div>
                                <form name="frmUser" method="post" action="">
                                    <div class="form-group">
                                        <label class="col-lg-4 ">ID :</label>
                                        <input type="hidden" name="id" class="form-control col-lg-8 m-b-10" value="<?php echo $row['id']; ?>">
                                        <input type="text" name="id"  class="form-control col-lg-8 m-b-10" value="<?php echo $row['id']; ?>">                                   
                                        <label class="col-lg-4">SDRN Number :</label>
                                        <input type="text" class="form-control col-lg-8 m-b-10" value="<?php echo $row['sdrn']; ?>" name="sdrn">   
                                        <label class="col-lg-4">Faculty Name :</label>
                                        <input type="text" class="form-control col-lg-8 m-b-10" value="<?php echo $row['faculty_name'];?> " name="faculty_name1">
                                        
                                        <label class="col-lg-4" id="insert"><span>*</span> Authors Name :</label>
                                        <input type="text" class="form-control col-lg-8 m-b-10" value="<?php echo $row['author1']; ?>" placeholder="Enter the name of author 1 here"  name="author1" >
                                        <div class="col-lg-4"></div>
                                        <input type="text" class="form-control col-lg-8 m-b-10" value="<?php echo $row['author2']; ?>" placeholder="Enter the name of author 2 here"  name="author2" >
                                        <div class="col-lg-4"></div>
                                        <input type="text" class="form-control col-lg-8 m-b-10" value="<?php echo $row['author3']; ?>" placeholder="Enter the name of author 3 here"  name="author3" >
                                        <div class="col-lg-4"></div>
                                        <input type="text" class="form-control col-lg-8 m-b-10" value="<?php echo $row['author4']; ?>" placeholder="Enter the name of author 4 here"  name="author4" >
                                        
                                        <br>
                                        <label class="col-lg-4 ">Paper Title:</label>
                                        <input type="text" name="paper_title" class="form-control col-lg-8 m-b-10" value="<?php echo $row['paper_title']; ?>">
                                        <br>
                                        <label class="col-lg-4 ">Conference Name:</label>
                                        <input type="text" name="con_name" class="form-control col-lg-8 m-b-10" value="<?php echo $row['con_name']; ?>">
                                        <br>
                                        <label class="col-lg-4 ">Conference Place:</label>
                                        <input type="text" name="con_place" class="form-control col-lg-8 m-b-10" value="<?php echo $row['con_place']; ?>">
                                        <br>
                                        <label class="col-lg-4 ">Conference Date:</label>
                                        <input type="date" name="con_date" class="form-control col-lg-8 m-b-10" value="<?php echo $row['con_date']; ?>">
                                        <br>
                                        <label class="col-lg-4 ">NTNL/INTNL:</label>
                                        <input type="text" name="ntnl_no" class="form-control col-lg-8 m-b-10" value="<?php echo $row['ntnl_no']; ?>">
                                        <br>
                                        <label class="col-lg-4 ">ISBN No.:</label>
                                        <input type="text" name="isbn_no" class="form-control col-lg-8 m-b-10" value="<?php echo $row['isbn_no']; ?>">
                                        <br>
                                        <label class="col-lg-4 ">DOI:</label>
                                        <input type="text" name="doi" class="form-control col-lg-8 m-b-10" value="<?php echo $row['doi']; ?>">
                                        <br>
                                        <label class="col-lg-4 ">Publication Year:</label>
                                        <input type="date" name="year" class="form-control col-lg-8 m-b-10" value="<?php echo $row['year']; ?>">

                                        <label class="col-lg-4">Organization:</label>
                                        <input type="text" name="org" class="form-control col-lg-8 m-b-10" value="<?php echo $row['org']; ?>">
                                        <br>

                                        <label class="col-lg-4">Name of institute:</label>
                                        <input type="text" name="institute" class="form-control col-lg-8 m-b-10" value="<?php echo $row['institute']; ?>">
                                        <br>

                                        <br>
                                        <label class="col-lg-4 ">Indexed in IEEE Explorer:</label>
                                        <input type="text" name="indexed_in" class="form-control col-lg-8 m-b-10" value="<?php echo $row['indexed_in']; ?>">
                                        <br>
                                        <label class="col-lg-4 ">Number of times Cited:</label>
                                        <input type="number" name="no_of_times" class="form-control col-lg-8 m-b-10" value="<?php echo $row['no_of_times']; ?>">
                                        <br>
                                        <label class="col-lg-4 ">Registeration amount:</label>
                                        <input type="number" name="reg_amount" class="form-control col-lg-8 m-b-10" value="<?php echo $row['reg_amount']; ?>">
                                        <br>
                                        <label class="col-lg-4 ">Amount sanctioned:</label>
                                        <input type="number" name="amount_sanctioned" class="form-control col-lg-8 m-b-10" value="<?php echo $row['amount_sanctioned']; ?>">
                                        <br>
                                        <label class="col-lg-4 ">Presented personally?:</label>
                                        <input type="text" name="presented_personally" class="form-control col-lg-8 m-b-10" value="<?php echo $row['presented_personally']; ?>">
                                        <br>
                                        <label class="col-lg-4 ">Awards:</label>
                                        <input type="text" name="awards" class="form-control col-lg-8 m-b-10" value="<?php echo $row['awards']; ?>">
                                        <br>
                                        <label class="col-lg-4 ">Category:</label>
                                        <select name="opt1"  class="form-control  m-b-10 col-lg-8">
                                            <option><?php echo $row['opt1']; ?></option>
                                            <option>--SELECT--</option>
                                            <option value="UG">UG</option>
                                            <option value="PG">PG</option>
                                            <option value="PhD">PhD</option>
                                            <option value="Personal">Personal</option> 
                                        </select>
                                        <br>
                                        <label class="col-lg-4 ">Option 1:</label>
                                        <textarea class= "form-control col-lg-8 m-b-10 " rows="3" name="opt2"><?php echo $row['opt2']; ?></textarea>
                                        <br>
                                        <label class="col-lg-4 ">Option 2:</label>
                                        <textarea class= "form-control col-lg-8 m-b-10 " rows="3" name="opt3"><?php echo $row['opt3']; ?></textarea>
                                        <br>
                                        <input type="submit" name="submit" id="submit" value="Submit" class="button btn btn-primary col-lg-4 btn-lg m-t-10">
                                    </div>
                                </form>
                                <br>
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </body>
</html>
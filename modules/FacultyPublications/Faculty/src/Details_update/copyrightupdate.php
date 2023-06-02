<?php 
    $conn = new mysqli('localhost', 'root', '');  
    mysqli_select_db($conn, 'test'); 
        if(count($_POST)>0) {
            mysqli_query($conn,"UPDATE copyright set id='". $_POST['id'] . "', author1='" . $_POST['author1'] ."', author2='" . $_POST['author2'] ."', 
            author3='" . $_POST['author3'] ."', author4='" . $_POST['author4'] ."', 
            designation='" . $_POST['designation'] ."', copyright='" . $_POST['copyright'] ."', 
            title='" . $_POST['title'] ."', application_no='" . $_POST['application_no'] ."', 
            status='" . $_POST['status'] ."', reg_amount='" . $_POST['reg_amount'] ."', 
            amount_funded='" . $_POST['amount_funded'] . "', reg_date='" . $_POST['reg_date'] . "',
            publisher='" . $_POST['publisher'] . "',
            ntnl='" . $_POST['ntnl'] . "',
            institute='" . $_POST['institute'] . "',
            opt1='" . $_POST['opt1'] . "' ,opt2='" . $_POST['opt2'] . "' ,opt3='" . $_POST['opt3'] ."' WHERE id='" . $_POST['id'] . "'");
            echo '<script>alert("Record modified successfully!");
            window.location = "../Details_show/show_copyright.php";
            </script>';  
    }
    $result = mysqli_query($conn,"SELECT * FROM copyright WHERE id='" . $_GET['id'] . "'");
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
        <h3 style="margin:2%; text-align :center;" id="headingh3"> Update Copyright Records</h3>
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
                                        <label class="col-lg-4">ID :</label>
                                        <input type="hidden" name="id" class="form-control col-lg-8 m-b-10" value="<?php echo $row['id']; ?>">
                                        <input type="text" name="id"  class="form-control col-lg-8 m-b-10" value="<?php echo $row['id']; ?>">
                                        

                                        <label class="col-lg-4" id="insert"><span>*</span> Authors Name :</label>
                                        <input type="text" class="form-control col-lg-8 m-b-10" value="<?php echo $row['author1']; ?>" placeholder="Enter the name of author 1 here"  name="author1" >
                                        <div class="col-lg-4"></div>
                                        <input type="text" class="form-control col-lg-8 m-b-10" value="<?php echo $row['author2']; ?>" placeholder="Enter the name of author 2 here"  name="author2" >
                                        <div class="col-lg-4"></div>
                                        <input type="text" class="form-control col-lg-8 m-b-10" value="<?php echo $row['author3']; ?>" placeholder="Enter the name of author 3 here"  name="author3" >
                                        <div class="col-lg-4"></div>
                                        <input type="text" class="form-control col-lg-8 m-b-10" value="<?php echo $row['author4']; ?>" placeholder="Enter the name of author 4 here"  name="author4" >
                                        
                                        <label class="col-lg-4">Designation of Faculty :</label>
                                        <input type="text" id="chapter" class="form-control col-lg-8 m-b-10" value="<?php echo $row['designation']; ?>" name="designation" >

                                        <label class="col-lg-4">Copyright :</label>
                                        <input type="text" class="form-control col-lg-8 m-b-10"  value="<?php echo $row['copyright']; ?> "  name="copyright" >

                                        <label class="col-lg-4">Title :</label>
                                        <input type="text" class="form-control col-lg-8 m-b-10" value="<?php echo $row['title']; ?> " name="title" >

                                        <label class="col-lg-4">Application No. :</label>
                                        <input type="text" class="form-control col-lg-8 m-b-10"  value="<?php echo $row['application_no']; ?> " name="application_no" >

                                        <label class="col-lg-4">Status :</label>
                                        <input type="text" class="form-control col-lg-8 m-b-10"  value="<?php echo $row['status']; ?>" name="status" >

                                        <label class="col-lg-4"> Registration Amount :</label>
                                        <input type="number" class="form-control col-lg-8 m-b-10" value="<?php echo $row['reg_amount']; ?>"  name="reg_amount" >

                                        <label class="col-lg-4"> Amount Funded :</label>
                                        <input type="number" class="form-control col-lg-8 m-b-10" value="<?php echo $row['amount_funded']; ?>"  name="amount_funded" >

                                        <label class="col-lg-4"> Registration Date :</label>
                                        <input type="date" class="form-control col-lg-8 m-b-10" name="reg_date" value="<?php echo $row['reg_date']; ?>" >

                                          <label class="col-lg-4">Publisher :</label>
                                        <input type="text" class="form-control col-lg-8 m-b-10"  value="<?php echo $row['publisher']; ?>" name="publisher" >
                                        
                                          <label class="col-lg-4">Ntnl/Intnl :</label>
                                        <input type="text" class="form-control col-lg-8 m-b-10"  value="<?php echo $row['ntnl']; ?>" name="ntnl" >
                                          <label class="col-lg-4">Name of institute :</label>
                                        <input type="text" class="form-control col-lg-8 m-b-10"  value="<?php echo $row['institute']; ?>" name="institute" >


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
                                        <label class="col-lg-4">  Option 1 :</label>
                                        <textarea class= "form-control col-lg-8 m-b-10 " rows="3" name="opt2"><?php echo $row['opt2'];?></textarea>

                                        <label class="col-lg-4">  Option 2 :</label>
                                        <textarea class= "form-control col-lg-8 m-b-10 " rows="3" name="opt3"><?php echo $row['opt3'];?></textarea>

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
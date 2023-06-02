<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            @session_start();
            if (isset($_SESSION['sdrn'])){
                
                $sdrn = $_SESSION['sdrn'];
                $First_name= $_SESSION['First_name'];
                $Middle_name= $_SESSION['Middle_name'];
                $Last_name= $_SESSION['Last_name'];

            }
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Faculty publication Management</title>
        <link rel="stylesheet" href="../../css/details_collection.css">
        <link rel="stylesheet" href="../../css/internal_css.css">
        <link rel="stylesheet" href="../../css/util.css">

  
        <!-- Bootstrap JS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


        <style>
           label{
               font-weight:normal;
           }
        </style>  
    </head>
    <body> 
        <input id= "goback" type="button" value="Go Back!" onclick="history.back(-1)" />
        <?php
            $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
            echo "<a href='$url'></a>"; 
        ?>
   
    
        <h2 class="text-center" style="margin-top:1%; margin-bottom: 2% " id="heading" >Copyright</h2>
        
        <!-- Categories -->
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <div class="card" id="chapterCard">
                        <div class="card-body" >

                        <!-- Login -->
                        <form action="chapter.php" method="POST">
                            <p class="text-center" style="margin-bottom: 2% ;font-weight: bold">All <span>*</span> marked fields are compulsory</p>
                            <div class="form-group">
                            <label class="col-lg-4" id="insert"><span>*</span> SDRN Number :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10"   value="<?php echo $sdrn; ?>"   name="sdrn" disabled="disabled">   
                            <label class="col-lg-4" id="insert"><span>*</span> Faculty Name :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10"   value="<?php echo $First_name ;echo " "; echo $Middle_name; echo " "; echo $Last_name;?> " name="faculty_name" disabled="disabled">
                            
                            <label class="col-lg-4" id="insert"><span>*</span> Authors Name :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10"  placeholder="Enter the name of author 1 here"  name="author1" >
                            <div class="col-lg-4"></div>
                            <input type="text" class="form-control col-lg-8 m-b-10"  placeholder="Enter the name of author 2 here"  name="author2" >
                            <div class="col-lg-4"></div>
                            <input type="text" class="form-control col-lg-8 m-b-10"  placeholder="Enter the name of author 3 here"  name="author3" >
                            <div class="col-lg-4"></div>
                            <input type="text" class="form-control col-lg-8 m-b-10"  placeholder="Enter the name of author 4 here"  name="author4" >
                             
                            <label class="col-lg-4" id="insert"><span>*</span> Designation of Faculty :</label>
                            <input type="text" id="chapter"  class="form-control col-lg-8 m-b-10" autocomplete="off" placeholder="Enter Faculty Designation here" name="designation" required>
                            <label class="col-lg-4" id="insert"><span>*</span> Copyright :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10"  placeholder="Enter Copyright here" autocomplete="off" name="copyright" required>
                            <label class="col-lg-4" id="insert"><span>*</span> Title :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10" autocomplete="off"  placeholder="Enter Title here" name="title" required>
                            <label class="col-lg-4" id="insert"><span>*</span> Application No. :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10" autocomplete="off"  placeholder="Enter Application No. here" name="application_no" required>
                            <label class="col-lg-4" id="insert"><span>*</span> Status :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10" autocomplete="off"  placeholder="Enter Status here" name="status" required>
                            <label class="col-lg-4" id="insert"><span>*</span> Registration Amount :</label>
                            <input type="number" class="form-control col-lg-8 m-b-10"  placeholder="Enter Registration Amount here" name="reg_amount" required>
                            <label class="col-lg-4" id="insert"><span>*</span> Amount Funded :</label>
                            <input type="number" class="form-control col-lg-8 m-b-10"  placeholder="Enter Amount Funded here" name="amount_funded" required>
                            <label class="col-lg-4" id="insert"><span>*</span> Registration Date :</label>
                            <input type="date" class="form-control col-lg-8 m-b-10"  name="reg_date" required>
                            <label id="insert" class="col-lg-4"><span>*</span>  Publisher:</label>
                            <input type="text" class="form-control col-lg-8 m-b-10"  placeholder="Enter Name of Publisher  here" autocomplete="off" name="publisher" >
                            <label class="col-lg-4" id="insert"><span>*</span> Ntnl/Intnl :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10"  autocomplete="off" placeholder="Enter Ntnl/Intnl here" name="ntnl" required>
                            <label id="insert" class="col-lg-4"><span>*</span>  Name of Institute:</label>
                            <input type="text" class="form-control col-lg-8 m-b-10"  placeholder="Enter Name of Institute  here" autocomplete="off" name="institute" >
                            <label class="col-lg-4" id="insert">Category :</label>
                            <select class="form-control col-lg-8 m-b-10"  name="opt1">
                                <option>--SELECT--</option>
                                <option value="UG">UG</option>
                                <option value="PG">PG</option>
                                <option value="PhD">PhD</option>
                                <option value="Personal">Personal</option>
                            </select>
                            <label class="col-lg-4" id="insert">  Option 1 :</label>
                            <textarea class= "form-control col-lg-8 m-b-10 " rows="3" value=" " autocomplete="off" placeholder="Enter option 1 here.." name="opt2"></textarea>
                            <label class="col-lg-4" id="insert">  Option 2 :</label>
                            <textarea class= "form-control col-lg-8 m-b-10 " rows="3" value=" " autocomplete="off" placeholder="Enter option 2 here.." name="opt3"></textarea>
                            <button type="submit" class="btn btn-primary col-lg-4 btn-lg m-t-10" id="submit" name="submit_copyright">Submit</button>
                        </div>  
                    </form>
                   
                           
                </div>
            </div>
        <div class="col-lg-4">
        </div>
        <br>
        
            <!-- <div class="card" id="chapterCard"> -->
                <!-- <div class="card-body" >   -->
                    <div class="col-lg-4"></div>
                        <form action="../Details_show/show_copyright.php" method="POST">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" id="submit" name="show_copyright" >Show Copyright Records</button> 
                        </form>
                    </div>
                <!-- </div>     -->
            <!-- </div> -->
        </div>
        </div> 
        <br>
        <br>
    </body>
</html>



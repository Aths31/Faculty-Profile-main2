<!DOCTYPE html>
<html lang="en">
    <head>
    <?php 
        @session_start();
        if (isset($_SESSION['sdrn']))
        {    
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
        <link rel="stylesheet" href="../../css/internal_css.css">
        <link rel="stylesheet" href="../../css/util.css">
        <link rel="stylesheet" href="../../css/details_collection.css">
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
   
        <h2 class="text-center" style="margin-top:1%; margin-bottom: 2%;" id="heading" >Conferences</h2>
        
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
                            <div class="form-group" >
                            <label id="insert" class="col-lg-4"><span>*</span> SDRN Number :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10"  value="<?php echo $sdrn; ?>"  name="sdrn" disabled="disabled">   
                            <label id="insert" class="col-lg-4"><span>*</span> Faculty Name :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10" value=" <?php echo $First_name ;echo " "; echo $Middle_name; echo " "; echo $Last_name;?>" name="faculty_name" disabled="disabled">
                            
                            <label class="col-lg-4" id="insert"><span>*</span> Authors Name :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10"  placeholder="Enter the name of author 1 here"  name="author1" >
                            <div class="col-lg-4"></div>
                            <input type="text" class="form-control col-lg-8 m-b-10"  placeholder="Enter the name of author 2 here"  name="author2" >
                            <div class="col-lg-4"></div>
                            <input type="text" class="form-control col-lg-8 m-b-10"  placeholder="Enter the name of author 3 here"  name="author3" >
                            <div class="col-lg-4"></div>
                            <input type="text" class="form-control col-lg-8 m-b-10"  placeholder="Enter the name of author 4 here"  name="author4" >
                            

                            <label id="insert" class="col-lg-4"><span>*</span> Title of paper :</label>
                            <input type="text" id="chapter" class="form-control col-lg-8 m-b-10" autocomplete="off"  placeholder="Enter Title of paper here" name="paper_title" required>
                            <label id="insert" class="col-lg-4"><span>*</span> Name of Conference:</label>
                            <input type="text" class="form-control col-lg-8 m-b-10" autocomplete="off"  placeholder="Enter Conference Name here" name="con_name" required>
                            <label id="insert" class="col-lg-4"><span>*</span> Conference Place:</label>
                            <input type="text" class="form-control col-lg-8 m-b-10" autocomplete="off"  placeholder="Enter Conference Place here" name="con_place" required>
                            <label id="insert" class="col-lg-4"><span>*</span> Conference Date :</label>
                            <input type="date" class="form-control col-lg-8 m-b-10" value="0000/00/00 " name="con_date" required>
                            <label id="insert" class="col-lg-4"><span>*</span> Ntnl/Intnl :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10"  autocomplete="off" placeholder="Enter Ntnl/Intnl here" name="ntnl_no" required>
                            <label id="insert" class="col-lg-4"><span>*</span> ISBN/ISBN/ACCN Number :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10" autocomplete="off"  placeholder="Enter ISBN/ISSN/ACCN number here" name="isbn_no" required>
                            <label id="insert" class="col-lg-4"><span>*</span> DOI :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10" autocomplete="off"  placeholder="Enter DOI here" name="doi" required>
                            <label id="insert" class="col-lg-4"><span>*</span> Year of Publication :</label>
                            <input type="date" class="form-control col-lg-8 m-b-10" name="year"  required>
                            <label class="col-lg-4" id="insert"><span>*</span> Organization Name:</label>
                            <input type="text" class="form-control col-lg-8 m-b-10" name="org"  placeholder="Enter Organization Name here" required>
                            <label class="col-lg-4" id="insert"><span>*</span> Institute Name:</label>
                            <input type="text" class="form-control col-lg-8 m-b-10" name="institute"  placeholder="Enter Institute Name here" required>
                            <label id="insert" class="col-lg-4"><span>*</span> Indexed in IEEE Explorer :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10" autocomplete="off"  placeholder="Indexed in IEEE Explorer/ Scopus/..." name="indexed_in" required>
                            <label id="insert" class="col-lg-4"><span>*</span> No. of Times Cited :</label>
                            <input type="number" class="form-control col-lg-8 m-b-10"  placeholder="Enter No. of Times Cited here" name="no_of_times" required>
                            <label id="insert" class="col-lg-4"><span>*</span> Registration Amount :</label>
                            <input type="number" class="form-control col-lg-8 m-b-10"  placeholder="Enter Registration Amount here" name="reg_amount" required>
                            <label id="insert" class="col-lg-4"><span>*</span> Amount Sanctioned :</label>
                            <input type="number" class="form-control col-lg-8 m-b-10"  placeholder="Enter Sanctioned Amount here" name="amount_sanctioned" required>
                            <label id="insert" class="col-lg-4"><span>*</span> Presented Personally? :</label>
                            <select class="form-control col-lg-8 m-b-10" value=" " name="presented_personally">
                                <option>--SELECT--</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <label id="insert" class="col-lg-4"><span>*</span> Awards :</label>
                            <textarea class= "form-control col-lg-8 m-b-10 " rows="3" value=" " autocomplete="off" placeholder="Enter Awards here.." name="awards"></textarea>
                            <label class="col-lg-4" id="insert">Category :</label>
                            <select class="form-control col-lg-8 m-b-10" value=" " name="opt1">
                                <option>--SELECT--</option>
                                <option value="UG">UG</option>
                                <option value="PG">PG</option>
                                <option value="PhD">PhD</option>
                                <option value="Personal">Personal</option>
                            </select>
                            <label id="insert" class="col-lg-4">  Option 1 :</label>
                            <textarea class= "form-control col-lg-8 m-b-10 " rows="3" value=" " autocomplete="off" placeholder="Enter option 1 here.." name="opt2"></textarea>
                            <label id="insert" class="col-lg-4">  Option 2 :</label>
                            <textarea class= "form-control col-lg-8 m-b-10 " rows="3" autocomplete="off" value=" " placeholder="Enter option 2 here.." name="opt3"></textarea>
                            <button type="submit" class="btn btn-primary col-lg-4 btn-lg m-t-10" id="submit" name="submit_conference">Submit</button>
                            </div>  
                        </form>
                   
                    
                        <br>
                             
                    </div>
                
            </div>
        <div class="col-lg-4">
        </div>
        <br>
        
        <!-- <div class="card" id="chapterCard"> -->
            <!-- <div class="card-body" >                                  -->
                <div class="col-lg-4"></div>
                    <form action="../Details_show/show_conference.php" method="POST">
                    <button type="submit" id="submit" class="btn btn-primary btn-lg btn-block" name="show_conference" >Show Conferences Records</button>                                 
                    </form>
                </div>
            <!-- </div>           -->
        <!-- </div> -->
    </div>
    </div> 
    <br>
    <br>
</body>
</html>



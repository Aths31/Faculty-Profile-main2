
                            
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

    </head>
    <style>
        label{
            font-weight:normal;
        }
    </style>
<body>
   
    <input type="button" value="Go Back!" onclick="history.back(-1)" />
    <?php
        $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
        echo "<a href='$url'>back</a>"; 
    ?>
   
    
        <h2 class="text-center" id="heading"  style="margin-top:1%; margin-bottom: 2%;">Book Publication</h2>
        
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
                            <input type="text" class="form-control col-lg-8 m-b-10"   value="<?php echo $First_name ;echo " "; echo $Middle_name; echo " "; echo $Last_name;?> " name="faculty_name1" disabled="disabled">
                            
                            
                            <label class="col-lg-4" id="insert"><span>*</span> Authors Name :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10" placeholder="Enter the name of author 2 here" placeholder="Enter the name of author 1 here"  name="author1" >
                            <div class="col-lg-4"></div>
                            <input type="text" class="form-control col-lg-8 m-b-10" placeholder="Enter the name of author 3 here" placeholder="Enter the name of author 2 here"  name="author2" >
                            <div class="col-lg-4"></div>
                            <input type="text" class="form-control col-lg-8 m-b-10" placeholder="Enter the name of author 4 here" placeholder="Enter the name of author 3 here"  name="author3" >
                            <div class="col-lg-4"></div>
                            <input type="text" class="form-control col-lg-8 m-b-10" placeholder="Enter the name of author 5 here" placeholder="Enter the name of author 4 here"  name="author4" >
                            <label class="col-lg-4" id="insert"><span>*</span> Book Name :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10"  placeholder="Enter Book Name here" autocomplete="off" name="book_name" required>
                            <label class="col-lg-4" id="insert"><span>*</span> Publisher Name :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10"  placeholder="Enter Publisher Name here" autocomplete="off" name="publisher_name" required>
                            <label id="insert" class="col-lg-4"> ISBN/ISSN Number :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10"  placeholder="Enter ISBN/ISSN No. here" autocomplete="off" name="isbn_no" >
                            <label id="insert" class="col-lg-4"><span>*</span> Year of Publication :</label>
                            <input type="date" class="form-control col-lg-8 m-b-10" name="year"  required>
                            <label id="insert" class="col-lg-4"><span>*</span> Designation :</label>
                            <input type="text" class="form-control col-lg-8 m-b-10"  placeholder="Enter Designation here" autocomplete="off" name="desgn" >
                            <label id="insert" class="col-lg-4"><span>*</span> Name of Institute:</label>
                            <input type="text" class="form-control col-lg-8 m-b-10"  placeholder="Enter Name of Institute  here" autocomplete="off" name="institute" >
                            <label class="col-lg-4" id="insert">Category :</label>
                            <select class="form-control col-lg-8 m-b-10" value=" " name="opt1">
                                <option>--SELECT--</option>
                                <option value="UG">UG</option>
                                <option value="PG">PG</option>
                                <option value="PhD">PhD</option>
                                <option value="Personal">Personal</option>
                            </select>
                            <label class="col-lg-4" id="insert">  Option 1 :</label>
                            <textarea class= "form-control col-lg-8 m-b-10 " rows="3" value=" " placeholder="Enter option 1 here.." autocomplete="off" name="opt2"></textarea>
                            <label class="col-lg-4" id="insert">  Option 2 :</label>
                            <textarea class= "form-control col-lg-8 m-b-10 " rows="3" value=" " placeholder="Enter option 2 here.." autocomplete="off" name="opt3"></textarea>
                            <input type="submit" class="btn btn-primary col-lg-4 btn-lg m-t-10"  id="submit" value= "Submit" name="submit_publication">
                        </div>  
                    </form>
                   
                           
                </div>
            </div>
        <div class="col-lg-4">
        </div>
        <br>
        
        <div class="card" id="chapterCard">
            <div class="card-body" >  
                                  
                <div class="col-lg-4"></div>
                              
                    <form action="../Details_show/show_book_publication.php" method="POST">
                        <button type="submit" class="btn btn-primary btn-lg btn-block"id="submit"  name="show_publication" >Show Book Publication Records</button> 
                    </form>
                </div>
            </div>    
        </div>
    </div>
    </div> 
    <br>
    <br>
</body>
</html>



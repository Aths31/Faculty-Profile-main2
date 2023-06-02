<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            @session_start();
            if (isset($_SESSION['sdrn'])){
                $sdrn = $_SESSION['sdrn'];
                $First_name= $_SESSION['First_name'];
            }
        ?>
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Faculty publication Management</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/internal_css.css">
        <link rel="stylesheet" href="../../css/util.css">
        <link rel="stylesheet" href="../../css/details_collection.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div style="float:right " >
		    <form class="form-inline my-2 my-lg-0">
                <a href="../../login.php" class="btn btn-info " id="goback">
                <span></span> Logout</a>
            </form>
        </div>

        <div style="height:100px;padding:30px">
            <h2 class="text-center" style=" margin-bottom: 3%;" id="heading"><b>Update Documents</b></h2>
        </div>
        <br>
        
        <!-- Categories -->
        <div class="container ">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div >
                        <div class="card-body" >
                            <center>
                                <button type="button"><a href="../Details_update/Update_docs/upload.php"  target="_blank"><b>Book Chapter</b></a></button><br>
                                <button><a href="../Details_update/Update_docs/upload_publication.php"  target="_blank"><b>Book Publication</b></a></button><br>
                                <button><a href="../Details_update/Update_docs/upload_patent.php"  target="_blank"><b>Patent</b></a></button><br>
                                <button><a href="../Details_update/Update_docs/upload_copyright.php"  target="_blank"><b>Copyright</b></a></button><br>
                                <button><a href="../Details_update/Update_docs/upload_journal.php"  target="_blank"><b>Journal</b></a></button><br>
                                <button><a href="../Details_update/Update_docs/upload_conference.php"  target="_blank"><b>Conference</b></a></button><br>
                               
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </body>
</html>

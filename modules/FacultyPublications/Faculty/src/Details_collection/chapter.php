<?php
    //connect to database
    $conn = new mysqli('localhost', 'root', 'root');  
    mysqli_select_db($conn, 'test'); 

    @session_start();
    if (isset($_SESSION['sdrn'])){
    $sdrn_no = $_SESSION['sdrn'];
    $First_name= $_SESSION['First_name'];
    $Middle_name= $_SESSION['Middle_name'];
    $Last_name= $_SESSION['Last_name'];
    }
    
    //submit book chapter data into table book_chapter
    if(isset($_POST["submit_chapter"])) {
        $sdrn = $sdrn_no;
        $faculty_name = $First_name." ".$Middle_name." ".$Last_name; 
        $author1 = $_POST['author1'];
        $author2 = $_POST['author2'];
        $author3 = $_POST['author3'];
        $author4 = $_POST['author4'];
        $chapter_name = $_POST['chapter_name'];
        $book_name = $_POST['book_name'];
        $through = $_POST['through'];
        $publisher_name = $_POST['publisher_name'];
        $isbn_no = $_POST['isbn_no'];
        $publication_year = $_POST['publication_year'];
        $reg_date = $_POST['reg_date'];
        $sanction_amt = $_POST['sanction_amt'];
        $org_name = $_POST['org_name'];
        $awards = $_POST['awards'];
        $desgn = $_POST['desgn'];
        $institute = $_POST['institute'];
        $opt1 = $_POST['opt1'];
        $opt2 = $_POST['opt2'];
        $opt3 = $_POST['opt3'];
            $query = "INSERT INTO `book_chapter`(`sdrn`,`faculty_name`, `author1`,`author2`,`author3`,`author4`,`chapter_name`,`book_name`,`through`,`publisher_name`, `isbn_no`, `publication_year`
            ,`reg_date`,`sanction_amt`,`org_name`,`awards`,`desgn`,`institute`,`opt1`,`opt2`,`opt3`) 
            VALUES ('$sdrn','$faculty_name','$author1','$author2','$author3','$author4','$chapter_name','$book_name', '$through','$publisher_name', '$isbn_no', 
            '$publication_year','$reg_date','$sanction_amt','$org_name','$awards','$desgn','$institute','$opt1','$opt2','$opt3')";
            if(!mysqli_query($conn,$query)) {
                echo '<script> alert("Cannot insert! Record already exist.")
                window.location.assign("../Details_show/show_book_chapter.php")</script>';
            }
            else{
                $last_id = mysqli_insert_id($conn);
                echo '<script>alert("New record created successfully. ");
                window.location = "collect_docs/upload.php";
                </script>';
            } 
        }
    



    //submit book publication data into table book_publication
    if(isset($_POST["submit_publication"])) {
        $sdrn = $sdrn_no;
        $faculty_name = $First_name." ".$Middle_name." ".$Last_name; 
        $author1 = $_POST['author1'];
        $author2 = $_POST['author2'];
        $author3 = $_POST['author3'];
        $author4 = $_POST['author4'];
        $book_name = $_POST['book_name'];
        $publisher_name = $_POST['publisher_name'];
        $isbn_no = $_POST['isbn_no'];
        $year = $_POST['year'];
        $desgn = $_POST['desgn'];
        $institute = $_POST['institute'];
        $opt1 = $_POST['opt1'];
        $opt2 = $_POST['opt2'];
        $opt3 = $_POST['opt3'];
        
        $query1 = "INSERT INTO `book_publication`(`sdrn`,`faculty_name`, `author1`,`author2`,`author3`,`author4`,`book_name`,`publisher_name`, `isbn_no`, 
        `year`,`desgn`,`institute`,`opt1`,`opt2`,`opt3`) 
        VALUES ('$sdrn','$faculty_name','$author1','$author2','$author3','$author4','$book_name', '$publisher_name', '$isbn_no',
         '$year','$desgn','$institute','$opt1','$opt2','$opt3')";
        if(!mysqli_query($conn,$query1)) {
            echo '<script>alert("Cannot insert! Record already exist.")
            window.location.assign("../Details_show/show_book_publication.php")</script>';
            
        }
        else{
            $last_id = mysqli_insert_id($conn);
            echo '<script>alert("New record created successfully. ")
            window.location = "collect_docs/upload_publication.php";
                    </script>';
            
        }
    }

    //submit patent data into table patent
    if(isset($_POST["submit_patent"])) {
        $sdrn = $sdrn_no;
        $faculty_name = $First_name." ".$Middle_name." ".$Last_name; 
        $author1 = $_POST['author1'];
        $author2 = $_POST['author2'];
        $author3 = $_POST['author3'];
        $author4 = $_POST['author4'];
        $designation = $_POST['designation'];
        $patent = $_POST['patent'];
        $title = $_POST['title'];
        $application_no = $_POST['application_no'];
        $status = $_POST['status'];
        $reg_amount = $_POST['reg_amount'];
        $amount_funded = $_POST['amount_funded'];
        $reg_date = $_POST['reg_date'];
        $opt1 = $_POST['opt1'];
        $opt2 = $_POST['opt2'];
        $opt3 = $_POST['opt3'];
        
        $query3 = "INSERT INTO `patent` (`sdrn`,`faculty_name`, `author1`,`author2`,`author3`,`author4`,`designation`,`patent`,`title`, `application_no`, `status`,`reg_amount`,`amount_funded`,`reg_date`,`opt1`,`opt2`,`opt3`)
        VALUES ('$sdrn','$faculty_name','$author1','$author2','$author3','$author4',  '$designation', '$patent', '$title', '$application_no', '$status', '$reg_amount', '$amount_funded', '$reg_date', '$opt1','$opt2','$opt3')";
        if(!mysqli_query($conn,$query3)) {
            echo '<script>alert("Cannot insert! Record already exist.")
            window.location.assign("../Details_show/show_patent.php")</script>';
        }
        else{
            $last_id = mysqli_insert_id($conn);
            echo '<script>alert("New record created successfully. ");
            window.location = "collect_docs/upload_patent.php";
            </script>';
            
        }
    }

    //submit copyright data into table copyright

    if(isset($_POST["submit_copyright"])) {
        $sdrn = $sdrn_no;
        $faculty_name = $First_name." ".$Middle_name." ".$Last_name; 
        $author1 = $_POST['author1'];
        $author2 = $_POST['author2'];
        $author3 = $_POST['author3'];
        $author4 = $_POST['author4'];
        $designation = $_POST['designation'];
        $copyright = $_POST['copyright'];
        $title = $_POST['title'];
        $application_no = $_POST['application_no'];
        $status = $_POST['status'];
        $reg_amount = $_POST['reg_amount'];
        $amount_funded = $_POST['amount_funded'];
        $reg_date = $_POST['reg_date'];
        $publisher = $_POST['publisher'];
        $ntnl = $_POST['ntnl'];
        $institute = $_POST['institute'];
        $opt1 = $_POST['opt1'];
        $opt2 = $_POST['opt2'];
        $opt3 = $_POST['opt3'];
        
        $query4 = "INSERT INTO `copyright` (`sdrn`,`faculty_name`, `author1`,`author2`,`author3`,`author4`,`designation`,`copyright`,`title`, `application_no`, `status`,`reg_amount`,`amount_funded`,
        `reg_date`,`publisher`,`ntnl`,`institute`,`opt1`,`opt2`,`opt3`)
         VALUES ('$sdrn','$faculty_name','$author1','$author2','$author3','$author4',  '$designation', '$copyright', '$title', '$application_no', '$status', '$reg_amount', 
         '$amount_funded', '$reg_date','$publisher','$ntnl','$institute', '$opt1','$opt2','$opt3')";
        if(!mysqli_query($conn,$query4)) {
            echo '<script>alert("Cannot insert! Record already exist.")
            window.location.assign("../Details_show/show_copyright.php")</script>';
        }
        else{

            $last_id = mysqli_insert_id($conn);
            echo '<script>alert("New record created successfully. ");
            window.location = "collect_docs/upload_copyright.php";
            </script>';
        }
    }

    //submit journal data into table journal
    if(isset($_POST["submit_journal"])) {

        $sdrn = $sdrn_no;
        $faculty_name = $First_name." ".$Middle_name." ".$Last_name; 
        $author1 = $_POST['author1'];
        $author2 = $_POST['author2'];
        $author3 = $_POST['author3'];
        $author4 = $_POST['author4'];
        $title = $_POST['title']; 
        $journal_name = $_POST['journal_name'];
        $volume_no = $_POST['volume_no'];
        $page_no = $_POST['page_no'];
        $isbn_no = $_POST['isbn_no'];
        $doi = $_POST['doi'];
        $year = $_POST['year'];
        $desg = $_POST['desg'];
        $status = $_POST['status'];
        $publication_date = $_POST['publication_date'];
        $paper_index = $_POST['paper_index'];
        $funding_org = $_POST['funding_org'];
        $institute = $_POST['institute'];
        $impact_factor = $_POST['impact_factor'];
        $ntnl_no = $_POST['ntnl_no'];
        $indexed_in = $_POST['indexed_in'];
        $no_of_times = $_POST['no_of_times'];
        $reg_amount = $_POST['reg_amount'];
        $amount_sanctioned = $_POST['amount_sanctioned'];
        $awards = $_POST['awards'];
        $opt1 = $_POST['opt1'];
        $opt2 = $_POST['opt2'];
        $opt3 = $_POST['opt3'];
        
        $query = "INSERT INTO `journal`(`sdrn`, `faculty_name`, `author1`,`author2`,`author3`,`author4`,`title`,`journal_name`,`volume_no`, `page_no`, `isbn_no`,`doi`,
        `year`, `desg`,`status`,`publication_date`,`paper_index`,`funding_org`,`institute`,`impact_factor`,
        `ntnl_no`,`indexed_in`, `no_of_times`,`reg_amount`,`amount_sanctioned`,`awards`, `opt1`,`opt2`,`opt3`)
         VALUES ('$sdrn', '$faculty_name', '$author1','$author2','$author3','$author4', '$title', '$journal_name', '$volume_no', '$page_no',
         '$isbn_no','$doi','$year', '$desg', '$status', '$publication_date', '$paper_index', '$funding_org', '$institute', '$impact_factor', 
         '$ntnl_no','$indexed_in','$no_of_times','$reg_amount', '$amount_sanctioned', '$awards', '$opt1', '$opt2', '$opt3')";
        if(!mysqli_query($conn,$query)) { 
            echo '<script>alert("Cannot insert! Record already exist.")
            </script>';
        }
        //window.location.assign("../Details_show/show_journal.php")
        else{
            $last_id = mysqli_insert_id($conn);
            echo '<script>alert("New record created successfully. ");
            window.location = "collect_docs/upload_journal.php";
            </script>';
        }
    }

    //submit conferences data into table conference
    if(isset($_POST["submit_conference"])) {
        $sdrn = $sdrn_no;
        $faculty_name = $First_name." ".$Middle_name." ".$Last_name; 
        $author1 = $_POST['author1'];
        $author2 = $_POST['author2'];
        $author3 = $_POST['author3'];
        $author4 = $_POST['author4'];
        $paper_title = $_POST['paper_title']; 
        $con_name = $_POST['con_name'];
        $con_place = $_POST['con_place'];
        $con_date = $_POST['con_date'];
        $ntnl_no = $_POST['ntnl_no'];
        $isbn_no = $_POST['isbn_no'];
        $doi = $_POST['doi'];
        $year = $_POST['year'];
        $org = $_POST['org'];
        $institute = $_POST['institute'];
        $indexed_in = $_POST['indexed_in'];
        $no_of_times = $_POST['no_of_times'];
        $reg_amount = $_POST['reg_amount'];
        $amount_sanctioned = $_POST['amount_sanctioned'];
        $presented_personally = $_POST['presented_personally'];
        $awards = $_POST['awards'];
       
        $opt1 = $_POST['opt1'];
        $opt2 = $_POST['opt2'];
        $opt3 = $_POST['opt3'];
        
        $query = "INSERT INTO `conference`(`sdrn`, `faculty_name`,`author1`,`author2`,`author3`,`author4`,`paper_title`,`con_name`,`con_place`, `con_date`,  
        `ntnl_no`,`isbn_no`,`doi`, `year`, `org`,`institute`,`indexed_in`, `no_of_times`,`reg_amount`,`amount_sanctioned`,`presented_personally`, `awards`, `opt1`,`opt2`,`opt3`)
        VALUES ('$sdrn','$faculty_name','$author1','$author2','$author3','$author4', '$paper_title', '$con_name', '$con_place', '$con_date', '$ntnl_no',
        '$isbn_no','$doi', '$year', '$org','$institute','$indexed_in','$no_of_times','$reg_amount', '$amount_sanctioned', '$presented_personally', '$awards', '$opt1', '$opt2', '$opt3')";
        if(!mysqli_query($conn,$query)) { 
            echo '<script>alert("Cannot insert! Record already exist.")
            window.location.assign("conference.php")</script>';
        }
        else{
            $last_id = mysqli_insert_id($conn);
            echo '<script>alert("New record created successfully. ");
            window.location = "collect_docs/upload_conference.php";
            </script>';
        }
    }
?>



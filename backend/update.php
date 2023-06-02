<?php
    session_start();
    error_reporting(0);
    require "include/conn.php";

    $Sdrn = $_SESSION['sdrn'];
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $full_namee = array();
    $full_namee = (explode(" ",$full_name));
    $phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
    $email_id = mysqli_real_escape_string($conn, $_POST['email_id']);
    $marrital_status = mysqli_real_escape_string($conn, $_POST['marrital_status']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $c_password = mysqli_real_escape_string($conn, $_POST['c_password']);
    // $p_address = mysqli_real_escape_string($conn, $_POST['p_address']);
    // $r_address = mysqli_real_escape_string($conn, $_POST['r_address']);
    // $bank_acc_no = mysqli_real_escape_string($conn, $_POST['bank_acc_no']);
    // $bank_ifsc_code = mysqli_real_escape_string($conn, $_POST['bank_ifsc_code']);
    
    // $ug_program = mysqli_real_escape_string($conn, $_POST['ug_program']);
    // $ug_score = mysqli_real_escape_string($conn, $_POST['ug_score']);
    // $ug_university = mysqli_real_escape_string($conn, $_POST['ug_university']);
    // $ug_college = mysqli_real_escape_string($conn, $_POST['ug_college']);

    // $pg_program = mysqli_real_escape_string($conn, $_POST['pg_program']);
    // $pg_score = mysqli_real_escape_string($conn, $_POST['pg_score']);
    // $pg_university = mysqli_real_escape_string($conn, $_POST['pg_university']);
    // $pg_college = mysqli_real_escape_string($conn, $_POST['pg_college']);

    // $phd_program = mysqli_real_escape_string($conn, $_POST['phd_program']);
    // $phd_score = mysqli_real_escape_string($conn, $_POST['phd_score']);
    // $phd_university = mysqli_real_escape_string($conn, $_POST['phd_university']);
    // $phd_college = mysqli_real_escape_string($conn, $_POST['phd_college']);

    // $other_program = mysqli_real_escape_string($conn, $_POST['other_program']);
    // $other_score = mysqli_real_escape_string($conn, $_POST['other_score']);
    // $other_university = mysqli_real_escape_string($conn, $_POST['other_university']);
    // $other_college = mysqli_real_escape_string($conn, $_POST['other_college']);

    // $date_of_joining = mysqli_real_escape_string($conn, $_POST['date_of_joining']);
    // $rait_experience = mysqli_real_escape_string($conn, $_POST['rait_experience']);
    // $other_experience = mysqli_real_escape_string($conn, $_POST['other_experience']);
    // $industry_experience = mysqli_real_escape_string($conn, $_POST['industry_experience']);
    $file = $_FILES['profile_photo']['name'];
    if($file!="") {
        $image = $_FILES['profile_photo']['tmp_name'];
        $image = addslashes(file_get_contents($image)); 
        $imageProperties = getimageSize($_FILES['profile_photo']['tmp_name']);
        $imageQuery = ",`profile_photo`='$image',image_type='{$imageProperties['mime']}'";
    }
    else{
        $imageQuery ="";
    }

    if($password!="") {
        $passwordQuery = ",`Password`='$password' ";
    }
    else{
        $passwordQuery ="";
    }

   

    // $aadhar_card = $_FILES['aadhar_card']['tmp_name'];
    // $aadhar_card_name = addslashes($_FILES['aadhar_card']['name']);
    // $extension = pathinfo($aadhar_card_name, PATHINFO_EXTENSION);
    // $file_new_name = $Sdrn. "_aadhar_card_" . date('YmjHis') . "." . $extension;
    // move_uploaded_file($aadhar_card, "../uploaded_documents/" . $file_new_name);


    // $pan_card = $_FILES['pan_card']['tmp_name'];
    // $pan_card_name = addslashes($_FILES['pan_card']['name']);
    // $extension = pathinfo($pan_card_name, PATHINFO_EXTENSION);
    // $pan_card_new_name = $Sdrn. "_pan_card_" . date('YmjHis') . "." . $extension;
    // move_uploaded_file($pan_card, "../uploaded_documents/" . $pan_card_new_name);

    $final_query= "UPDATE `faculty` SET  `Contact_no`='$phone_no', `Email`='$email_id' $imageQuery $passwordQuery WHERE `Sdrn`='$Sdrn' ";
    if (!$result = mysqli_query($conn,$final_query)) {
        exit(mysqli_error());     
    }else{
        // $final_query= "INSERT INTO `faculty_education` SET `sdrn`='$Sdrn', `edu_type`='UG', `program`='$ug_program', `score`='$ug_score', `university`='$ug_university',`college`='$ug_college', `modified_by`='".$_SESSION['Sdrn']."' ";
        // $result = mysqli_query($conn,$final_query);
        // $final_query= "INSERT INTO `faculty_education` SET `sdrn`='$Sdrn', `edu_type`='PG', `program`='$pg_program', `score`='$pg_score', `university`='$pg_university',`college`='$pg_college', `modified_by`='".$_SESSION['Sdrn']."' ";
        // $result = mysqli_query($conn,$final_query);
        // $final_query= "INSERT INTO `faculty_education` SET `sdrn`='$Sdrn', `edu_type`='PHD', `program`='$phd_program', `score`='$phd_score', `university`='$phd_university',`college`='$phd_college', `modified_by`='".$_SESSION['Sdrn']."' ";
        // $result = mysqli_query($conn,$final_query);
        // $final_query= "INSERT INTO `faculty_education` SET `sdrn`='$Sdrn', `edu_type`='Others', `program`='$other_program', `score`='$other_score', `university`='$other_university',`college`='$other_college', `modified_by`='".$_SESSION['Sdrn']."' ";
        // $result = mysqli_query($conn,$final_query);
        echo '
            <script type="text/javascript">
            alert("Data updated Successfully.");
            window.open("../users/faculty/updates.php", "_self");
            </script> 
        ';
        exit();
    }

?>
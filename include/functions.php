<?php
  function fac_bk_chp(){
    $conn = mysqli_connect("localhost", "root", "root", "test");
    $sql_fac_bk_chp = "SELECT count(id) FROM `book_chapter` WHERE (sdrn = '".$_SESSION['sdrn']."' OR faculty_name LIKE '%".$_SESSION['full_name']."%' OR author1 LIKE '%".$_SESSION['full_name']."%' OR author2 LIKE '%".$_SESSION['full_name']."%' OR author3 LIKE '%".$_SESSION['full_name']."%' OR author4 LIKE '%".$_SESSION['full_name']."%') ";
    $result_fac_bk_chp = mysqli_query($conn, $sql_fac_bk_chp);  
    $row_fac_bk_chp = mysqli_fetch_array($result_fac_bk_chp);
    if($row_fac_bk_chp[0] != '0'){
      return $row_fac_bk_chp[0];
    }
    else{
      return '-';
    }
  }
  function fac_bk_pub(){
    $conn = mysqli_connect("localhost", "root", "root", "test");
    $sql_fac_bk_chp = "SELECT count(id) FROM `book_publication` WHERE (sdrn = '".$_SESSION['sdrn']."' OR faculty_name LIKE '%".$_SESSION['full_name']."%' OR author1 LIKE '%".$_SESSION['full_name']."%' OR author2 LIKE '%".$_SESSION['full_name']."%' OR author3 LIKE '%".$_SESSION['full_name']."%' OR author4 LIKE '%".$_SESSION['full_name']."%') ";
    $result_fac_bk_chp = mysqli_query($conn, $sql_fac_bk_chp);  
    $row_fac_bk_chp = mysqli_fetch_array($result_fac_bk_chp);
    if($row_fac_bk_chp[0] != '0'){
      return $row_fac_bk_chp[0];
    }
    else{
      return '-';
    }
  }
  function fac_bk_con(){
    $conn = mysqli_connect("localhost", "root", "root", "test");
    $sql_fac_bk_chp = "SELECT count(id) FROM `conference` WHERE (sdrn = '".$_SESSION['sdrn']."' OR faculty_name LIKE '%".$_SESSION['full_name']."%' OR author1 LIKE '%".$_SESSION['full_name']."%' OR author2 LIKE '%".$_SESSION['full_name']."%' OR author3 LIKE '%".$_SESSION['full_name']."%' OR author4 LIKE '%".$_SESSION['full_name']."%') ";
    $result_fac_bk_chp = mysqli_query($conn, $sql_fac_bk_chp);  
    $row_fac_bk_chp = mysqli_fetch_array($result_fac_bk_chp);
    if($row_fac_bk_chp[0] != '0'){
      return $row_fac_bk_chp[0];
    }
    else{
      return '-';
    }
  }
  function fac_bk_copy(){
    $conn = mysqli_connect("localhost", "root", "root", "test");
    $sql_fac_bk_chp = "SELECT count(id) FROM `copyright` WHERE (sdrn = '".$_SESSION['sdrn']."' OR faculty_name LIKE '%".$_SESSION['full_name']."%' OR author1 LIKE '%".$_SESSION['full_name']."%' OR author2 LIKE '%".$_SESSION['full_name']."%' OR author3 LIKE '%".$_SESSION['full_name']."%' OR author4 LIKE '%".$_SESSION['full_name']."%') ";
    $result_fac_bk_chp = mysqli_query($conn, $sql_fac_bk_chp);  
    $row_fac_bk_chp = mysqli_fetch_array($result_fac_bk_chp);
    if($row_fac_bk_chp[0] != '0'){
      return $row_fac_bk_chp[0];
    }
    else{
      return '-';
    }
  }
  function fac_bk_pat(){
    $conn = mysqli_connect("localhost", "root", "root", "test");
    $sql_fac_bk_chp = "SELECT count(id) FROM `patent` WHERE (sdrn = '".$_SESSION['sdrn']."' OR faculty_name LIKE '%".$_SESSION['full_name']."%' OR author1 LIKE '%".$_SESSION['full_name']."%' OR author2 LIKE '%".$_SESSION['full_name']."%' OR author3 LIKE '%".$_SESSION['full_name']."%' OR author4 LIKE '%".$_SESSION['full_name']."%') ";
    $result_fac_bk_chp = mysqli_query($conn, $sql_fac_bk_chp);  
    $row_fac_bk_chp = mysqli_fetch_array($result_fac_bk_chp);
    if($row_fac_bk_chp[0] != '0'){
      return $row_fac_bk_chp[0];
    }
    else{
      return '-';
    }
  }
  function fac_bk_jour(){
    $conn = mysqli_connect("localhost", "root", "root", "test");
    $sql_fac_bk_chp = "SELECT count(id) FROM `journal` WHERE (sdrn = '".$_SESSION['sdrn']."' OR faculty_name LIKE '%".$_SESSION['full_name']."%' OR author1 LIKE '%".$_SESSION['full_name']."%' OR author2 LIKE '%".$_SESSION['full_name']."%' OR author3 LIKE '%".$_SESSION['full_name']."%' OR author4 LIKE '%".$_SESSION['full_name']."%') ";
    $result_fac_bk_chp = mysqli_query($conn, $sql_fac_bk_chp);  
    $row_fac_bk_chp = mysqli_fetch_array($result_fac_bk_chp);
    if($row_fac_bk_chp[0] != '0'){
      return $row_fac_bk_chp[0];
    }
    else{
      return '-';
    }
  }

  function fac_bk_chp_hod(){
    $conn = mysqli_connect("localhost", "root", "root", "test");
    $sql_fac_bk_chp = "SELECT count(id) FROM `book_chapter`";
    $result_fac_bk_chp = mysqli_query($conn, $sql_fac_bk_chp);  
    $row_fac_bk_chp = mysqli_fetch_array($result_fac_bk_chp);
    if($row_fac_bk_chp[0] != '0'){
      return $row_fac_bk_chp[0];
    }
    else{
      return '-';
    }
  }
  function fac_bk_pub_hod(){
    $conn = mysqli_connect("localhost", "root", "root", "test");
    $sql_fac_bk_chp = "SELECT count(id) FROM `book_publication`";
    $result_fac_bk_chp = mysqli_query($conn, $sql_fac_bk_chp);  
    $row_fac_bk_chp = mysqli_fetch_array($result_fac_bk_chp);
    if($row_fac_bk_chp[0] != '0'){
      return $row_fac_bk_chp[0];
    }
    else{
      return '-';
    }
  }
  function fac_bk_con_hod(){
    $conn = mysqli_connect("localhost", "root", "root", "test");
    $sql_fac_bk_chp = "SELECT count(id) FROM `conference`";
    $result_fac_bk_chp = mysqli_query($conn, $sql_fac_bk_chp);  
    $row_fac_bk_chp = mysqli_fetch_array($result_fac_bk_chp);
    if($row_fac_bk_chp[0] != '0'){
      return $row_fac_bk_chp[0];
    }
    else{
      return '-';
    }
  }
  function fac_bk_copy_hod(){
    $conn = mysqli_connect("localhost", "root", "root", "test");
    $sql_fac_bk_chp = "SELECT count(id) FROM `copyright`";
    $result_fac_bk_chp = mysqli_query($conn, $sql_fac_bk_chp);  
    $row_fac_bk_chp = mysqli_fetch_array($result_fac_bk_chp);
    if($row_fac_bk_chp[0] != '0'){
      return $row_fac_bk_chp[0];
    }
    else{
      return '-';
    }
  }
  function fac_bk_pat_hod(){
    $conn = mysqli_connect("localhost", "root", "root", "test");
    $sql_fac_bk_chp = "SELECT count(id) FROM `patent`";
    $result_fac_bk_chp = mysqli_query($conn, $sql_fac_bk_chp);  
    $row_fac_bk_chp = mysqli_fetch_array($result_fac_bk_chp);
    if($row_fac_bk_chp[0] != '0'){
      return $row_fac_bk_chp[0];
    }
    else{
      return '-';
    }
  }
  function fac_bk_jour_hod(){
    $conn = mysqli_connect("localhost", "root", "root", "test");
    $sql_fac_bk_chp = "SELECT count(id) FROM `journal`";
    $result_fac_bk_chp = mysqli_query($conn, $sql_fac_bk_chp);  
    $row_fac_bk_chp = mysqli_fetch_array($result_fac_bk_chp);
    if($row_fac_bk_chp[0] != '0'){
      return $row_fac_bk_chp[0];
    }
    else{
      return '-';
    }
  }

?>
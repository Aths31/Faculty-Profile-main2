<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register User</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="js/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="js/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="js/dist/css/adminlte.min.css">

</head>

<body class="hold-transition register-page">
  <style>
    nav {
      background-color: rgba(150, 2, 2, 0.781);
      color: white;
      text-align: right;
    }

    .register-box {
      width: 70%;
    }

    .row img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      cursor: pointer;
      border: 1px solid black;
    }
    .copy_address{
      float:right;
    }
  </style>

  <div class="register-box" style="margin-top:2rem;">
    <div class="card card-outline card-danger">
      <div class="card-header text-center">
        <a href="fac_signup.php" class="h1"><b>FPS</b></a>
      </div>
      <div class="card-body">
        <br>

        <form action="backend/signup.php" id="registration" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-4">
              <div class="row" style="margin-left:20%; margin-top:10%">
                <label for="profile_photo" >
                  <?php  echo '<img id="avatar" alt="Image" src="include/images/DefaultProfilePic.png"/>'; ?>
                </label>
                <input type="file" style="display:none" name="profile_photo" id="profile_photo" onchange="loadFile(event)" accept="image/png, image/gif, image/jpeg" />
              </div>
            </div>
            <div class="col-sm-8">
              <div class="row">
                <div class="input-group mb-3 col-sm-12">
                  <input type="text" class="form-control" name="full_name" id="full_name" placeholder="First Middle Last" maxlength="100" required />
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3 col-sm-6">
                  <input type="number" class="form-control" name="sdrn_no" id="sdrn_no" placeholder="Sdrn No." data-max="5" required />
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3 col-sm-6">
                  <input type="number" class="form-control" name="phone_no" id="phone_no" placeholder="Phone" data-max="10" required />
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-phone"></span>
                    </div>
                  </div>
                </div>

              </div>

              <div class="row">
              <div class="input-group mb-3 col-sm-6">
                  <input type="email" class="form-control" name="email_id" id="email_id" Placeholder="Email ID" maxlength="10" required />
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group col-sm-6" style="display:inline">
                  <select class="form-control" style="width: 100%;" name="marrital_status" id="marrital_status" required>
                    <option selected="selected">Marital Status</option>
                    <option>Married</option>
                    <option>Un-Married</option>
                  </select>
                </div>
                
              </div>

              <div class="row">
                <div class="input-group mb-3 col-sm-6">
                  <input type="password" class="form-control" name="password" id="password" Placeholder="Password" required />
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3 col-sm-6">
                  <input type="password" class="form-control" name="c_password" id="c_password" Placeholder="Confirm Password" required />
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-12">
            <div class="form-group">
                <label>Permanent Address</label>
                <textarea class="form-control" rows="1" name="p_address" id="p_address" Placeholder="Enter Permanent Address" required style="margin-top: 0px; margin-bottom: 0px;"  onchange="copy_address_check();"></textarea>
            </div>
            <div class="form-group">
              <label>Residential Address</label>
              <span class="copy_address">                
                <input class="form-check-input" name="copy_add" id="copy_add" type="checkbox" onclick="copy_address();">
                <label class="form-check-label">Same as Permanent Address</label>
              </span>
              <textarea class="form-control" rows="1" name="r_address" id="r_address" Placeholder="Enter Residential Address" required style="margin-top: 0px; margin-bottom: 0px;"></textarea>
            </div>
            </div>
            
          </div>
          <!-- /.row -->
          <hr>
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="aadhar_card">Upload Aadhar Card</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" id="aadhar_card" name="aadhar_card"><br><br>
                </div>
              </div>
            </div>
            <div class="form-group col-sm-6">
              <label for="pan_card">Upload Pan Card</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" id="pan_card" name="pan_card"><br><br>
                </div>
              </div>
            </div>
          </div>

          

          <div class="row">
            <div class="input-group mb-3 col-sm-6">
              <input type="password" class="form-control" name="bank_acc_no" id="bank_acc_no" Placeholder="Bank Account Number" required />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3 col-sm-6">
              <input type="password" class="form-control" name="bank_ifsc_code" id="bank_ifsc_code" Placeholder="Bank IFSC Code" required />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
          </div>

          <hr>

          <h5><strong>Educational Dtails</strong></h5>
          <h6><strong>UG</strong></h6>
          <div class="row">
            <div class="col-sm-8">
              <label>Program</label>
              <input type="text" class="form-control" id="ug_program" placeholder="UG Program" name="ug_program">
            </div>
            <div class="col-sm-4">
              <label>Score</label>
              <input type="text" class="form-control" id="ug_score" placeholder="UG Score" name="ug_score">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label>University</label>
              <input type="text" class="form-control" id="ug_university" placeholder="UG University" name="ug_university">
            </div>
            <div class="col-sm-12">
              <label>College</label>
              <input type="text" class="form-control" id="ug_college" placeholder="UG College" name="ug_college">
            </div>
          </div>
          <br><hr>
          <h6><strong>PG</strong></h6>
          <div class="row">
            <div class="col-sm-8">
              <label>Program</label>
              <input type="text" class="form-control" id="pg_program" placeholder="PG Program" name="pg_program">
            </div>
            <div class="col-sm-4">
              <label>Score</label>
              <input type="text" class="form-control" id="pg_score" placeholder="PG Score" name="pg_score">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label>University</label>
              <input type="text" class="form-control" id="pg_university" placeholder="PG University" name="pg_university">
            </div>
            <div class="col-sm-12">
              <label>College</label>
              <input type="text" class="form-control" id="pg_college" placeholder="PG College" name="pg_college">
            </div>
          </div>
          <br><hr>
          <h6><strong>PHD</strong></h6>
          <div class="row">
            <div class="col-sm-8">
              <label>Program</label>
              <input type="text" class="form-control" id="phd_program" placeholder="PHD Program" name="phd_program">
            </div>
            <div class="col-sm-4">
              <label>Score</label>
              <input type="text" class="form-control" id="phd_score" placeholder="PHD Score" name="phd_score">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label>University</label>
              <input type="text" class="form-control" id="phd_university" placeholder="PHD University" name="phd_university">
            </div>
            <div class="col-sm-12">
              <label>College</label>
              <input type="text" class="form-control" id="phd_college" placeholder="PHD College" name="phd_college">
            </div>
          </div>
          <br><hr>
          <h6><strong>Other</strong></h6>
          <div class="row">
            <div class="col-sm-8">
              <label>Program</label>
              <input type="text" class="form-control" id="other_program" placeholder="Other Program" name="other_program">
            </div>
            <div class="col-sm-4">
              <label>Score</label>
              <input type="text" class="form-control" id="other_score" placeholder="Other Score" name="other_score">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label>University</label>
              <input type="text" class="form-control" id="other_university" placeholder="Other University" name="other_university">
            </div>
            <div class="col-sm-12">
              <label>College</label>
              <input type="text" class="form-control" id="other_college" placeholder="Other College" name="other_college">
            </div>
          </div>

          <br><hr>
          <!-- Professional Details  -->
          <div class="row">
            <div class="form-group col-sm-3">
              <label>Date Of Joining:</label>
              <input type="date" class="form-control" name="date_of_joining" id="date_of_joining" onchange="calculate_doj(this.value);" value="<? echo date('d/m/Y', strtotime('-20 years')); ?>" required />
            </div>
            <div class="form-group col-sm-3">
              <label>Rait Experience</label>
              <input type="text" class="form-control" name="rait_experience" id="rait_experience" Placeholder="Experience(Yrs)" readonly/>
            </div>
            <div class="form-group col-sm-3">
              <label>Other Experience</label>
              <input type="text" class="form-control" name="other_experience" id="other_experience" Placeholder="Other Experience(Yrs)" required />
            </div>
            <div class="form-group col-sm-3">
              <label>Industry Experience</label>
              <input type="text" class="form-control" name="industry_experience" id="industry_experience" Placeholder="Industry Experience(Yrs)" />
            </div>
          </div>


          <br><br>
          <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
              <button type="submit" class="btn btn-danger btn-block">Register</button>
            </div>
            <div class="col-4"></div>
          </div>

        </form>

        <a href="index.php" class="text-center">Already Registered ? Login</a>
      </div>
      <!-- /.form-box -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.register-box -->
  <script>
    var loadFile = function (event) {
      var output = document.getElementById('avatar');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function () {
        URL.revokeObjectURL(output.src)
      }
    };

    function calculate_doj(myDate){
      var d=new Date(myDate);
      var  m=d.getMonth()+1;
      var y=d.getFullYear();
      var date=d.getDate();
      var daa = date+"/"+m+"/"+y;	
      // $("#date_of_joining").val(daa);
    }
    function copy_address(){
      if (document.getElementById('copy_add').checked){
        var output = document.getElementById('p_address').value;
        $('#r_address').val(output);
      }
    }
    function copy_address_check(){
      if (document.getElementById('copy_add').checked){
        console.log("1");
        var output = document.getElementById('p_address').value;
        $('#r_address').val(output);
      }
    }
  </script>
  <script>
    // Add the following code if you want the name of the file appear on select
    function onaa(){
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    }
  </script>
  <!-- jQuery -->
  <script src="js/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="js/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="js/dist/js/adminlte.min.js"></script>
</body>

</html>
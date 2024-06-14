<?php
/*
alter table doctors drop column address2;
alter table doctors change address1 address varchar(500);
alter table doctors add column location varchar(500);
alter table doctors add column account_name varchar(500);
 */
include "config.php";
include "mailer/PHPMailerAutoload.php";
include('SimpleImage.php');
$msg = "";
$msg_color = "";
$full_name = "";
$hospital_name = "";
$email = "";
$gender = "";
$dob = "";
$dob1 = "";
$licence_no = "";
$qualifications = "";
$years_of_experience = "";
$specialization = "";
$gender = "";
$consultation_fee = "";
$referring_doctor = "";
$bank_name = "";
$bank_account_no = "";
$account_name="";
$ifsc_code = "";
$address = "";
$pincode = "";
$mobile = "";
$languages="";
$duration=10;
$break=0;
$biodata = "";
if (isset($_POST['submit'])) {
  $full_name = $_POST['full_name'];
  $hospital_name = $_POST['hospital_name'];
  $email = trim($_POST['email']);
  $gender = $_POST['gender'];
  $timezone=$_POST['timezone'];
  if(trim($_POST['dob'])!="") $dob = tosqlmdy($_POST['dob']);
  $dob1=$_POST['dob'];
  if(isset($_POST['languages'])) $languages = implode(",",$_POST['languages']);
  $licence_no = $_POST['licence_no'];
  $qualifications = $_POST['qualifications'];
  $years_of_experience = $_POST['practice_year'];
  $specialization = $_POST['specialization'];
  $consultation_fee = $_POST['consultation_fee'];
  $referring_doctor = $_POST['referring_doctor'];
  $bank_name = $_POST['bank_name'];
  $bank_account_no = $_POST['bank_account_no'];
  $account_name = $_POST['account_name'];
  $ifsc_code = $_POST['ifsc_code'];
  $address = $_POST['address'];
  $pincode = $_POST['pincode'];
  $mobile = $_POST['mobile'];
  $reg_date = date("y-m-d");
  if(trim($_POST['duration'])!="") $duration = $_POST['duration'];
  $break=$_POST['break'];
  $password = mt_rand(100000,999999);
  $password_db = hash('sha256', $password);
    $biodata = $_POST['biodata'];

  $sql = "SELECT * FROM doctors WHERE trim(email)='$email'";
  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);
  if ($count >= 1) {
    $msg = "Email already in use";
    $msg_color = "red";
  } else {
    $password_reset_token = uniqid();
    $duration=20;
error_log($biodata, 3, "F:\php_errors.log");
    $stmt = $conn->prepare("INSERT INTO doctors (reg_date,password,email,full_name,hospital_name,gender,dob,licence_no,qualifications,
                            years_of_experience,country,specialization,consultation_fee,referring_doctor,bank_name,account_name,bank_account_no,
                            ifsc_code,address,pincode,mobile,password_reset_token,duration,break,languages,biodata) VALUES
                            (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssssssssssssssssssssss", $reg_date,$password_db, $email, $full_name,  $hospital_name,$gender,$dob, $licence_no,$qualifications,                     $years_of_experience,$timezone,$specialization,$consultation_fee,$referring_doctor,$bank_name,$account_name,$bank_account_no,$ifsc_code,
                     $address,$pincode,$mobile,$password_reset_token,$duration,$break,$languages,$biodata);

    $stmt->execute();
    $doctor_id = $stmt->insert_id;
    $stmt->close();

    $file_name = $_FILES['photo']['name'];
    if (trim($file_name) != "") {
      $ext = pathinfo($file_name, PATHINFO_EXTENSION);
      $file_name = $doctor_id . "." . $ext;
      $query = "update doctors set photo = '" . $file_name . "' where doctor_id=$doctor_id";
      mysqli_query($conn, $query);
      $target_path = "uploads/doctor_photo/";
      $target_path = $target_path . $file_name;
      move_uploaded_file($_FILES['photo']['tmp_name'], $target_path);
      $image = new SimpleImage();
      $image->load($target_path);
      $image->resize(250, 250);
      $image->save($target_path);
    }

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "growayu.com";
    $mail->Port = 465;
    $mail->Username = GMAIL_USER;
    $mail->Password = GMAIL_PW;

    $body = "Dear Dr. $full_name, <br> Thank you for registering with GrowAyu. Your password is $password.</br><br>GrowAyu Team.";
    $mail->SetFrom("admin@growayu.com", "GrowAyu");
    $mail->Subject = "GrowAyu Registration";
    $mail->MsgHTML($body);
    $mail->AddAddress("admin@growayu.com", $full_name);
    #$mail->AddAddress($email, $full_name);
    if (!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    }
    $msg = "Your registration has been submitted for verification. GrowAyu team will get back to you soon";
    $msg_color = "green";
    $full_name = "";
    $hospital_name = "";
    $email = "";
    $gender = "Male";
    $dob = "";
    $licence_no = "";
    $qualifications = "";
    $university_details = "";
    $specialization = "";
    $gender = "";
    $consultation_fee = "";
    $referring_doctor = "";
    $bank_name = "";
    $bank_account_no = "";
    $ifsc_code = "";
    $address = "";
    $pincode = "";
    $mobile = "";
      $biodata = "";
  }
}
?>
<!DOCTYPE html>

<html lang="en" class="no-js">


<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE"/>

  <title>Doctor Registration</title>

  <!-- Begin Page Progress Bar Files -->
  <script type="text/javascript" src="assets/js/plugins/pace-0.5.1/pace.min.js"></script>
  <link href="assets/js/plugins/pace-0.5.1/themes/pace-theme-minimal.css" rel="stylesheet">
  <!-- // Page Progress Bar Files -->

  <!-- Core CSS - Include with every page -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link href="assets/icons/font-awesome/css/font-awesome.css" rel="stylesheet">
  <!-- Themify Icons -->
  <link href="assets/icons/themify/themify-icons.css" rel="stylesheet">
  <!-- IonIcons Pack -->
  <link href="assets/icons/ionicons-2.0.1/css/ionicons.min.css" rel="stylesheet">
  <!-- Awesome Bootstrap Checkboxes -->
  <link href="assets/css/awesome-bootstrap-checkbox.css" rel="stylesheet">

  <!-- Page-Level Plugin CSS - Dashboard -->
  <link href="assets/css/plugins/morris/morris.css" rel="stylesheet">
  <link href="assets/css/plugins/timeline/timeline.css" rel="stylesheet">
  <!-- Date Range Picker Stylesheet -->
  <link href="assets/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">

  <link href="assets/css/styles/default.css" type="text/css" rel="stylesheet" id="style_color"/>

  <link href="assets/css/datepicker.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap-multiselect.css" type="text/css"/>
</head>

<body id="login">

<div id="wrapper">
  <div id="page-wrapper" class="fixed-navbar full-height">
    <div class="container-fluid bg-gray no-border">
      <div class="row">
        <div class="col-md-6 col-md-offset-3" style="opacity:.9">
          <div class="login-panel panel panel-default" style="opacity:.9">
            <div class="panel-heading text-center" style="opacity:.9">
              <img src="assets/images/logo.png">
              <br> Register for an account
              or <a href="index.php">Sign In</a>
              <br><span style="color:<?php echo $msg_color; ?>"><?php echo $msg; ?></span>
            </div>
            <form method="post" action="" enctype="multipart/form-data">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-6" style="border-right: 1px solid #efefef;">
                    <div class="form-group">
                      <label for="full_name" class="control-label required">Full Name</label>
                      <input maxlength="100" value="<?php echo $full_name; ?>" required="required" type="text" name="full_name"
                             id="full_name" class="form-control"
                             placeholder="Full Name">
                    </div>

                    <div class="form-group">
                      <label for="email" class="control-label required">Email</label>
                      <input maxlength="50" value="<?php echo $email; ?>" required="required" type="email" name="email" id="email"
                             class="form-control"
                             placeholder="Email"></div>
                    <div class="form-group">
                      <label for="mobile" class="control-label required">Mobile Number</label>
                      <div class="input-group">
                        
                         <span class="input-group-addon">  <select id="country_prefix"><option value="IN">+91</option>
                           <option value="UK">+44</option></select></span>
                      <input value="<?php echo $mobile; ?>" required="required" type="text" oninvalid="setCustomValidity('Invalid Mobile Number')"
                             onchange="try{setCustomValidity('')}catch(e){}" pattern="\d*" maxlength="10"
                             name="mobile" id="mobile" class="form-control Number" placeholder="Mobile Number">
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="timezone" class="control-label required">TimeZone</label>
                      <select id="timezone" name="timezone" class="form-control"><option value="IN">IST (INDIA)</option>
                           <option value="UK">UTC (UK)</option></select>
                      </div>
                    <div class="form-group">
                      <label for="gender" class="control-label required">Gender</label>
                      <div class="form-control">
                        <input <?php if($gender=="Male") echo " checked='checked' "; ?> class="form-group" value="Male" type="radio" name="gender" id="gender">Male
                        <input <?php if($gender=="Female") echo " checked='checked' "; ?> class="form-group" value="Female" type="radio" name="gender" id="gender">Female
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="dob" class="control-label required">Date of Birth</label>
                      <input data-date-format="DD-MM-YYYY" required="required" id="dob" value="<?php echo $dob1; ?>" name="dob" min="<?php echo date("Y-m-d", strtotime('-100 years')); ?>" max="<?php echo date("Y-m-d", strtotime('-21 years')); ?>" type="date" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="specialization" class="control-label required">Specialization</label>
                      <select name="specialization" required="required" class="form-control">
                        <option value="">Select</option>
                        <?php
                        $sql2="select * from specialization order by description";
                        $result2 = mysqli_query($conn,$sql2);
                        while($row2=mysqli_fetch_array($result2)){
                          ?>
                          <option value="<?php echo $row2['id']; ?>"
                              <?php if($row2['id']==$specialization) echo " selected='selected' "; ?>
                          ><?php echo $row2['description']; ?></option>
                          <?php
                        }
                        ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="licence_no" class="control-label required">Registration No</label>
                      <input maxlength="50" value="<?php echo $licence_no; ?>" required="required" type="text" name="licence_no"
                             id="licence_no" class="form-control" maxlength="25"
                             placeholder="Registration No" required="required">
                    </div>
                      <div class="form-group">
                          <label for="languages"  class="control-label"> Languages</label><br>
                          <?php
                          $languages=explode(",",$languages);
                          ?>
                          <select id="languages" name="languages[]" multiple="multiple" >
                              <option <?php if(in_array("English",$languages)) echo " selected='selected' "; ?> value="English">English</option>
                              <option <?php if(in_array("Kannada",$languages)) echo " selected='selected' "; ?> value="Kannada">Kannada</option>
                              <option <?php if(in_array("Telugu",$languages)) echo " selected='selected' "; ?> value="Telugu">Telugu</option>
                              <option <?php if(in_array("Hindi",$languages)) echo " selected='selected' "; ?> value="Hindi">Hindi</option>
                              <option <?php if(in_array("Tamil",$languages)) echo " selected='selected' "; ?> value="Tamil">Tamil</option>
                              <option <?php if(in_array("Malayalam",$languages)) echo " selected='selected' "; ?> value="Malayalam">Malayalam</option>
                          </select>
                      </div>
                    <div class="form-group">
                      <label for="qualifications" class="control-label required">Qualification</label>
                      <input maxlength="50" value="<?php echo $qualifications; ?>" type="text" name="qualifications"
                             id="qualifications"
                             class="form-control" placeholder="Qualification" required="required">
                    </div>
                    <div class="form-group">
                      <label for="Practicing from year" class="control-label"> Practicing since</label>
                      <input  name="practice_year" placeholder="Eg: 1998"  class="form-control" list="practice_year">
    <datalist id="practice_year"  >
        <?php 
          $right_now = getdate();
          $this_year = $right_now['year'];
          $start_year = 1940;
          while ($start_year <= $this_year) {
              echo "<option>{$start_year}</option>";
              $start_year++;
          }
         ?>
     </datalist>
</input>

                    </div>
                    <div class="form-group">
                      <label class="control-label">Profile Summary</label>
                     <textarea maxlength="1000" rows="2" name="biodata" id="biodata" class="form-control" placeholder="Give brief summary of your profile"><?php echo $biodata; ?></textarea>
                    </div>
                    


                  </div>
                  <div class="col-md-6">

                    <div class="form-group">
                     
 
                      <label for="consultation_fee" class="control-label required">Consultation Fee</label>
                       <div class="input-group">
                       
  
                      <input value="<?php echo $consultation_fee; ?>" oninvalid="setCustomValidity('Invalid Consultation Fee')"
                             onchange="try{setCustomValidity('')}catch(e){}" pattern="\d*" type="text" maxlength="5" name="consultation_fee"
                             id="consultation_fee" class="form-control Number"
                             placeholder="Consultation Fee" required="required">

                             <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                             </div>

                    </div>
                    <div class="form-group">
                      <label for="duration" class="control-label required">Consultation Duration</label>
                      <div class="input-group">

                      <select id="duration" name="duration" class="form-control">
                        <option <?php if($duration==15) echo " selected='selected' "; ?> value="15">15</option>
                        <option <?php if($duration==20) echo " selected='selected' "; ?> value="20">20</option>
                        <option <?php if($duration==30) echo " selected='selected' "; ?> value="30">30</option>
                      </select>
                      <span class="input-group-addon">Mins.</i></span>
                    </div>
                  </div>
                    <div class="form-group">
                      <label for="break" class="control-label">Time Between Consultation</label>
                        <div class="input-group">

                      <select id="break" name="break" class="form-control">
                        <option <?php if($break==0) echo " selected='selected' "; ?> value="0">0</option>
                        <option <?php if($break==5) echo " selected='selected' "; ?> value="5">5</option>
                        <option <?php if($break==10) echo " selected='selected' "; ?> value="10">10</option>
                        <option <?php if($break==20) echo " selected='selected' "; ?> value="20">20</option>
                      </select>
                      <span class="input-group-addon">Mins.</i></span>
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="hospital_name" class="control-label">Hospital/Clinic Name</label>
                      <input maxlength="100" value="<?php echo $hospital_name; ?>" type="text" name="hospital_name"
                             id="hospital_name" class="form-control"
                             placeholder="Hospital" >
                    </div>
                    <div class="form-group">
                      <label for="referring_doctor" class="control-label"> Name of a referring doctor</label>
                      <input value="<?php echo $referring_doctor; ?>" maxlength="100" type="text" name="referring_doctor"
                             id="referring_doctor"
                             class="form-control" placeholder="Name of a referring doctor">
                    </div>
                    <div class="form-group">
                      <label for="bank_name" class="control-label"> Bank Name</label>
                      <input value="<?php echo $bank_name; ?>" type="text" name="bank_name" maxlength="50"
                             id="bank_name"
                             class="form-control" placeholder="Bank Name">
                    </div>
                    <div class="form-group">
                      <label for="account_name" class="control-label">Account Name</label>
                      <input value="<?php echo $account_name; ?>" maxlength="100" type="text" name="account_name"
                             id="account_name" class="form-control" placeholder="Account Name">
                    </div>
                    <div class="form-group">
                      <label for="bank_account_no" class="control-label">Bank Account #</label>
                      <input value="<?php echo $bank_account_no; ?>" maxlength="20" type="text" oninvalid="setCustomValidity('Invalid Account #')"
                             onchange="try{setCustomValidity('')}catch(e){}" pattern="\d*" name="bank_account_no"
                             id="bank_account_no" class="form-control Number" placeholder="Bank Account #">
                    </div>

                    <div class="form-group">
                      <label for="ifsc_code" class="control-label">IFSC Code</label>
                      <input value="<?php echo $ifsc_code; ?>" maxlength="20" type="text" name="ifsc_code"
                             id="ifsc_code" class="form-control"
                             placeholder="IFSC Code">
                    </div>
                   <!-- <div class="form-group">
                      <label for="state" class="control-label">State</label>
                      <select name="state" required="required" class="form-control">
                        <option value="">Select</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label for="city" class="control-label">City</label>
                      <select name="city" required="required" class="form-control">
                        <option value="">Select</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label for="location" class="control-label">Location</label>
                      <select name="location" required="required" class="form-control">
                        <option value="">Select</option>

                      </select>
                    </div>-->
                    <div class="form-group">
                      <label for="address" class="control-label">Address</label>
                       <textarea maxlength="500" rows="2" name="address" id="address" class="form-control" placeholder="Address"><?php echo $address; ?></textarea>
                    </div>

                    <div class="form-group">
                      <label for="pincode" class="control-label">Pincode</label>
                      <input value="<?php echo $pincode; ?>" type="number" max="999999" name="pincode"
                             id="pincode"
                             class="form-control" placeholder="Pincode">
                    </div>
                    

                    <div class="form-group">
                      <label class="control-label">Photo</label>
                      <input id="fileUpload" accept="image/jpeg,image/png" type="file" name="photo" class="form-control">
                    </div>

                  </div>
                  <!-- Trigger the modal with a button -->
<!-- <label   data-toggle="modal" data-target="#myModal">Terms & Conditions</label> -->
<div class="col-md-offset-1 col-md-10 text-center">
  <input type="checkbox" id="T-C" name="T-C" required>I accept GrowAyu <a href="http://www.growayu.com/doctor_tc.html" target="_blank">Terms & Conditions</a>&nbsp;and&nbsp;<a href="http://www.growayu.com/privacy_policy.html" target="_blank">Privacy Policy.</a>
</div>
                  <div class="col-md-offset-5 col-md-2 text-center">

                    <input required="required" class="btn btn-success" type="submit"
                           name="submit" value="Register"/>
                  </div>

                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--- popup comparision starts--->
<div id="myModal1" class="modal1 fade" role="dialog">
  <div class="modal1-dialog">
  


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <a href="term-condition.html" />
 <!--  <div class="modal-dialog">

   
    

  </div> -->
</div>

<!-- /#wrapper -->
<!-- Core Scripts - Include with every page -->
<script src="assets/js/jquery-2.1.4.min.js"></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Bootstrap minimal -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Sparkline | Script -->
<script src="assets/js/plugins/sparklines/jquery.sparkline.js"></script>
<!-- Easy Pie Charts | Script -->
<script src="assets/js/plugins/easy-pie/jquery.easypiechart.min.js"></script>
<!-- Date Range Picker | Script -->
<script src="assets/js/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/js/plugins/daterangepicker/daterangepicker.js"></script>
<!-- BlockUI for reloading panels and widgets -->
<script src="assets/js/plugins/block-ui/jquery.blockui.js"></script>


<script src="assets/js/jquery-ui.custom.min.js"></script>
<script src="assets/js/holder.js"></script>
<script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- Page-Level Plugin Scripts - Dashboard -->
<script src="assets/js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/plugins/flot/jquery.flot.js"></script>
<script src="assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="assets/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script src="assets/js/bootstrap-multiselect.js"></script>
<script src="assets/js/init.js"></script>
<script>
  $('.Number').keypress(function (event) {
    var keycode = event.which;
    if (!(event.shiftKey == false && (keycode == 46 || keycode == 8 || keycode == 37 || keycode == 39 || (keycode >= 48 && keycode <= 57)))) {
      event.preventDefault();
    }
  });

  $(document).ready(function() {
    $('#languages').multiselect();
  });
</script>

</body>
</html>

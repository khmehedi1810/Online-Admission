<?php

include "db.php";
ob_start();

?>
<?php
    if (isset($_POST['student_info'])){
        $forclass             = $_POST['class'];
        $stype                = $_POST['stype'];
        $session              = $_POST['session'];

        $photo                = $_FILES['photo']['name'];
        $photo_tmp            = $_FILES['photo']['tmp_name'];

        $name                 = $_POST['name'];
        $dob                  = $_POST['dob'];
        $mob                  = $_POST['mob'];
        $yob                  = $_POST['yob'];
        $father_name          = $_POST['father_name'];
        $mother_name          = $_POST['mother_name'];
        $father_qualification = $_POST['father_qualification'];
        $father_occupation    = $_POST['father_occupation'];
        $mother_occupation    = $_POST['mother_occupation'];
        $mother_qualification = $_POST['mother_qualification'];
        $a_income             = $_POST['a_income'];
        $legal_guardian_name  = $_POST['legal_guardian_name'];
        $guardian_name        = $_POST['guardian_name'];
        $rel_type             = $_POST['rel_type'];
        $p_address            = $_POST['p_address'];
        $pin                  = $_POST['pin'];
        $adhar                = $_POST['adhar'];
        $phone                = $_POST['phone'];
        $pupin_bel            = $_POST['pupin_bel'];

        $a_forclass            = $_POST['a_forclass'];
        //$a_photo               = $_POST['a_photo'];
        //$a_name                = $_POST['a_name'];
        //$a_fname               = $_POST['a_fname'];
        //$a_xmdate              = $_POST['a_xmdate'];
        $a_school_nam          = $_POST['a_school_nam'];
        $a_clspupil            = $_POST['a_clspupil'];
        $a_eng_no              = $_POST['a_eng_no'];
        $a_ban_no              = $_POST['a_ban_no'];
        $a_math_no             = $_POST['a_math_no'];
        $a_science_no          = $_POST['a_science_no'];
        
        
        $a_aggre_no            = $a_eng_no + $a_ban_no + $a_math_no + $a_science_no;

        if(!empty($yobb = $_POST['yobb'])){
          $yob = $yobb;
        }
        if(empty($legal_guardian_name)){
          $legal_guardian_name = "No";
        }
        if(empty($guardian_name)){
          $guardian_name = "No";
        }
        if(empty($rel_type)){
          $rel_type = "No";
        }

        move_uploaded_file($photo_tmp, "img/$photo");

        if ( empty($forclass) || empty($session) || empty($photo) || empty($name) || empty($dob) || empty($mob) || empty($yob) || empty($father_name) || empty($father_qualification) || empty($father_occupation) || empty($mother_name) || empty($mother_occupation) || empty($mother_qualification) || empty($a_income) || empty($legal_guardian_name) || empty($guardian_name) || empty($rel_type) || empty($p_address) || empty($pin) || empty($phone) || empty($pupin_bel) || empty($a_forclass) || empty($a_school_nam) || empty($a_clspupil) || empty($a_eng_no) || empty($a_ban_no) || empty($a_math_no) || empty($a_science_no) || empty($a_aggre_no) || empty($adhar)){
            echo '<div class="alert alert-warning">Please Fillup all the fields Correctly</div>';
          }
        else{

          if ($forclass == "vi") {
            $query = "INSERT INTO classvi (c_class, c_session, c_photo, c_name, c_dd, c_mm, c_yy, c_father_nam, c_father_qua, c_father_occu, c_mother_nam, c_mother_qua, c_mother_occu, c_anu_inc, c_legGurNamFa, c_legGurNamMo, c_relationPupil, c_pAddress, c_pinCode, c_phone, c_pupil_SC, a_class, a_pupilSchool, a_pupilClass, a_eng, a_bag, a_math, a_sci, a_aggre, h_l, adhaarCardNo) VALUES ( '$forclass', '$session', '$photo', '$name', '$dob', '$mob', '$yob', '$father_name', '$father_qualification', '$father_occupation', '$mother_name', '$mother_qualification', '$mother_occupation', '$a_income', '$legal_guardian_name', '$guardian_name', '$rel_type', '$p_address', '$pin', '$phone', '$pupin_bel', '$a_forclass', '$a_school_nam', '$a_clspupil', '$a_eng_no', '$a_ban_no', '$a_math_no', '$a_science_no', '$a_aggre_no', '$stype', '$adhar')";

            $add_new_student = mysqli_query($connection, $query);

            if ( !$add_new_student ){
              die("This Phone Number already used.");
            }
          }
          else{
                $query = "INSERT INTO classv (c_class, c_session, c_photo, c_name, c_dd, c_mm, c_yy, c_father_nam, c_father_qua, c_father_occu, c_mother_nam, c_mother_qua, c_mother_occu, c_anu_inc, c_legGurNamFa, c_legGurNamMo, c_relationPupil, c_pAddress, c_pinCode, c_phone, c_pupil_SC, a_class, a_pupilSchool, a_pupilClass, a_eng, a_bag, a_math, a_sci, a_aggre, h_l, adhaarCardNo) VALUES ( '$forclass', '$session', '$photo', '$name', '$dob', '$mob', '$yob', '$father_name', '$father_qualification', '$father_occupation', '$mother_name', '$mother_qualification', '$mother_occupation', '$a_income', '$legal_guardian_name', '$guardian_name', '$rel_type', '$p_address', '$pin', '$phone', '$pupin_bel', '$a_forclass', '$a_school_nam', '$a_clspupil', '$a_eng_no', '$a_ban_no', '$a_math_no', '$a_science_no', '$a_aggre_no', '$stype', '$adhar')";

            $add_new_student = mysqli_query($connection, $query);

            if ( !$add_new_student ){
              die("This Phone Number already used.");
            }
          }
        }



    }

?>

 <?php

//         $query = "SELECT form_id FROM candidates";

//         $formID = mysqli_query($connection, $query);

//         while ($row = mysqli_fetch_array($formID) ) {
            
//             $form_id           = $row['form_id'];

//         }
//         $form_id = $form_id - 1;

// ?>
<?php

// $query = "SELECT c_class FROM candidates WHERE c_class ='vi' ";
//         $countvi=0;
//         $formIDvi = mysqli_query($connection, $query);

//         while ($row = mysqli_fetch_array($formIDvi) ) {
            
//             $form_i           = $row['c_class'];
//             $countvi++;
//         }

//         $query = "SELECT c_class FROM candidates WHERE c_class ='v' ";
//         $countv=0;
//         $formIDv = mysqli_query($connection, $query);

//         while ($row = mysqli_fetch_array($formIDv) ) {
            
//             $form_i           = $row['c_class'];
//             $countv++;
//         }


//         if ($forclass == 'vi') {
//           $form_id = $countvi;
//         }
//         else{
//           $form_id = $countv;
//         }
          

            
              if ($forclass == "vi") {
                  $query = "SELECT * FROM classvi";
                  $formIDvi = mysqli_query($connection, $query);
                  while ($row = mysqli_fetch_array($formIDvi) ) {
                    $form_id   = $row['form_id'];
                  }
              }
              else{
                $query = "SELECT * FROM classv";
                  $formIDvi = mysqli_query($connection, $query);
                  while ($row = mysqli_fetch_array($formIDvi) ) {
                    $form_id   = $row['form_id'];
                  }
              }
              //$form_id = $form_id;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Ramharipur Ramakrishna Mission Ashrama</title>


<style>
        body {
width: 210mm;
        min-height: 297mm;
        padding: 20mm;
        margin: 10mm auto;
        margin-top: 0;
        padding-top: 0;
        text-transform: uppercase;
    }
    .column {
  float: left;
  padding: 10px; /* Should be removed. Only for demonstration */
  padding-top: 0;
  text-align: center;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.spaceredP{
  line-height:8px ;
}
    
</style>
</head>
<?php 
  if (empty($add_new_student)) {
      echo "Data is not submitted. Try again.";
  }
  else{
?>
<body>

<div class="row">
  <div class="column">
      <br><img alt="logo" width="80"   src="./sc_logo.png">
      
  </div>
  <div class="column">
      <h3>RAMAKRISHNA MISSION ASHRAMA, RAMHARIPUR</h3>
P.O.- RAMHARIPUR , BLOCK - GANGAJALGHATI<br>
SUB-DIVISION - BANKURA SADAR<br>
DIST - BANKURA, PIN - 722 203.<br>
Phone No.:9002314696<br>
  </div>
  <div class="column">
      <br><img alt="photo" width="110" height="130"   src="img/<?php echo $photo; ?>">
      <?php 

        if ($stype == 1) {
          echo "<h4>Hostel&Outsider</h4>";
        }
        else{
          echo "<h4>Local</h4>";
        }

       ?>
  </div>
</div>

</center><br>  
<span style="font-size: 20px; font-weight: bold;">Form No.: RKM/<?php echo $forclass; ?>/ <?php echo $form_id; ?></span>


<center><u><b>APPLICATION  FOR ADMISSION</b><br>
(TO BE FILLED IN BLOCK LETTERS)</u></center><br>
<center><span style="font-size: 20px; font-weight: bold;"> CLASS: <?php echo $forclass; ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SESSION : <?php echo $session; ?> &nbsp;&nbsp;&nbsp;&nbsp; Roll No: </center>
<p class="spaceredP">1.Name of Student :<b> <?php echo $name; ?> </b></p>
<p class="spaceredP">2.Guardian’s Details: </p>
<p class="spaceredP">A) Name of father: <?php echo $father_name; ?></p>
<p class="spaceredP">B) Name of mother: <?php echo $mother_name; ?></p>
<center>
<table style="width:60%;">
  <tr>
    <th style="text-align: center"><u>Father</u></th>
    <th><u>Mother</u></th>
  </tr>
  <tr>
    <td>C)Occupation:&nbsp;&nbsp;<?php echo $father_occupation; ?></td>
    <td style="text-align: center"><?php echo $mother_occupation; ?></td>
  </tr>
  <tr>
    <td>D)Qualification:&nbsp;&nbsp;<?php echo $father_qualification; ?></td>
    <td style="text-align: center"><?php echo $mother_qualification; ?></td>
  </tr>
</table>
</center>
<p class="spaceredP">E)Annual Income:&nbsp;&nbsp;<?php echo $a_income; ?></td></p>

<p class="spaceredP">F)Present  address: <?php echo $p_address; ?></p>
<p class="spaceredP">Pin Code: <?php echo $pin; ?></p>
<p class="spaceredP">Aadhaar Card No.: <?php echo $adhar; ?></p>
<p class="spaceredP">G)Phone No: +91 <?php echo $phone; ?></p>
<p class="spaceredP">Category: <?php echo $a_forclass; ?></p>
<p class="spaceredP">3.a) Guardian’s name[Only if Father or Mother  is not the Guardian] </p>
<p class="spaceredP"><?php echo $legal_guardian_name; ?></p>
<p class="spaceredP">b)Relationship with the pupil: <?php echo $rel_type; ?></p>
<p class="spaceredP">4.a) Date of Birth(English Calendar): <?php echo $dob; ?>-<?php echo $mob; ?>-<?php echo $yob; ?></p>
<p>b) Mention if the pupil belongs to S.C./S.T./O.B.C./Minority(An attested copy of the testimonial should be enclosed): <?php echo $pupin_bel; ?></p>

<center>.......................xxxxxxxxxxxxxxx..........................</center>

<center><h3><u>Admit Card</u></h3></center>
<div class="row">
  <div class="column">
      <br><img alt="logo" width="80"   src="./sc_logo.png">
  </div>
  <div class="column">
      <h3>RAMAKRISHNA MISSION ASHRAMA, RAMHARIPUR</h3>
P.O.- RAMHARIPUR , BLOCK - GANGAJALGHATI<br>
SUB-DIVISION - BANKURA SADAR<br>
DIST - BANKURA, PIN - 722 203.<br>
Phone No.:9002314696<br>
  </div>
  <div class="column">
      <br><img alt="photo" width="110" height="130"   src="img/<?php echo $photo; ?>">
  </div>
</div>
<span style="font-size: 20px; font-weight: bold;">Form No.: RKM/<?php echo $forclass; ?>/ <?php echo $form_id; ?></span><br>  
<p class="spaceredP">Name of Student: :<b> <?php echo $name; ?> </b></p>
<p class="spaceredP">Name of Father: <?php echo $father_name; ?></p>
<p class="spaceredP">CLASS: <?php echo $forclass; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Roll No:</p>
<?php 

  if($stype == 1){
      $x = "11-11-2021";
  }
  else{
      $x = "14-11-2021";
  }

?>
<p class="spaceredP">Date and Time of Examination: <?php echo $x; ?> Time: 12:00pm</p>
<p class="spaceredP">Session: 2023</p>
<p style="float:right;margin-top:-10px;">Signature of Headmaster</p>
<p style="overflow:hidden;"></p><br><br><br><br><br>
<p class="spaceredP">5. a)Name and address of the pupil’s present school: <?php echo $a_school_nam; ?></p>
<p class="spaceredP">b)Class in which the pupil is reading: <?php echo $a_clspupil; ?></p>
<p class="spaceredP">6. Percentage of marks secured at the last examination</p>
<p class="spaceredP">English: <?php echo $a_eng_no; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bengali: <?php echo $a_ban_no; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mathematics: <?php echo $a_math_no; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Science: <?php echo $a_science_no; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Aggregate: <?php echo $a_aggre_no; ?></p>

<h4>GUARDIAN’S DECLARATION:</h4>
<p>I have read the general rules and regulations of the Ashrama as given in the prospectus. I am satisfied that those are good and necessary for the education of my ward and in accordance with the same I hereby apply for admission. I accept that those may be changed time to time. The statements made herein are, to the best of my knowledge, true.If the facts stated in this form are found to be untrue, my ward is liable to be removed from the Ashrama at any time. I shall co-operate with the Ashrama authorities in every respect to enable them to educate my ward according to the prescribed rules and regulations or such others as may be framed from time to time.I further declare that I shall not request the Ashrama authority to visit my ward in Ashrama more than twice a month. If I withdraw my ward from the Ashrama before the end of an acdemic year, I shall pay compensation for the remaining period of the year according to the provision made in prospectus. I also agree that in matters of any dispute or difference, the decision of the secretary of the Ashrama will be final and binding on me.</p>
<br><br>
<p style="overflow: hidden;"><span style="float: left;">Date:……………………… </span> <span style="float: right">.....................................................</span></p>

<p style="float: right;overflow: hidden; margin-top: -15px;">Signature of the Father/Guardian</p>

<div></div>
<br>
<h4>TO BE SUBMITTED AFTER ADMISSION:</h4>
<p> A Transfer certificate from the previous school of the boy(In a case of first admission of the boy, a birth certificate issued by the Municipal authority or any registered Hospital autority will substitute for the Transfer Certificate.)</p>
<br><br>




<script>
  window.addEventListener("load", window.print());
</script>

</body>
<?php 
}
ob_end_flush();
?>
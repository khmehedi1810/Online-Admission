

<?php

include "db.php";
ob_start();

?>
<?php
    if (isset($_GET['view_stu'])){
    	$view_stu = $_GET['view_stu'];

	$query = "SELECT * FROM classvi WHERE c_phone = '$view_stu'";
    $select_students = mysqli_query($connection, $query);
	    while ( $row = mysqli_fetch_assoc($select_students) )
	    {
	    	  $form_id          	  = $row['form_id'];
	        $forclass             = $row['c_class'];
	        $stype                = $row['h_l'];
	        $session              = $row['c_session'];

	        $photo                = $row['c_photo'];

	        $name                 = $row['c_name'];
	        $dob                  = $row['c_dd'];
	        $mob                  = $row['c_mm'];
	        $yob                  = $row['c_yy'];
	        $father_name          = $row['c_father_nam'];
	        $mother_name          = $row['c_mother_nam'];
	        $father_qualification = $row['c_father_qua'];
	        $father_occupation    = $row['c_father_occu'];
	        $mother_occupation    = $row['c_mother_occu'];
	        $mother_qualification = $row['c_mother_qua'];
	        $a_income             = $row['c_anu_inc'];
	        $legal_guardian_name  = $row['c_legGurNamFa'];
	        $guardian_name        = $row['c_legGurNamMo'];
	        $rel_type             = $row['c_relationPupil'];
	        $p_address            = $row['c_pAddress'];
	        $pin                  = $row['c_pinCode'];
	        $adhar                = $row['adhaarCardNo'];
	        $phone                = $row['c_phone'];
	        $pupin_bel            = $row['c_pupil_SC'];

	        $a_forclass            = $row['a_class'];
	        //$a_photo               = $_POST['a_photo'];
	        //$a_name                = $row['a_name'];
	       // $a_fname               = $row['a_fathernam'];
	        //$a_xmdate              = $row['a_dtofXM'];
	        $a_school_nam          = $row['a_pupilSchool'];
	        $a_clspupil            = $row['a_pupilClass'];
	        $a_eng_no              = $row['a_eng'];
	        $a_ban_no              = $row['a_bag'];
	        $a_math_no             = $row['a_math'];
	        $a_science_no          = $row['a_sci'];
	        $a_aggre_no            = $row['a_aggre'];


	    }
	    //$form_id = $form_id - 1;
	}

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

    	$query = "SELECT * FROM candidates WHERE c_class = '$forclass'";
        $select_students = mysqli_query($connection, $query);
        $i = 0;
	    while ( $row = mysqli_fetch_assoc($select_students) )
	    {
	        $phn = $row['c_phone'];
	        $i++;
	        if($view_stu == $phn){
	            $form_noo = $i;
	        }
	    }

?>


<?php
  if (empty($view_stu)) {
  	  echo "You do not select any Student";
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
<p class="spaceredP">1.Name of Student : :<b> <?php echo $name; ?> </b></p>
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
<p class="spaceredP">Session: 2022</p>
<p style="float:right;margin-top:-10px;">Signature of Headmaster</p>
<p style="overflow:hidden;"></p><br><br><br>
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
?>
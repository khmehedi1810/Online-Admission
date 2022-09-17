<!DOCTYPE html>
<html>
    <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
        <style>
            html,body {
              background: #fafafa;
              padding:0;
              margin:0;
              font-family:arial;
            }
            .body {
                max-width:1200px;
                margin:0 auto;
                text-align:center;
            }
            a {
                text-decoration:none;
                cursor:pointer;
            }
            .partdiv {
                transition:1s all;
                width:85%;
                display:inline-block;
                -webkit-box-shadow: 0px 0px 20px -16px rgba(0,0,0,0.75);
                -moz-box-shadow: 0px 0px 20px -16px rgba(0,0,0,0.75);
                box-shadow: 0px 0px 20px -16px rgba(0,0,0,0.75);
                border-radius:5px;
                padding:2%;
                text-align:left;
                vertical-align:middle;
                margin: 5px 10px;
                background:white;
                position:relative;
            }
            .body > .partdiv:nth-child(2), .body > .partdiv:nth-child(3){
                min-height:540px;
            }
            .body > .partdiv:nth-child(4), .body > .partdiv:nth-child(5){
                min-height:529px;
            }
            .body > .partdiv:nth-child(6), .body > .partdiv:nth-child(7) {
                min-height:550px;
            }
            .body > .partdiv:nth-child(8), .body > .partdiv:nth-child(9){
                min-height:311px;
            }
            .body > .partdiv:nth-child(10), .body > .partdiv:nth-child(11){
                min-height:475px;
            }
            .fulldiv {
                background:white;
                -webkit-box-shadow: 0px 0px 20px -16px rgba(0,0,0,0.75);
                -moz-box-shadow: 0px 0px 20px -16px rgba(0,0,0,0.75);
                box-shadow: 0px 0px 20px -16px rgba(0,0,0,0.75);
                text-align:left;
                padding:2%;
                border-radius:5px;
                width:86%;
                margin:10px auto;
            }
            .fulldiv p, .fulldiv h2, .partdiv h2, .anotherfulldiv h2, .headerdiv h2 {
                margin:0;
                padding:0px 0 5px;
                font-size:18px;
                color:#1207ed;
            }
            .fulldiv p, .partdiv p, .headerdiv p, .anotherfulldiv p, .instr {
                margin:8px 10px 5px;
                padding:0;
                font-size:15px;
                font-size:13px;
                color:#331d1d;
                font-weight: 600;
            }
            .instr {
                color:red !important;
            }
            .officeuse, .anotherfulldiv {
                padding:0 20px;
            }
            .partdiv2 p {
                margin:37px 10px 5px;
            }
            .borderbot {
                border-bottom:0.1px solid gray;
            }
            .headerdiv p {
                margin-left:0;
            }
            .topnotice .inputfield, .partdiv .inputfield {
                width:100%;
                border:0.1px solid gray;
                border-radius:5px;
                padding:5px;
                outline:0;
            }
            .headerdiv .inputfield {
                border:0.1px solid gray;
                border-radius:5px;
                padding:5px;
                outline:0;
            }
            .headerdiv select {
                border:0.1px solid gray;
                border-radius:5px;
                padding:5px;
                outline:0;
                max-width:100%;
            }
            .threepart {
                border:0.1px solid gray;
                border-radius:5px;
                padding:5px;
                outline:0;
                width:32%;
                display:inline-block;
            }
            .halfdiv {
                width:46%;
                float:left;
                padding:5px 4% 0 0;
            }
            .quarterdiv {
                width:23%;
                float:left;
                padding:5px 1% 0 0;
            }
            .verticalalignbot {
                vertical-align:bottom;
            }
            .clearfix {
                clear:both;
            }
            .partdiv input[type=file].inputfield {
                padding: 0 0;
            }
            .logo {
                max-width:1200px;
                padding:10px;
                margin:0;
                margin:0 auto;
                text-align:center;
            }
            .logo img {
                max-width:80px;
                vertical-align:middle;
                width:20%;
            }
            .theholder {
                background:white;
                padding:10px;
                position:relative;
                z-index:1;
                border-bottom:0.1px solid gray;
            }
            .logo h3 {
                color: black;
                border-color: black;
                vertical-align:middle;
                margin-left: 15px;
            }
            
            .logo h3 {
                font-size: 18px;
                vertical-align: middle;
                font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
                text-decoration: none;
                margin-top: 0;
                margin-bottom: 0;
            }
            .logo h3:before {
                content: "RAMAKRISHNA MISSION ASHRAMA";
                margin-top: 0;
                margin-bottom: 0;
                font-size: 23px;
            }
            
            .logo h3:after {
                content: "P.O.- RAMHARIPUR , BLOCK - GANGAJALGHATI SUB-DIVISION - BANKURA, PIN - 722 203.";
                display: block;
                font-size: 11px;
                font-weight: 100;
            }
            .headerdiv {
                display:inline-block;
                margin:0px;
            }
            .headerdiv1 {
                display:inline-block;
                width: 18%;
                margin:0 5px;
            }
            .myButton {
            	box-shadow:inset 0px 1px 0px 0px #54a3f7;
            	background:linear-gradient(to bottom, #007dc1 5%, #0061a7 100%);
            	background-color:#007dc1;
            	border-radius:3px;
            	border:1px solid #124d77;
            	display:inline-block;
            	cursor:pointer;
            	color:#ffffff;
            	font-family:Arial;
            	font-size:13px;
            	padding:6px 24px;
            	text-decoration:none;
            	text-shadow:0px 1px 0px #154682;
            	display:block;
            	float:right;
            }
            .myButton:hover {
            	background:linear-gradient(to bottom, #0061a7 5%, #007dc1 100%);
            	background-color:#0061a7;
            }
            .myButton:active {
            	position:relative;
            	top:1px;
            }
            .centertext{
                text-align:center
            }
            .nav {
                background:white;
                -webkit-box-shadow: 0px 0px 20px -16px rgba(0,0,0,0.75);
                -moz-box-shadow: 0px 0px 20px -16px rgba(0,0,0,0.75);
                box-shadow: 0px 0px 20px -16px rgba(0,0,0,0.75);
                padding:10px;
            }
            .nav nav {
                text-align:left;
            }
            .nav a {
                color:maroon;
                padding:0 10px;
                border-right:0.1px solid gray;
                text-decoration:none;
            }
            .nav a:last-child{
                border:0;
            }
            .img {
                position:absolute;
                display:none;
                border:0.1px solid black;
                padding:5px;
                border-radius:5px;
                background:white;
                max-width:200px;
                max-height:200px;
                right:20%;
            }
            
            .completeform .halfdiv {
                width: 50%;
                padding: 5px 0 0 0;
            }
            .imguploads {
                max-width:70px;
                max-height:140px;
            }
            .imguploads2 {
                max-width:100px;
                max-height:160px;
            }
            .signimg {
                max-width:100% !important;
                max-height:60px !important;
            }
            .declar {
                text-align:justify;
            }
            .textright{
                text-align: right;
            }
            .halfdiv p.reducedspace {
                margin-top:1px;
                margin-bottom:1px;
            }
            .hidedives {
                display:none;
            }
            .topnotice {
                padding: 5px 15px;
                text-align: center;
                background: white;
                margin: 0 auto;
                border-radius: 0 0 5px 5px;
                width: 90%;
                max-width: 1050px;
                border-top:0.1px solid #777771;
            }
            .topnotice h3 {
                font-size: 14px;
                color: darkslategrey;
            }
            .topnotice2 {
                max-width:500px;
            }
            .topnotice2 .inputfield {
                max-width:250px;
            }
            .topnotice2 .myButton {
                float:none;
                margin-top:10px;
            }
            .progressbar {
                padding: 60px 0;
                font-size: 0;
            }
            .stepscover{
                width: 104px;
                height: 55px;
                margin: 0 auto;
                margin-top: -40px;
            }
            .steps {
                width: 95px;
                height: 70px;
                display: table-cell; vertical-align: middle;
                background: #4475fc;
                color: white;
                border: 2px solid white;
                border-radius: 5px;
                padding: 5px;
                font-size: 12px;
                font-weight: 600;
            }
            .lightorange .steps {
                background: #e69840;
            }
            .formfillup {
                display: inline-block;
                width: 20%;
                vertical-align: middle;
                text-align: center;
                border-top: 5px solid;
                position: relative;
                height: 0;
                border-color: #4475fc;
            }
            .formfillup.lightorange {
                border-color: #e69840;
            }
            .officeuse {
                border-top:1px solid black;
            }
            .officeuse p {
                color:black;
            }
            .officeuse .p {
                padding:20px 0 60px 0;
            }
            .officeuse .p span{
                border-bottom: 2px solid;
                padding: 0 10px;
                font-weight: 900;
                width: 400px;
                display: inline-block;
            }
            .bluecolor {
                color:#4475fc !important;
            }
            input[type=file]::-webkit-file-upload-button {
              visibility: hidden;
            }
            input[type=file]::before {
                content: 'Choose File';
                display: inline-block;
                background: #1ABCA1;
                border-radius: 5px 0 0;
                padding: 8px;
                outline: none;
                white-space: nowrap;
                -webkit-user-select: none;
                cursor: pointer;
                color: white;
            }
            input[type=file]:hover::before {
              border-color: black;
            }
            input[type=file]:active::before {
              background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
            }
            .specificationtitle {
                color:gray !important;
                font-size:12px;
            }
            @media print {
                .nav, .myButton, .topnotice, .progressbar {
                    display:none;
                }
                .fulldiv {
                    background:white;
                    -webkit-box-shadow: 0px 0px 20px -16px rgba(0,0,0,0);
                    -moz-box-shadow: 0px 0px 20px -16px rgba(0,0,0,0);
                    box-shadow: 0px 0px 20px -16px rgba(0,0,0,0);
                    width:100%;
                }
                html,body {
                  background: none;
                }
            }
            @media only screen and (max-width: 600px) {
                .stepscover{
                    height: inherit;
                    margin: -20px auto 0;
                    width: 15px;
                }
                .formfillup span, .loginextra {
                    display:none;
                }
                .formfillup .steps {
                    width: 15px;
                    height: inherit;
                }
                .progressbar {
                    padding: 25px 0;
                    font-size: 0;
                }
                .partdiv, .completeform .partdiv {
                    padding:4%;
                    width:81%;
                }
                .logo {
                    text-align:center;
                }
                .logo h3 {
                    color: black;
                    border-color: black;
                    vertical-align:middle;
                    margin-left: inherit;
                }
                .logo h3:before {
                    font-size:14px;
                }
                
                .logo h3:after {
                    display: block;
                    font-size: 9px;
                    font-weight: 100;
                }
                /*.headerdiv {
                    display:block;
                }*/
                .partdiv:nth-child(2), .partdiv:nth-child(3), .partdiv:nth-child(4), .partdiv:nth-child(5), .partdiv:nth-child(6), .partdiv:nth-child(7), .partdiv:nth-child(8), .partdiv:nth-child(9){
                    min-height:0;
                }
                .myButton {
                    float:none;
                    margin:10px;
                }
                .heading, .partdiv h2 {
                    font-size:14px;
                }
            }
            .errLink{
                text-decoration: underline;
            }
        </style>
<script type="text/javascript">
function displayQuestion(answer) {

  document.getElementById(answer + 'Question').style.display = "inline-block";

  if (answer == "v") { // hide the div that is not selected

    document.getElementById('viQuestion').style.display = "none";

  } else if (answer == "vi") {

    document.getElementById('vQuestion').style.display = "none";

  }

}
</script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<?php 
    if (isset($_POST['aplyfor'])){
        $applyfor    = $_POST['applyfor'];
    }

    if (empty($applyfor)) {
        echo '<h2>You Do not Choose any application type. Choose it first. <a href="applyfor.php" class="errLink">Go Here...</a></h2>';
    }
    else{

?>

    <body >
        <div class="theholder">
        	<div class="logo">
                <a href="#">
            		<img alt="logo" class="lazy-image" data-src="./sc_logo.png" src="./sc_logo.png">
            		<h3></h3>
                    <p style="color: #000;">Phone No.:9002314696</p>
            	</a>
        	</div>
    	</div>
            <form class="body" action="submit.php" target="_blank" method="post" enctype="multipart/form-data" onsubmit="if(!confirm('Please Check all Details Properly. Once Submited, It Can\'t Be Edited Later')){return false}" action="javascript:void(0)">
                <input type="" style="display: none;" readonly="" name="stype" value="<?php echo  $applyfor; ?>">
            <div class="fulldiv">
                <h2 class="heading">Registration for Admission (Session 2023)</h2>
                <p class="instr">All columns are mandatory. If a certain column is not applicable for you, please write N/A.</p>
                <div class="headerdiv pr-3">
                    <p>Form No:</p>
                    <input type="text" class="inputfield" readonly="" placeholder="Not For All" name="form_no">
                </div>
                <div class="headerdiv pr-3">
                    <p>Applying For</p>
              <label>
                <input type="radio" id="yes" required="" name="class" value="v" onchange="displayQuestion(this.value)" />Class V</label>
              <label>
                <input type="radio" id="no" required="" name="class" value="vi" onchange="displayQuestion(this.value)" />Class VI</label>
                </div>
                <div class="headerdiv pr-3">
                    <p>Roll No:</p>
                    <input type="text" class="inputfield" disabled="" name="roll_no">
                    <div class="clearfix"></div>
                </div>
                <div class="headerdiv">
                    <p>SESSION: </p>
                    <select class="inputfield" required="" name="session" onchange="flang(this.value)">
                        <option>2023</option>
                    </select>
                </div>
                
            </div>
            <div class="partdiv">
                <h2>Candidate's Primary Details</h2>
                <p>Photo</p>
                <input type="file" class="inputfield" name="photo" onchange="Filevalidation(this);functionmyimg(this,event);" required="" accept="image/x-png,image/jpeg">
                <img src="" class="img">
                <p>Name</p>
                <input type="text" class="inputfield" required="" name="name">
                <div class="clearfix"></div>
                <div class="holderinput">
                    <p>Date of Birth<br><span class="specificationtitle">Age of the candidate should be between 10 to 11 years as on 31st December 2022.</span></p>
                    <select class="threepart" name="dob" required="">
                        <option value="" hidden>DD</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                    </select>
                    <select class="threepart" required="" name="mob">
                        <option value="" hidden>MM</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                    <select class="threepart" name="yobb" id="vQuestion" style="display:none;">
                        <option hidden value="">YYYY</option>
                        <option>2012</option>
                    </select>
                    <select class="threepart" name="yob" id="viQuestion" style="display:none;">
                        <option hidden value="">YYYY</option>
                        <option>2011</option>
                    </select>
                </div>
                <div class="clearfix"></div><br><br>
                <h2>Father's Information</h2>
                <p>Name</p>
                <input type="text" class="inputfield" required="" name="father_name">
                <p>Qualification</p>
                <input type="text" class="inputfield" required="" name="father_qualification">
                <p>Occupation</p>
                <input type="text" class="inputfield" required="" name="father_occupation">
                <br><br>
                <h2>Mother's Information</h2>
                <p>Name</p>
                <input type="text" class="inputfield" required="" name="mother_name">
                <p>Qualification</p>
                <input type="text" class="inputfield" required="" name="mother_qualification">
                <p>Occupation</p>
                <input type="text" class="inputfield" required="" name="mother_occupation">
                <p>Annual Income (in rupees)</p>
                <input type="number" class="inputfield" required="" name="a_income">
                <p>Category</p>
                <select name="a_forclass" class="threepart">
                    <option>General</option>
                    <option>SC</option>
                    <option>ST</option>
                    <option>OBC</option>
                    <option>EWS</option>
                </select>
                <p>Legal Guardian's Name (Only if Father is not the Guardian)</p>
                <input class="inputfield"  name="legal_guardian_name" type="text">
                  <p>Guardian’s name[Only if Father or Mother is not the Guardian]</p>
                <input class="inputfield"  name="guardian_name" type="text">
                  <p>Relationship with the pupil</p>
                <input class="inputfield"  name="rel_type" type="text">
  <br><br>
                <h2>Address</h2>
                <p>Present address</p>
                <input type="text" class="inputfield addressto" data-validate="phone" name="p_address" required="">
                <p>Pin Code</p>
                <input type="number" maxlength="6" class="inputfield addressto"  name="pin" required="">
                <p>Aadhaar Card No.</p>
                <input type="number" maxlength="12" class="inputfield addressto"  name="adhar" required="">
                <p>Phone No</p>
                <input type="number" class="inputfield addressto" name="phone" maxlength="10" required="">
                <p>Mention if the pupil belongs to S.C./S.T./O.B.C./Minority(An attested copy of the testimonial 
should be enclosed):</p>
                <input type="tel" class="inputfield addressto" name="pupin_bel">
  <br><br>

  <center>......................xxxxxxxx.......................</center>
             
            </div>

            <!-- Admit card -->
            <div class="fulldiv">
                <div class="clearfix"></div>
                <center><u><h2>Admit Card</h2></u></center>
                <div class="theholder">
                    <div class="logo">
                        <a href="#">
                            <img alt="logo" class="lazy-image" data-src="./sc_logo.png" src="./sc_logo.png">
                            <h3></h3>
                            <p style="color: #000;">Phone No.:9002314696</p>
                        </a>
                    </div>
                </div>
                <br><br>
                <div class="headerdiv pr-3">
                    <p>Form No:</p>
                    <input type="text" class="inputfield" readonly="" placeholder="Disabled" name="a_form_no">
                </div>
                <div class="headerdiv pr-3">
                    <p>Roll No:</p>
                    <input type="text" class="inputfield" disabled="" name="a_roll_no">
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="partdiv">
                <p>Date and time of Exam:</p>
                    <input type="text" class="inputfield" required="" disabled="" >
                    <p>Session: 2023</p>
                    <div class="clearfix"></div>
                <p>Name and address of the pupil’s present school:</p>
                    <input type="text" class="inputfield" required="" name="a_school_nam">
                    <div class="clearfix"></div>
                <p> Class in which the pupil is reading:</p>
                    <input type="text" class="inputfield" required="" name="a_clspupil">
                    <div class="clearfix"></div>
                <p>Percentage of marks secured at the last examination</p>
                    <div class="headerdiv1">
                        <p>Engligh:</p>
                        <input type="number" class="inputfield" required="" name="a_eng_no">
                    </div>
                    <div class="headerdiv1">
                        <p>Bengali:</p>
                        <input type="number" class="inputfield" required="" name="a_ban_no">
                    </div>
                    <div class="headerdiv1">
                        <p> Mathematics:</p>
                        <input type="number" class="inputfield" required="" name="a_math_no">
                    </div>
                    <div class="headerdiv1">
                        <p>Science:</p>
                        <input type="number" class="inputfield" required="" name="a_science_no">
                    </div>
                    <div class="clearfix"></div>
                
            </div>


            <div class="fulldiv">
                <div class="clearfix"></div>
                <p class="textright instr">For Technical Help Contact: +91 9002314696 </p>
                <input type="Submit" value="Print" class="myButton" name="student_info"  onclick="setTimeout(myFunction, 10000);">
                <div class="clearfix"></div>
            </div>

            
        </form>
<script>
function myFunction() {
  location.replace('https://school.rkmissionramharipur.in/')
}
</script>
<?php

    if ($applyfor == 1) { ?>

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hostel & Outsider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <img src="h2.jpg" class="img-fluid">
            </div>
        </div>
    </div>
    </div>

        
    <?php }
    else{ ?>

     <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Local</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <img src="h1.jpg" class="img-fluid">
            </div>
        </div>
    </div>
    </div>       

    <?php }

?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
       $(document).ready(function(){
            $('#exampleModal').modal('show');
        }); 
    </script>
    </body>

    <?php 
        }

    ?>
</html>
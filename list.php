<?php

include "db.php";
include "log.php";
ob_start();
  //session_start();
//echo $_SESSION['userid'];

if ( !$_SESSION['userid'] ){
    header("Location: logout.php");
    session_unset();
    session_destroy();
  }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admission - Ramharipur Ramakrishna Mission Ashrama</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            font-family: arial;
            font-family:"SolaimanLipiNormal" !important;
        }
        section{
            margin-top:70px;
        }
        .admi{
            margin-top: 20px;
            background-color: #000;
            padding: 20px 200px;
        }
        .admi h1{
            color: #fff;
        }
        .overview{
            margin-top: 20px;
            margin-left: 100px;
        }
        .overview h2{
            margin-bottom: 15px;
            color: red;
            text-decoration: underline;
        }
        .overview ol{
            margin-left: 40px;
        }
        .overview ol ul{
            margin-left: 30px;
        }
        h2{
            color:#007bff;
            font-weight:bold;
            font-size:32px;
            text-decoration:underline;
        }
    </style>
</head>
<body>

    <section>
        <center>
            <div><a href="#"><img src="sc_logo.png" width="150px"></a></div>
              <div class="column">
                  <h4>RAMAKRISHNA MISSION ASHRAMA, RAMHARIPUR</h4>
            P.O.- RAMHARIPUR , BLOCK - GANGAJALGHATI<br>
            SUB-DIVISION - BANKURA SADAR<br>
            DIST - BANKURA, PIN - 722 203.<br>
            Phone No.:9002314696<br>
              </div>
        </center>
        
        <div class="admi">
            <h1>STUDENTS LIST OF CLASS V & VI (SESSION - 2023)</h1>
        </div>
        <br><br>
    </section>
    <center><a href="index.php" class="btn btn-danger mb-5">Logout</a></center>
    <section class="container my-4">
        <center><h2>All Class V Students.</h2></center>
        <div class="" style="text-align: right;"><a href="classv.php" class="btn btn-primary">Print</a></div><br>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Form ID</th>
              <th scope="col">Name</th>
              <th scope="col">Father Name</th>
              <th scope="col">Phone</th>
              <th scope="col">Location</th>
              <th scope="col">Action</th>
              <!--<th scope="col">View Details</th>-->
            </tr>
          </thead>
          <tbody>
            <?php 
                $query = "SELECT * FROM classv";
                $select_students = mysqli_query($connection, $query);
                $i = 0;
                while ( $row = mysqli_fetch_assoc($select_students) )
                {
                    $form_id        = $row['form_id'];
                    $c_class        = $row['c_class'];
                    $c_name         = $row['c_name'];
                    $c_father_nam   = $row['c_father_nam'];
                    $c_phone        = $row['c_phone'];
                    $h_i            = $row['h_l'];
                    $i++;
                    ?>
                    <tr>
                    <?php  if($h_i == '1'){
                            $loc = "Hostel & Outsider";
                        } 
                        else{
                            $loc = "Local";
                        }
                    
                    ?>
                      <th scope="row"><?php echo $i; ?>  </th>
                      <td>RKM/<?php echo $c_class; ?>/<?php echo $form_id; ?></td>
                      <td><?php echo $c_name; ?></td>
                      <td><?php echo $c_father_nam; ?></td>
                      <td><?php echo $c_phone; ?></td>
                      <td><?php echo $loc; ?></td>
                      <td>
                        <div class="btn-group">
                            <a href="viewv.php?view_stu=<?php echo $c_phone; ?>" class="btn btn-warning" target="_blank">View</a>
                            <a href="list.php?delvstu=<?php echo $form_id; ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </tr>

                    <?php

                }
            ?>
          </tbody>
        </table>
    </section>
    
    <section class="container my-4">
        <center><h2>All Class VI Students.</h2></center>
        <div class="" style="text-align: right;"><a href="classvi.php" class="btn btn-primary">Print</a></div><br>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Form ID</th>
              <th scope="col">Name</th>
              <th scope="col">Father Name</th>
              <th scope="col">Phone</th>
              <th scope="col">Location</th>
              <th scope="col">Action</th>
              <!--<th scope="col">View Details</th>-->
            </tr>
          </thead>
          <tbody>
            <?php 
                $query = "SELECT * FROM classvi";
                $select_students = mysqli_query($connection, $query);
                $i = 0;
                while ( $row = mysqli_fetch_assoc($select_students) )
                {
                    $form_id        = $row['form_id'];
                    $c_class        = $row['c_class'];
                    $c_name         = $row['c_name'];
                    $c_father_nam   = $row['c_father_nam'];
                    $c_phone        = $row['c_phone'];
                    $h_i            = $row['h_l'];
                    $i++;
                    ?>
                    <tr>
                        <?php  if($h_i == '1'){
                            $loc = "Hostel & Outsider";
                        } 
                        else{
                            $loc = "Local";
                        }
                    
                    ?>
                      <th scope="row"><?php echo $i; ?>  </th>
                      <td>RKM/<?php echo $c_class; ?>/<?php echo $form_id; ?></td>
                      <td><?php echo $c_name; ?></td>
                      <td><?php echo $c_father_nam; ?></td>
                      <td><?php echo $c_phone; ?></td>
                      <td><?php echo $loc; ?></td>
                      <td>
                        <div class="btn-group">
                            <a href="viewvi.php?view_stu=<?php echo $c_phone; ?>" class="btn btn-warning" target="_blank">View</a>
                            <a href="list.php?delvistu=<?php echo $form_id; ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </tr>

                    <?php

                }
            ?>
          </tbody>
        </table>
    </section>
    
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<?php
    if (isset($_GET['delvstu'])) {
        $id_del_todo    = $_GET['delvstu'];
        $deltodoLst = "DELETE FROM classv WHERE form_id = '$id_del_todo' ";

        $delListfrmTodo = mysqli_query($connection, $deltodoLst);

        if ( !$delListfrmTodo ){
              die("Query Failed ". mysqli_error($connection));
        }
        else{
              header("Location: list.php");
        }
    }

?>

<?php
    if (isset($_GET['delvistu'])) {
        $delvistu    = $_GET['delvistu'];
        $deltodoLst = "DELETE FROM classvi WHERE form_id = '$delvistu' ";

        $delListfrmTodo = mysqli_query($connection, $deltodoLst);

        if ( !$delListfrmTodo ){
              die("Query Failed ". mysqli_error($connection));
        }
        else{
              header("Location: list.php");
        }
    }

?>


<?php ob_end_flush(); ?>
</body>
</html>


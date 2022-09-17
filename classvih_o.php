<?php

include "db.php";
ob_start();

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
    
    <section class="container my-4">
        <center><h2>All Class VI Students (Hostel & Outsider).</h2></center>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Form ID</th>
              <th scope="col">Name</th>
              <th scope="col">Father Name</th>
              <th scope="col">Phone</th>
              <th scope="col">View Details</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                $query = "SELECT * FROM candidates WHERE c_class = 'vi' && h_l = '1'";
                $select_students = mysqli_query($connection, $query);
                $i = 0;
                while ( $row = mysqli_fetch_assoc($select_students) )
                {
                    $form_id        = $row['form_id'];
                    $c_class        = $row['c_class'];
                    $c_name         = $row['c_name'];
                    $c_father_nam   = $row['c_father_nam'];
                    $c_phone        = $row['c_phone'];
                    $i++;
                    ?>
                    <tr>
                      <th scope="row"><?php echo $i; ?>  </th>
                      <td>RKM/<?php echo $c_class; ?>/<?php  ?></td>
                      <td><?php echo $c_name; ?></td>
                      <td><?php echo $c_father_nam; ?></td>
                      <td><?php echo $c_phone; ?></td>
                      <td>
                        <div class="btn-group">
                            <a href="view.php?view_stu=<?php echo $form_id; ?>" class="btn btn-warning">View</a>
                        </div>
                      </td>
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
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
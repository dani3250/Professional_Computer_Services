<!DOCTYPE html>

<?php
session_start();
  include 'php_includes/db.php';
  $membrs = 'members';
      //Check whether session variable set
      if (isset($_SESSION['uname']) && $_SESSION['urole'] == "admin")

       # code...
       {

      }
       else
        {
          echo "not logged in";
          header("location: login.php");
        }
    ?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	


	<link rel="stylesheet" 
href="css/datatables/dataTables.bootstrap.css"/>





    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="<?= basename($_SERVER['PHP_SELF'], ".php")?>">

    <div id="wrapper">

        <!-- Navigation -->
        
		 <div id="header">
		  <?php
		  include_once 'header.php';
		  
		  ?>
		  </div>
		
		
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            All Complaints
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
							<li>
                                <i class="fa fa-fw fa-arrows-v"></i>  <a href="#">Complaints</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> View All Complaints
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

					
				 
                         <div class="table-responsive col-lg-12">
                            <table id="ticketStatusTable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
										
										<th>Ticket Id</th>
                                        <th>Customer Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Product</th>
										<th>Description</th>
										<th>Assigned To</th>
										<th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                      //View the complaints table
                      $tblmck= "tbl_mock";
                      $sql = "SELECT tbl_mock.id,tbl_mock.c_name,tbl_mock.c_email,tbl_mock.c_mobile,tbl_mock.product,tbl_mock.description,tbl_mock.assigned_worker,tbl_status.status_name FROM `tbl_mock` inner join tbl_status on tbl_status.status_id=tbl_mock.fk_status";
                      $ans = mysql_query($sql);
                        while ($record = mysql_fetch_array($ans))
                      {
                            echo '<tr>';
                            echo '<td>'. $record['id']."</td>";
                            echo "<td>". $record['c_name']."</td>";
                            echo "<td>". $record['c_email']."</td>";
                            echo "<td>". $record['c_mobile']."</td>";
                            echo "<td>". $record['product']."</td>";
                            echo "<td>". $record['description']."</td>";
                            echo "<td>". $record['assigned_worker']."</td>";
                            echo "<td>". $record['status_name']."</td>";
                           /* echo '<td><button type="button" class="btn btn-success btn-full">
  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Completed
</button></td>';*/
                            echo "</tr>";
                      }
                    ?>
                                 <!--   <tr>
                                        <td>SSC000000012</td>
                                        <td>Henna</td>
                                        <td>7411723243</td>
										<td>Laptop</td>
										<td>System very slow</td>
                                        <td>Dani</td>
										<td><button type="button" class="btn btn-success btn-full">
  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Completed
</button></td>
                                    </tr>
									<tr>
                                        <td>SSC000000009</td>
                                        <td>Mohammed</td>
                                        <td>7411723243</td>
										<td>Laptop</td>
										<td>System very slow</td>
                                        <td></td>
										<td><button type="button" class="btn btn-primary btn-full">
  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Not Assigned
</button></td>
                                    </tr>
                                    <tr>
                                        <td>SSC000000077</td>
                                        <td>Noureen</td>
                                        <td>8547546521</td>
										<td>Laptop</td>
										<td>Keyboard not working</td>
                                        <td>Hennu</td>
										<td><button type="button" class="btn btn-warning btn-full">
  <span class="glyphicon glyphicon-time" aria-hidden="true"></span> In Progress
</button></td>
                                    </tr>
                                    <tr>
                                        <td>SSC000000066</td>
                                        <td>Neha</td>
										<td>7411723243</td>
										<td>Laptop</td>
                                        <td>Keyboard not working</td>
                                        <td>Ribu</td>
										<td>
										
  <button type="button" class="btn btn-info btn-full">
  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Onsite
</button>

										</td>
                                    </tr>
                                     <tr>
                                        <td>SSC000000012</td>
                                        <td>Henna</td>
                                        <td>7411723243</td>
										<td>Laptop</td>
										<td>System very slow</td>
                                        <td>Dani</td>
										<td><button type="button" class="btn btn-success btn-full">
  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Completed
</button></td>
                                    </tr>
									<tr>
                                        <td>SSC000000009</td>
                                        <td>Mohammed</td>
                                        <td>7411723243</td>
										<td>Laptop</td>
										<td>System very slow</td>
                                        <td></td>
										<td><button type="button" class="btn btn-primary btn-full">
  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Not Assigned
</button></td>
                                    </tr>
                                    <tr>
                                        <td>SSC000000077</td>
                                        <td>Noureen</td>
                                        <td>8547546521</td>
										<td>Laptop</td>
										<td>Keyboard not working</td>
                                        <td>Hennu</td>
										<td><button type="button" class="btn btn-warning btn-full">
  <span class="glyphicon glyphicon-time" aria-hidden="true"></span> In Progress
</button></td>
                                    </tr>
                                    <tr>
                                        <td>SSC000000066</td>
                                        <td>Neha</td>
										<td>7411723243</td>
										<td>Laptop</td>
                                        <td>Keyboard not working</td>
                                        <td>Ribu</td>
										<td>
										
  <button type="button" class="btn btn-info btn-full">
  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Onsite
</button>

										</td>
                                    </tr>-->
                                </tbody>
                            </table>
                        
                    </div>
                


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

	
	
	
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

	
	
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript" 
src="js/datatables/jquery.dataTables.min.js"></script>

<script type="text/javascript" 
src="js/datatables/dataTables.bootstrap.js"></script>

<script>
	
$(function() {
	$('#ticketStatusTable').dataTable( {
        "createdRow": function ( row, data, index ) {
                $('td', row).eq(5).addClass('highlight');
        }
    } );
} );
	</script>
</body>

</html>

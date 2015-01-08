<!DOCTYPE html>

<?php
session_start();
  include 'php_includes/db.php';
  $membrs = 'members';
      //Check whether session variable set
      if (isset($_SESSION['uname']))

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
                            Onsite Work
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
							<li>
                                <i class="fa fa-fw fa-arrows-v"></i>  <a href="#">Tickets</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i>Onsite Work
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

					
				 
                         <div class="table-responsive col-lg-12">
                            <table id="onsiteWorkTable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
										
										<th>Ticket Id</th>
                                        <th>Customer Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Product</th>
										<th>Description</th>
										<th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
										  //View the complaints table
										  $tblmck= "tbl_mock";
										  $user = $_SESSION['uname'];
										  $sql = "SELECT * FROM $tblmck WHERE assigned_worker='$user' AND fk_status='2' or fk_status='3'";
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
                                                if ($record['fk_status'] ==2) {
                                                    # code...
                                                
												echo '<td><button type="button" class="btn btn-primary btn-full addRepairBotton">
														  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Repair Estimation
														  </button></td>';
                                                        }
                                                elseif ($record['fk_status'] ==3) {
                                                    # code...
                                                    echo '<td><button type="button" class="btn btn-primary btn-full addRepairBotton">
                                                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Henna girl
                                                          </button></td>';
                                                }
												echo "</tr>";
										  }
									?>        
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

	
	<script>$('.addRepairBotton').on('click', function ()
                  {
                    x=( $(this).parent().parent().find('td:first').text());
                    //document.getElementByid('comp_id') = x;
                  
                    window.location.href = "onsiteWorkMore.php?id=" + x;
                    

                    //document.getElementByid('comp_id') = x;
                  });
                  </script>
	
</body>

</html>

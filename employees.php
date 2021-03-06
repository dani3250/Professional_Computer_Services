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

    <title>Salaam Computers Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="toastr/toastr.css" rel="stylesheet"/>


	<link rel="stylesheet" href="css/datatables/dataTables.bootstrap.css"/>

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
							<div class="row">
								<div class="col-lg-6">
									List of Employees
								</div>							
								<div class="col-lg-6">
									<button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#newEmp">
										<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
										Add New Employee
									</button>
								</div>
							</div>
                        </h1>
						
				
                <!-- /.row -->
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i>	List of Employees
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

					
				<div class="table-responsive col-lg-12">
                    <table id="employee" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Employee Id</th>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php
								//View the complaints table
								$members= "members";
								$sql = "SELECT * FROM $members";
								$ans = mysql_query($sql);
								while ($record = mysql_fetch_array($ans))
									{
										echo '<tr>';
											echo '<td>'. $record['id']."</td>";
											echo "<td>". $record['username']."</td>";
											echo "<td>". $record['name']."</td>";
											echo "<td>". $record['u_email_id']."</td>";
											echo "<td>". $record['phone']."</td>";
											echo "<td>". $record['role']."</td>";
											echo '<td><button type="button" value="Onsite" class="btn btn-danger" title="Delete">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                            </button>
                                            <button type="button" value="Onsite" class="btn btn-success" title="Delete">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                            </button></td>
                                            ';
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

	
	
	
	<!-- #modal for new complaint -->
	<div class="modal fade" id="newEmp" tabindex="-1" role="dialog" aria-labelledby="newTicketLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="newTicketLabel">New Employee</h4>
				</div>
				<form>
					<div class="modal-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" placeholder="Name" class="form-control">
			                	</div>   
	                		</div>       
	                		<div class="col-lg-6">
								<div class="form-group">
									<input type="text" placeholder="Email" class="form-control">
								</div>
							</div>
						</div>
	                	<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" placeholder="Mobile Number" class="form-control">
								</div>
							</div>
	               			<div class="col-lg-6">
								<div class="form-group">
									<select class="form-control">
										<option value="">Select Role</option>
										<option value="admin">Admin</option>
										<option value="worker">Worker</option>
									</select>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<input type="text" placeholder="Username" class="form-control">
						</div>

						<div class="form-group">
							<input type="password" placeholder="Password" class="form-control">
						</div>

						<div class="form-group">
							<input type="password" placeholder="Confirm Password" class="form-control">
						</div>
	               
					</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-default">Reset</button>
						<button type="button" class="btn btn-primary">Create</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /#modal for new complaint -->
	
		
	<!-- #invalidating session -->	
	<!--<?php 
		$_SESSION["mail_message"]=''; 
		$_SESSION["update_message"]=''; 
	?>-->
	<!-- /#invalidating session -->
		
		
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

	<!-- toastr -->
	<script src="toastr/toastr.js"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- datatables -->
	<script type="text/javascript" src="js/datatables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/datatables/dataTables.bootstrap.js"></script>

<script>
	
	$(function() {
		
	/*
	toastr.options = {
						"positionClass": "toast-bottom-right",
					 }
	*/	
    $('#employee').dataTable();
	/*	
	var mail_message_val = $(document).find('#mail_message').val();
	var update_message_val = $(document).find('#update_message').val();
	var message = mail_message_val + "</br>" + update_message_val;
	
	if(mail_message_val != '' && update_message_val != '' && mail_message_val == undefined && update_message_val == undefined)
	{
		toastr.info(message);
		
	}	
	*/
	
	
} );
	</script>

</body>

</html>

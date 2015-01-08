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

<input type="hidden" id="mail_message" value="<?php if (isset($_SESSION["mail_message"])) {
  # code...
 echo $_SESSION["mail_message"];} ?>">
<input type="hidden" id="update_message" value="<?php echo $_SESSION["update_message"]; ?>">

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
									New Complaints
								</div>							
								<div class="col-lg-6">
									<button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#newTicket">
										<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
										Add New Complaint
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
                                <i class="fa fa-table"></i> New Complaints
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

					
				<div class="table-responsive col-lg-12">
                    <table id="ticket" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Product</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php
								//View the complaints table
								$tblmck= "tbl_mock";
								$sql = "SELECT * FROM $tblmck WHERE fk_status='0'";
								$ans = mysql_query($sql);
								while ($record = mysql_fetch_array($ans))
									{
										echo '<tr>';
											echo '<td>'. $record['id']."</td>";
											echo "<td>". $record['c_name']."</td>";
											echo "<td>". $record['c_email']."</td>";
											echo "<td>". $record['c_mobile']."</td>";
											echo "<td>". $record['product']."</td>";
											echo '<td class="description">'. $record['description']."</td>";
											echo '<td><button type="button" class="bton btn btn-default " data-toggle="modal" data-target="#workerModal">
													<span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
													</button></td>';
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
	<div class="modal fade" id="newTicket" tabindex="-1" role="dialog" aria-labelledby="newTicketLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="newTicketLabel">New Ticket</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="text" placeholder="Name" class="form-control">
                	</div>          
                
					<div class="form-group">
						<input type="text" placeholder="Email" class="form-control">
					</div>
                
					<div class="form-group">
						<input type="text" placeholder="Phone Number" class="form-control">
					</div>
               
					<div class="form-group">
						<select class="form-control">
							<option value="">Select Product</option>
							<option>Laptop</option>
							<option>Desktop</option>
						</select>
					</div>
               
					<div class="form-group">
						<textarea class="form-control" rows="3" placeholder="How we help you ?"></textarea>
					</div>
               
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /#modal for new complaint -->

	
	<!-- #modal for Workers table -->
	<div class="modal fade" id="workerModal" data-backdrop="true" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="workerModalLabel">Workers</h4>
				</div>
				<div class="modal-body">
					<table id="workerTablenew" class="table table-bordered">
						<thead class="workerTablehead">
							<tr>
								<th >Name</th>
								<th >Assigned Work</th>
								<th ></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php
								  $sql = "SELECT * FROM $membrs";
								  $result = mysql_query($sql);
								  while ($record = mysql_fetch_assoc($result))
								  {
									echo "<tr>";
										echo '<td>'. $record['username']."</td>";
										echo "<td>7777</td>";
										echo '<td><button type="button" class="botn btn btn-default fa fa-edit">Assign</button></td>';
									echo "</tr>";
								  }
								?>
								<form>
									<input type="hidden" name="asgnd_wrkr" value="<?php echo htmlspecialchars($record['username']); ?>">
									<input type="hidden" name="comp_id" value="">
								</form>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
    </div>
    <!-- /#modal for Workers table -->
		
		
	<!-- #modal for loading -->
	<div class="modal fade" id="loading" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<p>Assigning Worker and Sending Mail to the Customer.</p>
					<p>Please wait</p>
					<span class="l-1"></span>
					<span class="l-2"></span>
					<span class="l-3"></span>
					<span class="l-4"></span>
					<span class="l-5"></span>
					<span class="l-6"></span>
				</div>   
			</div>
		</div>
	</div>
	<!-- /#modal for loading -->
	
		
	<!-- #invalidating session -->	
	<?php 
		$_SESSION["mail_message"]=''; 
		$_SESSION["update_message"]=''; 
	?>
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
	
		$('#workerTablenew').dataTable({
					"lengthChange": false,
					"lengthMenu": [5]
			} );
	
	*/
	
	toastr.options = {
						"positionClass": "toast-bottom-right",
					 }
		
    $('#ticket').dataTable();
		
	var mail_message_val = $(document).find('#mail_message').val();
	var update_message_val = $(document).find('#update_message').val();
	var message = mail_message_val + "</br>" + update_message_val;
	
	if(mail_message_val != '' && update_message_val != '')
	{
		toastr.info(message);
		
	}	
	
	
	
} );
	</script>
  <script>$('.bton').on('click', function ()
                  {
                    x=( $(this).parent().parent().find('td:first').text());
                    $(document).getElementByid('comp_id') = x;
					
                  });
                  </script>
<script>$('.botn').on('click', function ()
                  {
                    y=( $(this).parent().parent().find('td:first').text());
                    window.location.href = "php_includes/assgn_wrkr.php?id=" + x + "&wrkr=" + y;
					$('#workerModal').modal('hide');
				   
				    $('#loading').modal('show');

					$('#loading').modal({
						keyboard: 'false',
						backdrop: 'static'
					});
                    //document.getElementByid('comp_id') = x;
                  });
				  
				  
                  </script>
  

</body>

</html>

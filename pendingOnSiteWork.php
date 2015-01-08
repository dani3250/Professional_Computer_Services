<!DOCTYPE html>
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
                            Pending Onsite Work
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
							<li>
                                <i class="fa fa-fw fa-arrows-v"></i>  <a href="#">Tickets</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i>Pending Onsite Work
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

					
				 
                         <div class="table-responsive col-lg-12">
                            <table id="pendingOnSiteWorkTable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
										
										<th>Ticket Id</th>
                                        <th>Customer Name</th>
                                        <th>Phone Number</th>
                                        <th>Product</th>
										<th>Description</th>
										<th>Assigned To</th>
										
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Henna</td>
                                        <td>hena.watson@gmail.com</td>
                                        <td>7411723243</td>
										<td>7411723243</td>
										<td>Laptop</td>
                                        <td>System very slow</td>
										
										<td><button type="button" class="btn btn-success btn-half">
											<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Approve
											</button>
											<button type="button" class="btn btn-danger btn-half">
											<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Reject
											</button>
										</td>
                                    </tr>
                                    <tr>
                                        <td>Noureen</td>
                                        <td>noreen.rafeeque@gmail.com</td>
                                        <td>8547546521</td>
										<td>7411723243</td>
										<td>Laptop</td>
                                        <td>Keyboard not working</td>
										
										<td><button type="button" class="btn btn-success btn-half">
											<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Approve
											</button>
											<button type="button" class="btn btn-danger btn-half">
											<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Reject
											</button>
										</td>
                                    </tr>
                                    <tr>
                                        <td>/sales.html</td>
                                        <td>665</td>
										<td>7411723243</td>
										<td>32.3%</td>
                                        <td>21.3%</td>
                                        <td>$16.34</td>
										
										<td><button type="button" class="btn btn-success btn-half">
											<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Approve
											</button>
											<button type="button" class="btn btn-danger btn-half">
											<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Reject
											</button>
										</td>
                                    </tr>
                                    
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
	$('#pendingOnSiteWorkTable').dataTable( {
        "createdRow": function ( row, data, index ) {
                $('td', row).eq(5).addClass('highlight');
        }
    } );
} );
	</script>
</body>

</html>

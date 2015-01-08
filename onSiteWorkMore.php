<!DOCTYPE html>

<?php
session_start();
  $id = $_GET['id'];
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
								Repair Estimation
							</h1>
							<ol class="breadcrumb">
								<li>
									<i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
								</li>
								<li class="active">
									<i class="fa fa-table"></i> Repair Estimation
								</li>
							</ol>
						</div>
					</div>
					<!-- /.row -->
					<div class="col-lg-6 ">
						<form action="php_includes/estimation_update.php" method="GET" class="form-horizontal">
							<input type="hidden" name="id" value="<?php echo $id ;?>">
							<div class="form-group">
								<label class="col-sm-5">Device collected date</label>
								<div class="col-sm-7">
									<input type="date" name="clct_date" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5">Brand</label>
								<div class="col-sm-7">
									<input type="text" name="brand" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5">Model</label>
 									<div class="col-sm-7">
										<input type="text" name="model" class="form-control">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5">Serial No/IMEI No</label>
								<div class="col-sm-7">
									<input type="text" name="serial" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5">Repair Estimation Cost</label>
								<div class="col-sm-7">
									<input type="text" name="estmte" class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-5">Remarks</label>
								<div class="col-sm-7">
									<textarea class="form-control" name="remarks"rows="3"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-10">
									<button type="submit" class="reairSubtn btn btn-primary">Submit</button>
								</div>
							</div>
						</form>                    
                    </div>
					<div class="col-lg-6 ">
						<div class="well">
							<div class="row">
								<h3> Ticket Summary</h3>
							</div>
							<div class="row">
								<div class="col-lg-6 ">
									<h5>  Ticket Id : <strong><?php echo $id;?></strong></h5>
                                </div>
								<?php
								//View the complaints table
								$tblmck= "tbl_mock";
								$sql = "SELECT * FROM $tblmck WHERE id='$id'";
								$record = mysql_query($sql);
								$ans = mysql_fetch_assoc($record);
							?>
								
								<div class="col-lg-6 ">
                                    <h5>Customer Name : <strong><?php echo $ans['c_name']; ?></strong></h5>
                                </div>
							</div>
							<div class="row">
								<div class="col-lg-6 ">
                                    <h5>Email : <strong><?php echo $ans['c_email']; ?></strong></h5>
                                </div>
								<div class="col-lg-6 ">
									<h5>Phone Number : <strong><?php echo $ans['c_mobile']; ?></strong></h5>
                                </div>
							</div>
							<div class="row">
								<div class="col-lg-6 ">
									<h5>Product : <strong><?php echo $ans['product']; ?></strong></h5>
                                </div>
								<div class="col-lg-6 ">
									<h5>Description : <strong><?php echo $ans['description']; ?></strong></h5>
                                </div>
							</div>
						</div>
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


<script>
	$('.repairSubtn').on('click', function ()
		{  
			window.location.href = "onsiteWork.php";        
        });
</script>

</body>

</html>

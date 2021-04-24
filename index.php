<?php include_once 'header.php'; ?>
<?php include_once 'libraries/shield.php'; session_start(); ?>

<?php

	$visit = $_SERVER['REQUEST_URI'];
  	$visit = substr($visit,1);

  	$_SESSION['visit'] = $visit;

?>

<body>
		
		<!--Navigation Bar-->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a href="../index.php" class="navbar-brand">CRC</a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
         <div class="navbar-nav">
            <a href="#" class="nav-item nav-link active">Home</a>
            <a href="pages/about.php" class="nav-item nav-link">About</a>
	    <a href="pages/request.php" class="nav-item nav-link">Request</a>
            <a href="pages/response.php" class="nav-item nav-link">Response</a>
         </div>
         <div class="navbar-nav ml-auto">
            <?php if(isset($_SESSION['email'])) {
               echo '<a href="pages/profile.php" class="nav-item nav-link active"><i class="fa fa-user-o">  '.$_SESSION['email'].'</i></a>';
               echo '<a href="../sign_in/logout.php" class="nav-item nav-link">Logout</a>';
               }
               else{
               echo '<a href="../sign_in/google_sign_in.php" class="nav-item nav-link">Sign in</a>';
               }
               ?>
         </div>
      </div>
   </nav>
	
	
		<?php $c=10; ?>
	
		<div class="row m-4 d-flex justify-content-center">
			<?php for($i=0;$i<$c;$i++) { ?>
				<div class="col12 col-sm-3 m-2">
					<div class="card">
  						<h5 class="card-header">Manoj&nbsp&nbsp<i class="fa fa-check-circle" aria-hidden="true" style="color:green;"></i></h5>
  						<div class="card-body">
    							<h5 class="card-title">Karnataka</h5>
    							<p class="card-text">Oxygen Cylinder</p>
							<p class="card-text">Area: Yelahanka</p>
							<p class="card-text">Request Description: Blood Plasma O+ve</p>
							<p class="card-text">Ph no: 9980712884</p>
							<p class="card-text"><i class="fa fa-arrow-up" aria-hidden="true" style="color:green;font-size:24px;"></i>&nbsp&nbsp<i class="fa fa-arrow-down" aria-hidden="true" style="color:red;font-size:24px;"></i></p>
  						</div>
					</div>
				</div>
			<?php } ?>
		</div>
  
</body>

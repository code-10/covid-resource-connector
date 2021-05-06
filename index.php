<?php include_once 'header.php'; ?>
<?php include_once 'libraries/shield.php'; session_start(); ?>

<?php

	$visit = $_SERVER['REQUEST_URI'];
  	$visit = substr($visit,1);

  	$_SESSION['visit'] = $visit;

?>

<body style="font-family:'Poppins', sans-serif;">
		
	
		<?php include_once "navBar.php"; ?>
	
		<?php $c=10; ?>
	
		<div class="container">
			<!--<h1 class="mb-5 responsive-lg">Find Resources to Fight Covid</h1>-->
			<h4 class="mt-4 responsive-md font-weight-bold">Welcome to Covid Resource Connector, 
				<span class="responsive-itt">In association with ITT(In This Together)
					<a href="https://www.instagram.com/inthistogethercovid/?hl=en"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  						<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
					</svg></a>
				</span> 
			</h4>
			<h6 class="text-muted">A Non-profit Organization.</h6>
      			<p class="mt-2 responsive-tx">Our Website bridges the communication gap between people who want to help and people who want help regarding covid related queries.</p>
			<br>
			<div class="row">
				<div class="col col-sm-6 text-center">
					<a class="btn btn-success rounded-pill res-mar res-pad" href="pages/view_posts.php?type=resource" role="button" style="background-color:#006E5F;">View All Resources</a>
				</div>
				<div class="col col-sm-6 text-center">
					<a class="btn btn-success rounded-pill res-mar res-pad" href="pages/view_posts.php?type=request" role="button" style="background-color:#006E5F;">View Requests & Respond</a>
				</div>
			</div>
			
			<div class="row">
				<div class="col col-sm-6 text-center">
					<a class="btn btn-success rounded-pill res-mar res-pad" href="pages/create_post.php?resource=selected" role="button" style="background-color:#006E5F;">Create a Resource</a>
				</div>
				<div class="col col-sm-6 text-center">
					<a class="btn btn-success rounded-pill res-mar res-pad" href="pages/create_post.php?request=selected" role="button" style="background-color:#006E5F;">Create a Request</a>
				</div>
			</div>

			<div class='row'>
				<div class='col text-center'>
						<a class="btn btn-success rounded-pill res-mar res-pad" href="pages/backup_display.php" role="button" style="border:3px solid #006E5F;color:#006E5F;background:white">See Backup of Posts</a>
				</div>
			</div>
			
			<!--<h2 class="responsive-md mb-4">Find resources <a class="btn btn-info btn-sm" href="pages/view_posts.php?type=resource" role="button">View All Available Resources</a></h2>
			<h2 class="responsive-md mb-4">Want to Help? <a class="btn btn-success btn-sm" href="pages/view_posts.php?type=request" role="button">View Requests & Respond</a></h2>
			<h2 class="responsive-md mb-4">You Want to  Help? <a class="btn btn-success btn-sm" href="pages/create_post.php?resource=selected" role="button">Create a Resource</a></h2>
			<h2 class="responsive-md mb-4">Want Help? <a class="btn btn-success btn-sm" href="pages/create_post.php?request=selected" role="button">Create a Request</a></h2>-->
		</div>
  
<br><br>	
	
</body>

<div class="text-center">
	<a href="pages/donate.php?main=yes"><button type="button" class="btn btn-dark" style="background-color:purple;"><i class="fa fa-hand-holding-heart mr-2"></i>Donate</button></a>
</div>

<br><br>

<style>
    /*Media Queries*/
	@media (min-width:320px)  { .responsive-md{font-size:24px;} .responsive-lg{font-size:32px;} .responsive-tx{font-size:12px;} .res-pad{padding:10px;} .res-mar{margin:8px;} .responsive-itt{font-size:12px;} /* smartphones, iPhone, portrait 480x320 phones */ }
	@media (min-width:481px)  { .responsive-md{font-size:32px;} .responsive-lg{font-size:64px;} .responsive-tx{font-size:16px;} .res-pad{padding:20px;} .res-mar{margin:16px;} .responsive-itt{font-size:20px;}/* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */ }
    	@media (min-width:641px)  { .responsive-md{font-size:32px;} .responsive-lg{font-size:64px;}  .responsive-tx{font-size:16px;} .res-pad{padding:20px;} .res-mar{margin:16px;} .responsive-itt{font-size:20px;}/* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */ }
	@media (min-width:961px)  { .responsive-md{font-size:32px;}  .responsive-lg{font-size:64px;} .responsive-tx{font-size:16px;} .res-pad{padding:20px;} .res-mar{margin:16px;} .responsive-itt{font-size:20px;}/* tablet, landscape iPad, lo-res laptops ands desktops */ }
	@media (min-width:1025px) { .responsive-md{font-size:32px;}  .responsive-lg{font-size:64px;} .responsive-tx{font-size:16px;} .res-pad{padding:20px;} .res-mar{margin:16px;} .responsive-itt{font-size:20px;}/* big landscape tablets, laptops, and desktops */ }
	@media (min-width:1281px) { .responsive-md{font-size:32px;}  .responsive-lg{font-size:64px;} .responsive-tx{font-size:16px;} .res-pad{padding:20px;} .res-mar{margin:16px;} .responsive-itt{font-size:20px;}/* hi-res laptops and desktops */ }
	
</style>

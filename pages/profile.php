<?php include_once '../header.php'; ?>
<?php include_once '../libraries/shield.php'; ?>
<?php session_start(); ?>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="../index.php" class="navbar-brand">CRC</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="../index.php" class="nav-item nav-link">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
        </div>
        <div class="navbar-nav ml-auto">
            <?php if(isset($_SESSION['email'])){
                    echo '<a href="#" class="nav-item nav-link active"><i class="fa fa-user-o"> '.$_SESSION['email'].'</i></a>';
                    echo '<a href="../sign_in/logout.php" class="nav-item nav-link">Logout</a>';
                }
                else{
                    echo '<a href="../sign_in/sign_in.php" class="nav-item nav-link">Sign in</a>';
                }
            ?>
        </div>
    </div>
</nav>
    
    
  <!--profile-->
    <div class="p-4" style="background-color:black;">
        <div class="text-center">
            <?php 
                    if(isset($_SESSION['email'])&&(!(isset($_SESSION['simple'])))){ 
                      
                        $user=$_SESSION['user_first_name'];
                        $user[0]=strtoupper($user[0]);
                      
                        $last_name=$_SESSION['last_name'];
                        $last_name[0]=strtoupper($last_name[0]);
                        
                        echo '<h1 class="display-6 mb-2" style="color:white;"> <i class="fa fa-user-circle-o" style="color:white;"></i>  '.$user.' '.$last_name.' </h1>';
                        echo '<a href="#" class="nav-item nav-link active" style="color:white;"><i class="fa fa-envelope"> '.$_SESSION['email'].'</i></a>';
                    }
                    else if(isset($_SESSION['email'])&&(isset($_SESSION['simple']))){ 
                        $user=$_SESSION['email'];
                        echo '<h1 class="display-6 mb-2" style="color:white;"> <i class="fa fa-user-circle-o" style="color:white;"></i>  '.$user.' </h1>';
                    }
                    else
                    {
                        header("Location:../index.php");
                        die();
                    }
            ?>
        </div>

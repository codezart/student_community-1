<?php

require_once('controller/authController.php');

// if the user clicked on the email he will have a token
if (isset($_GET['token'])){
    $token = $_GET['token'];
    verifyUser($token);
}

// if the user is not signed in
if(!isset($_SESSION['id'])){
    header("Location: login.php");
}
if(isset($_SESSION['user_type']) && $_SESSION['user_type']== 1){
    header("Location: ../Admin/");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../assets/css/maintheme.css">
    <link rel="stylesheet" href="../assets/css/sidenavbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--NAVBAR-->
     <?php require('../studentcommunitynavbar.php');?>    
    <div class="container-fluid">
        
        <div class="row" id="row1">
            <div class="col-12">
                <h3 class="text-center">
                    Welcome <strong>
                    <?php 
                    echo $_SESSION['username'];
                    ?></strong>
                </h3>
                
            </div>
        </div>
        
        <div class="row" id="row1">
            <div class="col-12">
                
                <?php if(isset($_SESSION['verifyMessage'])) :?>
                    <div class="alert alert-success">
                        <b><?php 
                                echo $_SESSION['verifyMessage'];
                                unset($_SESSION['verifyMessage']);
                            ?>
                        </b>
                    </div>
                <?php endif;?>
            </div>
        </div>

    </div>

    <div class="container-fluid">
        <div class="cards">
            <div class="card text-white bg-dark mb-3" style="max-width: 28rem;">
                <div class="card-header">Profile</div>
                <div class="card-body">
                    <h5 class="card-title">USER PROFILE PAGE</h5>
                    <p class="card-text">you can edit your information (username and password) from this page</p>
                    <a href='userprofile.php' id='homeBtn'>Go</a>
                </div>
            </div>
            <div class="card text-white bg-dark mb-3" style="max-width: 28rem;">
                <div class="card-header">communities</div>
                <div class="card-body">
                    <h5 class="card-title">COMMUNITIES PAGE</h5>
                    <p class="card-text">you can join communities or create your own community from this page</p>
                    <a href='../Communities/communities.php' id='homeBtn'>Go</a>
                </div>
            </div>
            <div class="card text-white bg-dark mb-3" style="max-width: 28rem;">
                <div class="card-header">companies</div>
                <div class="card-body">
                    <h5 class="card-title">COMPANIES PAGE</h5>
                    <p class="card-text">you can view companies evaluations or give you own evaluation for a company form this page</p>
                    <a href='../CompaniesEvaluation/Homepage.php' id='homeBtn'>Go</a>
                </div>
            </div>
        </div>
    </div>

    

    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../assets/js/sidenavbar.js"></script>
</body>
</html>

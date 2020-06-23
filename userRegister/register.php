<?php
require_once('controller/authController.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">

        <div class="header">
            <h1>register</h1>
        </div>

        <form action="register.php" method="POST">
            
            <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                    <li><?php echo $error ?></li>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="form-group">
                <label for="">Email address</label>
                <input type="email" class="form-control" value="<?php echo $email; ?>" aria-describedby="emailHelp" name="userEmail">
            </div>

            <div class="form-group">
                <label for="">Username</label>
                <input type="username" class="form-control" value="<?php echo $username; ?>" name="userUsername">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" name="userPassword1">
            </div>

            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" id="" name="userPassword2">
            </div>

            <button type="submit" class="btn btn-primary" name="registerBtn">Submit</button>

            <p>already a user? <a href="login.php">Log In</a></p>
        </form>


    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
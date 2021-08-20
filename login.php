<?php
session_start();
require_once 'connection.php';
require_once 'functions.php';
$errormsg = "";
if(isset($_POST['login'])){
  $email = check_string($connection, $_POST['email']);
  $pass =  check_string($connection, $_POST['pass']);

  if($email == "" || $pass == ""){
    $errormsg = "<i class='fas fa-exclamation-circle'></i> All fields are required";
  }
  else{
    $query = "SELECT email, pass, firstname FROM donors WHERE email = '$email'";
    $result = $connection->query($query);
    $rows = $result->num_rows;
    if($rows == 1){
      for($i=0; $i<$rows; $i++){
        $result->data_seek($i);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $check_pass = password_verify($pass, $row['pass']);
        if($check_pass){
          $_SESSION['name'] = $row['firstname'];
          header("Location: index.php");
        }
        else{
          $errormsg = "<i class='fas fa-exclamation-circle'></i> Invalid email or password";
        }
      }
    }
    else $errormsg = "<i class='fas fa-exclamation-circle'></i> Invalid email or password";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link href="http://fonts.cdnfonts.com/css/adobe-clean" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <main class="login">
        <div class="contain m-0 d-flex align-items-center position-relative vh-100">
            <div class="container">
                <div class="row m-0 px-0">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="col-md-9 bg-white border-3 rounded-2 col-lg-7 col-xl-5 p-5">
                            <p class="text-danger text-center">
                                <?php
                                if($errormsg != ""){
                                    echo $errormsg;
                                }
                                ?>
                            </p>
                            <form method="POST">
                                <a href="index.php" class="text-dark">
                                    <h3 class="text-center mb-3">BloodBank</h3>
                                </a>
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="form1Example1" class="form-control form-control-lg" />
                                    <label class="form-label" for="form1Example1">Email address</label>
                                </div>
    
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" name="pass" id="form1Example2" class="form-control form-control-lg" />
                                    <label class="form-label" for="form1Example2">Password</label>
                                </div>
    
                                <!-- Submit button -->
                                <button type="submit" name="login" class="btn bg-main  btn-block">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </main>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>

</html>
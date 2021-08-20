<?php
session_start();
include_once ('connection.php');
include_once ('functions.php');

// Insert new user
$errormsg = '';
$date = date('Y');
if (isset($_POST['submit'])) {
    $fname = check_string($connection, $_POST['fname']);
    $lname = check_string($connection, $_POST['lname']);
    $city =  check_string($connection, $_POST['city']);
    $email = check_string($connection, $_POST['email']);
    $addr = check_string($connection, $_POST['address']);
    $dob = check_string($connection, $_POST['dob']);
    $bgroup = check_string($connection, $_POST['bgroup']);
    $cnum = check_string($connection, $_POST['cnum']);
    $weight = check_string($connection, $_POST['weight']);
    $pass = check_string($connection, $_POST['pword']);
    $sex = check_string($connection, $_POST['sex']);

    if ($fname == "" || $lname == "" || $city == "" || $email == "" || $addr == "" || $dob == "" || $bgroup == "" || $cnum == "" || $weight == "" || $pass == "") {
        $errormsg = "<p style='color: red;' class='mt-3'><i class='fas fa-exclamation-circle'></i> All fields are required</p>";
    } elseif (email_exists($email) == true) {
        $errormsg = "<p style='color: red;' class='mt-3'><i class='fas fa-exclamation-circle'></i> Email already exists</p>";
    } else {
        $app_date_str = date('Y-m-d');
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $query = "INSERT INTO donors(firstname, lastname, email, address, city, dob, bgroup, sex, mobile, weight, pass) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $result = $connection->prepare($query);
        $result->bind_param("sssssssssss", $fname, $lname, $email, $addr, $city, $dob, $bgroup, $sex, $cnum, $weight, $pass);
        if (!$result->execute()) {
            die($connection->connect_error);
            $errormsg = "<p style='color: red;' class='mt-3'><i class='fas fa-exclamation-circle'></i> Error in connection</p>";
        } else {
            $_SESSION['email'] = $email;
            $errormsg = "<p style='color: green;' class='mt-3'><i class='fas fa-exclamation-circle'></i> Donor added successfully!</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="http://fonts.cdnfonts.com/css/adobe-clean" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>

<style>
</style>

<body>
    <main class="register">
        <div class="contain m-0 d-flex align-items-center position-relative py-4">
            <div class="container">
                <div class="row m-0 px-0">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="col-md-10 bg-white border-3 rounded-2 col-lg-10 col-xl-8 p-5">
                            <?php 
                            if($errormsg != ""){
                                echo $errormsg;
                            }
                            ?>
                            <form action="register.php" method="POST">
                                <a href="index.php" class="text-dark">
                                    <h3 class="text-center mb-3">BloodBank</h3>
                                </a>
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" name="fname" id="form3Example1" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1">First name</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" name="lname" id="form3Example2" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example2">Last name</label>
                                        </div>
                                    </div>
                                </div>
    
                                <!-- Email input -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example3">Email address</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input type="text" name="address" id="form3Example3" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example3">Address</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input type="text" name="city" id="form3Example3" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example3">City</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input type="date" name="dob" id="form3Example3" class="form-control form-control-lg" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <select class="form-select form-control-lg" name="bgroup" aria-label="Default select example">
                                                <option value="">--Blood Group--</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <select name="sex" class="form-select form-control-lg" aria-label="Default select example">
                                            <option value="">--Sex--</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="prefer not to say">Prefer not to say</option>
                                        </select>
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input type="text" name="cnum" id="form3Example3" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example3">Contact Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input name="weight" type="text" id="form3Example3" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example3">Weight (In Kg)</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" name="pword" id="form3Example4" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div>
    
                                <!-- Submit button -->
                                <button type="submit" name="submit" class="btn bg-main btn-block mb-4">Sign up</button>       
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
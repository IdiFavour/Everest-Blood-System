<?php
    session_start();
    require_once 'connection.php';
    require_once 'functions.php';
    $selector = ""; 
    $errmsg = "";
    if($_SESSION['email'] == ""){
        header("location: login.php");
      }
      else{
         /********* Code to retrieve user details from database **********/
        $selector = $_SESSION['email'];
        $query = "SELECT firstname, lastname, email, city, dob, bgroup, sex, address, mobile, weight, pass FROM donors WHERE email = '$selector' ";
        $user_result = $connection->query($query);
        if (!$user_result) {
            die($connection->error);
        }
        $user_record = $user_result->fetch_array(MYSQLI_ASSOC);
        /* End of data retrieval code */

        if (isset($_POST['update'])) {
            $fname = check_string($connection, $_POST['fname']);
            $lname = check_string($connection, $_POST['lname']);
            $city =  check_string($connection, $_POST['city']);
            $email = check_string($connection, $_POST['email']);
            $addr = check_string($connection, $_POST['address']);
            $dob = check_string($connection, $_POST['dob']);
            $bgroup = check_string($connection, $_POST['bgroup']);
            $cnum = check_string($connection, $_POST['cnum']);
            $weight = check_string($connection, $_POST['weight']);
            $sex = check_string($connection, $_POST['sex']);
            if ($fname == "" || $lname == "" || $city == "" || $email == "" || $addr == "" || $dob == "" || $bgroup == "" || $cnum == "" || $weight == "" || $sex == "") {
                $errmsg = "Some fields are empty";
            } else {
                $upd_query = "UPDATE donors SET firstname = ?, lastname = ?, email = ?, address = ?, city = ?, dob = ?, bgroup = ?, sex = ?, mobile = ?, weight = ? WHERE email = ?";
                $upd_result = $connection->prepare($upd_query);
                $upd_result->bind_param("sssssssssss", $fname, $lname, $email, $addr, $city, $dob, $bgroup, $sex, $cnum, $weight, $selector);
                if (!$upd_result->execute()) {
                    die($connection->connect_error);
                    $errmsg = "Error in connection";
                } else {
                    header("Refresh:0");
                }
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link href="http://fonts.cdnfonts.com/css/adobe-clean" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <title>Edit Profile</title>
</head>

<body>
    <header>
        <?php 
            if (isset($_SESSION['name'])) {
                include_once "Components/user-navbar.php";
            } else {
                include_once "Components/navbar.php";
            }
        ?>
    </header>
    <main class="faq">
        <section class="preview d-flex flex-column justify-content-center align-items-center">
            <h2 class="text-white">Edit Profile</h2>
        </section>
        <div class="container-fluid mt-5 mb-5">
            <div class="container">
                <div class="row m-0 px-0">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="col-md-10 bg-white border-3 rounded-2 col-lg-10 col-xl-8 p-3">
                            <?php
                            if ($errmsg != "") {
                                echo $errmsg;
                            }
                            ?>
                            <form method="POST" action="editprofile.php">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" name="fname" id="form3Example1"
                                                class="form-control form-control-lg" value="<?php echo $user_record['firstname'] ?>"/>
                                            <label class="form-label" for="form3Example1">First name</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input name="lname" type="text" id="form3Example2"
                                                class="form-control form-control-lg" value="<?php echo $user_record['lastname'] ?>"/>
                                            <label class="form-label" for="form3Example2">Last name</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Email input -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input name="email" type="email" id="form3Example3"
                                                class="form-control form-control-lg" value="<?php echo $user_record['email'] ?>"/>
                                            <label class="form-label" for="form3Example3">Email address</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input name="address" type="text" id="form3Example3"
                                                class="form-control form-control-lg" value="<?php echo $user_record['address'] ?>"/>
                                            <label class="form-label" for="form3Example3">Address</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input name="city" type="text" id="form3Example3"
                                                class="form-control form-control-lg" value="<?php echo $user_record['city'] ?>"/>
                                            <label class="form-label" for="form3Example3">City</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input name="dob" type="date" id="form3Example3"
                                                class="form-control form-control-lg" value="<?php echo $user_record['dob'] ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <select name="bgroup" class="form-select form-control-lg"
                                                aria-label="Default select example">
                                                <option value="<?php echo $user_record['bgroup'] ?>" selected><?php echo $user_record['bgroup'] ?></option>
                                                <?php
                                                    $bgroups = array("A", "B", "AB", "O");
                                                    foreach($bgroups as $group){
                                                        if($group != $user_record['bgroup']){
                                                            echo "<option value='$group'>$group</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <select name="sex" class="form-select form-control-lg" aria-label="Default select example">
                                        <option value="<?php echo $user_record['sex'] ?>" selected><?php echo $user_record['sex'] ?></option>
                                        <?php
                                        $list = array("male", "female", "Prefer not to say");
                                        foreach($list as $item){
                                            if($item != $user_record['sex']){
                                                echo "<option value='$item'>$item</option>";
                                            }
                                        }
                                        ?>    
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input name="cnum" type="text" id="form3Example3"
                                                class="form-control form-control-lg" value="<?php echo $user_record['mobile'] ?>"/>
                                            <label class="form-label" for="form3Example3">Contact Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input name="weight" type="text" id="form3Example3"
                                                class="form-control form-control-lg" value="<?php echo $user_record['weight'] ?>"/>
                                            <label class="form-label" for="form3Example3">Weight (In Kg)</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Password input -->
                                <!-- <div class="form-outline mb-4">
                                    <input name="pass" type="password" id="form3Example4" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div> -->

                                <!-- Submit button -->
                                <button type="submit" name="update" class="btn bg-main btn-block mb-4">Save Changes</button>


                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Name:</strong> Evarest Oparah</p><br>
                    <p><strong>Address:</strong> 3 Sunlight Estate, Church Road</p><br>
                    <p><strong>Number:</strong> 09013021659</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-mdb-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include_once "Components/footer.php" ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

</body>

</html>
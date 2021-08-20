<?php 

    session_start();

    include_once ('connection.php');
    include_once ('functions.php');
    
    $errormsg = "";
    if (isset($_POST['submit'])) {
        $city = check_string($connection, $_POST['city']);
        $bloodGroup =  check_string($connection, $_POST['bloodgroup']);

        if ($city == "" || $bloodGroup == "") {
            $errormsg = "<i class='fas fa-exclamation-circle'></i> All fields are required";
        } else{
    
            // writing query
            $sql = "SELECT * FROM donors WHERE city LIKE '%$city%' AND bgroup = '$bloodGroup' ";
        
            // make query and get result
            $result = mysqli_query($connection, $sql);
        
            // fetch resulting row as an array
            $donors = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
            // free result from memory
            mysqli_free_result($result);
        
            // close connection
            mysqli_close($connection);
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
    <title>Donor Search</title>
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
    <main class="donor-search">
        <section class="preview d-flex flex-column justify-content-center align-items-center">
            <h2 class="text-white">Donor Search</h2>
        </section>
        <section>
            <div class="container-fluid mt-5 mb-5">
                <div class="container">
                    <form class="form-a" method="POST">
                        <div class="row m-0">
                        <div class="col-md-5 mb-2">
                            <div class="form-group">
                                <input type="text" name="city" class="form-control p-2 ps-3 rounded-0 shadow-0 form-control-lg form-control-a" value="<?php echo $city ?? ""; ?>" placeholder="City">
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                            <select name="bloodgroup" class="form-control p-2 bg-white ps-3 form-select rounded-0 shadow-0 form-control-a form-control-lg" id="Type">
                                <option>--Blood Types--</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-3 mt-2">
                            <button type="submit" name="submit" class="btn bg-main btn-block">Submit</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <?php if (isset($_POST['submit'])) : ?>
            <section class="card-contain">
                <p class="text-center text-danger">
                    <?php echo $errormsg ?> 
                </p>

                <?php if (isset($donors)) : ?>

                    <h4 class="text-center">Donors</h4>
                    <div class="container p-4">
                        <div class="row m-0 d-flex justify-content-center">
                            <div class="col-md-6">

                                <?php foreach ($donors as $donor) : ?>
                                    <div class="cus-card p-4">
                                        <h6>Name: <?php echo $donor['firstname'] ." ". $donor['lastname']; ?></h6>
                                        <p class="mb-1">Address: <?php echo $donor['city'] ?></p>
                                        <p class="mb-1">Blood Group: <?php echo $donor['bgroup'] ?> </p>
                                        <p class="mb-1">Gender: <?php echo $donor['sex'] ?> </p>
                                        <div class="text-end">
                                            <a href="donor-details.php?donor=<?php echo $donor["ID"] ?>"><button class="btn bg-main">View More</button></a>
                                        </div>
                                    </div>
                                <?php endforeach ?>

                            </div>
                        </div>
                    </div>

                <?php endif ?>
            </section>
        <?php endif ?>
    </main>
    
    <!-- Footer -->
    <?php include_once "Components/footer.php" ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

</body>

</html>
<?php 

    session_start();

    include_once ('connection.php');
    include_once ('functions.php');
    
    if (isset($_GET['donor'])) {
        $donor_id = mysqli_real_escape_string($connection, $_GET['donor']);

        // writing query
        $sql = "SELECT * FROM donors WHERE ID = $donor_id";

        // make query and get result
        $result = mysqli_query($connection, $sql);

        // fetch resulting row as an array
        $donor = mysqli_fetch_assoc($result);

        // free result from memory
        mysqli_free_result($result);

        // close connection
        mysqli_close($connection);

    } else{
        header("Location: index.php");
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
    <main class="donor-details">
        <section class="preview d-flex flex-column justify-content-center align-items-center">
            <h2 class="text-white">Donor Details</h2>
        </section>
        <section>
            <div class="container py-4">
                <div class="row m-0 d-flex justify-content-center">
                    <div class="col-md-6 white-smoke p-4">
                        <div class="d-grid gap-2">
                            <h5>Name: <?php echo $donor['firstname'] ." ". $donor['lastname'] ?></h5>
                            <h5>Email: <?php echo $donor['email']?> </h5>
                            <h5>City: <?php echo $donor['city']?> </h5>
                            <h5>Date Of Birth: <?php echo $donor['dob']?> </h5>
                            <h5>Blood Group: <?php echo $donor['bgroup']?> </h5>
                            <h5>Gender: <?php echo $donor['sex']?> </h5>
                            <h5>Mobile: <?php echo $donor['mobile']?> </h5>
                            <h5>Weight: <?php echo $donor['weight']?> </h5>
                            <a href="mailto:<?php echo $donor['email'] ?>">
                                <button class="btn bg-main bg-lg">Send A Mail To <?php echo $donor['firstname'] ?></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <?php include_once "Components/footer.php" ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

</body>

</html>
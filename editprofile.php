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
        <?php include_once "Components/navbar.php";  ?>
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
                            <form>
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1">First name</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example2"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example2">Last name</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Email input -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form3Example3"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example3">Email address</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example3"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example3">Address</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example3"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example3">City</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input type="date" id="form3Example3"
                                                class="form-control form-control-lg" />

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <select class="form-select form-control-lg"
                                                aria-label="Default select example">
                                                <option selected>--Blood Group--</option>
                                                <option value="male">A</option>
                                                <option value="female">B</option>
                                                <option value="o">O</option>
                                                <option value="ab">AB</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control-lg" aria-label="Default select example">
                                            <option selected>--Sex--</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="prefer not to say">Prefer not to say</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example3"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example3">Contact Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example3"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example3">Weight (In Kg)</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn bg-main btn-block mb-4">Save Changes</button>


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
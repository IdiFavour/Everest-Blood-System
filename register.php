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
                            <form>
                                <a href="index.php" class="text-dark">
                                    <h3 class="text-center mb-3">BloodBank</h3>
                                </a>
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1">First name</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example2" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example2">Last name</label>
                                        </div>
                                    </div>
                                </div>
    
                                <!-- Email input -->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form3Example3" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example3">Email address</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example3" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example3">Address</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-lg-12">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example3" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example3">City</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <input type="date" id="form3Example3" class="form-control form-control-lg" />
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <select class="form-select form-control-lg" aria-label="Default select example">
                                                <option selected>--Blood Group--</option>
                                                <option value="male">A</option>
                                                <option value="female">B</option>
                                                <option value="o">O</option>
                                                <option value="ab">AB</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <select class="form-select form-control-lg" aria-label="Default select example">
                                            <option selected>--Sex--</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="prefer not to say">Prefer not to say</option>
                                        </select>
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example3" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example3">Contact Number</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example3" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example3">Weight</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div>
    
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
    
                               
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
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
    <title>Home | EvarBlood</title>
</head>
<body>
    <main class="home">
        <?php include_once "Components/navbar.php";  ?>
        <section class="home-preview d-flex flex-column justify-content-center align-items-center">
            <div class="text-white text-center">
                <div class="row m-0 d-flex justify-content-center align-items-center">
                    <div class="col-md-5">
                        <h2>Welcome To Blood Bank</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id natus hic cum eos suscipit placeat! Tenetur vero aliquid minima laboriosam voluptate, nam sit veritatis debitis totam quas ad inventore perspiciatis.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-cards p-4">
            <div class="container">
                <div class="row m-0">
                    <div class="col-md-4">
                        <div class="cus-card p-4">
                            <div class="text text-center">
                                <h4 class="mb-4">Donate Blood</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla commodi ea non omnis dolorem perferendis quam </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cus-card p-4">
                            <div class="text text-center">
                                <h4 class="mb-4">Search For Donors</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla commodi ea non omnis dolorem perferendis quam </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cus-card p-4">
                            <div class="text text-center">
                                <h4 class="mb-4">Education on Blood</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla commodi ea non omnis dolorem perferendis quam </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact">
            <div class="container d-flex justify-content-center py-4">
                <div class="form-contain">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
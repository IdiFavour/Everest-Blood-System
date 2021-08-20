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
  <title>Donor Search</title>
</head>

<body>
  <header>
    <?php include_once "Components/navbar.php";  ?>
  </header>
  <main class="faq">
    <section class="preview d-flex flex-column justify-content-center align-items-center">
      <h2 class="text-white">Donor Search</h2>
    </section>
    <div class="container-fluid mt-5 mb-5">
      <div class="container">
        <form class="form-a">
          <div class="row m-0">
            <div class="col-md-5 mb-2">
              <div class="form-group">
                <input type="text" class="form-control p-2 ps-3 rounded-0 shadow-0 form-control-lg form-control-a"
                  placeholder="City">
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <div class="form-group">
                <select
                  class="form-control p-2 bg-white ps-3 form-select rounded-0 shadow-0 form-control-a form-control-lg"
                  id="Type">
                  <option>--Blood Types--</option>
                  <option>A</option>
                  <option>B</option>
                  <option>AB</option>
                  <option>O</option>
                </select>
              </div>
            </div>
            <div class="col-md-3 mt-2">
              <button type="submit" class="btn bg-main btn-block">Submit</button>
            </div>
          </div>
        </form>

        <div class="container mt-5">
          <div class="d-flex align-items-center justify-content-center">
            <div class="col-lg-4">
              <p class="text-center">Sorry donors are not available in your location <br></p>
              <button type="submit" class="btn bg-main btn-block" data-mdb-toggle="modal" data-mdb-target="#exampleModal">Contact Us</button>

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
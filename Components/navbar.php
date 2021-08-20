<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="index.php">
      BloodBank
    </a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            Blood Seekers
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li>
              <a class="dropdown-item" href="donorsearch.php">Donor Search</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Mobilink Paging Services</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="general-info.php">General Information</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faq.php">FAQ's</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Terms Of Service</a>
        </li>
      </ul>
      <!-- Left links -->

      <div class="d-flex align-items-center">
        <a href="login.php">
          <button type="button" class="btn btn-link text-dark px-3 me-2">Login</button>
        </a>
        <a href="register.php">
          <button type="button" class="btn bg-main text-white me-3">Register</button>
        </a>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
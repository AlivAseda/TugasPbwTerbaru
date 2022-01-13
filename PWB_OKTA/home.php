<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />

  <title>Home Page</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold fs-2" href="#" style="color: white">OKTA</a>
      <a class="navbar-brand fw-bold fs-2" href="#" style="color: red">STORE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item fs-5 ms-3">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item ms-3 fs-5">
            <a class="nav-link" href="about.php">Galery</a>
          </li>
          <li class="nav-item ms-3 fs-5">
            <a class="nav-link" href="best-seller.php">Best Seller</a>
          </li>
          <li class="nav-item ms-3 fs-5">
            <a class="nav-link" href="e-commerce.php">Store</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="container " style="margin-top: 21%;">
    <div class="row text-center">
      <h1 class="fw-bold fs-1" style="color: black;">Cari Hoodie</h1>
      <h2 class="fw-bold">Murah & Bagus Hanya Di Okta Store</h2>
      <div class="d-grid d-md-block gap-2">
        <a href="about.php"><button class="btn btn-danger" type="button">Galery</button></a>
        <a href="e-commerce.php"><button class="btn btn-warning" type="button">Store</button></a>
      </div>
    </div>
  </div>
  </div>

  <ul class="sci" style="text-align: center; padding: 10px; margin-top: 10px;">
    <li style="list-style-type:none; margin: top 10px;">
      <a href="#" style="text-decoration: none; text-style:bold;">FACEBOOK</a>
    </li>
    <li style="list-style-type:none; margin: top 10px; text-decoration: none;">
      <a href="https://api.whatsapp.com/send?phone=6287719857757" style="text-decoration: none;">WHATSAPP</a>
    </li>
    <li style="list-style-type:none; margin: top 10px; text-decoration: none;">
      <a href="https://www.google.co.id/maps/place/7°19'42.9" style="text-decoration: none;">MAPS</a>
    </li>
  </ul>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
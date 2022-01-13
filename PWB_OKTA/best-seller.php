<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Best Seller</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-2" href="#" style="color: white;">OKTA</a>
            <a class="navbar-brand fw-bold fs-2" href="#" style="color: red;">STORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ">
                    <li class="nav-item fs-5 ms-3">
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item ms-3 fs-5">
                        <a class="nav-link" href="about.php">Galery</a>
                    </li>
                    <li class="nav-item ms-3 fs-5">
                        <a class="nav-link active" href="best-seller.php">Best Seller</a>
                    </li>
                    <li class="nav-item ms-3  fs-5">
                        <a class="nav-link" href="e-commerce.php">Store</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <h1 class="fw-bold text-center mt-5">Best Seller 2021</h1>
    <p id="best-seller" class="row p-5"></p>
    <script>
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            myObj = JSON.parse(this.responseText);
            let text = "";
            for (const x in myObj) {
                // text += "<div class='container'>";
                // text += "<div class='row mt-3'>";
                text += "<div class='col-md-4'>";
                text += "<div class='card shadow-lg p-3 mb-5 bg-body rounded'>";
                text += "<img src='img/" + myObj[x].img_produk + "' style='width:100%; height:500px'>";
                text += "<div class='card-body'>";
                text += "<h2 class='card-title font-weight-bold mb-3 text-center'>" + myObj[x].nm_produk + "</h2>";
                text += "<h5 class='card-text harga mb-3 text-center'>" + myObj[x].hrg_produk + "</h5><br>";
                text += "</div>";
                text += "</div>";
                text += "</div>";
                // text += "</div>";
                // text += "</div>";
            }
            document.getElementById("best-seller").innerHTML = text;
        };
        xmlhttp.open("GET", "data/data2.json");
        xmlhttp.send();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
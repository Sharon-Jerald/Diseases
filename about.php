<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Diseases</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Diseases
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="infectious.php">Infectious </a></li>
                    <li><a class="dropdown-item" href="noninfectious.php">Non Infectious</a></li>
                    
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hospital.php">Hospitals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
      <br><br>
<div class="container">
    <div class="row"><div class="col  col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7" >
        <p>
            <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Phoenix</button>
          <a class="btn btn-secondary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Who we are</a>
            <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Our Policies</button>
            </p>
          <div class="row">
            <div class="col">
              <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                    Who we are <br>
                    Welcome <br>
                    Accreditations and awards <br>
                    Meet our medical editors <br>
                    Content development policy <br>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                    Our policies <br>
                    Advertising and sponsorship policy <br>
Corrections policy <br>
Guidelines for sites linking to PhoenixClinic.org <br>
Privacy policy <br>
Content development policy <br>
Reprint permissions <br>
Terms and conditions of use policy <br>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
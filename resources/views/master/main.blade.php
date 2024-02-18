<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>xyz school</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid fs-5 position-sticky">
        <nav class="navbar navbar-expand-lg bg-body-tertiary fw-bold p-4">
            <div class="container-fluid">
              <a class="navbar-brand text-dark" href="#">XYZ <span class="text-info">school</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/our') }}">Our Achieve</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/lists') }}">list of student</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>

    <div class="container-fluid">
      @yield('content')
    </div>


    <div class="container-fluid">
        <footer class="bg-warning text-dark p-3 pt-4 mt-5">
          <div class="d-flex justify-content-around">
            <div>
              <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Beatae eaque eligendi vitae eveniet atque rerum! Eos dolores in ea harum!</p>
            </div>
            <div class="">
              <h4>contact us for more information</h4>
              <h4>xyzschhol@gmail.com</h4>
              <h4>923203-282</h4>
            </div>
          </div>
        </footer>
    </div>
</body>
</html>
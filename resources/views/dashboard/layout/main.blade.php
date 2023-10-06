<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fauziah Dashboard</title>


    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">RS Fauziah Bireun</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Logout</a>
    </div>
  </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ $active==="dashboard" ? 'active':'' }}" aria-current="page" href="/dashboard">
                <span data-feather="home"></span>
                Dashboard
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="file"></span>
                Surat
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link {{ $active==="surat" ? 'active':'' }} collapsed " data-bs-toggle="collapse" href="#collapseExamplesur" aria-labelledby="headingTwo" data-parent="#accordionSidebar" aria-controls="collapseExample">
                <span data-feather="file"></span>
                SURAT
                </a>
                <div class="collapse" id="collapseExamplesur">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="/surat/pns"  class="nav-link"><p class="text-dark m-0">PNS</p></a>
                        </li>
                        <li class="list-group-item">
                            <a href="/surat/p3k"  class="nav-link"><p class="text-dark m-0">P3K</p></a>
                        </li>
                        <li class="list-group-item">
                            <a href="/surat/kontrak" class="nav-link "><p class="text-dark m-0">KONTRAK</p></a>
                        </li>
                    </ul>
                </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $active==="karyawan" ? 'active':'' }} collapsed " data-bs-toggle="collapse" href="#collapseExample" aria-labelledby="headingTwo" data-parent="#accordionSidebar" aria-controls="collapseExample">
                <span data-feather="file"></span>
                KARYAWAN
                </a>
                <div class="collapse" id="collapseExample">
                <div class="card">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="/karyawan/pns"  class="nav-link"><p class="text-dark m-0">PNS</p></a>
                    </li>
                    <li class="list-group-item">
                        <a href="/karyawan/p3k"  class="nav-link"><p class="text-dark m-0">P3K</p></a>
                    </li>
                    <li class="list-group-item">
                        <a href="/karyawan/kontrak" class="nav-link "><p class="text-dark m-0">KONTRAK</p></a>
                    </li>
                    </ul>
                </div>
                </div>
            </li>

            
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="shopping-cart"></span>
                Logout
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="users"></span>
                Customers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                Reports
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Integrations
                </a>
            </li> --}}
            </ul>
        </div>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container mt-4">
                @yield('container')
            </div>
        </main>

    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script> --}}
    <script src="/js/dashboard.js"></script>
  </body>
</html>
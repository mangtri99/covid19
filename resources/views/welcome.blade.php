<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Argon Dashboard</title>

        <!-- Favicon -->
<link href="/assets/img/brand/favicon.png" rel="icon" type="image/png">


<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">


<!-- Icons -->
<link href="/assets/vendor/nucleo/css/nucleo.min.css" rel="stylesheet">
<link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!--  CSS -->
<link type="text/css" href="/assets/css/argon.min.css" rel="stylesheet">
    </head>

<body>
    <div class="container-fluid">
      <div class="header bg-primary pb-6">
        <div class="container-fluid">
          <div class="header-body">
            <div class="row align-items-center py-4">
              <div class="col-lg-6 col-7">
                <h6 class="h2 text-white d-inline-block mb-0">Update COVID 19 Indonesia</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">

                </nav>
                <hr class="my3">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                      <div class="col">
                        <h3 class="mb-0">Jumlah Korban COVID 19 di Indonesia Saat Ini</h3>
                        <p>Update Terakhir <b> {{$datacount['lastUpdate']}}</b> </p></p>
                      </div>
                    </div>
                  </div>
              </div>

            </div>
            <!-- Card stats -->
            {{-- @foreach ($data->confirmed['0'] as $link ) --}}


            <div class="row">
              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Terkonfirmasi</h5>
                      <span class="h2 font-weight-bold mb-0">{{$data['confirmed']['value']}}</span>

                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                          <i class="ni ni-active-40"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                      <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                      <span class="text-nowrap"></span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Perawatan</h5>
                        <span class="h2 font-weight-bold mb-0">{{$data["activeCare"]['value']}}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                          <i class="ni ni-chart-pie-35"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                      <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                      <span class="text-nowrap"></span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Sembuh</h5>
                      <span class="h2 font-weight-bold mb-0">{{$data["recovered"]['value']}}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                      <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                      <span class="text-nowrap"></span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Meninggal</h5>
                      <span class="h2 font-weight-bold mb-0">{{$data["deaths"]['value']}}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                          <i class="ni ni-chart-bar-32"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                      <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                      <span class="text-nowrap"></span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            {{-- @endforeach --}}
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Kasus Virus Corona Di Dunia</h3>
                </div>
                <div class="col text-right">
                  <h4>Confirmed : <b style="color: rgb(255, 108, 46);" > {{$datacount['confirmed']['value']}}</b> <i class="display-4"> - </i>
                    Recovered : <b style="color: rgb(58, 255, 166);" > {{$datacount['recovered']['value']}}</b> <i class="display-4"> - </i>
                    Deaths :  <b style="color: rgb(255, 29, 107);"> {{$datacount['deaths']['value']}}</b>
                    <p> Last Update : <b> {{$datacount['lastUpdate']}}</b> </p>
                </h4>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->

              <table class="table align-items-center table-flush" id="myTable">
                <thead class="thead-light">
                  <tr>
                    <th style="width : 30%" scope="col">Negara</th>
                    <th style="width : 30%" scope="col">Provinsi</th>
                    <th scope="col">Terkonfirmasi</th>
                    <th scope="col">Dirawat</th>
                    <th scope="col">Sembuh</th>
                    <th scope="col">Meninggal</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($dataworld as $dw)
                  <tr>
                    <th scope="row"> {{$dw['countryRegion']}}</th>
                    <td> {{$dw['provinceState']}}</td>
                    <td> {{$dw['confirmed']}} </td>
                    <td> {{$dw['active']}} </td>
                    <td> {{$dw['recovered']}} </td>
                    <td> {{$dw['deaths']}} </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

            </div>
          </div>
        </div>

      </div>
            <!-- Footer -->
    <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
                &copy; 2020 <a href="https://www.instagram.com/mangtri78/" class="font-weight-bold ml-1" target="_blank">Develop by Mang Tri</a>
            </div>
            </div>
            <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Template</a>
                </li>
                <li class="nav-item">
                <a href="https://mangtri78.blogspot.com" class="nav-link" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                <a href="https://covid19.mathdro.id/api" class="nav-link" target="_blank">Data Source</a>
                </li>
                <li class="nav-item">
                    <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                  </li>
            </ul>
            </div>
        </div>
        </footer>
    </div>

        <!-- Core -->
<script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

<!-- Argon JS -->
<script src="/assets/js/argon.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
    </body>

</html>

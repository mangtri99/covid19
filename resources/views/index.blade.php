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

<!-- Icons -->
<link href="/assets/vendor/nucleo/css/nucleo.min.css" rel="stylesheet">
<link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!--  CSS -->
<link type="text/css" href="/assets/css/argon.min.css" rel="stylesheet">
    </head>

<body>

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
                        <p>Update</p>
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
                      <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                      <span class="text-nowrap">Since last month</span>
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
                      <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                      <span class="text-nowrap">Since last month</span>
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
                      <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                      <span class="text-nowrap">Since last month</span>
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
                      <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                      <span class="text-nowrap">Since last month</span>
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
                  <h3 class="mb-0">Page visits</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              @foreach ($dataworld as $dw)


              <table class="table align-items-center table-flush">
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
                  <tr>
                    <th scope="row"> {{$dw['countryRegion']}}</th>
                    <td> {{$dw['provinceState']}}</td>
                    <td> {{$dw['confirmed']}} </td>
                    <td> {{$dw['active']}} </td>
                    <td> {{$dw['recovered']}} </td>
                    <td> {{$dw['deaths']}} </td>
                  </tr>
                </tbody>
              </table>
              @endforeach
            </div>
          </div>
        </div>

      </div>

        <!-- Core -->
<script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Argon JS -->
<script src="/assets/js/argon.min.js"></script>
    </body>

</html>

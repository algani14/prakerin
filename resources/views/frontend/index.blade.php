<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                <li class="breadcrumb-item"><a href="#">Hotline</a></li>
                                <li class="breadcrumb-item"><a href="#">Kontak</a></li>
                            </ol>
                        </nav>
                    </div>

                </div>
                <div class='jumbotron'>
                    <div class='container'>
                        <br>
                        <h1 class='display-3 text-center'>KAWAL CORONA</h1>
                        <h4 class="='lead m-0 text-center">Coronavirus Global & Indonesia Live Data</h4>
                    </div>
                </div>
                <!-- Card stats -->
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="ml-auto"> <img src="../img2/emoji-LWx.png" width="50" height="50"
                                                alt="Positif"> </div>
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Positif
                                            Indonesia
                                        </h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $positif }}</span>
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Sembuh Indonesia
                                        </h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $sembuh }}</span>
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Meninggal Di
                                            Indonesia</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $meninggal }}</span>
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Positif Di Dunia
                                        </h5>
                                        <span class="h2 font-weight-bold mb-0"><?php echo
                                            $posglobal['value']; ?></span>
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
            <div class="card card-stats">

                <div class="col text-center">
                    <h6>
                        <p>Update terakhir : {{ $tanggal }}</p>
                    </h6>
                </div>
            </div>
        </div>


        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
            <div class="card">
                <section id="provinsi" class="provinsi">
                    <div class="container">

                        <div class="section-title" data-aos="zoom-out">
                            <h2>Data Kasus Indonesia</h2>
                        </div>

                        <div class="row content" data-aos="fade-up">

                            <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">

                                <table class="table table-bordered table-striped mb-0 " width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <center>No</center>
                                            </th>
                                            <th scope="col">
                                                <center>Provinsi</center>
                                            </th>
                                            <th scope="col">
                                                <center>Jumlah Positif</center>
                                            </th>
                                            <th scope="col">
                                                <center>Jumlah Sembuh</center>
                                            </th>
                                            <th scope="col">
                                                <center>Jumlah Meninggal</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp

                                        @foreach ($tampil as $tmp)
                                            <tr>
                                                <th scope="row">
                                                    <center>{{ $no++ }}</center>
                                                </th>
                                                <td>
                                                    <center>{{ $tmp->nama_provinsi }}</center>
                                                </td>
                                                <td>
                                                    <center>{{ number_format($tmp->Positif) }}</center>
                                                </td>
                                                <td>
                                                    <center>{{ number_format($tmp->Sembuh) }}</center>
                                                </td>
                                                <td>
                                                    <center>{{ number_format($tmp->Meninggal) }}</center>
                                                </td>
                                            </tr>

                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

            </div>
            </section>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
                <div class="card">
                    <section id="global" class="global">
                        <div class="container">

                            <div class="section-title" data-aos="zoom-out">
                                <h2>Data Kasus Global</h2>
                            </div>

                            <div class="row content" data-aos="fade-up">

                                <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">

                                    <table class="table table-bordered table-striped mb-0 " width="100%">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <center>No</center>
                                                </th>
                                                <th scope="col">
                                                    <center>Negara</center>
                                                </th>
                                                <th scope="col">
                                                    <center>Jumlah Positif</center>
                                                </th>
                                                <th scope="col">
                                                    <center>Jumlah Sembuh</center>
                                                </th>
                                                <th scope="col">
                                                    <center>Jumlah Meninggal</center>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($dunia as $data)
                                                <tr>
                                                    <td> <?php echo $no++; ?>
                                                    </td>
                                                    <td> <?php echo
                                                        $data['attributes']['Country_Region']; ?>
                                                    </td>
                                                    <td> <?php echo
                                                        number_format($data['attributes']['Confirmed']); ?>
                                                    </td>
                                                    <td><?php echo
                                                        number_format($data['attributes']['Recovered']); ?>
                                                    </td>
                                                    <td><?php echo
                                                        number_format($data['attributes']['Deaths']); ?>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                </div>
                </section>

            </div>
            @Include ('layouts.components.footer')
        </div>



        <!-- Argon Scripts -->

        <!-- Core -->
        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/js-cookie/js.cookie.js"></script>
        <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <!-- Optional JS -->
        <script src="assets/vendor/chart.js/dist/C

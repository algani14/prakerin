<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title>Kawal Corona</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="top">

    <header>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="" class="img-fluid">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                    aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="frontend/kontak">

                                <span class="nav-link-text">Kontak</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>




    <!-- Slider Start -->

    <div class="jumbotron">
        <div class="container">
            <br>
            <h1 class="display-3 text-center">KAWAL CORONA</h1>
            <p class="lead m-0 text-center">Coronavirus Global & Indonesia Live Data</p>
        </div>
        <br>
        <br>
        <section class="cta-section ">
            <div class="container">
                <div class="cta position-relative">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
                            <div class="counter-stat">
                                <i class="icofont-doctor"></i>
                                <span class="h3">{{ $positif }}</span>
                                <p>Total Positif Di Indonesia</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
                            <div class="counter-stat">
                                <i class="icofont-flag"></i>
                                <span class="h3">{{ $sembuh }}</span>
                                <p>Total Sembuh Di Indonesia</p>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
                            <div class="counter-stat">
                                <i class="icofont-badge"></i>
                                <span class="h3">{{ $meninggal }}</span>
                                <p>Total meninggal DI Indonesia</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
                            <div class="counter-stat">
                                <i class="icofont-globe"></i>
                                <span class="h3">
                                    <?php echo $posglobal['value']; ?>
                                </span>
                                <p>Total Positif Di Dunia</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <h6>
                        <p>Update terakhir : {{ $tanggal }}</p>
                    </h6>
                </div>
                <br>
                <br>
            </div>
        </section>

        <br>
        <br>
        <div class="row row-cards">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
                <div class="card">
                    <div class="card-header ">
                        <h3 class="card-title">Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table class="table table-bordered table-hover mb-0 text-nowrap css-serial">
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
        </div>
        <br>
        <div class="row row-cards">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
                <div class="card">
                    <div class="card-header ">
                        <h3 class="card-title">Kasus Coronavirus Global</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table class="table table-bordered table-hover mb-0 text-nowrap css-serial">
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
                                            <td> <?php echo $no++; ?></td>
                                            <td> <?php echo $data['attributes']['Country_Region']; ?>
                                            </td>
                                            <td> <?php echo
                                                number_format($data['attributes']['Confirmed']); ?>
                                            </td>
                                            <td><?php echo
                                                number_format($data['attributes']['Recovered']); ?>
                                            </td>
                                            <td><?php echo number_format($data['attributes']['Deaths']);
                                                ?>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer Start -->
    <footer class="footer section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <img src="images/logo.png" alt="" class="img-fluid">
                        </div>
                        <p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos
                            obcaecati
                            tenetur
                            veritatis eveniet distinctio possimus.</p>

                        <ul class="list-inline footer-socials mt-4">
                            <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i
                                        class="icofont-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i
                                        class="icofont-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i
                                        class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Department</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#">Surgery </a></li>
                            <li><a href="#">Wome's Health</a></li>
                            <li><a href="#">Radiology</a></li>
                            <li><a href="#">Cardioc</a></li>
                            <li><a href="#">Medicine</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Support</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Company Support </a></li>
                            <li><a href="#">FAQuestions</a></li>
                            <li><a href="#">Company Licence</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Get in Touch</h4>
                        <div class="divider mb-4"></div>

                        <div class="footer-contact-block mb-4">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-email mr-3"></i>
                                <span class="h6 mb-0">Support Available for 24/7</span>
                            </div>
                            <h4 class="mt-2"><a href="tel:+23-345-67890">Support@email.com</a></h4>
                        </div>

                        <div class="footer-contact-block">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-support mr-3"></i>
                                <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
                            </div>
                            <h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-btm py-4 mt-5">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="copyright">
                            &copy; Copyright Reserved to <span class="text-color">Novena</span> by <a
                                href="https://themefisher.com/" target="_blank">Themefisher</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subscribe-form text-lg-right mt-5 mt-lg-0">
                            <form action="#" class="subscribe">
                                <input type="text" class="form-control" placeholder="Your Email address">
                                <a href="#" class="btn btn-main-2 btn-round-full">Subscribe</a>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <a class="backtop js-scroll-trigger" href="#top">
                            <i class="icofont-long-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>



    <!-- 
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>

    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>

    <script src="js2/script.js"></script>
    <script src="js2/contact.js"></script>

</body>

</html>

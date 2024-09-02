<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Mir Abdullah Zuhair</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Meyawo main styles -->
	<link rel="stylesheet" href="assets/css/meyawo.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="#">{{ $infoes['name'] }}</a>
            <ul class="nav">
                <li class="item">
                    <a class="link" href="#home">Home</a>
                </li>
                <li class="item">
                    <a class="link" href="#about">About</a>
                </li>
                <li class="item">
                    <a class="link" href="#portfolio">Portfolio</a>
                </li>
                <li class="item">
                    <a class="link" href="#testmonial">Testmonial</a>
                </li>
                <li class="item">
                    <a class="link" href="#blog">Blog</a>
                </li>
                <li class="item">
                    <a class="link" href="#contact">Contact</a>
                </li>
                <li class="item ml-md-3">
                    <a href="components.html" class="btn btn-primary">Components</a>
                </li>
            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                  <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>
    </nav><!-- End of Page Navbar -->

   <!-- end of page header -->
 <!-- service section -->
 <section class="section" id="service">
    <div class="container text-center">
        {{-- <p class="section-subtitle">Work Experience</p> --}}
        <h6 class="section-title mb-6">Work Experience</h6>
        <!-- row -->
        <div class="row">
            @foreach ($workExperiences as $workExperience)
                <div class="col-md-6 col-lg-6">
                    <div class="service-card">
                        <div class="body">
                            {{-- <img src="assets/imgs/pencil-case.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon"> --}}
                            <h3 class="title">{{$workExperience['companyName']}}</h3>
                            <h6>From: {{ $workExperience['From']}}</h6>
                            <h6>To: {{ $workExperience['To']}}</h6>
                            <ul style="list-style: none">
                               <li>{{ $workExperience['Tasks']['task1'] }}</li>
                               <li>{{ $workExperience['Tasks']['task2'] }}</li>
                               <li>{{ $workExperience['Tasks']['task3'] }}</li>
                            </ul>

                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- end of row -->
    </div>
</section><!-- end of service section -->

    <!-- footer -->
    <div class="container">
        <footer class="footer">
            <p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="http://www.devcrud.com">Zuhair</a></p>
            <div class="social-links text-right m-auto ml-sm-auto">
                <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
            </div>
        </footer>
    </div> <!-- end of page footer -->

	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Meyawo js -->
    <script src="assets/js/meyawo.js"></script>

</body>
</html>

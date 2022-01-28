<!DOCTYPE html>
<html lang="en">
<head>

     <title>Sistem Informasi Sekolah</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
     <link rel="stylesheet" href="{{asset('frontend')}}/css/font-awesome.min.css">
     <link rel="stylesheet" href="{{asset('frontend')}}/css/aos.css">
     <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.min.css">
     <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{asset('frontend')}}/css/templatemo-digital-trend.css">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link smoothScroll">Visi</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link smoothScroll">Misi</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('register') }}" class="nav-link">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('login') }}" class="nav-link contact">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text">

                                   <h1 class="text-white" data-aos="fade-up">Sistem Informasi Sekolah</h1>

                                   <a href="{{ url('register') }}" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Register</a>
                              </div>
                        </div>

                        <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                            <img src="{{asset('frontend')}}/images/working-girl.png" class="img-fluid" alt="working girl">
                          </div>
                        </div>

                    </div>
               </div>
     </section>


     <!-- ABOUT -->
     <section class="about section-padding pb-0" id="about">
          <div class="container">
               <div class="row">

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">
                              <h2 class="mb-4" data-aos="fade-up"><strong>Pengumuman</strong></h2>
                              <p class="mb-0" data-aos="fade-up">Tidak Ada Pengumaman
                         </div>

                         <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                          <img src="{{asset('frontend')}}/images/office.png" class="img-fluid" alt="office">
                        </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- PROJECT -->
     <section class="project section-padding" id="project">
          <div class="container-fluid">
               <div class="row">

                    <div class="col-lg-12 col-12">

                        <h2 class="mb-5 text-center" data-aos="fade-up">
                            Kegiatan Sekolah
                            <strong>SMA WARGA SURAKARTA</strong>
                        </h2>

                         <div class="owl-carousel owl-theme" id="project-slide">
                              <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                   <img src="{{asset('frontend')}}/images/project/upacara.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Upacara Bendera</small>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="{{asset('frontend')}}/images/project/pramuka.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Pramuka</small>

                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="{{asset('frontend')}}/images/project/kbm.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Kegiatan Belajar Mengajar</small>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="{{asset('frontend')}}/images/project/ujian.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Ujian Online</small>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


    <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
            <p class="copyright-text">Copyright &copy; 2022 Dinda
            <br>
          </div>

          <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">

            <ul class="footer-link">
              <li><a href="#">Stories</a></li>
              <li><a href="#">Work with us</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <li><a href="#" class="fa fa-instagram"></a></li>
              <li><a href="#" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-dribbble"></a></li>
              <li><a href="#" class="fa fa-behance"></a></li>
            </ul>
          </div>

        </div>
      </div>
    </footer>


     <!-- SCRIPTS -->
     <script src="{{asset('frontend')}}/js/jquery.min.js"></script>
     <script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
     <script src="{{asset('frontend')}}/js/aos.js"></script>
     <script src="{{asset('frontend')}}/js/owl.carousel.min.js"></script>
     <script src="{{asset('frontend')}}/js/smoothscroll.js"></script>
     <script src="{{asset('frontend')}}/js/custom.js"></script>

</body>
</html>

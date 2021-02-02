<!doctype html>
<html lang="zxx">


<!-- Mirrored from elanta.app/nazar/arter-demo/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jan 2021 18:14:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#2B2B35">
  <!-- favicon  -->
  <link rel="shortcut icon" href="{{ asset('portofolio/img/thumbnail.ico') }}" type="image/x-icon">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="{{ asset('portofolio/css/plugins/bootstrap.min.css') }}">
  <!-- font awesome css -->
  <link rel="stylesheet" href="{{ asset('portofolio/css/plugins/font-awesome.min.css') }}">
  <!-- swiper css -->
  <link rel="stylesheet" href="{{ asset('portofolio/css/plugins/swiper.min.css') }}">
  <!-- fancybox css -->
  <link rel="stylesheet" href="{{ asset('portofolio/css/plugins/fancybox.min.css') }}">
  <!-- main css -->
  <link rel="stylesheet" href="{{ asset('portofolio/css/style.css') }}">
  @toastr_css



  <title>Portofolio</title>
</head>

<body>

  <!-- app -->
  <div class="art-app">

    <!-- mobile top bar -->
    <div class="art-mobile-top-bar"></div>

    <!-- app wrapper -->
    <div class="art-app-wrapper">

      <!-- app container end -->
      <div class="art-app-container">

                <!-- info bar -->
                @foreach ($datas as $data)
                <div class="art-info-bar">

                    <!-- menu bar frame -->

                    <div class="art-info-bar-frame">

                      <!-- info bar header -->
                      <div class="art-info-bar-header">
                        <!-- info bar button -->
                        <a class="art-info-bar-btn" href="#.">
                          <!-- icon -->
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <!-- info bar button end -->
                      </div>
                      <!-- info bar header end -->

                      <!-- info bar header -->
                      <div class="art-header">
                        <!-- avatar -->
                        <div class="art-avatar">
                          <a data-fancybox="avatar" href="{{ Storage::url($data->image) }}" class="art-avatar-curtain">
                            <img src="{{ Storage::url($data->image) }}" alt="avatar">
                            <i class="fas fa-expand"></i>
                          </a>
                          <!-- available -->
                          <div class="art-lamp-light">
                            <!-- add class 'art-not-available' if not available-->
                            <div class="art-available-lamp"></div>
                          </div>
                        </div>
                        <!-- avatar end -->
                        <!-- name -->
                        <h5 class="art-name mb-10"><a href="{{ route('index') }}">{{ $data->name }}</a></h5>
                        <!-- post -->
                        <div class="art-sm-text">{{ $data->passion }}</div>
                      </div>
                      <!-- info bar header end -->

                      <!-- scroll frame -->
                      <div id="scrollbar2" class="art-scroll-frame">

                        <!-- info bar about -->
                        <div class="art-table p-15-15">
                          <!-- about text -->
                          <ul>
                            <!-- country -->
                            <li>
                              <h6>Country:</h6><span>{{ $data->country }}</span>
                            </li>
                            <!-- city -->
                            <li>
                              <h6>City:</h6><span>{{ $data->city }}</span>
                            </li>
                            <!-- age -->
                            <li>
                              <h6>Age:</h6><span>{{ $data->age }}</span>
                            </li>
                          </ul>
                        </div>
                        <!-- info bar about end -->

                        <!-- divider -->
                        <div class="art-ls-divider"></div>

                        <!-- language skills -->
                        <div class="art-lang-skills p-30-15">

                          <!-- skill -->
                          <div class="art-lang-skills-item">
                            <div id="circleprog1" class="art-cirkle-progress"></div>
                            <!-- title -->
                            <h6>Indonesia</h6>
                          </div>
                          <!-- skill end -->

                          <!-- skill -->
                          <div class="art-lang-skills-item">
                            <div id="circleprog2" class="art-cirkle-progress"></div>
                            <!-- title -->
                            <h6>English</h6>
                          </div>
                          <!-- skill end -->


                        </div>
                        <!-- language skills end -->

                        <!-- divider -->
                        <div class="art-ls-divider"></div>

                        <!-- hard skills -->
                        <div class="art-hard-skills p-30-15">

                          <!-- skill -->
                          <div class="art-hard-skills-item">
                            <div class="art-skill-heading">
                              <!-- title -->
                              <h6>html</h6>
                            </div>
                            <!-- progressbar frame -->
                            <div class="art-line-progress">
                              <!-- progressbar -->
                              <div id="lineprog1"></div>
                            </div>
                            <!-- progressbar frame end -->
                          </div>
                          <!-- skill end -->

                          <!-- skill -->
                          <div class="art-hard-skills-item">
                            <div class="art-skill-heading">
                              <!-- title -->
                              <h6>CSS</h6>
                            </div>
                            <!-- progressbar frame -->
                            <div class="art-line-progress">
                              <!-- progressbar -->
                              <div id="lineprog2"></div>
                            </div>
                            <!-- progressbar frame end -->
                          </div>
                          <!-- skill end -->

                          <!-- skill -->
                          <div class="art-hard-skills-item">
                            <div class="art-skill-heading">
                              <!-- title -->
                              <h6>Js</h6>
                            </div>
                            <!-- progressbar frame -->
                            <div class="art-line-progress">
                              <!-- progressbar -->
                              <div id="lineprog3"></div>
                            </div>
                            <!-- progressbar frame end -->
                          </div>
                          <!-- skill end -->

                          <!-- skill -->
                          <div class="art-hard-skills-item">
                            <div class="art-skill-heading">
                              <!-- title -->
                              <h6>PHP</h6>
                            </div>
                            <!-- progressbar frame -->
                            <div class="art-line-progress">
                              <!-- progressbar -->
                              <div id="lineprog4"></div>
                            </div>
                            <!-- progressbar frame end -->
                          </div>
                          <!-- skill end -->


                        </div>
                        <!-- language skills end -->

                        <!-- divider -->
                        <div class="art-ls-divider"></div>

                        <!-- knowledge list -->
                        <ul class="art-knowledge-list p-15-0">
                          <!-- list item -->
                          <li>Bootstrap, Tailwind</li>
                          <!-- list item -->
                          <li>Laravel</li>
                          <!-- list item -->
                          <li>GIT knowledge</li>
                        </ul>
                        <!-- knowledge list end -->

                        <!-- divider -->
                        <div class="art-ls-divider"></div>

                        <!-- links frame -->
                        <div class="art-links-frame p-15-15">

                          <!-- download cv button -->
                          <a href="../portofolio/img/CV_Muhamad_Iqbal_Fadilah.jpeg" class="art-link" download>Download cv <i class="fas fa-download"></i></a>

                        </div>
                        <!-- links frame end -->

                      </div>
                      <!-- scroll frame end -->

                      <!-- sidebar social -->
                      <div class="art-ls-social">
                        <!-- social link -->
                        <a href="https://www.linkedin.com/in/muhamad-iqbal-fadilah-48b7571b9/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <!-- social link -->
                        <a href="https://github.com/fadillahiq" target="_blank"><i class="fab fa-github"></i></a>
                        <!-- social link -->
                        <a href="https://www.facebook.com/sky.lord.high/" target="_blank"><i class="fab fa-facebook"></i></a>
                      </div>
                      <!-- sidebar social end -->

                    </div>
                    <!-- menu bar frame end -->

                  </div>
                  <!-- info bar end -->

                <!-- content -->
                <div class="art-content">
                @endforeach


                    <!-- curtain -->
                    <div class="art-curtain"></div>

                    <!-- top background -->
                    <div class="art-top-bg" style="background-image: url(../portofolio/img/bg.jpg)">
                      <!-- overlay -->
                      <div class="art-top-bg-overlay"></div>
                      <!-- overlay end -->
                    </div>
                    <!-- top background end -->


                    <!-- swup container -->
                    <div class="transition-fade" id="swup">

                      <!-- scroll frame -->
                      <div id="scrollbar" class="art-scroll-frame">
                  @yield('content')
                    <!-- end content -->
                     <!-- container -->
        <div class="container-fluid">

            <!-- footer -->
            <footer>
              <!-- copyright -->
              <div>© 2021 Muhamad Iqbal Fadilah</div>
            </footer>
            <!-- footer end -->

          </div>
          <!-- container end -->

        </div>
        <!-- scroll frame end -->

        </div>
        <!-- swup container end -->

        </div>
        <!-- content end -->

        <!-- menu bar -->
        <div class="art-menu-bar">

        <!-- menu bar frame -->
        <div class="art-menu-bar-frame">

        <!-- menu bar header -->
        <div class="art-menu-bar-header">
        <!-- menu bar button -->
        <a class="art-menu-bar-btn" href="#.">
            <!-- icon -->
            <span></span>
        </a>
        <!-- menu bar button end -->
        </div>
        <!-- menu bar header end -->

        <!-- current page title -->
        <div class="art-current-page"></div>
        <!-- current page title end -->

<!-- scroll frame -->
<div class="art-scroll-frame">

  <!-- menu -->
  <nav id="swupMenu">
    <!-- menu list -->
    <ul class="main-menu">
      <!-- menu item -->
      <li class="menu-item"><a href="/">Home</a></li>
      <!-- menu item -->
      <li class="menu-item"><a href="{{ route('portofolio') }}">Portofolio</a></li>
      <!-- menu item -->
      <li class="menu-item"><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
    <!-- menu list end -->
  </nav>
  <!-- menu end -->

  <!-- language change -->
  <ul class="art-language-change">
    <!-- language item -->
    <li><a href="#.">EN</a></li>
    <!-- language item -->
    <li class="art-active-lang"><a href="#.">ID</a></li>
  </ul>
  <!-- language change end -->

</div>
<!-- scroll frame end -->

</div>
<!-- menu bar frame -->

</div>
<!-- menu bar end -->

</div>
<!-- app container end -->

</div>
<!-- app wrapper end -->

<!-- preloader -->
<div class="art-preloader">
<!-- preloader content -->
<div class="art-preloader-content">
<!-- title -->
<h4>Muhamad Iqbal Fadilah</h4>
<!-- progressbar -->
<div id="preloader" class="art-preloader-load"></div>
</div>
<!-- preloader content end -->
</div>
<!-- preloader end -->

</div>
<!-- app end -->

<!-- jquery js -->
<script src="{{ asset('portofolio/js/plugins/jquery.min.js') }}"></script>
<!-- anime js -->
<script src="{{ asset('portofolio/js/plugins/anime.min.js') }}"></script>
<!-- swiper js -->
<script src="{{ asset('portofolio/js/plugins/swiper.min.js') }}"></script>
<!-- progressbar js -->
<script src="{{ asset('portofolio/js/plugins/progressbar.min.js') }}"></script>
<!-- smooth scrollbar js -->
<script src="{{ asset('portofolio/js/plugins/smooth-scrollbar.min.js') }}"></script>
<!-- overscroll js -->
<script src="{{ asset('portofolio/js/plugins/overscroll.min.js') }}"></script>
<!-- typing js -->
<script src="{{ asset('portofolio/js/plugins/typing.min.js') }}"></script>
<!-- isotope js -->
<script src="{{ asset('portofolio/js/plugins/isotope.min.js') }}"></script>
<!-- fancybox js -->
<script src="{{ asset('portofolio/js/plugins/fancybox.min.js') }}"></script>
<!-- swup js -->
<script src="{{ asset('portofolio/js/plugins/swup.min.js') }}"></script>

<!-- main js -->
<script src="{{ asset('portofolio/js/main.js') }}"></script>
@toastr_js
@toastr_render

</body>


<!-- Mirrored from elanta.app/nazar/arter-demo/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jan 2021 18:15:03 GMT -->
</html>


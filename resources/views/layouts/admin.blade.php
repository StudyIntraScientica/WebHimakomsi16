
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ url('css/socicon.css') }}" rel="stylesheet" type="text/css" media="all">
        <link href="{{ url('css/iconsmind.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ url('css/interface-icons.css') }}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ url('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ url('css/theme.css') }}" rel="stylesheet" type="text/css" media="all"/>
        <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
        <script src="{{ url('js/tinymce/tinymce.min.js') }}"></script>
        <script>
          tinymce.init({
            selector: 'textarea',
            height: 500,
            theme: 'modern',
            plugins: [
              'advlist autolink lists link image charmap print preview hr anchor pagebreak',
              'searchreplace wordcount visualblocks visualchars code fullscreen',
              'insertdatetime media nonbreaking save table contextmenu directionality',
              'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons',
            image_advtab: true,
            templates: [
              { title: 'Test template 1', content: 'Test 1' },
              { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
            ]
           });
      </script>
    </head>
    <body data-reveal-selectors="section:not(.masonry):not(:first-of-type):not(.parallax)">


		<div class="nav-container">
		    <nav>
		        <div class="nav-bar" data-fixed-at="700">
		            <div class="nav-module logo-module left">
		                <a class="inner-link" href="#top"><img alt="logo" class="logo logo-dark" src="{{ url('img/logo-himakomsi.png') }}"></a>
		            </div>
                @if (!Auth::guest())
		            <div class="nav-module menu-module left">
		                <ul class="menu">
		                    <li class="vpe">
		                        <a class="inner-link" href="#about">News &amp; Events</a>
		                    </li>
		                    <li class="vpe">
		                        <a class="inner-link" href="#divisi">Pictures</a>
		                    </li>
		                </ul>
		            </div>
                <div class="nav-module right" style="padding-right:3.25em">
		                <ul class="menu">
		                    <li>
		                        <a href="#">{{ Auth::user()->name }}</a>
                            <ul>
                                <li>
                                  <a class="inner-link" href="{{ url('admin/logout') }}">Log Out</a>
                                </li>
                            </ul>
		                    </li>
		                </ul>
                </div>
                @endif
		        </div>
		        <div class="nav-mobile-toggle visible-sm visible-xs">
		            <i class="icon-Align-JustifyAll icon icon--sm"></i>
		        </div>
		    </nav>
		</div>

		<div class="main-container">

      @yield('content')

			<footer class="bg--dark footer-4" id="contact">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-3 col-sm-4">
		                <h6>Links</h6>
		                <ul class="footer__navigation">
		                    <li class="vpe">
		                        <a href="http://sv.ugm.ac.id/"><span>SV UGM</span></a>
		                    </li>
		                    <li class="vpe">
		                        <a href="https://www.facebook.com/groups/1492834030930705/?fref=ts"><span>FB Keluarga Komsi</span></a>
		                    </li>
		                    <li class="vpe">
		                        <a href="http://www.elisa.ugm.ac.id/"><span>Elisa UGM</span></a>
		                    </li>
		                </ul>
		            </div>
		            <div class="col-md-4 col-sm-8">
		                <h6>Recent Tweets</h6>
		                <div class="twitter-feed">
		                    <div class="tweets-feed" data-amount="2" data-widget-id="323381968450490369"></div>
		                </div>
		            </div>
		            <div class="col-md-4 col-md-offset-1 col-sm-12">
		                <h6>Contact Us</h6>
                    <p>himakomsi.ugm@gmail.com <br>
                    Jl. Kaliurang No 65, Gedung Sekolah Vokasi</p>

		                <h6>Connect with Us</h6>
		                <ul class="social-list">
		                    <li class="vpe">
		                        <a href="https://twitter.com/HimakomsiUGM"><i class="socicon-twitter"></i></a>
		                    </li>
		                    <li class="vpe">
		                        <a href="https://www.facebook.com/HimakomsiUgm/"><i class="socicon-facebook"></i></a>
		                    </li>
		                    <li class="vpe">
		                        <a href="https://www.youtube.com/channel/UCb7Uv2m5MSfuTL8UhaWC-jA"><i class="socicon-youtube"></i></a>
		                    </li>
		                </ul>
		            </div>
		        </div>
		    </div>
		    <div class="footer__lower">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-6 text-center-xs">
		                    <span class="type--fine-print">© Copyright
		                    <span class="update-year">2016</span> Keluarga Himpunan Mahasiswa Komputer &amp; Sistem Informasi</span>
		                </div>
		                <div class="col-sm-6 text-right text-center-xs">
		                    <a class="inner-link top-link" href="#top"><i class="interface-up-open-big"></i></a>
		                </div>
		            </div>
		        </div>
		    </div>
		</footer>
		</div>


		<script src="{{ url('js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ url('js/isotope.min.js') }}"></script>
        <script src="{{ url('js/owl.carousel.min.js') }}"></script>
        <script src="{{ url('js/twitterfetcher.min.js') }}"></script>
        <script src="{{ url('js/smooth-scroll.min.js') }}"></script>
        <script src="{{ url('js/scrollreveal.min.js') }}"></script>
        <script src="{{ url('js/parallax.js') }}"></script>
        <script src="{{ url('js/scripts.js') }}"></script>
    </body>
</html>

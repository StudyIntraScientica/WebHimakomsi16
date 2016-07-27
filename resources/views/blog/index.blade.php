
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="title" content="Himakomsi">
        <meta name="description" content="Rancangan Tampilan website Himakomsi (Himpunan Mahasiswa Komputer dan Sistem Informasi SV)">
        <meta name="author" content="SIS Rangers">
        <meta name="keywords" content="Himakomsi, UGM, SV, Sekolah Vokasi UGM">
        
        <link rel="shortcut icon" type="x-icon" href="assets/img/logo.jpg">
        
        <title>Himakomsi UGM</title>
        
        <!--  CSS dibawah sini -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/himakomsi-reset.css">
        <link rel="stylesheet" type="text/css" href="assets/css/himakomsi-style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bs-carousel.css">
        <link rel="stylesheet" type="text/css" href="assets/css/lightcase.css">
        <link rel="stylesheet" type="text/css" href="assets/css/loader.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
        <link rel="stylesheet" type="text/css" href="assets/css/social-icon.css">

        <script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
        <script>
             // hashtag link
            $(function() {
                $('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
        </script>
    </head>
    <body>
        <section class="parts" id="header">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menubar-hima" aria-expanded="false">
                            <span class="sr-only">Toggle Navigation</span>
                            <i class="fa fa-bars"></i>
                        </button>
                    
                        <a href="index.php" class="navbar-brand brand-logo">HIMAKOMSI</a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="menubar-hima">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#">HOME</a></li>
                            <li><a href="#about">ABOUT</a></li>
                            <li><a href="#news">NEWS</a></li>
                            <li><a href="#news">EVENTS</a></li>
                            <li><a href="#footer">CONTACT</a></li>
                            <li><a href="#">GALLERY</a></li>
                            <li><a href="#">DOWNLOADS</a></li>
                        </ul>
                    </div>
                </div>
                
            </nav>
        </section>
        
        <!-- Carousel Start-->
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <!-- Overlay -->
            <div class="bs-overlay"></div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1"></li>
                <li data-target="#bs-carousel" data-slide-to="2"></li>
            </ol>
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                <div class="slide-1"></div>
                <div class="hero">
                    <hgroup>
                        <img src="assets/img/logo.jpg" style="max-width : 120px ;"></img>
                        <h1>HIMAKOMSI</h1>        
                        <h3>Himpunan Mahasiswa Ilmu Komputer dan Sistem Informasi</h3>
                    </hgroup>
                </div>
                </div>
                <div class="item slides">
                <div class="slide-2"></div>
                <div class="hero">        
                    <hgroup>
                        <h1>We are smart</h1>        
                        <h3>Passion, Technology and Solidarity</h3>
                    </hgroup>       
                </div>
                </div>
                <div class="item slides">
                <div class="slide-3"></div>
                <div class="hero">        
                    <hgroup>
                        <h1>We are amazing</h1>        
                        <h3>Get start your next awesome project</h3>
                    </hgroup>
                </div>
                </div>
            </div> 
        </div>
        <!-- Carousel END-->
        
        <!-- About Us Start -->
        <section class="parts" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-content">
                            <h3 class="content-title">ABOUT HIMAKOMSI</h3>
                            <hr class="sep centered"/>
                            <p class="content-subtitle">Himakomsi adalah candu, keluarga, obat, tangis, dan tawa. Kami selalu ingin bersama.</p>
                        </div>
                        <div class="content-body">
                        <div class="row" style="padding : 10px 0px ;">
                            <div class="col-md-4 text-center point">
                                <div class="ex ex-passion hvr-outline-in"></div>
                                <h5 class="title-point">PASSION</h5>
                                <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa temporibus, 
                                consequatur nam possimus obcaecati voluptatibus.</p>
                            </div>
                            <div class="col-md-4 text-center point">
                                <div class="ex ex-tech hvr-outline-in"></div>
                                <h5 class="title-point">TECHNOLOGY</h5>
                                <p class="small">Ipsa temporibus, consequatur nam possimus obcaecati voluptatibus dolore eum quidem molestiae 
                                impedit nemo at eligendi sint assumenda ducimus incidunt, aliquam amet molestias!</p>
                            </div>
                            <div class="col-md-4 text-center point">
                                <div class="ex ex-solid hvr-outline-in"></div>
                                <h5 class="title-point">SOLIDARITY</h5>
                                <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.  
                                impedit nemo at eligendi sint assumenda ducimus incidunt, aliquam amet molestias!</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="hima">
            <div class="col-md-12 cvr-hima">
                <div class="col-md-6 cvr-hima pull-right">
                    <div class="overlay-hima"></div>
                    <img src="assets/img/members.jpg" class="img-hima" />
                </div>
                <div class="col-md-6 arrow-right">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-content pull-right text-right">
                                <h3 class="content-title">HIMAKOMSI</h3>
                                <hr class="sep right" style="padding : 0px ; margin-top : 0px ;" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 col-md-offset-3 contents">
                            <p class="text-right">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Perferendis labore veritatis dicta delectus, recusandae itaque similique 
                                voluptas impedit amet in, fugiat sequi quis, ut minus. Mollitia illum, adipisci placeat tenetur.
                            </p>
                            <p class="text-right">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Perferendis labore veritatis dicta delectus, recusandae itaque similique 
                                voluptas impedit amet in, fugiat sequi quis, ut minus. Mollitia illum, adipisci placeat tenetur.
                            </p>
                            <p class="text-right">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Perferendis labore veritatis dicta delectus, recusandae itaque similique 
                                voluptas impedit amet in, fugiat sequi quis, ut minus. Mollitia illum, adipisci placeat tenetur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us END -->
        
        <!-- Division Start -->
        <section class="parts" id="division">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-content">
                            <h3 class="content-title">DIVISIONS</h3>
                            <hr class="sep centered"/>
                            <p class="content-subtitle">Memang ada pembagi diantara kita, namun hal itu bukan pemisah melainkan pemersatu</p>
                        </div>
                        <div class="content-body">
                        <div class="row">
                            <div class="col-md-4 text-center point">
                                <div class="ex ex-tea hvr-outline-in"></div>
                                <h5 class="title-point bigger tight">TEA</h5>
                                <p>(Talent Entertainment and Art)</p>
                                <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa temporibus, 
                                consequatur nam possimus obcaecati voluptatibus.</p>
                            </div>
                            <div class="col-md-4 text-center point">
                                <div class="ex ex-sis hvr-outline-in"></div>
                                <h5 class="title-point bigger tight">SIS</h5>
                                <p>(Study Intra Scientica)</p>
                                <p class="small">Ipsa temporibus, consequatur nam possimus obcaecati voluptatibus dolore eum quidem molestiae 
                                impedit nemo at eligendi sint assumenda ducimus incidunt, aliquam amet molestias!</p>
                            </div>
                            <div class="col-md-4 text-center point">
                                <div class="ex ex-eon hvr-outline-in"></div>
                                <h5 class="title-point bigger tight">EON</h5>
                                <p>(Event Organizer and Network)</p>
                                <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.  
                                impedit nemo at eligendi sint assumenda ducimus incidunt, aliquam amet molestias!</p>
                            </div>
                        </div>
                        </div>
                        <div class="content-body">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 text-center point">
                                <div class="ex ex-eps hvr-outline-in"></div>
                                <h5 class="title-point bigger tight">EPS</h5>
                                <p>(Entrepreneurship)</p>
                                <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa temporibus, 
                                consequatur nam possimus obcaecati voluptatibus.</p>
                            </div>
                            <div class="col-md-4 text-center point">
                                <div class="ex ex-adpa hvr-outline-in"></div>
                                <h5 class="title-point bigger tight">ADPA</h5>
                                <p>(Advokasi, Publikasi dan Advokasi)</p>
                                <p class="small">Ipsa temporibus, consequatur nam possimus obcaecati voluptatibus dolore eum quidem molestiae 
                                impedit nemo at eligendi sint assumenda ducimus incidunt, aliquam amet molestias!</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Division END -->
        
        <!-- News and events start -->
        <section class="parts" id="news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-content">
                            <h3 class="content-title">NEWS AND EVENTS</h3>
                            <hr class="sep centered"/>
                            <p class="content-subtitle">Kegiatan dan berita dari Himakomsi, selalu ikuti perkembangannya</p>
                        </div>
                        <!-- News content row 1 -->
                        <div class="row pd-bt-10">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <a href="#" class="news-point">
                                        <div class="col-md-12">

                                            <div class="row">
                                                <div class="col-md-12 nowrap">
                                                    <div class="news-overlay"></div>
                                                    <img src="assets/img/news6-thumbnail.jpg" class="news-img" alt="Lorem Ipsum" title="Lorem Ipsum" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="news-title pd-5">
                                                        <h5>Lorem Ipsum Dolorsit <div class="pull-right text-right"><i class="fa fa-chevron-right"></i></div></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 pd-bt-10 news-sh">
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-share-alt"></i> 25
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-heart-o"></i> 25
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-comment-o"></i> 25
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4">
                                    <a href="#" class="news-point">
                                        <div class="col-md-12">

                                            <div class="row">
                                                <div class="col-md-12 nowrap">
                                                    <div class="news-overlay"></div>
                                                    <img src="assets/img/news5-thumbnail.jpg" class="news-img" alt="Lorem Ipsum" title="Lorem Ipsum" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="news-title pd-5">
                                                        <h5>Lorem Ipsum Dolorsit <div class="pull-right text-right"><i class="fa fa-chevron-right"></i></div></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 pd-bt-10 news-sh">
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-share-alt"></i> 25
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-heart-o"></i> 25
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-comment-o"></i> 25
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4">
                                    <a href="#" class="news-point">
                                        <div class="col-md-12">

                                            <div class="row">
                                                <div class="col-md-12 nowrap">
                                                    <div class="news-overlay"></div>
                                                    <img src="assets/img/news4-thumbnail.jpg" class="news-img" alt="Lorem Ipsum" title="Lorem Ipsum" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="news-title pd-5">
                                                        <h5>Lorem Ipsum Dolorsit <div class="pull-right text-right"><i class="fa fa-chevron-right"></i></div></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 pd-bt-10 news-sh">
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-share-alt"></i> 25
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-heart-o"></i> 25
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-comment-o"></i> 25
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- News row 1 END -->
                        <!-- News row 2 -->
                        <div class="row pd-bt-10">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <a href="#" class="news-point">
                                        <div class="col-md-12">

                                            <div class="row">
                                                <div class="col-md-12 nowrap">
                                                    <div class="news-overlay"></div>
                                                    <img src="assets/img/news1-thumbnail.jpg" class="news-img" alt="Lorem Ipsum" title="Lorem Ipsum" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="news-title pd-5">
                                                        <h5>Lorem Ipsum Dolorsit <div class="pull-right text-right"><i class="fa fa-chevron-right"></i></div></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 pd-bt-10 news-sh">
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-share-alt"></i> 25
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-heart-o"></i> 25
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-comment-o"></i> 25
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4">
                                    <a href="#" class="news-point">
                                        <div class="col-md-12">

                                            <div class="row">
                                                <div class="col-md-12 nowrap">
                                                    <div class="news-overlay"></div>
                                                    <img src="assets/img/news2-thumbnail.jpg" class="news-img" alt="Lorem Ipsum" title="Lorem Ipsum" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="news-title pd-5">
                                                        <h5>Lorem Ipsum Dolorsit <div class="pull-right text-right"><i class="fa fa-chevron-right"></i></div></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 pd-bt-10 news-sh">
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-share-alt"></i> 25
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-heart-o"></i> 25
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-comment-o"></i> 25
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4">
                                    <a href="#" class="news-point">
                                        <div class="col-md-12">

                                            <div class="row">
                                                <div class="col-md-12 nowrap">
                                                    <div class="news-overlay"></div>
                                                    <img src="assets/img/news3-thumbnail.jpg" class="news-img" alt="Lorem Ipsum" title="Lorem Ipsum" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="news-title pd-5">
                                                        <h5>Lorem Ipsum Dolorsit <div class="pull-right text-right"><i class="fa fa-chevron-right"></i></div></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 pd-bt-10 news-sh">
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-share-alt"></i> 25
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-heart-o"></i> 25
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        <i class="fa fa-comment-o"></i> 25
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- News row 2 end -->
                        <p class="text-center pd-bt-20">
                            <a href="#" class="btn btn-success btn-more">MORE NEWS &nbsp;&nbsp; <span class="text-right pull-right btn-capt"><i class="fa fa-chevron-right"></i></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- News and events END -->
        <section id="gallery">
            <div class="col-md-12 nowrap">
                <div class="col-md-3 nowrap">
                <a href="assets/img/img1.jpg" class="gal-point" data-rel="lightcase">
                    <div class="gal-overlay">
                        <div class="gal-caption">
                            <h3 class="capt-title">LOREM IPSUM DOLORSIT AMET</h3>
                            <p class="capt-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Excepturi iste tenetur velit voluptate odit ex! Modi reprehenderit 
                                magni necessitatibus et eum, non tempore. Minus saepe ex fugiat quibusdam quod magni.
                            </p>
                            <p class="capt-like">
                                <i class="fa fa-heart"></i> 25 &nbsp;&nbsp;
                                <i class="fa fa-comment"></i> 30
                            </p>
                        </div>
                    </div>
                    <img src="assets/img/img1-thumbnail.jpg" class="gal-img" title="Lorem Ipsum" alt="Lorem Ipsum">
                </a>
                </div>
                <div class="col-md-3 nowrap">
                <a href="assets/img/img2.jpg" class="gal-point" data-rel="lightcase">
                    <div class="gal-overlay">
                        <div class="gal-caption">
                            <h3 class="capt-title">LOREM IPSUM DOLORSIT AMET</h3>
                            <p class="capt-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Excepturi iste tenetur velit voluptate odit ex! Modi reprehenderit 
                                magni necessitatibus et eum, non tempore. Minus saepe ex fugiat quibusdam quod magni.
                            </p>
                            <p class="capt-like">
                                <i class="fa fa-heart"></i> 25 &nbsp;&nbsp;
                                <i class="fa fa-comment"></i> 30
                            </p>
                        </div>
                    </div>
                    <img src="assets/img/img2-thumbnail.jpg" class="gal-img" title="Lorem Ipsum" alt="Lorem Ipsum">
                </a>
                </div>
                <div class="col-md-3 nowrap">
                <a href="assets/img/img3.jpg" class="gal-point" data-rel="lightcase">
                    <div class="gal-overlay">
                        <div class="gal-caption">
                            <h3 class="capt-title">LOREM IPSUM DOLORSIT AMET</h3>
                            <p class="capt-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Excepturi iste tenetur velit voluptate odit ex! Modi reprehenderit 
                                magni necessitatibus et eum, non tempore. Minus saepe ex fugiat quibusdam quod magni.
                            </p>
                            <p class="capt-like">
                                <i class="fa fa-heart"></i> 25 &nbsp;&nbsp;
                                <i class="fa fa-comment"></i> 30
                            </p>
                        </div>
                    </div>
                    <img src="assets/img/img3-thumbnail.jpg" class="gal-img" title="Lorem Ipsum Dolorsit Amet" alt="Lorem Ipsum Dolorsit Amet">
                </a>
                </div>
                <div class="col-md-3 nowrap">
                <a href="assets/img/img4.jpg" class="gal-point" data-rel="lightcase">
                    <div class="gal-overlay">
                        <div class="gal-caption">
                            <h3 class="capt-title">LOREM IPSUM DOLORSIT AMET</h3>
                            <p class="capt-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Excepturi iste tenetur velit voluptate odit ex! Modi reprehenderit 
                                magni necessitatibus et eum, non tempore. Minus saepe ex fugiat quibusdam quod magni.
                            </p>
                            <p class="capt-like">
                                <i class="fa fa-heart"></i> 25 &nbsp;&nbsp;
                                <i class="fa fa-comment"></i> 30
                            </p>
                        </div>
                    </div>
                    <img src="assets/img/img4-thumbnail.jpg" class="gal-img" title="Lorem Ipsum" alt="Lorem Ipsum">
                </a>
                </div>
            </div>
        </section>
        <!-- Footer start -->
        <section class="parts" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="foot-title-big">HIMAKOMSI</h4>
                        <p class="foot-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas obcaecati beatae, excepturi, 
                            aliquam molestias vel sit dignissimos ea atque perferendis a consectetur harum, eveniet praesentium 
                            velit! Obcaecati maxime sapiente consectetur.
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h4 class="foot-title">LINKS</h4>
                        <p class="text-justify">
                            <ul class="list-unstyled">
                                <li><a href="https://ugm.ac.id" target="_blank" class="social-links">Universitas Gadjah Mada</a></li>
                                <li><a href="https://sv.ugm.ac.id" target="_blank" class="social-links">Sekolah Vokasi Universitas Gadjah Mada</a></li>
                                <li><a href="#" target="_blank" class="social-links">Komsi Stuck</a></li>
                                <li><a href="#" target="_blank" class="social-links">Keluarga Komsi</a></li>
                                <li><a href="https://elisa.ugm.ac.id" target="_blank" class="social-links">Elisa Universitas Gadjah Mada</a></li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h4 class="foot-title">BLOG POSTS</h4>
                        <p class="text-justify">
                            <ul class="list-unstyled">
                                <li><a href="#" target="_blank" class="social-links">Lorem Ipsum Dolorsit Amet</a></li>
                                <li><a href="#" target="_blank" class="social-links">Lorem Ipsum Dolorsit Amet</a></li>
                                <li><a href="#" target="_blank" class="social-links">Lorem Ipsum Dolorsit Amet</a></li>
                                <li><a href="#" target="_blank" class="social-links">Lorem Ipsum Dolorsit Amet</a></li>
                                <li><a href="#" target="_blank" class="social-links">Lorem Ipsum Dolorsit Amet</a></li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h4 class="foot-title">CONTACT US</h4>
                        <p class="text-justify addr"><em>Jalan Kaliurang KM 6.5, Gedung Sekolah Vokasi Universitas Gadjah Mada<br>Yogyakarta, Indonesia</em></p>
                        <p class="text-justify cont-link">(+62)274 - 1234567<br>himakomsi.ugm@gmail.com</p>
                        <p>
                            <!-- <a href="#"><i class="flaticon-facebook-logo-button"></i></a>
                            <a href="#"><i class="flaticon-twitter-logo-button"></i></a>
                            <a href="#"><i class="flaticon-instagram-logo"></i></a>
                            <a href="#"><i class="flaticon-google-plus-logo-button"></i></a> -->
                            <a href="#" class="social-icons" title="Facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook-square"></i></a>
                            <a href="#" class="social-icons" title="Twitter" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter-square"></i></a>
                            <a href="#" class="social-icons" title="Instagram" data-toggle="tooltip" data-placement="top"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="social-icons" title="YouTube" data-toggle="tooltip" data-placement="top"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" class="social-icons" title="Google+" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus-square"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer END -->
        <!-- copyright -->
        <section class="parts" id="copy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center copyright">Himakomsi UGM &copy; 2016<br/>Designed and Developed by SIS Rangers</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of document-->
        
        <!--  JS nya taruh sini gan -->
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/modernizr.js"></script>
        <script type="text/javascript" src="assets/js/lightcase.js"></script>
        <script type="text/javascript" src="assets/js/owl.carousel.js"></script>
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip() ;
            }) ;

            jQuery(document).ready(function($){
                $('a[data-rel^=lightcase]').lightcase();
            }) ;

            console.log(lightcase) ;
        </script>
    </body>
</html>
<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php echo $sSiteTitle; ?> | Home</title>
        <script type="text/javascript" async src="https://www.googletagmanager.com/gtag/js?id=G-5EKS4HV73Z"></script>
        <script type="text/javascript">
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-5EKS4HV73Z');
        </script>
        <meta name="description" content="Read Bangladesh latest news updates, political affairs news, business news, crime news, government briefings, Bangladesh law & rights at Businessinsiderbd.com">
        <meta name="keywords" content="<?php echo $sSiteTitle; ?>">
        <meta http-equiv="refresh" content="6000">
        <meta name="author" content="<?php echo $sAuthor; ?>">
        <meta name="Developer" content="<?php echo $sDeveloper; ?>">
        <meta name="resource-type" content="document">
        <meta name="contact" content="<?php echo $sEmail; ?>">
        <meta name="copyright" content="Copyright (c) <?php echo date("Y"); ?>. All Rights &reg; Reserved by <?php echo $sSiteURL; ?>.">
        <meta name="p:domain_verify" content="c0b55870314e28b95906c5cd302b5d39" />
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="googlebot-news" content="index, follow">
        <meta name="msnbot" content="index, follow">
        <meta property="fb:app_id" content="<?php echo $sAppId; ?>">
        <meta property="fb:pages" content="102310071621132">
        <meta property="og:site_name" content="<?php echo $sSiteName; ?>">
        <meta property="og:title" content="<?php echo $sSiteTitle; ?>">
        <meta property="og:description" content="<?php echo $sSiteTitle; ?>">
        <meta property="og:url" content="<?php echo $sSiteURL; ?>">
        <meta property="og:type" content="article">
        <meta property="og:image" content="<?php echo $sLogoURLfb; ?>">
        <meta property="og:locale" content="en_US">
        <link rel="image_src" href="<?php echo $sLogoURLfb; ?>">
        <link rel="canonical" href="<?php echo $sSiteURL; ?>">
        <link type="image/x-icon" rel="shortcut icon" href="<?php echo $sFavicon; ?>">
        <link type="image/x-icon" rel="icon" href="<?php echo $sFavicon; ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <?php echo $sCSSBootStrap;
        echo $sCSSFontAwesome;
        echo $sCSSKiron;
        echo $sCSSBootstrapIcon;
        echo $sCSSEMM;
        ?>
    </head>

    <body>
        <?php echo $sFbRoot; ?>
        <?php include_once("common/header.php"); ?>
        <main>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Media/imgAll/banner-1.jpg" class="d-block w-100" alt="-">
                        <div class="carousel-caption">
                            <!-- <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p> -->
                            <!-- <div class="button__text">WATCH NOW</div> -->
                            <a href="#" class="button__text">WATCH NOW</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Media/imgAll/banner-2.jpg" class="d-block w-100" alt="-">
                        <div class="carousel-caption">
                            <!-- <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p> -->
                            <!-- <div class="button__text">WATCH NOW</div> -->
                            <a href="#" class="button__text">WATCH NOW</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Media/imgAll/banner-3.jpg" class="d-block w-100" alt="-">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p> -->
                            <!-- <div class="button__text">WATCH NOW</div> -->
                            <a href="#" class="button__text">WATCH NOW</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="popular">
                <div class="container">
                    <div class="AllPopular">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-gutter popular-title">
                                    <p>
                                        <span>Popular</span>
                                        <a href="">
                                            <span>See all</span>
                                        </a>
                                    </p>
                                </div>
                            </div> 
                            <div class="multiple-items">
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/batch-27.jpg" alt="" title="Batch 27" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>                                                
                                            </div>
                                            <div class="Detail">
                                                <h5 class="Title">Batch 27</h5>
                                                <p class="content-rating">
                                                    <span>4.3</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/nokshi.jpg" alt="" title="Nokshi" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h5 class="Title">Nokshi</h5>
                                                <p class="content-rating">
                                                    <span>4.3</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/shamir.jpg" alt="" title="Shamir 10ti Bodobbhash" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h5 class="Title">Shamir 10ti Bodobbhash</h5>
                                                <p class="content-rating">
                                                    <span>4.3</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                    </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/bouvison.jpg" alt="" title="Bou Vision Powerful" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h5 class="Title">Bou Vision Powerful</h5>
                                                <p class="content-rating">
                                                    <span>4.3</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/rajniti.jpg" alt="" title="Rajniti 2" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h5 class="Title">Rajniti 2</h5>
                                                <p class="content-rating">
                                                    <span>4.3</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/paglajamai.jpg" alt="" title="Pagla Jamai" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h5 class="Title">Pagla Jamai</h5>
                                                <p class="content-rating">
                                                    <span>4.3</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/comedynatok.png" alt="" title="Bakita Etihash" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h5 class="Title">Bakita Etihash</h5>
                                                <p class="content-rating">
                                                    <span>4.3</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/boudour.jpg" alt="" title="Bou Dour" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h5 class="Title">Bou Dour</h5>
                                                <p class="content-rating">
                                                    <span>4.3</span>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="library">
                <div class="container">
                    <div class="libraryAll">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="library-title">
                                    <p>
                                        <span>Library</span>
                                        <a href="">See all</a>
                                    </p>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/natok.jpg" alt="" title="Natok" class="img-fluid img100 ImgRatio">
                                                        <i class="fas fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h4 class="Title">Natok</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/webseries.jpg" alt="" title="Web Series" class="img-fluid img100 ImgRatio">
                                                        <i class="fas fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h4 class="Title">Web Series</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/comedynatok.png" alt="" title="Comedy Natok" class="img-fluid img100 ImgRatio">
                                                        <i class="fas fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h4 class="Title">Comedy Natok</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/movie.jpg" alt="" title="Movie" class="img-fluid img100 ImgRatio">
                                                        <i class="fas fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h4 class="Title">Movie</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/song.jpg" alt="" title="Songs" class="img-fluid img100 ImgRatio">
                                                        <i class="fas fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h4 class="Title">Songs</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/sasthokotha.jpg" alt="" title="Sastho Kotha" class="img-fluid img100 ImgRatio">
                                                        <i class="fas fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h4 class="Title">Sastho Kotha</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="Banner-Add d-flex justify-content-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="" target="_blank">
                                <img src="Media/imgAll/channels_banner.jpg" alt="" title="Add" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="biggest">
                <div class="container">
                    <div class="biggest-hitz">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-gutter biggest-title">
                                    <p>
                                        <span>Biggest Hitz</span>
                                        <a href="">
                                            <span>See all</span>
                                        </a>
                                    </p>
                                </div>
                            </div> 
                            <div class="center-items">
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/garilla.jpg" alt="" title="Guerrilla" class="img-fluid img100 ImgRatio">
                                                        <i class="fas fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/dhakaattack.jpg" alt="" title="Dhaka Attack" class="img-fluid img100 ImgRatio">
                                                        <i class="fas fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/chorabali.jpg" alt="" title="Chorabali" class="img-fluid img100 ImgRatio">
                                                        <i class="fas fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/paglajamai.jpg" alt="" title="Pagla Jamai" class="img-fluid img100 ImgRatio">
                                                        <i class="fas fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/harkipte.jpg" alt="" title="Har Kipta" class="img-fluid img100 ImgRatio">
                                                        <i class="fas fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/boudour.jpg" alt="" title="Bou Dour" class="img-fluid img100 ImgRatio">
                                                        <i class="fas fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="watchnow">
                <div class="container">
                    <div class="AllWatchnow">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-gutter watchnow-title">
                                    <p>
                                        <span>Watch Now</span>
                                        <a href="">
                                            <span>See all</span>
                                        </a>
                                    </p>
                                </div>
                            </div> 
                            <div class="autoplay">
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/garilla.jpg" alt="" title="Guerrilla" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/dhakaattack.jpg" alt="" title="Dhaka Attack" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/chorabali.jpg" alt="" title="Chorabali" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/paglajamai.jpg" alt="" title="Pagla Jamai" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/harkipte.jpg" alt="" title="Har Kipta" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/boudour.jpg" alt="" title="Bou Dour" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="series">
                <div class="container">
                    <div class="seriesAll">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="series-title">
                                    <p>
                                        <span>Special Of</span>
                                        <a href="">Sikandar Box</a>
                                    </p>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/onekboro.jpg" alt="" title="Sikandar Box Ekhon Onek Boro" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h5 class="Title">Sikandar Box Ekhon Onek Boro</h5>
                                                <p class="content-file">
                                                    <i class="fas fa-folder"></i>
                                                    <span>64</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/bandorban.jpg" alt="" title="Sikanadar Box Ekhon Bandarban" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h5 class="Title">Sikanadar Box Ekhon Bandarban</h5>
                                                <p class="content-file">
                                                    <i class="fas fa-folder"></i>
                                                    <span>6</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/pagol.jpg" alt="" title="Sikanadar Box Ekhon Pagol Praay" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h5 class="Title">Sikanadar Box Ekhon Pagol Praay</h5>
                                                <p class="content-file">
                                                    <i class="fas fa-folder"></i>
                                                    <span>3</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/model.jpg" alt="" title="Sikanadar Box Ekhon Birat Model" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h5 class="Title">Sikanadar Box Ekhon Birat Model</h5>
                                                <p class="content-file">
                                                    <i class="fas fa-folder"></i>
                                                    <span>6</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/howaigari.jpg" alt="" title="Sikanadar Box-er Hawai Gari" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h5 class="Title">Sikanadar Box-er Hawai Gari</h5>
                                                <p class="content-file">
                                                    <i class="fas fa-folder"></i>
                                                    <span>14</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/grame.jpg" alt="" title="Sikandar Box Ekhon Nij Grame" class="img-fluid img100 ImgRatio">
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h5 class="Title">Sikandar Box Ekhon Nij Grame</h5>
                                                <p class="content-file">
                                                    <i class="fas fa-folder"></i>
                                                    <span>6</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="healthnews">
                <div class="container">
                    <div class="AllHealthnews">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-gutter healthnews-title">
                                    <p>
                                        <span>Health News</span>
                                        <a href="">
                                            <span>See all</span>
                                        </a>
                                    </p>
                                </div>
                            </div> 
                            <div class="multiple-items">
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/sasthokotha-1.jpg" alt="" title="Jan 22, 2022" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>                                                
                                            </div>
                                            <div class="Detail">
                                                <h6 class="Title">Jan 22, 2022</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/sasthokotha-2.jpg" alt="" title="Jan 15, 2022" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h6 class="Title">Jan 15, 2022</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/sasthokotha-3.jpg" alt="" title="Jan 08, 2022" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h6 class="Title">Jan 08, 2022</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/sasthokotha-4.jpg" alt="" title="Jan 01, 2022" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h6 class="Title">Jan 01, 2022</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/sasthokotha-1.jpg" alt="" title="Dec 25, 2021" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>                                                
                                            </div>
                                            <div class="Detail">
                                                <h6 class="Title">Dec 25, 2021</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/sasthokotha-2.jpg" alt="" title="Dec 18, 2021" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h6 class="Title">Dec 18, 2021</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/sasthokotha-3.jpg" alt="" title="Dec 11, 2021" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h6 class="Title">Dec 11, 2021</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/sasthokotha-4.jpg" alt="" title="Dec 04, 2021" class="img-fluid img100 ImgRatio">
                                                        <i class="far fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h6 class="Title">Dec 04, 2021</h6>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="talkshow">
                <div class="container">
                    <div class="AllTalkshow">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-gutter talkshow-title">
                                    <p>
                                        <span>Talk Show</span>
                                        <a href="">
                                            <span>See all</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/amarami-1.jpg" alt="" title="Amar Ami" class="img-fluid img100 ImgRatio">
                                                        <i class="fas fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h5 class="Title">Amar Ami</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/dinprotidin.jpg" alt="" title="Din protidin" class="img-fluid img100 ImgRatio">
                                                        <i class="fas fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h5 class="Title">Din protidin</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="items">
                                        <a href="#">
                                            <div class="Imgresize">
                                                <figure class="ImgViewer">
                                                    <picture class="FixingRatio">
                                                        <img src="Media/imgAll/priyojon.jpg" alt="" title="Priyojon Ei Somoye" class="img-fluid img100 ImgRatio">
                                                        <i class="fas fa-play-circle"></i>
                                                    </picture>
                                                </figure>
                                            </div>
                                            <div class="Detail">
                                                <h5 class="Title">Priyojon Ei Somoye</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>

            <div class="Banner-Add d-flex justify-content-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="" target="_blank">
                                <img src="Media/imgAll/lowerImage.jpg" alt="" title="Add" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <?php include_once("common/footer.php"); ?>
        <?php include_once("common/scrollBreaking.php"); ?>
        <?php echo $sJSjQuery; ?>
        <?php echo $sJSBootStrap; ?>
        <!--[if lt IE 9]>
        <?php echo $sJShtml5shiv; ?>
        <?php echo $sJSrespond; ?>
        <![endif]-->
        <?php echo $sJSEMM; ?>
        <script>
            $(document).ready(function() {

                var counters = $(".count");
                var countersQuantity = counters.length;
                var counter = [];

                for (i = 0; i < countersQuantity; i++) {
                    counter[i] = parseInt(counters[i].innerHTML);
                }

                var count = function(start, value, id) {
                    var localStart = start;
                    setInterval(function() {
                        if (localStart < value) {
                            localStart++;
                            counters[id].innerHTML = localStart;
                        }
                    }, 1);
                }

                for (j = 0; j < countersQuantity; j++) {
                    count(0, counter[j], j);
                }
            });
        </script>
        <div id="fb-root"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0" nonce="5W80qaTR"></script>
        <script>
            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 2
            });
        </script>
        <script>
            $('.center-items').slick({
                centerMode: true,
                centerPadding: '280px',
                slidesToShow: 1,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        </script>
        <script>
            $('.autoplay').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });
        </script>
    </body>
</html>
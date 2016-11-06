<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
   <?php wp_head();?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-default">
  <div class="container">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php site_url();?>">
        <img src="<?php images('perayalogo.png');?>" height="30"></img>
      </a>
    </div>
    
     <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    
    
  </div>
</nav>
<!-- End Navbar -->
<!-- Banner -->
<div class="banner">
    
</div>
<!-- End Banner -->
<!-- Feature -->
<div class="feature">
    
    <div class="container">
        <div class="feature-title">
            <h1>Kenapa Harus Kami?</h1>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="<?php images('mentor.png');?>"></img>
                    </div>
                    <div class="feature-description">
                        <h4>Mentor Berpengalaman</h4>
                        <p>Mentor kami sangat berpengalaman dalam mendidik siswanya untuk menjadi  profesional</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="<?php images('konsultasi.png');?>"></img>
                    </div>
                    <div class="feature-description">
                        <h4>Gratis Konsultasi Kerja</h4>
                        <p>Selama anda menjadi siswa kami, anda gratis berkonsultasi dengan pakar-pakar kami.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="<?php images('summary.png');?>"></img>
                    </div>
                    <div class="feature-description">
                        <h4>Info Bimbingan Dan Perekrutan</h4>
                        <p>Selama anda menjadi siswa kami, kami akan memberikan info mengenai bimbingan dan recruitment.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="<?php images('departure.png');?>"></img>
                    </div>
                    <div class="feature-description">
                        <h4>Penempatan Dan Magang</h4>
                        <p>Selama anda menjadi siswa kami, anda akan kami tempatkan untuk magang atapun bekerja.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Feature -->
<!-- About -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="<?php images('foto.jpg');?>" class="img-responsive"></img>
                
            </div>
            <div class="col-md-7">
                <h4>TENTANG LEMBAGA PELATIHAN PENERBANGAN PERAYA</h4>
                <p>Lembaga Pelatihan Penerbangan PERAYA merupakan lembaga pendidikan dan pelatihan profesi serta penerapan ilmu pengetahuan dan teknologi penerbangan dalam bidang Airline / Ground Staff.</p>
                <p><strong>PERAYA</strong> mempersiapkan para mahasiswa/i untuk  menjadi tenaga ahli baik secara administratif dan operasional sesuai dengan bidang Ground handling  yang merupakan staf maskapai penerbangan yang bertugas di darat.</p>
                <a href="" class="btn btn-primary btn-lg">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</div>
<!-- End About -->
<!-- News -->
<div class="news">
    <div class="container">
        <div class="news-title">
            <h2>Berita Terbaru</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
            sed diam nonummy nibh euismod tincidunt ut laoreet dolore
            magna aliquam erat volutpat. </p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="box-news">
                    <h4><a href="">Judul Artikel</a></h4>
                    <div class="box-meta">
                        <small><span class="text-muted">16 Februari 2016</span> / <span class="text-muted">Wiryo Saputra</span></small>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-news">
                    <h4><a href="">Judul Artikel</a></h4>
                    <div class="box-meta">
                        <small><span class="text-muted">16 Februari 2016</span> / <span class="text-muted">Wiryo Saputra</span></small>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-news">
                    <h4><a href="">Judul Artikel</a></h4>
                    <div class="box-meta">
                        <small><span class="text-muted">16 Februari 2016</span> / <span class="text-muted">Wiryo Saputra</span></small>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-news">
                    <h4><a href="">Judul Artikel</a></h4>
                    <div class="box-meta">
                        <small><span class="text-muted">16 Februari 2016</span> / <span class="text-muted">Wiryo Saputra</span></small>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-news">
                    <h4><a href="">Judul Artikel</a></h4>
                    <div class="box-meta">
                        <small><span class="text-muted">16 Februari 2016</span> / <span class="text-muted">Wiryo Saputra</span></small>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-news">
                    <h4><a href="">Judul Artikel</a></h4>
                    <div class="box-meta">
                        <small><span class="text-muted">16 Februari 2016</span> / <span class="text-muted">Wiryo Saputra</span></small>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-news">
                    <h4><a href="">Judul Artikel</a></h4>
                    <div class="box-meta">
                        <small><span class="text-muted">16 Februari 2016</span> / <span class="text-muted">Wiryo Saputra</span></small>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-news">
                    <h4><a href="">Judul Artikel</a></h4>
                    <div class="box-meta">
                        <small><span class="text-muted">16 Februari 2016</span> / <span class="text-muted">Wiryo Saputra</span></small>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <a href="" class="btn btn-primary btn-lg">Lihat Artikel Lainnya</a>
        </div>
    </div>
</div>
<!-- End News -->

    <?php wp_footer();?>
  </body>
</html>
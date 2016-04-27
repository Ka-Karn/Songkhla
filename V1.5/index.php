<?php
$title = "Hello First Page";

$content = <<<END

<div class="container">

    <div class="page-content">
      <div class="wrapper">
        <div class="container">
    <!-- Navigation -->

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- main slider carousel -->
    <div class="row">
        <div class="col-md-12" id="slider">

                <div class="col-md-12" id="carousel-bounding-box">
                    <div id="myCarousel" class="carousel slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item" data-slide-number="0">
                                <img src="img/2.png" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="1">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/3/3a/City_of_Songkhla.jpg"  width='1500' height='580' class="img-responsive" >
                            </div>
                            <div class="item" data-slide-number="2">
                                <img src="http://www.art-spire.com/wp-content/gallery/2014/Juillet_2014/15-07-14_Nattapon_Sritrairat/Nattapon_Sritrairat.jpg"  width='1300' height='580'class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="3">
                                <img src="https://backpackersflashpackers.files.wordpress.com/2013/12/img_0151.jpg"  width='1500' height='580' width='1300' height='580'class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="4">
                                <img src="https://backpackersflashpackers.files.wordpress.com/2013/12/img_0136.jpg" width='1300' height='580' class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="5">
                                <img src="http://36.media.tumblr.com/7031c36577236fa334c3af3b8eacd604/tumblr_mfq3etlF0l1r3npcuo1_1280.jpg" width='1300' height='580' class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="6">
                                <img src="http://d2f0ora2gkri0g.cloudfront.net/bkasia33659_2_150627songkhlamermaid-10.jpg" width='1300' height='580' class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="7">
                                <img src="http://f.ptcdn.info/270/016/000/1393768833-102-o.jpg"  width='1300' height='580'class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="8">
                            <img src="http://q-ak.bstatic.com/images/hotel/840x460/544/54409871.jpg"  width='1300' height='580'class="img-responsive">
                            </div>

                        <!-- main slider carousel nav controls --> <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>

                        <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!--/main slider carousel-->
    <!-- thumb navigation carousel -->
    <div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs">

            <!-- thumb navigation carousel items -->
            <center>
          <ul class="list-inline">
          <li> <a id="carousel-selector-0" class="selected">
            <img src="img/2.png"  width='95' height='75' class="img-responsive">
          </a></li>
          <li> <a id="carousel-selector-1">
            <img src="https://upload.wikimedia.org/wikipedia/commons/3/3a/City_of_Songkhla.jpg"  width='95' height='75'  class="img-responsive">
          </a></li>
          <li> <a id="carousel-selector-2">
            <img src="http://www.art-spire.com/wp-content/gallery/2014/Juillet_2014/15-07-14_Nattapon_Sritrairat/Nattapon_Sritrairat.jpg" width='95' height='75' class="img-responsive">
          </a></li>
          <li> <a id="carousel-selector-3">
            <img src="https://backpackersflashpackers.files.wordpress.com/2013/12/img_0151.jpg" width='95' height='75' class="img-responsive">
          </a></li>
                <li> <a id="carousel-selector-4">
            <img src="https://backpackersflashpackers.files.wordpress.com/2013/12/img_0136.jpg"  width='95' height='75'class="img-responsive">
          </a></li>
          <li> <a id="carousel-selector-5">
            <img src="http://36.media.tumblr.com/7031c36577236fa334c3af3b8eacd604/tumblr_mfq3etlF0l1r3npcuo1_1280.jpg" width='95' height='75' class="img-responsive">
          </a></li>
          <li> <a id="carousel-selector-6">
            <img src="http://d2f0ora2gkri0g.cloudfront.net/bkasia33659_2_150627songkhlamermaid-10.jpg" width='95' height='75' class="img-responsive">
          </a></li>
          <li> <a id="carousel-selector-7">
            <img src="http://f.ptcdn.info/270/016/000/1393768833-102-o.jpg"  width='95' height='75' class="img-responsive">
          </a></li>
          <li> <a id="carousel-selector-8">
            <img src="http://q-ak.bstatic.com/images/hotel/840x460/544/54409871.jpg"  width='95' height='75' class="img-responsive">
          </a></li>
            </ul>
          </center>

        </div>

      </body>
</div>

      </div>
    </div>

END;

include __DIR__ . '\_layouts\default.php';

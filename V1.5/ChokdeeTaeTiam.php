<?php
$title = "Hello First Page";

$content = <<<END

    <!-- Page Content -->
    <div class="container" >

            <div class="row">
            <div class="well">
              <div class="col-md-12">
                <font color="#111111"><h1 class="page-header"><center>โชคดีแต่เตี้ยม</center></h1></font>
                      <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">ร้านอาหาร</li>
                        <li class="active">อำเภอหาดใหญ่</li>
                        <li class="active">โชคดีแต่เตี้ยม</li>
                      </ol>
                <hr>
              </div>
                  <div class="row">
                      <div class="col-lg-9 col-sm-12">
                        <div class="well">
                          <center><img class="img-responsive" src="https://life.canon.co.th/image?f=maxxsumate@gmail_com_20150220&n=20150519161117_ori.jpeg&t=O"></center>
                          <br>
                          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

                          <hr>
                          <!-- Post Content -->

                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-12">


                        <!-- Blog Categories Well -->
                          <div class="well">
                            <font color="#111111"><h4>ที่ได้รับความนิยม</h4></font>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list-unstyled">
                                        <li><a href="NangNgamRoad.html">ถนนนางงาม</a></li>
                                        <li><a href="Hat-YaiYouthHostel.html">Hat Yai Youth Hostel</a></li>
                                        <li><a href="JackieChanNoodle.html">ก๋วยเตี๋ยวเรือเฉินหลง</a></li>
                                        <li><a href="ChokdeeTaeTiam.html">โชคดีแต่เตี้ยม</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">

                                </div>
                            </div>
                            <!-- /.row -->

                          </div>

                        <!-- Side Widget Well -->
                        <div class="well">
                            <font color="#111111"><h4>Side Widget Well</h4></font>
                            <iframe width="200" height="150" src="https://www.youtube.com/embed/41fDZQtQkRs?rel=0?autoplay=1" frameborder="0" allowfullscreen></iframe>
                        </div>
                        </div>
                      </div>
                  </div>
            </div>
            </div>
      </div>
        <!-- /.row -->

END;

include __DIR__ . '\_layouts\default.php';

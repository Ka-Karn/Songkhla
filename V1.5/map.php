<?php
$title = "Hello First Page";

$content = <<<END

    <!-- Page Content -->
    <div class="container" >

            <div class="row">
            <div class="well">
              <div class="col-md-12">
                <h1 class="page-header"><center>แผนที่</center></h1>
                      <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">แนะนำจังหวัด</li>
                        <li class="active">แผนที่</li>
                      </ol>
                <hr>
              </div>
                  <div class="row">
                      <div class="col-lg-9 col-sm-12">
                        <div class="well">

                        <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1013530.3113274787!2d100.01942148748942!3d7.114086986734526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304cd5dcaf092441%3A0x259b3778ec1d8e12!2z4Liq4LiH4LiC4Lil4Liy!5e0!3m2!1sth!2sth!4v1455651678363" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></center>

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

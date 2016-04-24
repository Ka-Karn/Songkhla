<?php
$title = "Hello First Page";

$content = <<<END

    <!-- Page Content -->
    <div class="container" >

            <div class="row">
            <div class="well">
              <div class="col-md-12">
                <font color="#111111"><h1 class="page-header"><center>ปางไม้ รีสอร์ท</center></h1></font>
                      <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">ที่พัก</li>
                        <li class="active">อำเภอหาดใหญ่</li>
                        <li class="active">ปางไม้ รีสอร์ท</li>
                      </ol>
                <hr>
              </div>
                  <div class="row">
                      <div class="col-lg-9 col-sm-12">
                        <div class="well">
                          <!-- Post Content -->
                          <font color="#111111">รูป/บทความ</font>
                          <hr>
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


        <hr>
END;

include __DIR__ . '\_layouts\default.php';

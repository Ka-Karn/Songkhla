<?php
$title = "Hello First Page";

$content = <<<END

    <!-- Page Content -->
    <div class="container" >

            <div class="row">
            <div class="well">
              <div class="col-md-12">
                <font color="#111111"><h1 class="page-header"><center>อำเภอในสงขลา</center></h1></font>1
                      <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">แนะนำจังหวัด</li>
                        <li class="active">อำเภอในสงขลา</li>
                      </ol>
                <hr>
              </div>
                  <div class="row">
                      <div class="col-lg-9 col-sm-12">
                        <div class="well">
                          <table width="150%" >
                            <tr>
                              <td>
                                    <font color="#111111"><p>1.อำเภอเมืองสงขลา</p>
                                    <p>2.อำเภอสทิงพระ</p>
                                    <p>3.อำเภอจะนะ</p>
                                    <p>4.อำเภอนาทวี</p>
                                    <p>5.อำเภอเทพา</p>
                                    <p>6.อำเภอสะบ้าย้อย</p>
                                    <p>7.อำเภอระโนด</p>
                                    <p>8.อำเภอกระแสสินธุ์</p>
                                    <p>9.อำเภอรัตภูมิ</p>
                                    <p>10.อำเภอสะเดา</p>
                                    <p>11.อำเภอหาดใหญ่</p>
                                    <p>12.อำเภอนาหม่อม</p>
                                    <p>13.อำเภอควนเนียง</p>
                                    <p>14.อำเภอบางกล่ำ</p>
                                    <p>15.อำเภอสิงหนคร</p>
                                    <p>16.อำเภอคลองหอยโข่ง</p></font>
                              </td>
                              <td><right><img class="img-responsive" src="http://www.songkhla.go.th/themes/default/images/sub/songkhlasub_03.png"></right></td>
                          </table>




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

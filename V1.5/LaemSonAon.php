<?php
$title = "Hello First Page";

$content = <<<END

    <!-- Page Content -->
    <div class="container" >

            <div class="row">
            <div class="well">
              <div class="col-md-12">
                <font color="#111111"><h1 class="page-header"><center>แหลมสนอ่อน</center></h1></font>
                      <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">สถานที่ท่องเที่ยว</li>
                        <li class="active">อำเภอสงขลา</li>
                        <li class="active">แหลมสนอ่อน</li>
                      </ol>
                <hr>
              </div>
                  <div class="row">
                      <div class="col-lg-9 col-sm-12">
                        <div class="well">
                          <!-- Post Content -->
                          <font color="#111111"><center><h4>แหลมสนอ่อน</h4></center></font>
                          <center><img class="img-responsive" src="http://info.dla.go.th/download/attach/20150428/E71E1915-F369-B9C0-6293-08CE007B6CED_%BB%C3%D0%B5%D4%C1%D2%A1%C3%C3%C1%BE%AD%D2%B9%D2%A4.png" alt=""></center>

                          <hr>
                          <font color="#111111">แหลมสนอ่อน ติดกับแหลมสมิหลา ไปทางตะวันตกเฉียงเหนือด้านทิศตะวันตกของแหลมสนอ่อน เป็นทะเลสาบสงขลา
                            บริเวณรอบๆ แหลมสนอ่อนมีถนน สามารถชมทิวทัศน์ได้ทั้งทะเลหลวงและทะเลสาบ นอกจากนี้ยังมีสวนสนซึ่งเหมาะแก่การพักผ่อนและนั่งพักรับประทานอาหาร<br><br>

                          อยู่บริเวณแหลมสมิหลา ร่มรื่นไปด้วยทิวสนทะเล บริเวณปลายแหลมเป็นที่ประดิษฐานอนุสาวรีย์กรมหลวงชุมพรเขตรอุดมศักดิ์
                          ซึ่งก่อตั้งโดยกลุ่มไทยอาสาป้องกันชาติในทะเล จังหวัดสงขลา ได้แก่ ผู้ประกอบอาชีพอันเกี่ยวเนื่องกับการปกครอง ร่วมกับกองทัพเรือ สร้างเมื่อปี พ.ศ.2530
                          เพื่อให้ชาวเรือได้สักการะบูชาก่อนออกไปประกอบอาชีพในทะเล บริเวณแหลมสนอ่อนมีประติมากรรมพญานาคพ่นน้ำ ซึ่งนักท่องเที่ยวนิยมมาถ่ายรูปเป็นที่ระลึก
                          ประติมากรรมพญานาคนี้แบ่งออกเป็นสามส่วนตั้งอยู่สถานที่ต่างกัน ส่วนหัวอยู่ที่แหลมสนอ่อน ส่วนลำตัวหรือสะดือพญานาคอยู่ที่แหลมสมิหลา ส่วนหางอยู่ที่ถนนชลาทัศน์-หาดสมิหลา
                          จากแหลมสนอ่อนสามารถชมทัศนียภาพอันสวยงามของทะเลสาบสงขลา และมองเห็นเกาะหนูได้ใกล้และชัดที่สุด รอบ ๆ บริเวณมีที่นั่งพักผ่อนยามเย็นสำหรับประชาชน
                          <br><br>
                          -ข้อมูล <br>
                                    แหลมสนอ่อน ติดกับแหลมสมิหลา ไปทางตะวันตกเฉียงเหนือด้านทิศตะวันตกของแหลมสนอ่อน เป็นทะเลสาบสงขลา บริเวณรอบๆ แหลมสนอ่อนมีถนน
                                     สามารถชมทิวทัศน์ได้ทั้งทะเลหลวงและทะเลสาบ <br>
                                     -ที่อยู่ บริเวณแหลมสมิหลา อำเภอเมือง จังหวัดสงขลา <br><br>
                        </font>

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

END;

include __DIR__ . '/layouts/frontpage.php';


<div class="col-md-10">
  <div class="row">

  </div>
  <div class="card border-primary mb-3" style="max-width: 100%;">
    <div class="card-header bg-info text-white"><h4> <b><?php echo $antiques_one[0]['antiques_title'] ?></b> </h4> </div>
    <div class="card-body text-default">

      <p><b>เลขประจำวัตถุ</b> : <?php echo $antiques_one[0]['antiques_code'] ?></p>
      <p><b>ชื่อวัตถุ</b> : <?php echo $antiques_one[0]['antiques_title'] ?></p>
      <p><b>ลักษณะของวัตถุ</b> : <?php echo $antiques_one[0]['antiques_detail'] ?></p>
      <p><b>แบบสมัย</b> : <?php echo $antiques_one[0]['antiques_type'] ?></p>
      <p><b>วัสดุ</b> : <?php echo $antiques_one[0]['antiques_material'] ?></p>
      <p><b>ขนาด(เซนติเมตร)</b> : <?php echo $antiques_one[0]['antiques_size'] ?></p>
      <p><b>สภาพ</b> : <?php echo $antiques_one[0]['antiques_quality'] ?></p>
      <p><b>ประวัติที่มา</b> : <?php echo $antiques_one[0]['antiques_source_history'] ?></p>
      <p><b>ที่เก็บ</b> : <?php echo $antiques_one[0]['antiques_store_name'] ?></p>
      <p><b>หมายเหตุ</b> : <?php echo $antiques_one[0]['antiques_note'] ?></p>
      <p><b>วันที่บันทึก</b> : <?php echo $antiques_one[0]['antiques_date'] ?></p>
      <p><b>บันทึกโดย</b> : <?php echo $antiques_one[0]['staff_fullname'] ?></p>

    </div>
  </div>

  <?php foreach ($mediatypeall as $mtakey => $mtavalue): ?>
    <div class="card border-primary mb-3" style="max-width: 100%;">
      <div class="card-header bg-info text-white"><h4> <b><?php echo $mtavalue['media_type_name'] ?></b> </h4> </div>
      <div class="card-body text-default">

        <?php if ($mtavalue['media_type_id']==1||$mtavalue['media_type_id']==2): ?>

          <div class="row el-element-overlay">
            <?php foreach ($medialist as $key => $value): ?>
              <?php if ($value['media_type_id']==$mtavalue['media_type_id']): ?>
                <div class="col-lg-4 col-md-6">
                  <div class="card">
                    <div class="el-card-item">
                      <div class="el-card-avatar el-overlay-1">
                        <?php if ($value['media_type_id']==1): ?>
                          <img src="<?php echo base_url('assets/uploads/'.$value['media_type_folder'].'/'.$value['media_link']);  ?>" width="100%" />
                        <?php elseif ($value['media_type_id']==2): ?>
                          <img src="<?php echo base_url('assets/images/viewer_600x400.png');  ?>" width="100%" />
                        <?php endif; ?>
                        <div class="el-overlay">
                          <ul class="list-style-none el-info">
                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url('assets/uploads/'.$value['media_type_folder'].'/'.$value['media_link']);  ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
                            <!-- <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url('Home/mediaEdit/'.$value['media_id']);  ?>"><i class="fas fa-edit"></i></a></li> -->
                            <!-- <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url('Media/mediaDelete/'.$value['antiques_id'].'/'.$value['media_id']);  ?>"><i class="fas fa-trash-alt"></i></a></li> -->
                            <!-- <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li> -->
                          </ul>
                        </div>
                      </div>
                      <div class="el-card-content">
                        <h4 class="m-b-0"><?php echo $value['media_detail'] ?></h4> <span class="text-muted"><?php echo $value['media_name'] ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php endforeach; ?>

            <?php if (empty($medialist)): ?>
              <h6 class="card-title">ไม่พบสื่อ<?php echo $mtavalue['media_type_name'] ?></h6>
            <?php endif; ?>

          </div>

        <?php elseif ($mtavalue['media_type_id']==3||$mtavalue['media_type_id']==4): ?>

          <div class="row">


            <?php foreach ($medialist as $key => $value): ?>
              <?php if ($value['media_type_id']==$mtavalue['media_type_id']): ?>
                <div class="col-lg-4 col-md-6">
                  <div class="card">
                    <div class="el-card-item">
                      <div class="el-card-avatar el-overlay-1">
                        <?php if ($value['media_type_id']==3): ?>
                          <video width="100%" controls>
                            <source src="<?php echo base_url('assets/uploads/'.$value['media_type_folder'].'/'.$value['media_link']);  ?>" type="video/ogg">
                              <source src="<?php echo base_url('assets/uploads/'.$value['media_type_folder'].'/'.$value['media_link']);  ?>" type="video/mp4">
                                Your browser does not support the video tag.
                              </video>
                              <!-- <a href="<?php echo base_url('Home/mediaEdit/'.$value['media_id']); ?>" class="btn btn-default">แก้ไข</a> -->
                              <!-- <a class="btn btn-danger" href="JavaScript:if(confirm('ยืนยันการลบ?') == true){window.location='<?php echo site_url('Media/mediaDelete/'.$value['antiques_id'].'/'.$value['media_id']); ?>';}">ลบ</a> -->
                            <?php elseif ($value['media_type_id']==4): ?>
                              <audio controls>
                                <source src="<?php echo base_url('assets/uploads/'.$value['media_type_folder'].'/'.$value['media_link']);  ?>" type="audio/ogg">
                                  <source src="<?php echo base_url('assets/uploads/'.$value['media_type_folder'].'/'.$value['media_link']);  ?>" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                  </audio>
                                  <br>
                                  <!-- <a href="<?php echo base_url('Home/mediaEdit/'.$value['media_id']); ?>" class="btn btn-default">แก้ไข</a> -->
                                  <!-- <a class="btn btn-danger" href="JavaScript:if(confirm('ยืนยันการลบ?') == true){window.location='<?php echo site_url('Media/mediaDelete/'.$value['antiques_id'].'/'.$value['media_id']); ?>';}">ลบ</a> -->

                                <?php endif; ?>
                              </div>
                              <div class="el-card-content">
                                <h4 class="m-b-0"><?php echo $value['media_detail'] ?></h4> <span class="text-muted"><?php echo $value['media_name'] ?></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php endif; ?>


                    <?php endforeach; ?>
                  </div>
                  <?php if (empty($medialist)): ?>
                    <h6 class="card-title">ไม่พบสื่อ<?php echo $mtavalue['media_type_name'] ?></h6>
                  <?php endif; ?>
                <?php endif; ?>

      </div>
    </div>
  <?php endforeach; ?>

</div>

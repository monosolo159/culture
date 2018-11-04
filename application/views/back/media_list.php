<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">รายการสื่อ</h4>
      <div class="form-group row">
        <!-- <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label> -->
        <!-- <div class="col-sm-9">
        <input type="text" class="form-control" id="fname" placeholder="First Name Here">
      </div> -->
    </div>
    <div class="ml-auto text-right">
      <!-- <?php echo form_open('Home/media'); ?> -->
      <div class="row">
        <!-- <div class="col-sm-4">
        <input type="text" name="search" class="form-control" placeholder="คำค้น">
      </div>
      <div class="col-sm-3">
      <select name="media_type_id" class="select2 form-control" style="width: 100%; height:36px;" required>
      <option value="">เลือก</option>
      <?php foreach ($mediatypeall as $key => $value): ?>
      <option value="<?php echo $value['media_type_id'] ?>"><?php echo $value['media_type_name'] ?></option>
    <?php endforeach; ?>
  </select>
</div>
<div class="col-sm-2">
<input type="submit" value="ค้นหา" class="btn btn-info btn-md">
</div> -->
<!-- <?php echo form_close(); ?> -->
<div class="col-sm-3">
  <a href="<?php echo site_url('Home/mediaInsert/'.$this->uri->segment(3)); ?>" class="btn btn-success btn-md">เพิ่ม</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="d-md-flex align-items-center">
            <div>
              <!-- <h4 class="card-title">Site Analysis</h4> -->
              <!-- <h5 class="card-subtitle">Overview of Latest Month</h5> -->
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">




              <?php foreach ($mediatypeall as $tkey => $tvalue): ?>
                <hr>
                <h4><b><?php echo $tvalue['media_type_name'] ?></b></h4>

                <hr>

                <?php if ($tvalue['media_type_id']==1||$tvalue['media_type_id']==2): ?>
                  <div class="row el-element-overlay">
                    <?php foreach ($medialist as $key => $value): ?>
                      <?php if ($value['media_type_id']==$tvalue['media_type_id']): ?>
                        <div class="col-lg-4 col-md-6">
                          <div class="card">
                            <div class="el-card-item">
                              <div class="el-card-avatar el-overlay-1">
                                <?php if ($value['media_type_id']==1): ?>
                                  <img src="<?php echo base_url('assets/uploads/'.$value['media_type_folder'].'/'.$value['media_link']);  ?>" />
                                <?php elseif ($value['media_type_id']==2): ?>
                                  <img src="<?php echo base_url('assets/images/viewer_600x400.png');  ?>" />
                                <?php endif; ?>
                                <div class="el-overlay">
                                  <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url('assets/uploads/'.$value['media_type_folder'].'/'.$value['media_link']);  ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url('Home/mediaEdit/'.$value['media_id']);  ?>"><i class="fas fa-edit"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url('Media/mediaDelete/'.$value['antiques_id'].'/'.$value['media_id']);  ?>"><i class="fas fa-trash-alt"></i></a></li>
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
                      <h6 class="card-title">ไม่พบสื่อ<?php echo $tvalue['media_type_name'] ?></h6>
                    <?php endif; ?>
                  </div>


                <?php elseif ($tvalue['media_type_id']==3||$tvalue['media_type_id']==4): ?>
                  <div class="row">
                    <?php foreach ($medialist as $key => $value): ?>
                      <?php if ($value['media_type_id']==$tvalue['media_type_id']): ?>
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
                                      <a href="<?php echo base_url('Home/mediaEdit/'.$value['media_id']); ?>" class="btn btn-default">แก้ไข</a>
                                      <a class="btn btn-danger" href="JavaScript:if(confirm('ยืนยันการลบ?') == true){window.location='<?php echo site_url('Media/mediaDelete/'.$value['antiques_id'].'/'.$value['media_id']); ?>';}">ลบ</a>
                                    <?php elseif ($value['media_type_id']==4): ?>
                                      <audio controls>
                                        <source src="<?php echo base_url('assets/uploads/'.$value['media_type_folder'].'/'.$value['media_link']);  ?>" type="audio/ogg">
                                          <source src="<?php echo base_url('assets/uploads/'.$value['media_type_folder'].'/'.$value['media_link']);  ?>" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                          </audio>
                                          <br>
                                          <a href="<?php echo base_url('Home/mediaEdit/'.$value['media_id']); ?>" class="btn btn-default">แก้ไข</a>
                                          <a class="btn btn-danger" href="JavaScript:if(confirm('ยืนยันการลบ?') == true){window.location='<?php echo site_url('Media/mediaDelete/'.$value['antiques_id'].'/'.$value['media_id']); ?>';}">ลบ</a>

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
                            <h6 class="card-title">ไม่พบสื่อ<?php echo $tvalue['media_type_name'] ?></h6>
                          <?php endif; ?>
                        <?php endif; ?>

                      <?php endforeach; ?>


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

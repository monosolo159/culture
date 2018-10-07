
        <div class="col-md-10">
          <div class="card border-primary mb-3" style="max-width: 100%;">
            <div class="card-header">สื่อของฉัน</div>
            <div class="card-body text-primary ">

              <div class="row">
                <div class="col-lg-12">
                  <?php if ($this->uri->segment(3)==1||$this->uri->segment(3)==2||$mediatype[0]['media_type_id']==1||$mediatype[0]['media_type_id']==2): ?>
                    <div class="row el-element-overlay">
                      <?php foreach ($medialist as $key => $value): ?>
                        <div class="col-lg-3 col-md-6">
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
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url('Front/mediaEdit/'.$value['media_id']);  ?>"><i class="fas fa-edit"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url('Media/mediaDeleteMember/'.$value['media_type_id'].'/'.$value['media_id']);  ?>"><i class="fas fa-trash-alt"></i></a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="el-card-content">
                                <h4 class="m-b-0"><?php echo $value['media_detail'] ?></h4> <span class="text-muted"><?php echo $value['media_name'] ?></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php endforeach; ?>
                      <?php if (empty($medialist)): ?>
                        <h4 class="card-title">ไม่พบสื่อ<?php echo $mediatype[0]['media_type_name'] ?></h4>
                      <?php endif; ?>
                    </div>


                  <?php elseif ($this->uri->segment(3)==3||$this->uri->segment(3)==4||$mediatype[0]['media_type_id']==3||$mediatype[0]['media_type_id']==4): ?>
                    <div class="row">
                    <?php foreach ($medialist as $key => $value): ?>
                      <div class="col-lg-3 col-md-6">
                        <div class="card">
                          <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1">
                              <?php if ($value['media_type_id']==3): ?>
                                <video width="100%" controls>
                                  <source src="<?php echo base_url('assets/uploads/'.$value['media_type_folder'].'/'.$value['media_link']);  ?>" type="video/ogg">
                                  <source src="<?php echo base_url('assets/uploads/'.$value['media_type_folder'].'/'.$value['media_link']);  ?>" type="video/mp4">
                                      Your browser does not support the video tag.
                                    </video>
                                    <a href="<?php echo base_url('Front/mediaEdit/'.$value['media_id']); ?>" class="btn btn-default">แก้ไข</a>
                                    <a class="btn btn-danger" href="JavaScript:if(confirm('ยืนยันการลบ?') == true){window.location='<?php echo site_url('Media/mediaDeleteMember/'.$value['media_type_id'].'/'.$value['media_id']); ?>';}">ลบ</a>
                                  <?php elseif ($value['media_type_id']==4): ?>
                                    <audio controls>
                                      <source src="<?php echo base_url('assets/uploads/'.$value['media_type_folder'].'/'.$value['media_link']);  ?>" type="audio/ogg">
                                        <source src="<?php echo base_url('assets/uploads/'.$value['media_type_folder'].'/'.$value['media_link']);  ?>" type="audio/mpeg">
                                          Your browser does not support the audio element.
                                        </audio>
                                        <a href="<?php echo base_url('Front/mediaEdit/'.$value['media_id']); ?>" class="btn btn-default">แก้ไข</a>
                                        <a class="btn btn-danger" href="JavaScript:if(confirm('ยืนยันการลบ?') == true){window.location='<?php echo site_url('Media/mediaDeleteMember/'.$value['media_type_id'].'/'.$value['media_id']); ?>';}">ลบ</a>
                                      <?php endif; ?>
                                    </div>
                                    <div class="el-card-content">
                                      <h4 class="m-b-0"><?php echo $value['media_detail'] ?></h4> <span class="text-muted"><?php echo $value['media_name'] ?></span>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            <?php endforeach; ?>
                            </div>
                            <?php if (empty($medialist)): ?>
                              <h4 class="card-title">ไม่พบสื่อ<?php echo $mediatype[0]['media_type_name'] ?></h4>
                            <?php endif; ?>
                          <?php endif; ?>


                        </div>
                      </div>

            </div>
          </div>
        </div>

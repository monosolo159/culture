
        <div class="col-md-10">
          <div class="card border-primary mb-3" style="max-width: 100%;">
            <div class="card-header">ข่าวสาร</div>
            <div class="card-body text-primary ">

              <div class="row">
                <div class="col-lg-12">

                    <div class="row el-element-overlay">
                      <?php foreach ($newslist as $key => $value): ?>
                        <div class="col-lg-3 col-md-6">
                          <div class="card">
                            <div class="el-card-item">
                              <div class="el-card-avatar el-overlay-1">
                                  <img src="<?php echo base_url('assets/images/news/'.$value['news_pic_cover']); ?>" />
                                <div class="el-overlay">
                                  <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo site_url('Front/news_detail/'.$value['news_id']); ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="el-card-content">
                                <h4 class="m-b-0"><?php echo $value['news_title'] ?></h4>
                                <!-- <span class="text-muted"><?php echo $value['news_detail'] ?></span> -->

                              </div>
                            </div>
                          </div>
                        </div>
                      <?php endforeach; ?>
                      <?php if (empty($newslist)): ?>
                        <h4 class="card-title">ไม่พบข่าวสาร</h4>
                      <?php endif; ?>
                    </div>


                        </div>
                      </div>

            </div>
          </div>
        </div>

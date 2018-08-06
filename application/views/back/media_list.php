<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title"><?php echo $mediatype[0]['media_type_name'] ?></h4>
      <div class="ml-auto text-right">
        <a href="<?php echo site_url('Home/mediaInsert/'); ?>" class="btn btn-success btn-md">เพิ่ม</a>

        <!-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Library</li>
      </ol>
    </nav> -->
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
              <div class="row el-element-overlay">

                <?php foreach ($medialist as $key => $value): ?>
                  <div class="col-lg-3 col-md-6">
                    <div class="card">
                      <div class="el-card-item">
                        <?php if ($value['media_type_id']==1): ?>
                          <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url('assets/uploads/'.$value['media_type_folder'].'/'.$value['media_link']);  ?>" />
                        <?php elseif ($value['media_type_id']==2): ?>
                          <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url('assets/images/viewer_600x400.png');  ?>" />
                        <?php elseif ($value['media_type_id']==3): ?>

                        <?php elseif ($value['media_type_id']==4): ?>
                            <a href="<?php echo base_url('#');  ?>" target="_blank"><i class="fas fa-play"></i></a>
                        <?php endif; ?>

                          <div class="el-overlay">
                            <ul class="list-style-none el-info">
                              <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url('assets/uploads/'.$value['media_type_folder'].'/'.$value['media_link']);  ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
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
                <?php endforeach; ?>

                <?php if (empty($medialist)): ?>
                  <h4 class="card-title">ไม่พบสื่อ<?php echo $mediatype[0]['media_type_name'] ?></h4>
                <?php endif; ?>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

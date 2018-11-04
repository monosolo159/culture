
        <div class="col-md-10">
          <?php foreach ($antiques_list as $key => $value): ?>
          <div class="card border-primary mb-3" style="max-width: 100%;">
            <div class="card-header bg-info text-white "><h4><?php echo $value['antiques_title'] ?></h4></div>
            <div class="card-body text-default ">
              <div class="row">
                <div class="col-lg-12">
                  <?php echo $value['antiques_detail'] ?><a class="btn btn-sm btn-success" href="<?php echo base_url('Front/antiques_detail/'.$value['antiques_id']); ?>">อ่านต่อ</a>
                </div>

              </div>
              <hr>
              <div class="row">
                <div class="col-lg-8">
                  โพสต์เมื่อ : <?php echo $value['antiques_date'] ?>
                </div>
                <div class="col-lg-4" style="text-align:right">
                  โพสต์โดย : <?php echo $value['staff_fullname'] ?>
                </div>
              </div>

            </div>
          </div>
          <?php endforeach; ?>
        </div>

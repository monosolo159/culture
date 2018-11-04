
        <div class="col-md-2">
          <div class="list-group" style="margin-bottom:7%">
            <?php $menu = $this->Mediamodel->mediatype(); ?>
            <!-- <a href="<?php echo base_url('Front/antiques'); ?>" class="list-group-item list-group-item-action <?php if($this->uri->segment(2)=='antiques'){ echo 'active'; } ?>">หน้าแรก</a> -->
            <a href="<?php echo base_url('Front/antiques'); ?>" class="list-group-item list-group-item-action <?php if($this->uri->segment(2)=='antiques'){ echo 'active'; } ?>">โบราณวัตถุและศิลปวัตถุ</a>

            <!-- <?php foreach ($menu as $key => $value): ?>
            <a href="<?php echo base_url('Front/media/'.$value['media_type_id']); ?>" class="list-group-item list-group-item-action <?php if($value['media_type_id']==$this->uri->segment(3)){ echo 'active'; } ?>"><?php echo $value['media_type_name'] ?></a>
            <?php endforeach; ?> -->
            <a href="<?php echo base_url('Front/about'); ?>" class="list-group-item list-group-item-action <?php if($this->uri->segment(2)=='about'){ echo 'active'; } ?>">เกี่ยวกับเรา</a>
            <a href="<?php echo base_url('Front/contact'); ?>" class="list-group-item list-group-item-action <?php if($this->uri->segment(2)=='contact'){ echo 'active'; } ?>">ติดต่อเรา</a>


          </div>
        </div>

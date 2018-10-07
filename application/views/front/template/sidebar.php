
        <div class="col-md-2">
          <div class="list-group" style="margin-bottom:7%">
            <?php $menu = $this->Mediamodel->mediatype(); ?>
            
            <?php foreach ($menu as $key => $value): ?>
            <a href="<?php echo base_url('Front/media/'.$value['media_type_id']); ?>" class="list-group-item list-group-item-action <?php if($value['media_type_id']==$this->uri->segment(3)){ echo 'active'; } ?>"><?php echo $value['media_type_name'] ?></a>
            <?php endforeach; ?>
          </div>
        </div>

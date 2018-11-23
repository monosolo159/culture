<aside class="left-sidebar" data-sidebarbg="skin5">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30">
        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('Home/admin'); ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">ภาพรวม</span></a></li> -->
        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('Home/user'); ?>" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">ผู้ใช้</span></a></li> -->
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('Home/news'); ?>" aria-expanded="false"><i class="mdi mdi-newspaper"></i><span class="hide-menu">ข่าวสาร</span></a></li>

        <?php if ($_SESSION['STAFF_TYPE']==1): ?>
          <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">ผู้ใช้</span></a>
            <?php $usermenu = $this->Staffmodel->usertype(); ?>
            <ul aria-expanded="false" class="collapse  first-level">
              <?php foreach ($usermenu as $key => $value): ?>
                <li class="sidebar-item"><a href="<?php echo site_url('Home/user/'.$value['staff_type_id']); ?>" class="sidebar-link"><i class="mdi mdi-account-key"></i><span class="hide-menu"><?php echo $value['staff_type_name'] ?></span></a></li>
              <?php endforeach; ?>
            </ul>
          </li>
        <?php endif; ?>

        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('Home/antiques'); ?>" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">โบราณวัตถุและศิลปวัตถุ</span></a></li> -->

        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">โบราณวัตถุและศิลปวัตถุ</span></a>
          <ul aria-expanded="false" class="collapse  first-level">
            <li class="sidebar-item"><a href="<?php echo site_url('Home/antiques/'); ?>" class="sidebar-link"><i class="mdi mdi-file"></i><span class="hide-menu">รายการ</span></a></li>
            <li class="sidebar-item"><a href="<?php echo site_url('Home/antiques_store/'); ?>" class="sidebar-link"><i class="mdi mdi-file"></i><span class="hide-menu">ที่เก็บ</span></a></li>

          </ul>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url('Home/contact'); ?>" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">ข้อความ</span></a></li>


        <!-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">สื่อ</span></a>
        <?php $mediamenu = $this->Mediamodel->mediatype(); ?>
        <ul aria-expanded="false" class="collapse  first-level">
        <?php foreach ($mediamenu as $key => $value): ?>
        <li class="sidebar-item"><a href="<?php echo site_url('Home/media/'.$value['media_type_id']); ?>" class="sidebar-link"><i class="mdi mdi-file"></i><span class="hide-menu"><?php echo $value['media_type_name'] ?></span></a></li>
      <?php endforeach; ?>
    </ul>
  </li> -->

</ul>
</nav>
<!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
</aside>
<div class="page-wrapper">

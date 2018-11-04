<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="<?php echo base_url() ?>assets/libs/flot/css/float-chart.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="<?php echo base_url() ?>assets/extra-libs/multicheck/multicheck.css" rel="stylesheet" type="text/css" >

  <link href="<?php echo base_url() ?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/dist/css/style.min.css" rel="stylesheet">

  <link href="<?php echo base_url() ?>assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
  <title>สถาบันภาษา ศิลปะและวัฒนธรรม มหาวิทยาลัยราชภัฏสกลนคร</title>
</head>
<body style="background-image: url('<?php echo base_url(); ?>assets/images/culture_bg.png');background-repeat: no-repeat;background-position: center;background-size: cover;background-attachment: fixed;">
<!-- <body style="background-image: url('assets/images/culture_bg.png');background-repeat: no-repeat;background-position: center;background-size: cover;background-attachment: fixed;"> -->


  <div class="row">
    <div class="offset-1 col-md-10" style="background: rgba(0, 0, 0, 0.5);border-radius: 10px;">
      <div class="row">
        <div class="col-md-12" style="padding-top:1%">
          <div class="card border-primary mb-3" style="max-width: 100%;">
            <img src="<?php echo base_url() ?>assets/images/culture_logo.png" alt="สถาบันภาษา ศิลปะและวัฒนธรรม มหาวิทยาลัยราชภัฏสกลนคร" width="100%" style="border-radius: 2px;">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12" style="padding-top:1%">
          <div class="card border-primary mb-3" style="max-width: 100%;">

            <div class="row">
              <div class="col-md-6">
                <?php $menu = $this->Mediamodel->mediatype(); ?>
                <form action="<?php echo base_url() ?>Front/antiques" method="post">
                <!-- <?php echo form_open('Front/media') ?> -->
                  <div class="row">
                    <!-- <div class="col-md-6" style="padding-top:1%;padding-left:3% ">
                      <select name="media_type_id" class="select2 form-control" style="width: 100%; height:36px;">
                          <option value="">เลือก</option>
                          <?php foreach ($menu as $key => $value): ?>
                            <option value="<?php echo $value['media_type_id'] ?>"><?php echo $value['media_type_name'] ?></option>
                          <?php endforeach; ?>
                      </select>
                    </div> -->
                    <div class="col-md-8">
                      <div class="input-group mb-3" style="padding-top:2%;padding-left:2% ">
                        <input type="text" name="search" class="form-control" placeholder="คำค้น" aria-label="คำค้น" aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="submit" id="button-addon2">ค้นหา</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- <?php form_close() ?> -->
              </form>
              </div>
              <div class="col-md-6">

                <?php if (empty($_SESSION['MEMBER_ID'])): ?>
                  <?php echo form_open('Staff/member_login'); ?>
                  <div class="row" style="padding-top:1%;padding-left:1% ">

                    <div class="col-md-5">
                      <input type="text" class="form-control" name="staff_username" placeholder="Username">
                    </div>
                    <div class="col-md-5">
                      <input type="password" class="form-control" name="staff_password" placeholder="Password">
                    </div>
                    <div class="col-md-2">
                      <input type="submit" value="เข้าสู่ระบบ" class="btn btn-default">
                    </div>

                  </div>
                  <?php form_close(); ?>
                <?php else: ?>
                  <div class="row" style="padding-top:1%;padding-left:1%;padding-right:1% ">

                    <div class="col-md-12">

                      <div class="float-right"><a href="<?php echo base_url('Staff/memberLogout') ?>"  class="btn btn-danger">ออกจากระบบ</a></div>
                      <div class="float-right"><a href="<?php echo base_url('Front/profilePassword/'.$_SESSION['MEMBER_ID']) ?>"  class="btn btn-warning"> รหัสผ่าน </a> |&nbsp</div>
                      <div class="float-right"><a href="<?php echo base_url('Front/profileEdit/'.$_SESSION['MEMBER_ID']) ?>"  class="btn btn-info"> ข้อมูลส่วนตัว </a> |&nbsp</div>
                      <!-- <div class="float-right"><a href="<?php echo base_url('Front/myMedia/'.$_SESSION['MEMBER_ID']) ?>"  class="btn btn-info"> สื่อของฉัน </a> |&nbsp</div> -->
                      <div class="btn-group float-right">
                          <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">สื่อของฉัน</button> -->
                           <!-- &nbsp|&nbsp -->
                          <div class="dropdown-menu">
                            <?php foreach ($menu as $key => $value): ?>
                              <a class="dropdown-item" href="<?php echo base_url('Front/myMedia/'.$value['media_type_id']) ?>"><?php echo $value['media_type_name'] ?></a>
                            <?php endforeach; ?>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item btn" href="<?php echo site_url('Front/mediaInsert/'); ?>">เพิ่มสื่อ</a>
                          </div>
                      </div>
                      <div class="float-right"><a href=""  class="btn btn-default"> <?php echo $_SESSION['MEMBER_NAME'] ?> </a> |&nbsp</div>

                    </div>

                  </div>

                <?php endif; ?>


              </div>
            </div>

          </div>
        </div>
      </div>
        <div class="row">

<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">รายการโบราณวัตถุและศิลปวัตถุ</h4>
      <div class="ml-auto text-right">
        <a href="<?php echo site_url('Home/antiques_insert/'); ?>" class="btn btn-success btn-md">เพิ่มโบราณวัตถุและศิลปวัตถุ</a>
        <!-- <a href="<?php echo site_url('Home/antiques_insert/'); ?>" class="btn btn-info btn-md">เพิ่มที่เก็บ</a> -->


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
              <div class="card">
                <div class="card-body">
                  <!-- <h5 class="card-title"><?php echo $value['staff_type_name'] ?></h5> -->
                  <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>เลขประจำวัตถุ</th>
                          <th>ชื่อวัตถุ</th>
                          <!-- <th>ลักษณะของวัตถุ</th> -->
                          <th>แบบสมัย</th>
                          <th>วัสดุ</th>
                          <th>ขนาด(เซนติเมตร)</th>
                          <th>สภาพ</th>
                          <th>ประวัติที่มา</th>
                          <th>ที่เก็บ</th>
                          <th>หมายเหตุ</th>
                          <th>วันที่บันทึก</th>
                          <th>บันทึกโดย</th>
                          <th>จัดการ</th>
                          <!-- <th>Salary</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($antiques_list as $key => $value): ?>
                          <tr>
                            <td><?php echo $key+1 ?></td>
                            <td><?php echo $value['antiques_code'] ?></td>
                            <td><?php echo $value['antiques_title'] ?></td>
                            <!-- <td><?php echo $value['antiques_detail'] ?></td> -->
                            <td><?php echo $value['antiques_type'] ?></td>
                            <td><?php echo $value['antiques_material'] ?></td>
                            <td><?php echo $value['antiques_size'] ?></td>
                            <td><?php echo $value['antiques_quality'] ?></td>
                            <td><?php echo $value['antiques_source_history'] ?></td>
                            <td><?php echo $value['antiques_store_name'] ?></td>
                            <td><?php echo $value['antiques_note'] ?></td>
                            <td><?php echo $value['antiques_date'] ?></td>
                            <td><?php echo $value['staff_fullname'] ?></td>
                            <td>
                              <!-- <button type="button" class="btn btn-warning btn-sm">แก้ไข</button> -->
                              <a href="<?php echo site_url('Home/media/'.$value['antiques_id']); ?>" class="btn btn-success btn-sm">รายการสื่อ</a>
                              <a href="<?php echo site_url('Home/antiques_edit/'.$value['antiques_id']); ?>" class="btn btn-warning btn-sm">แก้ไข</a>
                              <!-- <a href="<?php echo site_url('Home/userPassword/'.$value['antiques_id']); ?>" class="btn btn-warning btn-sm">รหัสผ่าน</a> -->
                              <a href="<?php echo site_url('Antiques/antiques_delete/'.$value['antiques_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบ')">ลบ</a>
                            </td>
                            <!-- <td>$320,800</td> -->
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                      <!-- <tfoot>
                      <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot> -->
                </table>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

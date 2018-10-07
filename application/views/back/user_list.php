<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title"><?php echo $usertype[0]['staff_type_name'] ?></h4>
      <div class="ml-auto text-right">
        <a href="<?php echo site_url('Home/userInsert/'); ?>" class="btn btn-success btn-md">เพิ่ม</a>

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
                          <th>ชื่อ - สกุล</th>
                          <th>วันที่ลงทะเบียน</th>
                          <th>ชื่อผู้ใช้</th>
                          <th>คณะ</th>
                          <th>จัดการ</th>
                          <!-- <th>Salary</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($userlist as $key => $value): ?>
                          <tr>
                            <td><?php echo $key+1 ?></td>
                            <td><?php echo $value['staff_fullname'] ?></td>
                            <td><?php echo $value['staff_reg_date'] ?></td>
                            <td><?php echo $value['staff_username'] ?></td>
                            <td><?php echo $value['department_name'] ?></td>
                            <td>
                              <!-- <button type="button" class="btn btn-warning btn-sm">แก้ไข</button> -->
                              <a href="<?php echo site_url('Home/userEdit/'.$value['staff_id']); ?>" class="btn btn-warning btn-sm">แก้ไข</a>
                              <a href="<?php echo site_url('Home/userPassword/'.$value['staff_id']); ?>" class="btn btn-warning btn-sm">รหัสผ่าน</a>
                              <a href="<?php echo site_url('Staff/userDelete/'.$usertype[0]['staff_type_id'].'/'.$value['staff_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบ')">ลบ</a>
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

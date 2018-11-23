<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">รายการข่าวสาร</h4>
      <div class="ml-auto text-right">
        <a href="<?php echo site_url('Home/news_insert/'); ?>" class="btn btn-success btn-md">เพิ่มข่าวสาร</a>
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
                          <th>รหัสข่าว</th>
                          <th>หัวข้อข่าว</th>
                          <th>วันที่บันทึก</th>
                          <th>บันทึกโดย</th>
                          <th>จัดการ</th>
                          <!-- <th>Salary</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($newslist as $key => $value): ?>
                          <tr>
                            <td><?php echo $key+1 ?></td>
                            <td><?php echo $value['news_id'] ?></td>
                            <td><?php echo $value['news_title'] ?></td>
                            <td><?php echo $value['news_date'] ?></td>
                            <td><?php echo $value['staff_fullname'] ?></td>
                            <td>
                              <!-- <button type="button" class="btn btn-warning btn-sm">แก้ไข</button> -->
                              <a href="<?php echo site_url('Home/news_edit/'.$value['news_id']); ?>" class="btn btn-warning btn-sm">แก้ไข</a>
                              <a href="<?php echo site_url('News/news_delete/'.$value['news_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบ')">ลบ</a>
                            </td>
                            <!-- <td>$320,800</td> -->
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
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

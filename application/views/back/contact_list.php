<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">ข้อความ-ติดต่อเรา</h4>
      <div class="ml-auto text-right">

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
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>หัวข้อ</th>
                          <th>ข้อความ</th>
                          <th>ชื่อผู้ติดต่อ</th>
                          <th>เมลผู้ติดต่อ</th>
                          <th>เวลา</th>
                          <th>จัดการ</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($contact_list as $key => $value): ?>
                          <tr>
                            <td><?php echo $key+1 ?></td>
                            <td><?php echo $value['contact_name'] ?></td>
                            <td><?php echo $value['contact_detail'] ?></td>
                            <td><?php echo $value['contact_by_fullname'] ?></td>
                            <td><?php echo $value['contact_by_email'] ?></td>
                            <td><?php echo $value['contact_date'] ?></td>
                            <td>

                              <a href="mailto:<?php echo $value['contact_by_email'] ?>" class="btn btn-warning btn-sm">ตอบกลับทางเมล</a>
                              <a href="<?php echo site_url('Contact/contact_delete/'.$value['contact_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบ')">ลบ</a>
                            </td>

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

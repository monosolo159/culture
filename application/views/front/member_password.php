
        <div class="col-md-10">
          <div class="card border-primary mb-3" style="max-width: 100%;">
            <div class="card-header">แก้ไขรหัสผ่าน
              <?php if ($this->uri->segment(4)=='error'): ?>
                <label class="col-sm-3 text-right control-label col-form-label"><font size="3" color="red">แก้ไขรหัสผ่านไม่สำเร็จ</font></label>
              <?php endif; ?>
              <?php if ($this->uri->segment(4)=='success'): ?>
                <label class="col-sm-3 text-right control-label col-form-label"><font size="3" color="green">แก้ไขรหัสผ่านสำเร็จ</font></label>
              <?php endif; ?>
            </div>
            <div class="card-body text-primary ">


              <?php echo form_open('Staff/memberUpdate') ?>
                <div class="card-body">
                    <!-- <h4 class="card-title">Personal Info</h4> -->


                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">รหัสผ่าน</label>
                        <div class="col-sm-9">
                            <input type="password" name="staff_password" class="form-control" value="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">ยืนยันรหัสผ่าน</label>
                        <div class="col-sm-9">
                            <input type="password" name="staff_password_confirm" class="form-control" value="" required>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                         <input type="hidden" name="staff_id" value="<?php echo $user[0]['staff_id'] ?>">

                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </div>
                <?php form_close() ?>



            </div>
          </div>
        </div>

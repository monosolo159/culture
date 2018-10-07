
        <div class="col-md-10">
          <div class="card border-primary mb-3" style="max-width: 100%;">
            <div class="card-header">แก้ไขข้อมูลส่วนตัว
              <?php if ($this->uri->segment(4)=='error'): ?>
                <label class="col-sm-3 text-right control-label col-form-label"><font size="3" color="red">แก้ไขข้อมูลไม่สำเร็จ</font></label>
              <?php endif; ?>
              <?php if ($this->uri->segment(4)=='success'): ?>
                <label class="col-sm-3 text-right control-label col-form-label"><font size="3" color="green">แก้ไขข้อมูลสำเร็จ</font></label>
              <?php endif; ?>
            </div>
            <div class="card-body text-primary ">


              <?php echo form_open('Staff/memberUpdate'); ?>
                <div class="card-body">
                    <!-- <h4 class="card-title">Personal Info</h4> -->
                    <div class="form-group row">
                         <label class="col-sm-3 text-right control-label col-form-label">ประเภทผู้ใช้</label>

                        <div class="col-md-9">
                            <select name="staff_type_id" class="select2 form-control" style="width: 100%; height:36px;" required>
                                <option value="">เลือก</option>
                                <?php foreach ($usertype as $key => $value): ?>
                                  <option value="<?php echo $value['staff_type_id'] ?>" <?php if($value['staff_type_id']==$user[0]['staff_type_id']){ echo 'selected'; } ?>><?php echo $value['staff_type_name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                         <label class="col-sm-3 text-right control-label col-form-label">คณะ</label>

                        <div class="col-md-9">
                            <select name="department_id" class="select2 form-control" style="width: 100%; height:36px;" required>
                                <option value="">เลือก</option>
                                <?php foreach ($userDepartment as $key => $value): ?>
                                  <option value="<?php echo $value['department_id'] ?>" <?php if($value['department_id']==$user[0]['department_id']){ echo 'selected'; } ?>><?php echo $value['department_name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">ชื่อ - นามสกุล</label>
                        <div class="col-sm-9">
                            <input type="text" name="staff_fullname" class="form-control" value="<?php echo $user[0]['staff_fullname'] ?>" required>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                         <input type="hidden" name="staff_id" value="<?php echo $user[0]['staff_id'] ?>">

                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </div>
                <?php form_close(); ?>



            </div>
          </div>
        </div>

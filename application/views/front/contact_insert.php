
        <div class="col-md-10">
          <div class="card border-primary mb-3" style="max-width: 100%;">
            <div class="card-header">ติดต่อเรา
              <?php if ($this->uri->segment(3)=='success'): ?>
                <label class="col-sm-3 text-right control-label col-form-label"><font size="3" color="green">ข้อความของคุณถูกส่งแล้ว</font></label>
              <?php endif; ?>
            </div>
            <div class="card-body text-primary ">


              <?php echo form_open('Contact/contact_insert'); ?>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">หัวข้อ</label>
                        <div class="col-sm-9">
                            <input type="text" name="contact_name" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">ข้อความ</label>
                        <div class="col-sm-9">
                            <textarea name="contact_detail" rows="8" cols="80" class="form-control" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">ชื่อผู้ติดต่อ</label>
                        <div class="col-sm-9">
                            <input type="text" name="contact_by_fullname" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">เมลผู้ติดต่อ</label>
                        <div class="col-sm-9">
                            <input type="text" name="contact_by_email" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">ส่ง</button>
                    </div>
                </div>
                <?php form_close(); ?>



            </div>
          </div>
        </div>

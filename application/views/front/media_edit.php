
        <div class="col-md-10">
          <div class="card border-primary mb-3" style="max-width: 100%;">
            <div class="card-header">Header</div>
            <div class="card-body text-primary ">

              <?php echo form_open_multipart('Media/mediaUpdateMember'); ?>
                <div class="card-body">
                    <!-- <h4 class="card-title">Personal Info</h4> -->
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">ไฟล์</label>
                        <div class="col-md-9">
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="validatedCustomFile">
                                <label class="custom-file-label" for="validatedCustomFile">เลือก</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">หัวข้อ</label>
                        <div class="col-sm-9">
                            <input type="text" name="media_name" class="form-control" value="<?php echo $media[0]['media_name'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">รายละเอียด</label>
                        <div class="col-sm-9">
                            <textarea name="media_detail" rows="8" cols="80" required><?php echo $media[0]['media_detail'] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                         <label class="col-sm-3 text-right control-label col-form-label">ประเภทผู้ใช้</label>

                        <div class="col-md-9">
                            <select name="media_type_id" class="select2 form-control" style="width: 100%; height:36px;" required>
                                <!-- <option value="">เลือก</option> -->
                                <?php foreach ($mediatypeall as $key => $value): ?>
                                  <option value="<?php echo $value['media_type_id'] ?>" <?php if($value['media_type_id']==$media[0]['media_type_id']){ echo 'selected'; } ?>><?php echo $value['media_type_name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                      <input type="hidden" name="media_id" value="<?php echo $media[0]['media_id'] ?>">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </div>
                <?php form_close(); ?>
            </div>
          </div>
        </div>

<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h4 class="page-title">แก้ไขสื่อ</h4>
           <div class="ml-auto text-right">

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
                           <!-- <form class="form-horizontal"> -->
                             <?php echo form_open_multipart('Media/mediaUpdate'); ?>
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
               </div>
           </div>
       </div>
   </div>
 </div>

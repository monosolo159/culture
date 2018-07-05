<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h4 class="page-title">เพิ่มผู้ใช้</h4>
           <!-- <div class="ml-auto text-right">
               <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="#">Home</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Library</li>
                   </ol>
               </nav>
           </div> -->
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
                               <?php echo form_open('Staff/userInsert'); ?>
                                 <div class="card-body">
                                     <!-- <h4 class="card-title">Personal Info</h4> -->
                                     <div class="form-group row">
                                          <label class="col-sm-3 text-right control-label col-form-label">ประเภทผู้ใช้</label>

                                         <div class="col-md-9">
                                             <select name="staff_type_id" class="select2 form-control" style="width: 100%; height:36px;" required>
                                                 <option value="">เลือก</option>
                                                 <?php foreach ($usertype as $key => $value): ?>
                                                   <option value="<?php echo $value['staff_type_id'] ?>"><?php echo $value['staff_type_name'] ?></option>
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
                                                   <option value="<?php echo $value['department_id'] ?>"><?php echo $value['department_name'] ?></option>
                                                 <?php endforeach; ?>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <label class="col-sm-3 text-right control-label col-form-label">ชื่อ - นามสกุล</label>
                                         <div class="col-sm-9">
                                             <input type="text" name="staff_fullname" class="form-control"  required>
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <label class="col-sm-3 text-right control-label col-form-label">ชื่อผู้ใช้</label>
                                         <div class="col-sm-9">
                                             <input type="text" name="staff_username" class="form-control"  required>
                                             <?php if($this->uri->segment(3)=='error'){ echo '<font size="2" color="red">ชื่อผู้ใช้นี้มีในระบบแล้ว</font>';} ?>
                                         </div>

                                     </div>

                                     <div class="form-group row">
                                         <label class="col-sm-3 text-right control-label col-form-label">รหัสผ่าน</label>
                                         <div class="col-sm-9">
                                             <input type="password" name="staff_password" class="form-control"  required>
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <label class="col-sm-3 text-right control-label col-form-label">รหัสผ่านอีกครั้ง</label>
                                         <div class="col-sm-9">
                                             <input type="password" name="staff_password_confirm" class="form-control"  required>
                                             <?php if($this->uri->segment(3)=='errorPassword'){ echo '<font size="2" color="red">รหัสผ่านไม่ตรงกัน</font>';} ?>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="border-top">
                                     <div class="card-body">
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

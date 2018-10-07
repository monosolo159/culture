<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h4 class="page-title">แก้ไขผู้ใช้ - <?php echo $user[0]['staff_fullname'] ?>  </h4>
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
                               <?php echo form_open('Staff/userUpdate'); ?>
                                 <div class="card-body">
                                     <!-- <h4 class="card-title">Personal Info</h4> -->

                                     <?php if ($this->uri->segment(4)=='error'): ?>
                                       <label class="col-sm-3 text-right control-label col-form-label"><font size="3" color="red">รหัสผ่านไม่ตรงกัน</font></label>
                                     <?php endif; ?>
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
                                          <input type="hidden" name="staff_type_id" value="<?php echo $user[0]['staff_type_id'] ?>">
                                          <input type="hidden" name="staff_id" value="<?php echo $user[0]['staff_id'] ?>">

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

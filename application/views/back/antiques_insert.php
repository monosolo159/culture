<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h4 class="page-title">เพิ่มรายการโบราณวัตถุและศิลปวัตถุ</h4>
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
                             <?php echo form_open_multipart('Antiques/antiques_insert'); ?>
                               <div class="card-body">
                                   <div class="form-group row">
                                       <label class="col-sm-3 text-right control-label col-form-label">เลขประจำวัตถุ</label>
                                       <div class="col-sm-9">
                                           <input type="text" name="antiques_code" class="form-control"  required>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label class="col-sm-3 text-right control-label col-form-label">ชื่อวัตถุ</label>
                                       <div class="col-sm-9">
                                           <input type="text" name="antiques_title" class="form-control"  required>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label class="col-sm-3 text-right control-label col-form-label">ลักษณะของวัตถุ</label>
                                       <div class="col-sm-9">
                                           <textarea name="antiques_detail" id="antiques_detail" rows="10" cols="80"></textarea>
                                           <script>
                                               CKEDITOR.replace( 'antiques_detail' );
                                           </script>
                                       </div>

                                   </div>
                                   <div class="form-group row">
                                       <label class="col-sm-3 text-right control-label col-form-label">แบบสมัย</label>
                                       <div class="col-sm-9">
                                           <input type="text" name="antiques_type" class="form-control"  required>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label class="col-sm-3 text-right control-label col-form-label">วัสดุ</label>
                                       <div class="col-sm-9">
                                           <input type="text" name="antiques_material" class="form-control"  required>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label class="col-sm-3 text-right control-label col-form-label">ขนาด(เซนติเมตร)</label>
                                       <div class="col-sm-9">
                                           <input type="text" name="antiques_size" class="form-control"  required>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label class="col-sm-3 text-right control-label col-form-label">สภาพ</label>
                                       <div class="col-sm-9">
                                           <input type="text" name="antiques_quality" class="form-control"  required>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label class="col-sm-3 text-right control-label col-form-label">ประวัติที่มา</label>
                                       <div class="col-sm-9">
                                           <input type="text" name="antiques_source_history" class="form-control"  required>
                                       </div>
                                   </div>

                                   <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">ที่เก็บ</label>

                                       <div class="col-md-9">
                                           <select name="antiques_store_id" class="select2 form-control" style="width: 100%; height:36px;" required>
                                               <option value="">เลือก</option>
                                               <?php foreach ($antiques_store as $key => $asvalue): ?>
                                                 <option value="<?php echo $asvalue['antiques_store_id'] ?>"><?php echo $asvalue['antiques_store_name'] ?></option>
                                               <?php endforeach; ?>
                                           </select>
                                       </div>
                                   </div>

                                   <div class="form-group row">
                                       <label class="col-sm-3 text-right control-label col-form-label">หมายเหตุ</label>
                                       <div class="col-sm-9">
                                           <input type="text" name="antiques_note" class="form-control"  required>
                                       </div>
                                   </div>
                               </div>
                               <div class="border-top">
                                   <div class="card-body">
                                     <input type="hidden" name="staff_id" value="<?php echo $_SESSION['STAFF_ID'] ?>">
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

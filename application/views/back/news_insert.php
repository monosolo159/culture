<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h4 class="page-title">เพิ่มข่าวสาร</h4>
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
                             <?php echo form_open_multipart('News/news_insert'); ?>
                               <div class="card-body">
                                   <div class="form-group row">
                                       <label class="col-sm-3 text-right control-label col-form-label">หัวข้อข่าว</label>
                                       <div class="col-sm-9">
                                           <input type="text" name="news_title" class="form-control"  required>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label class="col-sm-3 text-right control-label col-form-label">รายละเอียดข่าว</label>
                                       <div class="col-sm-9">
                                           <textarea name="news_detail" id="news_detail" rows="10" cols="80"></textarea>
                                           <script>
                                               CKEDITOR.replace( 'news_detail' );
                                           </script>
                                       </div>
                                   </div>


                                   <div class="form-group row">
                                       <label class="col-sm-3 text-right control-label col-form-label">ภาพหน้าปก</label>
                                       <div class="col-sm-9">
                                           <input type="file" name="imgfiles" class="form-control" required>
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

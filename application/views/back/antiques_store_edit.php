<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h4 class="page-title">แก้ไขที่เก็บ</h4>
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
                               <?php echo form_open('Antiques/antiques_store_edit'); ?>
                                 <div class="card-body">
                                     <!-- <h4 class="card-title">Personal Info</h4> -->
                                     <div class="form-group row">
                                         <label class="col-sm-3 text-right control-label col-form-label">ที่เก็บ</label>
                                         <div class="col-sm-9">
                                             <input type="text" name="antiques_store_name" class="form-control" value="<?php echo $antiques_store_one[0]['antiques_store_name'] ?>" required>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="border-top">
                                     <div class="card-body">
                                       <input type="hidden" name="antiques_store_id" value="<?php echo $antiques_store_one[0]['antiques_store_id'] ?>">
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

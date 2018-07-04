<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h4 class="page-title">Dashboard</h4>
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
                             <div class="card-body">
                                 <!-- <h5 class="card-title"><?php echo $value['staff_type_name'] ?></h5> -->
                                 <div class="table-responsive">
                                     <table id="zero_config" class="table table-striped table-bordered">
                                         <thead>
                                             <tr>
                                                 <th>ชื่อ - สกุล</th>
                                                 <th>วันที่ลงทะเบียน</th>
                                                 <th>ชื่อผู้ใช้</th>
                                                 <th>คณะ</th>
                                                 <th>จัดการ</th>
                                                 <!-- <th>Salary</th> -->
                                             </tr>
                                         </thead>
                                         <tbody>
                                           <?php foreach ($userlist as $key => $value): ?>
                                             <tr>
                                                 <td><?php echo $value['staff_fullname'] ?></td>
                                                 <td><?php echo $value['staff_reg_date'] ?></td>
                                                 <td><?php echo $value['staff_username'] ?></td>
                                                 <td><?php echo $value['department_name'] ?></td>
                                                 <td>
                                                   <button type="button" class="btn btn-warning btn-sm">แก้ไข</button>
                                                   <button type="button" class="btn btn-danger btn-sm">ลบ</button>
                                                   <!-- <button type="button" class="btn btn-primary btn-sm">Primary</button> -->
                                                 </td>
                                                 <!-- <td>$320,800</td> -->
                                             </tr>
                                           <?php endforeach; ?>
                                         </tbody>
                                         <!-- <tfoot>
                                             <tr>
                                                 <th>Name</th>
                                                 <th>Position</th>
                                                 <th>Office</th>
                                                 <th>Age</th>
                                                 <th>Start date</th>
                                                 <th>Salary</th>
                                             </tr>
                                         </tfoot> -->
                                     </table>
                                 </div>

                             </div>
                         </div>

                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
 </div>

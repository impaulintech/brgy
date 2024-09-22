
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
 
  <!-- <div class="align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-center">Doctor Information</h1>
          </div> -->

          <div class="container">
          <h1 class="h3 mb-0 text-gray-800 text-center">Initial Record</h1>
  <div class="row"> <!-- Begin of Row -->

      <div class="col-xl-12 col-md-8 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  
                    <div class="col-auto">
             <div class="text-xs font-weight-bold  text-uppercase mb-1 ">Initial Record <a style='margin-left: 1050px;' href="<?= site_url('initialrecord') ?>"><img
                             src="<?=base_url('assets/images/1m.png')?>" style="width:15px;" alt="back"></a></div>
             </div>
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        &nbsp&nbsp&nbsp&nbsp&nbsp
                        <?php echo $initialrecord->id ?>&nbsp&nbsp
                        <?php echo $initialrecord->FullName ?>&nbsp&nbsp
                        <!-- <?php echo $doctorinfo->pr_mname ?> -->
                         
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <!-- <div class="col-xl-4 col-md-6 mb-4 ml-auto">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center"> -->
                    <!-- <div class="col-auto">
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Hospital Case No.</div>
             </div> -->
                        <!-- <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <?php echo "P-0".$doctorinfo->id ?> -->
                        
                      </div>
                    </div>   
                  </div>
                </div>
              </div>
            </div>


    </div><!-- End of Row -->

<div class="container">
<div class="row"><!-- Begin Row -->
 
  <!-- First Column -->
            <div class=" col-xl-12 col-lg-4">

              <!-- Details -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold ">Details <a style='margin-left: 1050px;' href="<?= site_url('initialrecord/show/'. $initialrecord->id) ?>"><img
                             src="<?=base_url('assets/images/edit.png')?>" style="width:15px;" alt="edit"></a>
                    <!-- <?php echo "<a style='margin-left: 225px; text-decoration:none;' class='text-secondary' href='". base_url() ."initialrecord/edit/". $initialrecord->id ."'>" ?> 
                    <i class="fa fa-edit"></i></a> </h6>         -->
                </div>

                
               <div class="card-body"> <!--Card Body begin tag  -->

           <?php if($this->session->flashdata('initialrecord')): ?>  
          <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('initialrecord') ."</div>" ?>
           <?php endif; ?>
               
               <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Patient_id</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $initialrecord->id; ?></div>
               </div>

               <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">FullName</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $initialrecord->FullName; ?></div>
         </div>
    
              <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Weight</div> 
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $initialrecord->Weight; ?></div>
        </div>
               
               <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Height</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $initialrecord->Height; ?></div>
         </div>

         <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Bloodpressure</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $initialrecord->Bloodpressure; ?></div>
         </div>

         <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Bloodtype</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $initialrecord->Bloodtype; ?></div>
         </div>

         <!-- <div style="margin-bottom:18px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Address</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $initialrecord->address; ?></div>
         </div> -->

         

         <!-- <a href="<?= site_url('doctorinfo/show/'. $doctorinfo->id) ?>"><img
                             src="<?=base_url('assets/images/edit.png')?>" style="width:15px;" alt="edit"></a> -->
           
                </div><!--Card body end tag -->
              </div>
      
       </div>
       </div>
       </div>



       <script src="<?=base_url('assets/js/jquery.js')?>"></script>
    <script src="<?=base_url('assets/js/popper.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
               

   


</div><!-- End of Row -->

 
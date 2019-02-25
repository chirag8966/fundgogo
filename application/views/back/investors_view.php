
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Investor Information
      </h1>
    </section>
    <section class="content">
        
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Investor Information</h3>
                   
                </div><!-- /.box-header -->
                <div class="box-body">
				<?php
				foreach($investors_record as $record ){
				?>
				<div class="row">
					<div class="col-lg-12">
					<table class="table table-striped table-bordered">
					   <tr> <td> <th>Name</th> </td> <td> <?php echo $record->investors_name ?></td> </tr>
                       <tr> <td>  <th>Email</th> </td> <td> <?php echo $record->investors_email ?></td> </tr>
                       <tr> <td>  <th>Mobile</th> </td> <td> <?php echo $record->investors_contact ?></td> </tr>
                       <tr> <td>  <th>Type</th> </td> <td> <?php echo $record->type ?></td> </tr>
                       <tr> <td>  <th>Registered On</th> </td> <td> <?php echo date('d-m-Y',strtotime($record->date_of_reg)); ?></td> </tr>
					   <tr> <td> <th>Company</th> </td> <td> <?php echo $record->company ?></td> </tr>
					   <tr> <td> <th>Address</th> </td> <td> <?php echo $record->address ?></td> </tr>
					   <tr> <td> <th>PAN Card No.</th> </td> <td> <?php echo $record->pan ?></td> </tr>
					   <tr> <td> <th>GSTIN</th> </td> <td> <?php echo $record->gstin ?></td> </tr>
					   <tr> <td> <th>Business Category</th> </td> <td> <?php echo $record->category_id ?></td> </tr>
					
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<h3>Attachments</h3>
						<img src="<?php echo base_url().$record->pan_image;?>" width="400px">
						
						<hr>
						
					</div>
				</div>
				
				<?php
				}
				?>
                  
                </div><!-- /.box-body -->
               
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>


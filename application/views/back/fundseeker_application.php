
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Fundseeker Application List
       
      </h1>
    </section>
    <section class="content">
       
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Fundseeekr Application List</h3>
                   
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                        <th>Fundseeker Name</th>
						<th>Organisation</th>
						
                        <th>Category</th>
                        <th>Turnover Range</th>
                        <th>Date of Apply</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($fundseekerRecords))
                    {
						//var_dump($fundseekerRecords);
                        foreach($fundseekerRecords as $record)
                        {
                    ?>
                    <tr>
                        <td><?php echo $this->db->where('fundseeker_id',$record->fundseeker_id)->get("fundseeker")->row()->fundseeker_name; ?></td>
                        <td><a href="<?=$record->website;?>" target="_blank"><?=$record->company;?></a></td>
						
						<td><?php echo $record->category;?></td>
                        <td><?php echo $record->turnover_id; ?></td>
						<td><?php echo date('d-m-Y',strtotime($record->date_of_apply)); ?></td>
						<td><input onchange="changeStatus(this,'fundseeker_application','<?=$record->fundseeker_application_id; ?>')" type="checkbox" class="switch" name="status" value="1" <?php echo($record->status)?'checked':'';?> ></td>
                        
                        <td class="text-center">
                            <a class="btn btn-sm btn-primary" href="<?= base_url().'user/fundseekerApplicationDetail/'.$record->fundseeker_id; ?>" title="Applications"><i class="fa fa-file"></i></a>
							<a class="btn btn-sm btn-primary" href="<?= base_url().'login-history/'.$record->fundseeker_id; ?>" title="Login history"><i class="fa fa-history"></i></a> | 
                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'editOld/'.$record->fundseeker_id; ?>" title="Edit"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger deleteUser" href="#" data-userid="<?php echo $record->fundseeker_id; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
               
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>


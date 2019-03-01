
<div class="content-wrapper">
   
    <section class="content">
       
        <div class="row">
		<?php
		if(isset($message))
		{?>
	<div class="alert alert-info">
	 <?=$message?>
	</div>
	<?php
		}?>
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title"> Application List</h3>
                   
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
				
				
                  <table class="table table-hover table-stripped table-bordered">
                    <tr>
                       
						<th>Organisation</th>
						
                        <th>Category</th>
						<th>Amount Seeking</th>
						<th>Shares Willing to Offer</th>
                        <th>Turnover Range</th>
                        <th>Date of Apply</th>
                        
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($investorRecords))
                    {
						//var_dump($fundseekerRecords);
                        foreach($investorRecords as $record)
                        {
						
						$this->db->where("investors_id",$_SESSION['user']['investors_id']);
						$this->db->where("fundseeker_application_id",$record->fundseeker_application_id);
						$this->db->where("status","2");
						$status = $this->db->get("application_status")->num_rows();
						
                    ?>
                    <tr>
                          <td><a href="<?=$record->website;?>" target="_blank"><?=$record->company;?></a></td>
						
						<td><?php echo $record->category ?></td>
						<td><?php echo $record->seek_amount ?></td>
						<td><?php echo $record->shares ?></td>
                        <td><?php echo $record->turnover_id ?></td>
						<td><?php echo date('d-m-Y',strtotime($record->date_of_apply)); ?></td>
						
					   <td>
					   <?php
					   if($status>0){
					   ?>
					   <label>In Motion</label><br>
					   <a class="btn btn-sm btn-info" href="<?=base_url();?>investors/review/<?=$record->fundseeker_application_id;?>">View</a>
					   <?php
					   }else{
						?>
						   <a class="btn btn-sm btn-info" href="<?=base_url();?>investors/review/<?=$record->fundseeker_application_id;?>">Review</a>
					   <?php }
					   ?>
					   
					  
					   </td>
                    </tr>
                    <?php
                        }
                    }
					else
					{
						echo "<tr><td colspan='7' style='text-align:center'>No Applications Found ! </td></tr>";
					}
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
               
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>



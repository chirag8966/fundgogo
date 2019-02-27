
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
                    <h3 class="box-title"> Application Details</h3>
                   
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
				
				
				<table class="table table-hover table-stripped table-bordered">
				<?php
					foreach($fundseekerRecord as $record){
					$this->db->where("investors_id",$_SESSION['user']['investors_id']);
					$this->db->where("fundseeker_application_id",$record->fundseeker_application_id);
					$this->db->where("status","2");
					$status = $this->db->get("application_status")->num_rows();
				?>
				
				   <tr> <td> <th>Fundseeker Company</th> </td> <td> <?php echo $record->company ?></td> </tr>
				   <tr> <td> <th>Company Description</th> </td> <td> <?php echo $record->description ?></td> </tr>
				   
				   <tr> <td>  <th>PAN Card No.</th> </td> <td> <?php echo $record->pan ?></td> </tr>
				   <tr> <td>  <th>GSTIN</th> </td> <td> <?php echo $record->gstin ?></td> </tr>
				   <tr> <td>  <th>Registration No.</th> </td> <td> <?php echo $record->reg_num; ?></td> </tr>
				   <tr> <td> <th>Category</th> </td> <td> <?php echo $record->category ?></td> </tr>
				   <tr> <td> <th>Turnover</th> </td> <td> <?php echo $record->turnover_id ?></td> </tr>
				   <tr> <td> <th>Address</th> </td> <td> <?php echo $record->address ?></td> </tr>
				   <tr> <td> <th>Website</th> </td> <td> <?php echo $record->website ?></td> </tr>
				   <tr> <td> <th>Annual Report</th> </td> <td> <?php echo $record->annual_report ?></td> </tr>
				   <tr> <td> <th>Designation</th> </td> <td> <?php echo $record->designation ?></td> </tr>
				   <tr> <td> <th>Equity</th> </td> <td> <?php echo $record->equity ?></td> </tr>
				   <tr> <td> <th>Amount Seeking</th> </td> <td> <?php echo $record->seek_amount ?></td> </tr>
				   <tr> <td> <th>Shares Willing to Offer</th> </td> <td> <?php echo $record->shares ?></td> </tr>
				   <tr> <td> <th>Investment till date</th> </td> <td> <?php echo $record->money_invested ?></td> </tr>
				   <tr> <td> <th>Fund Raised?</th> </td> <td> <?php echo $record->money_raised ?></td> </tr>
				   <tr> <td> <th>Raised Fund Description</th> </td> <td> <?php echo $record->money_raised_description ?></td> </tr>
				   <tr> <td> <th>Additional Information</th> </td> <td> <?php echo $record->other_info ?></td> </tr>
					<?php } ?>
				  </table>
                  
				  <h3>Attachments</h3>
						
						<img src="<?php echo base_url().$fundseekerRecord[0]->pan_front;?>" width="400px">
						<img src="<?php echo base_url().$fundseekerRecord[0]->pan_back;?>" width="400px">
						<hr>
				<?php
				if($status<=0){
				?>
				   <a class="btn btn-sm btn-success" href="<?=base_url();?>investors/approve/<?=$application_id;?>">Mark in Motion</a>
                
				<?php }?>
				</div><!-- /.box-body -->
               
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>



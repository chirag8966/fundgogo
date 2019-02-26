
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
                   <button class="btn btn-success" style="float:right"><a href="<?=base_url()?>fundseeker/application/add">Create Application</a></button>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
				
				
                  <table class="table table-hover table-stripped table-bordered">
                    <tr>
                       
						<th>Organisation</th>
						
                        <th>Category</th>
                        <th>Turnover Range</th>
                        <th>Date of Apply</th>
                        <th>Publish Status</th>
						 <th>Application Status </th>
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
                          <td><a href="<?=$record->website;?>" target="_blank"><?=$record->company;?></a></td>
						
						<td><?php echo $record->category ?></td>
                        <td><?php echo $record->turnover_id ?></td>
						<td><?php echo date('d-m-Y',strtotime($record->date_of_apply)); ?></td>
						<td><?=($record->status==0)? "Unpublished":"Published"; ?></td>
                        
                       <td><?=($record->status==0)? "Unpublished":"Published"; ?></td>
					   <td><?=($record->business_status==0)? "Status Unavailable":"In Motion"; ?></td>
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



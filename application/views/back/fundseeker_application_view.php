
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Fundseeker Application
      </h1>
    </section>
    <section class="content">
        
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Application Detail</h3>
                   
                </div><!-- /.box-header -->
                <div class="box-body">
				<?php
				foreach($fundseekerRecords as $item){
				?>
				<div class="row">
					<div class="col-lg-12">
						<table class="table table-striped table-bordered">
						<th>Adhaar Card No.</th>
						<th>PAN Card No.</th>
						<th>GSTIN</th>
						<th>Reg. Num</th>
						<th>Business Category</th>
						<th>Turnover Range</th>
						<th>Annual Report</th>
						<tbody>
						<tr>
							<td><?=$item->adhaar;?></td>
							<td><?=$item->pan;?></td>
							<td><?=$item->gstin;?></td>
							<td><?=$item->reg_num;?></td>
							<td><?php echo $this->db->where('category_id',$item->category_id)->get("category")->row()->category_name; ?></td>
							<td><?php echo $this->db->where('turnover_id',$item->turnover_id)->get("turnover")->row()->turnover_name; ?></td>
							<td><a role="button" class="btn btn-md btn-success" href="<?php echo base_url().$item->annual_report;?>"><i class="fa fa-download"></i> Download</a></td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<h3>Attachments</h3>
						<img src="<?php echo base_url().$item->adhaar_front;?>" width="400px">
						<img src="<?php echo base_url().$item->adhaar_back;?>" width="400px">
						<hr>
						<img src="<?php echo base_url().$item->pan_front;?>" width="400px">
						<img src="<?php echo base_url().$item->pan_back;?>" width="400px">
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


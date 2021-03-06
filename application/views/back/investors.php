
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Investors Management
       
      </h1>
    </section>
    <section class="content">
       
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Investors List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>user/Investors" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Type</th>
                        <th>Registered On</th>
						<th>Company</th>
						<th>Type</th>
						<th>Status</th>
						
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($investors))
                    {
                        foreach($investors as $record)
                        {
                    ?>
                    <tr>
                        <td><?php echo $record->investors_name ?></td>
                        <td><?php echo $record->investors_email ?></td>
                        <td><?php echo $record->investors_contact ?></td>
						<td><?php echo $record->type ?></td>
						<td><?php echo date('d-m-Y',strtotime($record->date_of_reg)); ?></td>
						<td><?php echo $record->company?></td>
						<td><?php echo $record->type ?></td>
						<td><input onchange="changeStatus(this,'investors','<?=$record->investors_id; ?>')" type="checkbox" class="switch" name="status" value="1" <?php echo($record->status)?'checked':'';?> ></td>
                        
                        <td class="text-center">
                           <a class="btn btn-sm btn-primary" href="<?= base_url().'user/investors_view/'.$record->investors_id; ?>" title="Investor Info"><i class="fa fa-file"></i></a> 

                            <a data-type="investors" data-id="<?=$record->investors_id; ?>" class="btn btn-sm btn-danger deleteUser" href="#" data-userid="<?php echo $record->investors_id; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "user/investors/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>

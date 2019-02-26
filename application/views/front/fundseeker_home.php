<div class="col-row">
<div class="col-sm-12">
<?php
$this->db->where("fundseeker_id",$_SESSION['user']['fundseeker_id']);
$count=$this->db->get("fundseeker_application")->num_rows();

?>
Total application pending <?=$count?>
</div>
</div>
<div class="col-row">
<div class="col-sm-12">
<?php
$this->db->where("investors_id",$_SESSION['user']['investors_id']);
$this->db->where("status","1");
$count = $this->db->get("application_status")->num_rows();

?>
Total application in review <?=$count?>
</div>
</div>
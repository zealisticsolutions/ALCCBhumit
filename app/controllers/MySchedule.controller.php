<?php
ini_set("display_errors", "on");
error_reporting(E_ALL);
require_once CONTROLLERS_PATH . 'Admin.controller.php';
require_once THIRD_PARTY_PATH . 'formvalidator.php';
require_once THIRD_PARTY_PATH . 'validationrule.php';
class MySchedule extends Admin
{
	function index(){
		// if($this->isDoctor()){
			// echo "<pre>";
			//print_r($_POST);
			// echo "</pre>";
			$opts = array();
			Object::import('Model', 'ADSchedule');
			$ADSchedule = new ADSchedule();
			if(!empty($_POST)){
				if(!empty($_POST['day'])){
					// $opts["t1.user_id"] = $_SESSION['USER_ID'];
					// $opts["t1.day"] = $_POST['day'];
					$row_count = 1000000;
					$schedule = array();
					$temp=0;
					foreach($_POST['start_time'] as $start_time){
						foreach($_POST['day'] as $day) {
							$opts["t1.user_id"] = $_GET['edit'];
							$opts["t1.day"] = $day;
							$row_count = 1000000;
							$mySpecialities = $ADSchedule->getAll(array_merge($opts, array('row_count' => $row_count, 'col_name' => 'day', 'direction' => 'asc')));	
							if($mySpecialities[0]['sch_id']){
								$data['sch_id']=$mySpecialities[0]['sch_id'];
								$ADSchedule->delete($data['sch_id']);
							}
							
							$per = array();
							$per['day'] = $day;
							$per['user_id'] = $_GET['edit'];
							$per['start_time'] = date("H:i", strtotime($start_time));
							$per['end_time'] = date("H:i", strtotime($_POST['end_time'][$temp]));
							$schedule[] = $per;
							
							$lastIDU = $ADSchedule->save($per);
						}
						$temp++;
					}
				}else {
					$_SESSION['scheduleErr'] = "Please check at least a week day!";
				}
			}
			$opts = array();
			$opts["t1.user_id"] = $_GET['edit'];
			$row_count = 1000000;
			$mySpecialities = $ADSchedule->getAll(array_merge($opts, array('row_count' => $row_count, 'col_name' => 'day', 'direction' => 'asc')));	
			$this->tpl['result'] = $mySpecialities;
		}
}	
?>
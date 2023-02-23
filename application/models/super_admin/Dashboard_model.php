<?php

Class Dashboard_model extends My_model{

	public function getVendorCount(){
		$data['table'] = ADMIN;
		$data['select'] = ['*'];
		return $this->countRecords($data);
	}

	public function getBranchCount(){
		$data['table'] = TABLE_BRANCH;
		$data['select'] = ['*'];
		return $this->countRecords($data);
	}

	public function getActiveUserCount(){
		$data['table'] = TABLE_USER;
		$data['select'] = ['*'];
		$data['where'] = ['status'=>'1'];
		return $this->countRecords($data);
	}

	public function getTotalCancled(){
		$data['table'] = TABLE_ORDER;
		$data['select'] = ['*'];
		$data['where'] = ['order_status'=>'9'];
		return $this->countRecords($data);
	}

	public function getTotalSales(){
		$data['table'] = TABLE_ORDER;
		$data['select'] = ['SUM(`payable_amount`) as totalSales'];
		$data['where'] = ['order_status!='=>'9'];
		$res = $this->selectRecords($data);
		return numberFormat($res[0]->totalSales); 
	}

}

?>
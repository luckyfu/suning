<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-3-31
 */
class OrdertaskQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderTaskId;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	public function getOrderTaskId() {
		return $this->orderTaskId;
	}
	
	public function setOrderTaskId($orderTaskId) {
		$this->orderTaskId = $orderTaskId;
		$this->apiParams["orderTaskId"] = $orderTaskId;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.ordertask.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderTaskId, 'orderTaskId');
		RequestCheckUtil::checkNotNull($this->snUnionId, 'snUnionId');
	}
	
	public function getBizName(){
		return "queryOrdertask";
	}
	
}

?>
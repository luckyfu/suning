<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-3-31
 */
class OrdertaskDeleteRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderTaskId;
	
	public function getOrderTaskId() {
		return $this->orderTaskId;
	}
	
	public function setOrderTaskId($orderTaskId) {
		$this->orderTaskId = $orderTaskId;
		$this->apiParams["orderTaskId"] = $orderTaskId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.ordertask.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderTaskId, 'orderTaskId');
	}
	
	public function getBizName(){
		return "deleteOrdertask";
	}
	
}

?>
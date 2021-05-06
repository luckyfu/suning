<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-3-31
 */
class OrdertaskCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cmmdtyCode;
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $orderStatusCondition;
	
	/**
	 * 
	 */
	private $startTime;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}
	
	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getOrderStatusCondition() {
		return $this->orderStatusCondition;
	}
	
	public function setOrderStatusCondition($orderStatusCondition) {
		$this->orderStatusCondition = $orderStatusCondition;
		$this->apiParams["orderStatusCondition"] = $orderStatusCondition;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.ordertask.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cmmdtyCode, 'cmmdtyCode');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->orderStatusCondition, 'orderStatusCondition');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
	}
	
	public function getBizName(){
		return "createOrdertask";
	}
	
}

?>
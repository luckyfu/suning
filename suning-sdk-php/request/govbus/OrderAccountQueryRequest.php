<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-2-2
 */
class OrderAccountQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $endDate;
	
	/**
	 * 
	 */
	private $orderStatus;
	
	
	
	/**
	 * 
	 */
	private $startDate;
	
	/**
	 * 
	 */
	private $timeType;
	
	public function getEndDate() {
		return $this->endDate;
	}
	
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->apiParams["endDate"] = $endDate;
	}
	
	public function getOrderStatus() {
		return $this->orderStatus;
	}
	
	public function setOrderStatus($orderStatus) {
		$this->orderStatus = $orderStatus;
		$this->apiParams["orderStatus"] = $orderStatus;
	}
	
	
	
	public function getStartDate() {
		return $this->startDate;
	}
	
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		$this->apiParams["startDate"] = $startDate;
	}
	
	public function getTimeType() {
		return $this->timeType;
	}
	
	public function setTimeType($timeType) {
		$this->timeType = $timeType;
		$this->apiParams["timeType"] = $timeType;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.orderaccount.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->endDate, 'endDate');
		RequestCheckUtil::checkNotNull($this->orderStatus, 'orderStatus');
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->startDate, 'startDate');
	}
	
	public function getBizName(){
		return "queryOrderAccount";
	}
	
}

?>
<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-23
 */
class BrandMemOrderQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $orderEndDate;
	
	/**
	 * 
	 */
	private $orderStartDate;
	
	/**
	 * 
	 */
	private $orderType;
	
	
	
	public function getOrderEndDate() {
		return $this->orderEndDate;
	}
	
	public function setOrderEndDate($orderEndDate) {
		$this->orderEndDate = $orderEndDate;
		$this->apiParams["orderEndDate"] = $orderEndDate;
	}
	
	public function getOrderStartDate() {
		return $this->orderStartDate;
	}
	
	public function setOrderStartDate($orderStartDate) {
		$this->orderStartDate = $orderStartDate;
		$this->apiParams["orderStartDate"] = $orderStartDate;
	}
	
	public function getOrderType() {
		return $this->orderType;
	}
	
	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->apiParams["orderType"] = $orderType;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.custom.brandmemorder.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderEndDate, 'orderEndDate');
		RequestCheckUtil::checkNotNull($this->orderStartDate, 'orderStartDate');
		RequestCheckUtil::checkNotNull($this->orderType, 'orderType');
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
	}
	
	public function getBizName(){
		return "queryBrandMemOrder";
	}
	
}

?>
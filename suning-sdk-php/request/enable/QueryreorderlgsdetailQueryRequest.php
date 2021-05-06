<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-12-7
 */
class QueryreorderlgsdetailQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $shopId;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderItemId;
	
	/**
	 * 
	 */
	private $expressNo;
	
	/**
	 * 
	 */
	private $expressCompanyName;
	
	/**
	 * 
	 */
	private $expressCompanyCode;
	
	public function getShopId() {
		return $this->shopId;
	}
	
	public function setShopId($shopId) {
		$this->shopId = $shopId;
		$this->apiParams["shopId"] = $shopId;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getExpressNo() {
		return $this->expressNo;
	}
	
	public function setExpressNo($expressNo) {
		$this->expressNo = $expressNo;
		$this->apiParams["expressNo"] = $expressNo;
	}
	
	public function getExpressCompanyName() {
		return $this->expressCompanyName;
	}
	
	public function setExpressCompanyName($expressCompanyName) {
		$this->expressCompanyName = $expressCompanyName;
		$this->apiParams["expressCompanyName"] = $expressCompanyName;
	}
	
	public function getExpressCompanyCode() {
		return $this->expressCompanyCode;
	}
	
	public function setExpressCompanyCode($expressCompanyCode) {
		$this->expressCompanyCode = $expressCompanyCode;
		$this->apiParams["expressCompanyCode"] = $expressCompanyCode;
	}
	
	public function getApiMethodName(){
		return 'suning.enable.queryreorderlgsdetail.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->shopId, 'shopId');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
	}
	
	public function getBizName(){
		return "queryQueryreorderlgsdetail";
	}
	
}

?>
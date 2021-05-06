<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-12-8
 */
class UpdateorderstatusUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $memInCardNo;
	
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
	private $orderItemStatus;
	
	/**
	 * 
	 */
	private $shopId;
	
	public function getMemInCardNo() {
		return $this->memInCardNo;
	}
	
	public function setMemInCardNo($memInCardNo) {
		$this->memInCardNo = $memInCardNo;
		$this->apiParams["memInCardNo"] = $memInCardNo;
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
	
	public function getOrderItemStatus() {
		return $this->orderItemStatus;
	}
	
	public function setOrderItemStatus($orderItemStatus) {
		$this->orderItemStatus = $orderItemStatus;
		$this->apiParams["orderItemStatus"] = $orderItemStatus;
	}
	
	public function getShopId() {
		return $this->shopId;
	}
	
	public function setShopId($shopId) {
		$this->shopId = $shopId;
		$this->apiParams["shopId"] = $shopId;
	}
	
	public function getApiMethodName(){
		return 'suning.enable.updateorderstatus.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->memInCardNo, 'memInCardNo');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->orderItemStatus, 'orderItemStatus');
		RequestCheckUtil::checkNotNull($this->shopId, 'shopId');
	}
	
	public function getBizName(){
		return "updateUpdateorderstatus";
	}
	
}

?>
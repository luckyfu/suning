<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-4-6
 */
class ServicescheduleQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderItemIds;
	
	/**
	 * 
	 */
	private $serviceType;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItemIds() {
		return $this->orderItemIds;
	}
	
	public function setOrderItemIds($orderItemIds) {
		$this->orderItemIds = $orderItemIds;
		$arr = array();
		foreach ($orderItemIds as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderItemIds"] = $arr;
	}
	
	public function getServiceType() {
		return $this->serviceType;
	}
	
	public function setServiceType($serviceType) {
		$this->serviceType = $serviceType;
		$this->apiParams["serviceType"] = $serviceType;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.serviceschedule.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->serviceType, 'serviceType');
	}
	
	public function getBizName(){
		return "queryServiceschedule";
	}
	
}

class OrderItemIds {

	private $apiParams = array();
	
	private $orderItemId;
	
	private $sheetId;
	
	private $skuId;
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getSheetId() {
		return $this->sheetId;
	}

	public function setSheetId($sheetId) {
		$this->sheetId = $sheetId;
		$this->apiParams["sheetId"] = $sheetId;
	}
	
	public function getSkuId() {
		return $this->skuId;
	}

	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>
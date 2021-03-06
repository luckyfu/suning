<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-11-30
 */
class OrderdeliverModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $expressCompCode;
	
	/**
	 * 
	 */
	private $expressNo;
	
	/**
	 * 
	 */
	private $orderItemId;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getExpressCompCode() {
		return $this->expressCompCode;
	}
	
	public function setExpressCompCode($expressCompCode) {
		$this->expressCompCode = $expressCompCode;
		$this->apiParams["expressCompCode"] = $expressCompCode;
	}
	
	public function getExpressNo() {
		return $this->expressNo;
	}
	
	public function setExpressNo($expressNo) {
		$this->expressNo = $expressNo;
		$this->apiParams["expressNo"] = $expressNo;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.orderdeliver.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->expressCompCode, 'expressCompCode');
		RequestCheckUtil::checkNotNull($this->expressNo, 'expressNo');
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "modifyOrderdeliver";
	}
	
}

?>
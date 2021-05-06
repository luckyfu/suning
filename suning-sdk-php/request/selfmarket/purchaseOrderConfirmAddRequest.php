<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-3-8
 */
class purchaseOrderConfirmAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $confirmDeliveryDate;
	
	/**
	 * 
	 */
	private $confirmQty;
	
	/**
	 * 
	 */
	private $confirmType;
	
	/**
	 * 
	 */
	private $itemNo;
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getConfirmDeliveryDate() {
		return $this->confirmDeliveryDate;
	}
	
	public function setConfirmDeliveryDate($confirmDeliveryDate) {
		$this->confirmDeliveryDate = $confirmDeliveryDate;
		$this->apiParams["confirmDeliveryDate"] = $confirmDeliveryDate;
	}
	
	public function getConfirmQty() {
		return $this->confirmQty;
	}
	
	public function setConfirmQty($confirmQty) {
		$this->confirmQty = $confirmQty;
		$this->apiParams["confirmQty"] = $confirmQty;
	}
	
	public function getConfirmType() {
		return $this->confirmType;
	}
	
	public function setConfirmType($confirmType) {
		$this->confirmType = $confirmType;
		$this->apiParams["confirmType"] = $confirmType;
	}
	
	public function getItemNo() {
		return $this->itemNo;
	}
	
	public function setItemNo($itemNo) {
		$this->itemNo = $itemNo;
		$this->apiParams["itemNo"] = $itemNo;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.purchaseorder.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->confirmType, 'confirmType');
		RequestCheckUtil::checkNotNull($this->itemNo, 'itemNo');
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "purchaseOrderConfirm";
	}
	
}

?>
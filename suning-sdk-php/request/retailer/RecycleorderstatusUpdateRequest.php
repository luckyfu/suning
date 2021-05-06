<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-4-16
 */
class RecycleorderstatusUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cancelOperator;
	
	/**
	 * 
	 */
	private $custName;
	
	/**
	 * 
	 */
	private $custNo;
	
	/**
	 * 
	 */
	private $dealPrice;
	
	/**
	 * 
	 */
	private $imei;
	
	/**
	 * 
	 */
	private $memberCode;
	
	/**
	 * 
	 */
	private $operatingTime;
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $payee;
	
	/**
	 * 
	 */
	private $paymentTime;
	
	/**
	 * 
	 */
	private $payType;
	
	/**
	 * 
	 */
	private $receivingAccount;
	
	/**
	 * 
	 */
	private $remark;
	
	/**
	 * 
	 */
	private $status;
	
	public function getCancelOperator() {
		return $this->cancelOperator;
	}
	
	public function setCancelOperator($cancelOperator) {
		$this->cancelOperator = $cancelOperator;
		$this->apiParams["cancelOperator"] = $cancelOperator;
	}
	
	public function getCustName() {
		return $this->custName;
	}
	
	public function setCustName($custName) {
		$this->custName = $custName;
		$this->apiParams["custName"] = $custName;
	}
	
	public function getCustNo() {
		return $this->custNo;
	}
	
	public function setCustNo($custNo) {
		$this->custNo = $custNo;
		$this->apiParams["custNo"] = $custNo;
	}
	
	public function getDealPrice() {
		return $this->dealPrice;
	}
	
	public function setDealPrice($dealPrice) {
		$this->dealPrice = $dealPrice;
		$this->apiParams["dealPrice"] = $dealPrice;
	}
	
	public function getImei() {
		return $this->imei;
	}
	
	public function setImei($imei) {
		$this->imei = $imei;
		$this->apiParams["imei"] = $imei;
	}
	
	public function getMemberCode() {
		return $this->memberCode;
	}
	
	public function setMemberCode($memberCode) {
		$this->memberCode = $memberCode;
		$this->apiParams["memberCode"] = $memberCode;
	}
	
	public function getOperatingTime() {
		return $this->operatingTime;
	}
	
	public function setOperatingTime($operatingTime) {
		$this->operatingTime = $operatingTime;
		$this->apiParams["operatingTime"] = $operatingTime;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getPayee() {
		return $this->payee;
	}
	
	public function setPayee($payee) {
		$this->payee = $payee;
		$this->apiParams["payee"] = $payee;
	}
	
	public function getPaymentTime() {
		return $this->paymentTime;
	}
	
	public function setPaymentTime($paymentTime) {
		$this->paymentTime = $paymentTime;
		$this->apiParams["paymentTime"] = $paymentTime;
	}
	
	public function getPayType() {
		return $this->payType;
	}
	
	public function setPayType($payType) {
		$this->payType = $payType;
		$this->apiParams["payType"] = $payType;
	}
	
	public function getReceivingAccount() {
		return $this->receivingAccount;
	}
	
	public function setReceivingAccount($receivingAccount) {
		$this->receivingAccount = $receivingAccount;
		$this->apiParams["receivingAccount"] = $receivingAccount;
	}
	
	public function getRemark() {
		return $this->remark;
	}
	
	public function setRemark($remark) {
		$this->remark = $remark;
		$this->apiParams["remark"] = $remark;
	}
	
	public function getStatus() {
		return $this->status;
	}
	
	public function setStatus($status) {
		$this->status = $status;
		$this->apiParams["status"] = $status;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.recycleorderstatus.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "updateRecycleorderstatus";
	}
	
}

?>